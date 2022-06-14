<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Content;
use App\Models\Helper;

class ContentController extends Controller
{
    private $attachments_root_folder = "Content/";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->content_folder = $this->attachments_root_folder;

    }

    /**
     * Show the application content.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentUser = User::find(Auth::id());
        $contents = Content::All();

        return view('manage.content', compact('contents', 'currentUser'));
    }

    public function store(Request $request) 
    {
        $input = $request->all();

        $seed = str_split('abcdefghijklmnopqrstuvwxyz');
        shuffle($seed);
        $code = '';
        foreach (array_rand($seed, 6) as $k) $code .= $seed[$k];

        // dd($input['image_aligntment']);

        $validator = Validator::make($input, [
            'name' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
            'description' => 'required',
            'url' => 'required',
            'image_aligntment' => 'required'
        ]);
        // dd($request->has('image'));
        // $input['image']->store('content', 'public');
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        Storage::putFileAs($this->content_folder, $file, $filename);

        // dd($filename);
        $contents = Content::create([
            'code' =>$code,
            'name' =>ucwords($input['name']),
            'image' =>$filename,
            'description' => $input['description'],
            'url' => $input['url'],
            'image_aligntment'=>$input['image_aligntment']
            
        ]);

        return redirect()->route('content')->with(['success'=>'Content Berhasil Ditambahkan!']);
    }

    public function view($id)
    {
        $currentUser = User::find(Auth::id());
        $content = Content::find($id);
        if (!$content) {
            return redirect()->route('content')->with(['error'=>'Parameter id tidak valid.']);
        }
        return view('manage.editcontent', compact('content', 'currentUser'));
    }

    public function edit($id, Request $request)
    {
        $data = $request->all();
        // dd($data);

        $validator = Validator::make($data, [
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
            'url' => 'required',
            'image_aligntment' => 'required'
        ]);

        if(!empty($request->file('image'))){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            Storage::putFileAs($this->content_folder, $file, $filename);
        }

        $content = Content::where([
            ['id', '=', $id]
        ])->first();


        $content->update([
            'name' => ucwords($data['name']),
            'image' => empty($filename) ?  $content->image : $filename,
            'description' => empty($data['description']) ?  $content->description : $data['description'],
            'url' => $data['url'],
            'image_aligntment' => $data['image_aligntment']
        ]);

        return redirect()->route('content')->with(['success'=>'Data diedit.']);

        // if($data['image'] == null){
            
            
        // }elseif($data['image'] != null){
        //     $validator = Validator::make($data, [
        //         'name' => 'required',
        //         'image' => 'required',
        //         'description' => 'required',
        //         'url' => 'required',
        //         'image_aligntment' => 'required'
        //     ]);
            
        //     // dd($request->file('image'));
            // $file = $request->file('image');
            // $filename = $file->getClientOriginalName();
            // Storage::putFileAs($this->content_folder, $file, $filename);
    
        //     $content = Content::where([
        //         ['id', '=', $id]
        //     ])->first();
    
        //     $content->update([
        //         'name' => ucwords($data['name']),
        //         'image' => $filename,
        //         'description' => empty($data['description']) ?  $content->description : $data['description'],
        //         'url' => $data['url'],
        //         'image_aligntment' => $data['image_aligntment']
        //     ]);

        //     return redirect()->route('content')->with(['success'=>'Data diedit.']);
        // }
    }

    public function delete($id) 
    {
        $content = Content::where([
            ['id', '=', $id]
        ])->first();
        if (!$content) {
            return redirect()->route('content')->with(['error'=>'Parameter id tidak valid.']);
        }
        Content::where('id', $id)->delete();
        return redirect()->route('content')->with(['success'=>'Data dihapus.']);
    }
}
