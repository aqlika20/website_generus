<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Navigation;
use App\Models\Content;
use App\Models\Address;
use App\Models\Helper;
use App\Models\Banner;
use App\Models\About;
use App\Models\User;
use App\Models\Role;

class DashboardController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('manage.dashboard');
    }
    public function home()
    {
        $organisations = Organisation::All();
        $navigations = Navigation::All();
        $contents = Content::All();
        $address = Address::All();
        $banners = Banner::All();
        $abouts = About::All();
        $users = User::All();
        return view('home', compact('navigations', 'contents', 'organisations', 'address', 'banners', 'abouts', 'users'));
    }
}
