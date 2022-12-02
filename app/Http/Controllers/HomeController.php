<?php

namespace App\Http\Controllers;

use App\BackWeb\Process\Process;
use App\Models\UserManagement;
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
use App\Models\Role;
use App\Models\Social;
use App\Models\Berita;
use App\Models\Doa;
use App\Models\Dalil;
use App\Models\Pengumuman;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $currentUser = UserManagement::find(Auth::id());
        // dd($currentUser->roles_id);
        if($currentUser->roles_id == 1){
            return redirect()->route('home.admin');
        }
        if($currentUser->roles_id == 2){
            return redirect()->route('home.user');
        }
        
    }
}
