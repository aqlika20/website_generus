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
use App\Models\Berita;

class BeritaController extends Controller
{
    private $attachments_root_folder = "Berita/";
    public function __construct()
    {
        $this->middleware('auth');
        $this->berita_folder = $this->attachments_root_folder;

    }

    public function index()
    {
        $currentUser = User::find(Auth::id());
        $beritas = Berita::All();
        // dd($currentUser);
        return view('manage.berita', compact('beritas', 'currentUser'));
    }

    public function store(Request $request) 
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);
        // coding untuk upload file
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        Storage::putFileAs($this->berita_folder, $file, $filename);

        // dd($filename);
        $beritas = Berita::create([
            'title' =>ucwords($input['title']),
            'description' => $input['description'],
            'image' =>$filename            
        ]);

        return redirect()->route('berita')->with(['success'=>'Berita Berhasil Ditambahkan!']);
    }

    public function view($id)
    {
        $currentUser = User::find(Auth::id());
        $berita = Berita::find($id);
        if (!$berita) {
            return redirect()->route('berita')->with(['error'=>'Parameter id tidak valid.']);
        }
        return view('manage.editberita', compact('berita', 'currentUser'));
    }

    public function edit($id, Request $request)
    {
        $data = $request->all();
        // dd($data);

        $validator = Validator::make($data, [
            'title' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg',
            'description' => 'required'
        ]);

        if(!empty($request->file('image'))){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            Storage::putFileAs($this->berita_folder, $file, $filename);
        }

        $berita = Berita::where([
            ['id', '=', $id]
        ])->first();


        $berita->update([
            'title' => ucwords($data['title']),
            'image' => empty($filename) ?  $berita->image : $filename,
            'description' => empty($data['description']) ?  $berita->description : $data['description'],
        ]);

        return redirect()->route('berita')->with(['success'=>'Data diedit.']);

    }

    public function delete($id) 
    {
        $berita = Berita::where([
            ['id', '=', $id]
        ])->first();
        if (!$berita) {
            return redirect()->route('berita')->with(['error'=>'Parameter id tidak valid.']);
        }
        Berita::where('id', $id)->delete();
        return redirect()->route('berita')->with(['success'=>'Data dihapus.']);
    }
}
