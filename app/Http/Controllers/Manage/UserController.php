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
        return view('manage.setting.user', compact('users', 'roles', 'currentUser'));
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
        return view('manage.setting.profile');
    }

}
