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
use App\Models\Doa;

class DoaController extends Controller
{
    private $attachments_root_folder = "Doa-Doa/";
    public function __construct()
    {
        $this->middleware('auth');
        $this->doa_folder = $this->attachments_root_folder;

    }

    public function index()
    {
        $currentUser = User::find(Auth::id());
        $doas = Doa::All();
        // dd($currentUser);
        return view('manage.doa', compact('doas', 'currentUser'));
    }

    public function store(Request $request) 
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
            'latin' => 'required'
        ]);

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        Storage::putFileAs($this->doa_folder, $file, $filename);

        // dd($filename);
        $doas = Doa::create([
            'title' =>ucwords($input['title']),
            'image' =>$filename,
            'latin' => $input['latin']
        ]);

        return redirect()->route('doa')->with(['success'=>'doa Berhasil Ditambahkan!']);
    }

    public function view($id)
    {
        $currentUser = User::find(Auth::id());
        $doa = Doa::find($id);
        if (!$doa) {
            return redirect()->route('doa')->with(['error'=>'Parameter id tidak valid.']);
        }
        return view('manage.editdoa', compact('doa', 'currentUser'));
    }

    public function edit($id, Request $request)
    {
        $data = $request->all();
        // dd($data);

        $validator = Validator::make($data, [
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);

        if(!empty($request->file('image'))){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            Storage::putFileAs($this->doa_folder, $file, $filename);
        }

        $doa = Doa::where([
            ['id', '=', $id]
        ])->first();


        $doa->update([
            'title' => ucwords($data['title']),
            'description' => empty($data['description']) ?  $doa->description : $data['description'],
            'link' => empty($data['link']) ?  $doa->link : $data['link'],
            'link_name' => empty($data['link_name']) ?  $doa->link_name : $data['link_name'],
            'image' => empty($filename) ?  $doa->image : $filename,
        ]);

        return redirect()->route('doa')->with(['success'=>'Data diedit.']);

    }

    public function delete($id) 
    {
        $doa = Doa::where([
            ['id', '=', $id]
        ])->first();
        if (!$doa) {
            return redirect()->route('doa')->with(['error'=>'Parameter id tidak valid.']);
        }
        Doa::where('id', $id)->delete();
        return redirect()->route('doa')->with(['success'=>'Data dihapus.']);
    }
}
