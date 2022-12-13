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
use App\Models\ViewAttendance;
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
        return view('manage.take-attendance', compact('attendances', 'subjects'));
    }

    public function view()
    {
        $currentUser = UserManagement::find(Auth::id());
        $attendances = ViewAttendance::select("*", ViewAttendance::raw("count('student_id') as jumlah_siswa"))->where([
            ['user_id', '=', $currentUser->id],
            ['status', '=', 1]
        ])->groupBy('attendance_id')
        ->get();
        // dd($attendances);

        $users = UserManagement::all();
        foreach($users as $value){
            $user[$value->id] = $value->name;
        }

        $subjects = Subject::all();
        foreach($subjects as $value){
            $subject[$value->id] = $value->name;
        }

        foreach($attendances as $value){
            $attendance = $value->attendance_id;
        }
        // dd($attendance);
        $attendanceCount = AttendanceStudent::where([
            ['attendance_id', '=', $attendance],
            ['status', '=', 1]
        ])->count();
        // dd($attendanceCount);
        // exit;   
        return view('manage.indexabsen', compact('attendances', 'attendanceCount', 'currentUser', 'user', 'subject'));
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
                        
            if ($status == "on") {
                $value = 1;
            } elseif($status == "off") {
                $value = 0;
            }
            else{
                $value = null;
            }

            $attendance = AttendanceStudent::create([
                'attendance_id' => $input['id'],
                'student_id' => $student_id,
                'status' => $value,           
            ]);
        }

        return redirect()->route('attendance.view')->with(['success'=>'Data success.']);
    }

    public function edit($id)
    {
        // dd($id);
        $currentUser = UserManagement::find(Auth::id());
        $subject = Attendance::where([
            ['id', '=', $id]
        ])->first();

        $generuses = AttendanceStudent::where([
            ['attendance_id', '=', $id]
        ])->get();

        $generusCount = UserManagement::where([
            ['roles_id', '=', 2]
        ])->count();

        $kegiatans = Subject::all();
        foreach($kegiatans as $value){
            $kegiatan[$value->id] = $value->name;
        }

        $students = UserManagement::all();
        foreach($students as $value){
            $student[$value->id] = $value->name;
        }

        return view('manage.edit-attendance', compact('currentUser', 'kegiatan', 'subject', 'student', 'generuses', 'generusCount'));
    }

    public function detail($id)
    {
        // dd($id);
        $currentUser = UserManagement::find(Auth::id());
        $subject = Attendance::where([
            ['id', '=', $id]
        ])->first();

        $generuses = AttendanceStudent::where([
            ['attendance_id', '=', $id]
        ])->get();

        $generusCount = UserManagement::where([
            ['roles_id', '=', 2]
        ])->count();

        $kegiatans = Subject::all();
        foreach($kegiatans as $value){
            $kegiatan[$value->id] = $value->name;
        }

        $students = UserManagement::all();
        foreach($students as $value){
            $student[$value->id] = $value->name;
        }

        return view('manage.detail-attendance', compact('currentUser', 'kegiatan', 'subject', 'student', 'generuses', 'generusCount'));
    }

    public function update($id, Request $request)
    {
        $data = $request->all();
        // dd($data);

        $validator = Validator::make($data, [
            'students' => 'required',
            'status' => 'required'
        ]);

        foreach ($data['status'] as $student_id => $status) {
            // dd($student_id);
            
            if ($status == "on") {
                $value = 1;
            } elseif($status == "off") {
                $value = 0;
            }
            else{
                $value = null;
            }

            $generus = AttendanceStudent::where([
                ['id', '=', $student_id]
            ])->first();

            $generus->update([
                'status' => $value,
            ]);
        }

        return redirect()->route('attendance.view')->with(['success'=>'Data diedit.']);

    }

    public function delete($id) 
    {
        // dd($id);
        $attendance = Attendance::where([
            ['id', '=', $id]
        ])->first();
        $attendancestudent = AttendanceStudent::where([
            ['attendance_id', '=', $id]
        ])->get();
        if (!$attendance && !$attendancestudent) {
            return redirect()->route('attendance.view')->with(['error'=>'Parameter id tidak valid.']);
        }
        Attendance::where('id', $id)->delete();
        AttendanceStudent::where('attendance_id', $id)->delete();
        return redirect()->route('attendance.view')->with(['success'=>'Data dihapus.']);
    }
}
