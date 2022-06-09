<?php

namespace App\Http\Controllers;

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
use App\Models\Social;

class HomeController extends Controller
{
    public function home()
    {
        $id = 1;

        $organisation = Organisation::find($id);
        $navigations = Navigation::All();
        $address = Address::find($id);
        $banner = Banner::find($id);
        $social = Social::find($id);
        $about = About::find($id);
        $contents = Content::All();
        $users = User::All();

        return view('home', compact('navigations', 'contents', 'organisation', 'address', 'banner', 'about', 'users', 'social'));
    }
}
