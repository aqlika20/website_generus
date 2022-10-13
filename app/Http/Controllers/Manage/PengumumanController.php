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
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $currentUser = User::find(Auth::id());
        $pengumumans = Pengumuman::All();
        // dd($currentUser);
        return view('manage.pengumuman', compact('pengumumans', 'currentUser'));
    }

    public function store(Request $request) 
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required',
            'isi' => 'required',
        ]);
        
        $pengumumans = Pengumuman::create([
            'title' =>ucwords($input['title']),
            'isi' => $input['isi'],        
        ]);

        return redirect()->route('pengumuman')->with(['success'=>'pengumuman Berhasil Ditambahkan!']);
    }

    public function view($id)
    {
        $currentUser = User::find(Auth::id());
        $pengumuman = Pengumuman::find($id);
        if (!$pengumuman) {
            return redirect()->route('pengumuman')->with(['error'=>'Parameter id tidak valid.']);
        }
        return view('manage.editpengumuman', compact('pengumuman', 'currentUser'));
    }

    public function edit($id, Request $request)
    {
        $data = $request->all();
        // dd($data);

        $validator = Validator::make($data, [
            'title' => 'required',
            'isi'=> 'required'
        ]);

        $pengumuman = Pengumuman::where([
            ['id', '=', $id]
        ])->first();


        $pengumuman->update([
            'title' => ucwords($data['title']),
            'isi' => empty($data['isi']) ?  $pengumuman->isi : $data['isi'],
        ]);

        return redirect()->route('pengumuman')->with(['success'=>'Data diedit.']);

    }

    public function delete($id) 
    {
        $pengumuman = Pengumuman::where([
            ['id', '=', $id]
        ])->first();
        if (!$pengumuman) {
            return redirect()->route('pengumuman')->with(['error'=>'Parameter id tidak valid.']);
        }
        Pengumuman::where('id', $id)->delete();
        return redirect()->route('pengumuman')->with(['success'=>'Data dihapus.']);
    }
}
