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
use App\Models\Dalil;

class DalilController extends Controller
{
    private $attachments_root_folder = "Dalil-Dalil/";
    public function __construct()
    {
        $this->middleware('auth');
        $this->dalil_folder = $this->attachments_root_folder;

    }

    public function index()
    {
        $currentUser = User::find(Auth::id());
        $dalils = Dalil::All();
        // dd($currentUser);
        return view('manage.dalil', compact('dalils', 'currentUser'));
    }

    public function store(Request $request) 
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
            'latin' => 'required',
            'arti' => 'required'
        ]);

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        Storage::putFileAs($this->dalil_folder, $file, $filename);

        // dd($filename);
        $dalils = Dalil::create([
            'title' =>ucwords($input['title']),
            'image' =>$filename,
            'latin' => $input['latin'],
            'arti' => $input['arti']
        ]);

        return redirect()->route('dalil')->with(['success'=>'dalil Berhasil Ditambahkan!']);
    }

    public function view($id)
    {
        $currentUser = User::find(Auth::id());
        $dalil = Dalil::find($id);
        if (!$dalil) {
            return redirect()->route('dalil')->with(['error'=>'Parameter id tidak valid.']);
        }
        return view('manage.editdalil', compact('dalil', 'currentUser'));
    }

    public function edit($id, Request $request)
    {
        $data = $request->all();
        // dd($data);

        $validator = Validator::make($data, [
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
            'latin' => 'required',
            'arti' => 'required',
        ]);

        if(!empty($request->file('image'))){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            Storage::putFileAs($this->dalil_folder, $file, $filename);
        }

        $dalil = Dalil::where([
            ['id', '=', $id]
        ])->first();


        $dalil->update([
            'title' => ucwords($data['title']),
            'image' => empty($filename) ?  $dalil->image : $filename,
            'latin' => empty($data['latin']) ?  $dalil->latin : $data['latin'],
            'arti' => empty($data['arti']) ?  $dalil->arti : $data['arti'],
        ]);

        return redirect()->route('dalil')->with(['success'=>'Data diedit.']);

    }

    public function delete($id) 
    {
        $dalil = Dalil::where([
            ['id', '=', $id]
        ])->first();
        if (!$dalil) {
            return redirect()->route('dalil')->with(['error'=>'Parameter id tidak valid.']);
        }
        Dalil::where('id', $id)->delete();
        return redirect()->route('dalil')->with(['success'=>'Data dihapus.']);
    }
}
