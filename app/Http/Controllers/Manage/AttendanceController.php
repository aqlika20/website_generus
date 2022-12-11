<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\UserManagement;
use App\Models\Content;
use App\Models\Helper;
use App\Models\Berita;
use App\Models\Subject;
use App\Models\Attendance;
use App\Models\AttendanceStudent;

class AttendanceController extends Controller
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

    public function index()
    {
        $attendances = Attendance::with(['subject', 'teacher'])->WhereSubject(request()->get('subject_filter'))->WhereDateIs(request()->get('date_filter'))->withCount('students')->get();
        $subjects = Subject::all();
        // dd($currentUser);
        return view('manage.indexattendance', compact('attendances', 'subjects'));
    }

    public function store(Request $request) 
    {
        $currentUser = UserManagement::find(Auth::id());
        $input = $request->all();

        $date = date('Y-m-d', strtotime($input['date']));
        // dd($format);
        
        $validator = Validator::make($input, [
            'subject_id' => 'required',
            'date' => 'required'
        ]);
        //Buat Absen Kosong
        $attendance = Attendance::create([
            'subject_id' => $input['subject_id'],
            'user_id' => $currentUser->id,
            'date' => $date,           
        ]);
        
        $subject = Subject::findorfail($input['subject_id']);

        $generus = UserManagement::where([
            ['roles_id', '=', 2]
        ])->get();

        $generusCount = UserManagement::where([
            ['roles_id', '=', 2]
        ])->count();
        // dd($attendance);
        

        return view('manage.attendance', compact('attendance', 'generus', 'currentUser', 'subject', 'generusCount'));
    }

    public function attach(Request $request): RedirectResponse
    {
        $input = $request->all();
        foreach ($input['status'] as $student_id => $status) {
            
            $students = UserManagement::where([
                ['roles_id', '=', 2]
            ])->get();

            foreach ($students as $student){
                
                if ($status == "on") {
                    $value = 1;
                } elseif($status == "off") {
                    $value = 0;
                }
                else{
                    $value = null;
                }
                // dd($input['id']);
    
                $attendance = AttendanceStudent::create([
                    'attendance_id ' =>1,
                    'student_id' => $student->id,
                    'status' => $value,           
                ]);
            }
        }

        return redirect()->route('attendance')->with(['success'=>'Data success.']);
    }

    public function view($id)
    {
        $currentUser = UserManagement::find(Auth::id());
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
