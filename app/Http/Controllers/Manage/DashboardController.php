<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Navigation;
use App\Models\Content;
use App\Models\Address;
use App\Models\Helper;
use App\Models\Banner;
use App\Models\About;
use App\Models\UserManagement;
use App\Models\Role;
use App\Models\Social;
use App\Models\Berita;
use App\Models\Doa;
use App\Models\Dalil;
use App\Models\Pengumuman;
use App\Models\Subject;

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
        $currentUser = UserManagement::find(Auth::id());
        $generusCount = UserManagement::where([
            ['roles_id', '=', 2]
        ])->count();
        $subjects = Subject::all();
// dd($subjects);
        return view('manage.dashboard', compact('currentUser', 'generusCount', 'subjects'));
    }
    
    public function home()
    {
        $id = 1;
        $currentUser = UserManagement::find(Auth::id());
        $social = Social::find($id);
        $users = UserManagement::All();
        $beritas = Berita::All();
        $pengumumans = Pengumuman::All();
        
        foreach($pengumumans as $pengumuman)
            $shortPengumuman = $pengumuman->isi;
        
        return view('home', compact('users','beritas','currentUser','social','pengumumans'));
    }
    public function doa()
    {
        $currentUser = UserManagement::find(Auth::id());
        $doas = Doa::All();
        return view('doa', compact('currentUser','doas'));
    }
    public function dalil()
    {
        $currentUser = UserManagement::find(Auth::id());
        $dalils = Dalil::All();
        return view('dalil', compact('currentUser','dalils'));
    }

    public function search(Request $request)
    {
        dd($request);
        if($request->ajax())
        {
            $query = $request->get('query');
            if($query != '')
            {
                $data = Doa::where('title','LIKE','%'.$query."%")->get();
            } else {
                $data = "tidak ditemukan";
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output.='<tr>'.
                    '<td>'.$row->id.'</td>'.
                    '<td>'.$row->title.'</td>'.
                    '<td>'.$row->description.'</td>'.
                    '</tr>';
                }
            } else {
                $output = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>
                ';
            }
            $data = array(
                'table_data'    => $output,
                'total_data'    => $total_data
            );

            echo json_encode($data);

            
            // $output="";
            // $doas= Doa::where('title','LIKE','%'.$request->search."%")->get();
            // if($doas)
            // {
            //     foreach ($doas as $key => $doa) {
            //         $output.='<tr>'.
            //         '<td>'.$doa->id.'</td>'.
            //         '<td>'.$doa->title.'</td>'.
            //         '<td>'.$doa->description.'</td>'.
            //         '</tr>';
            //         }
            //     return Response($output);
            // }
        }
    }
}
