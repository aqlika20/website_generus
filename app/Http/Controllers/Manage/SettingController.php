<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Banner;
use App\Models\About;
use App\Models\Address;
use App\Models\Organisation;
use App\Models\Role;
use App\Models\User;
use App\Models\Helper;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    private $attachments_root_folder = "Settings/";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->about_folder = $this->attachments_root_folder . "about/";
        $this->organisation_folder = $this->attachments_root_folder . "organisation/";

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

    public function storeBanner(Request $request) 
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $id = 1;
        $banners = Banner::where([
            ['id', '=', $id]
        ])->first();

        $banners->update([
            'title' => empty($input['title']) ?  $banners->title : $input['title'],
            'description' => empty($input['description']) ?  $banners->description : $input['description']
        ]);

        return redirect()->route('banner')->with(['success'=>'Banner berhasil ditambahkan']);
    }

    public function about()
    {
        return view('manage.setting.about');
    }

    public function storeAbout(Request $request) 
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'main_image' => 'required',
            'main_description' => 'required'
            // 'slider.*' => 'required',
            // 'description' => 'required'
        ]);
        
        //convert input to json
        // $collect = []; 
        
        // $files = [];
        // foreach ($request->file('slider') as $file) {
        //     $filename = $file->getClientOriginalName();
        //     Storage::putFileAs($this->about_folder, $file, $filename);
        //     $files[] = $filename;
        // }
        
        // $collect[] = array(
        //     "slider_image" => $files,
        //     "description" => $input['description']
        // );
        // $result = json_encode($collect);
        //

        $file = $request->file('main_image');
        $filename = $file->getClientOriginalName();
        Storage::putFileAs($this->about_folder, $file, $filename);


        $id = 1;
        $abouts = About::where([
            ['id', '=', $id]
        ])->first();

        $abouts->update([
            'main_image' => $filename,
            'main_description' => $input['main_description']
        ]);


        // $abouts = About::create([
        //     'main_image' =>$filename,
        //     'main_description' => $input['main_description']
        // ]);

        return redirect()->route('about')->with(['success'=>'About berhasil ditambahkan']);
    }

    public function organisation()
    {
        return view('manage.setting.organisation');
    }

    public function storeOrganisation(Request $request) 
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'image' => 'required'
        ]);

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        Storage::putFileAs($this->organisation_folder, $file, $filename);

        $id = 1;
        $organisations = Organisation::where([
            ['id', '=', $id]
        ])->first();

        $organisations->update([
            'image' => $filename
        ]);

        // $organisations = Organisation::create([
        //     'image' => $filename       
        // ]);
        return redirect()->route('organisation')->with(['success'=>'Organisation berhasil ditambahkan']);
    }

    public function address()
    {
        return view('manage.setting.address');
    }

    public function storeAddress(Request $request) 
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $id = 1;
        $address = Address::where([
            ['id', '=', $id]
        ])->first();

        $address->update([
            'title' => empty($input['title']) ?  $address->title : $input['title'],
            'description' => empty($input['description']) ?  $address->description : $input['description']
        ]);
        
        return redirect()->route('address')->with(['success'=>'Address berhasil ditambahkan']);
    }
}

