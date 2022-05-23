<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
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
     * Show the application Setting.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('manage.setting');
    }

    public function banner()
    {
        return view('manage.setting.banner');
    }

    public function about()
    {
        return view('manage.setting.about');
    }

    public function organisation()
    {
        return view('manage.setting.organisation');
    }

    public function address()
    {
        return view('manage.setting.address');
    }

    public function user()
    {
        return view('manage.setting.user');
    }
}

