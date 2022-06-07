<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Navigation;
use App\Models\Content;

class NavigationController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application Navigation.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentUser = User::find(Auth::id());
        $navigations = Navigation::All();
        $contents = Content::All();

        return view('manage.navigation', compact('navigations', 'contents', 'currentUser'));
    }

    public function store(Request $request) 
    {
        $input = $request->all();
        $content = $input['content_id'];
        $content_id = Content::find($content);
        // dd($content_id->code);

        $validator = Validator::make($input, [
            'name' => 'required',
            'icon' => 'required',
            'self_url' => 'required',
            'url' => 'nullable',
            'content_id' => 'nullable'
        ]);

        if($input['self_url'] = 1){
            $urlbaru = '#'.$content_id->code;
            // dd($urlbaru);
            $users = Navigation::create([
                'name' =>$input['name'],
                'icon' => $input['icon'],
                'self_url' => $input['self_url'],
                'url' => $urlbaru,
                'content_id'=>$input['content_id']
            ]);
        }elseif($input['self_url'] = 2){            
            $users = Navigation::create([
                'name' =>$input['name'],
                'icon' => $input['icon'],
                'self_url' => $input['self_url'],
                'url' => $input['url'],
                'content_id'=>$input['content_id']
            ]);
        }
        

        return redirect()->route('navigation')->with(['success'=>'Navigation Berhasil Ditambahkan!']);
    }

    public function view($id)
    {
        $currentUser = User::find(Auth::id());
        $navigation = Navigation::find($id);
        $contents = Content::All();
        if (!$navigation) {
            return redirect()->route('navigation')->with(['error'=>'Parameter id tidak valid.']);
        }
        return view('manage.editnavigation', compact('navigation','contents', 'currentUser'));
    }

    public function edit($id, Request $request)
    {
        $data = $request->all();
        // dd($data);
        $validator = Validator::make($data, [
            'name' => 'required',
            'icon' => 'required',
            'self_url' => 'required',
            'url' => 'nullable',
            'contents_id' => 'nullable'
        ]);

        if($data['self_url'] == 1){
            $content = $data['content_id'];
            $content_id = Content::find($content);
            $urlbaru = '#'.$content_id->code;
            // dd($content_id);
    
            $navigation = Navigation::where([
                ['id', '=', $id]
            ])->first();
    
            $navigation->update([
                'name' => strtoupper($data['name']),
                'icon' => $data['icon'],
                'self_url' => $data['self_url'],
                'url' => $urlbaru,
                'contents_id' => empty($data['contents_id']) ?  $navigation->contents_id : $data['contents_id']
            ]);
    
            return redirect()->route('navigation')->with(['success'=>'Data diedit.']);
        }
        elseif($data['self_url'] == 2){
            $navigation = Navigation::where([
                ['id', '=', $id]
            ])->first();
    
            $navigation->update([
                'name' => strtoupper($data['name']),
                'icon' => $data['icon'],
                'self_url' => $data['self_url'],
                'url' => empty($data['url']) ?  $navigation->url : $data['url'],
                'contents_id' => empty($data['contents_id']) ?  $navigation->contents_id : $data['contents_id']
            ]);
    
            return redirect()->route('navigation')->with(['success'=>'Data diedit.']);
        }
        
    }

    public function delete($id) 
    {
        $navigation = Navigation::where([
            ['id', '=', $id]
        ])->first();
        if (!$navigation) {
            return redirect()->route('navigation')->with(['error'=>'Parameter id tidak valid.']);
        }
        Navigation::where('id', $id)->delete();
        return redirect()->route('navigation')->with(['success'=>'Data dihapus.']);
    }
}
