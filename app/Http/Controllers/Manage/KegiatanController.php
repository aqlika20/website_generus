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
use App\Models\UserManagement;
use App\Models\Content;
use App\Models\Helper;
use App\Models\Subject;

class KegiatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $currentUser = UserManagement::find(Auth::id());
        $kegiatans = Subject::All();
        return view('manage.setting.kegiatanpengajian', compact('kegiatans', 'currentUser'));
    }

    public function store(Request $request) 
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required'
        ]);

        // dd($filename);
        $kegiatans = Subject::create([
            'name' =>ucwords($input['name']),
            'description' => $input['description'],
        ]);

        return redirect()->route('kegiatan')->with(['success'=>'Kegiatan Berhasil Ditambahkan!']);
    }

    public function view($id)
    {
        $currentUser = UserManagement::find(Auth::id());
        $kegiatan = Subject::find($id);
        if (!$kegiatan) {
            return redirect()->route('kegiatan')->with(['error'=>'Parameter id tidak valid.']);
        }
        return view('manage.setting.editkegiatanpengajian', compact('kegiatan', 'currentUser'));
    }

    public function edit($id, Request $request)
    {
        $data = $request->all();
        // dd($data);

        $validator = Validator::make($data, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $kegiatan = Subject::where([
            ['id', '=', $id]
        ])->first();

        $kegiatan->update([
            'title' => ucwords($data['title']),
            'description' => empty($data['description']) ?  $kegiatan->description : $data['description'],
        ]);

        return redirect()->route('kegiatan')->with(['success'=>'Data diedit.']);

    }

    public function delete($id) 
    {
        $kegiatan = Subject::where([
            ['id', '=', $id]
        ])->first();
        if (!$kegiatan) {
            return redirect()->route('kegiatan')->with(['error'=>'Parameter id tidak valid.']);
        }
        Subject::where('id', $id)->delete();
        return redirect()->route('kegiatan')->with(['success'=>'Data dihapus.']);
    }
}
