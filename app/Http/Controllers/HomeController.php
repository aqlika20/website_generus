<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organisation;
use App\Models\Navigation;
use App\Models\Content;
use App\Models\Address;
use App\Models\Helper;
use App\Models\Banner;
use App\Models\About;
use App\Models\User;
use App\Models\Role;
use App\Models\Social;
use App\Models\Berita;
use App\Models\Doa;
use App\Models\Dalil;
use App\Models\Pengumuman;


class HomeController extends Controller
{
    public function dashboard()
    {
        $id = 1;

        $currentUser = User::find(Auth::id());
        // $organisation = Organisation::find($id);
        // $navigations = Navigation::All();
        // $address = Address::find($id);
        // $banner = Banner::find($id);
        // $about = About::find($id);
        // $contents = Content::All();
        $social = Social::find($id);
        $users = User::All();
        $beritas = Berita::All();
        $pengumumans = Pengumuman::All();
        
        foreach($pengumumans as $pengumuman)
            $shortPengumuman = $pengumuman->isi;
        

        return view('home', compact('users','beritas','currentUser','social','pengumumans'));
    }

    public function doa()
    {
        $currentUser = User::find(Auth::id());
        $doas = Doa::All();
        return view('doa', compact('currentUser','doas'));
    }
    public function dalil()
    {
        $currentUser = User::find(Auth::id());
        $dalils = Dalil::All();
        return view('dalil', compact('currentUser','dalils'));
    }
}
