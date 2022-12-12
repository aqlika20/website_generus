<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;
use App\Models\Helper;


class UserController extends Controller
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
     * Show the application User.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentUser = User::find(Auth::id());
        $users = User::All();
        $roles = Role::all();

        $jabatans = Role::all();
        foreach($jabatans as $value){
            $jabatan[$value->id] = $value->name;
        }
        // dd($role);

        return view('manage.setting.user', compact('users', 'roles', 'currentUser', 'jabatan'));
    }

    public function view($id)
    {
        $currentUser = User::find(Auth::id());
        $roles = Role::all();
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('user')->with(['error'=>'Parameter id tidak valid.']);
        }
        return view('manage.setting.edituser', compact('user', 'roles', 'currentUser'));
    }

    public function storeUser(Request $request) 
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'roles_id' => 'required'
        ]);
        
        // dd($validator->fails());
        if ($validator->fails())
        {
            return redirect()->route('user')->with(['error'=>'Data tidak valid.1']);
        }
        if (empty(trim(Role::find($input['roles_id']))))
        {
            return redirect()->route('user')->with(['error'=>'Data tidak valid.2']);
        }

        $input['password'] = Hash::make($input['password']);
        $input['remember_token'] = Helper::generateRandomString('remember_token', 60);
        // dd($input);

        // UserManagement::create($input);

        $users = User::create([
            'name' =>$input['name'],
            'username' =>$input['username'],
            'email' => $input['email'],
            'password' => $input['password'],
            'roles_id' => $input['roles_id'],
            'remember_token'=>$input['remember_token']
            
        ]);
        return redirect()->route('user')->with(['success'=>'User berhasil ditambahkan']);
    }

    public function edit($id, Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $user = User::where([
            ['id', '=', $id]
        ])->first();
        if (!$user) {
            return redirect()->route('user')->with(['error'=>'Parameter id tidak valid.']);
        }

        $user->name = $data['name'];
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->roles_id = $data['role'];

        $user->save();

        return redirect()->route('user')->with(['success'=>'Data diedit.']);
    }

    public function delete($id) 
    {
        $user = User::where([
            ['id', '=', $id]
        ])->first();
        if (!$user) {
            return redirect()->route('user')->with(['error'=>'Parameter id tidak valid.']);
        }
        User::where('id', $id)->delete();
        return redirect()->route('user')->with(['success'=>'Data dihapus.']);
    }

    public function profile()
    {
        $currentUser = User::find(Auth::id());
        $roles = Role::all();
        // dd($currentUser);

        return view('manage.setting.profile', compact('currentUser', 'roles'));
    }

    public function profileEdit($id, Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $user = User::where([
            ['id', '=', $id]
        ])->first();
        if (!$user) {
            return redirect()->route('profile')->with(['error'=>'Parameter id tidak valid.']);
        }

        $user->name = $data['name'];
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->roles_id = $data['role'];

        $user->save();

        return redirect()->route('profile')->with(['success'=>'Data diedit.']);
    }

    public function profileEditPass($id, Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'password' => 'required|confirmed',
        ]);

        $user = User::where([
            ['id', '=', $id]
        ])->first();

        if (!$user) {
            return redirect()->route('user')->with(['error'=>'Parameter id tidak valid.']);
        }

        $data['password'] = Hash::make($data['password']);
        $data['remember_token'] = Helper::generateRandomString('remember_token', 60);

        $user->password = $data['password'];
        $user->remember_token = $data['remember_token'];

        $user->save();

        return redirect()->route('profile')->with(['success'=>'Data diedit.']);
    }

}
