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

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function index()
    {
        $roles = Role::all();
        return view('auth.register', compact('roles'));
    }

    public function storeRegister(Request $request) 
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
        return redirect()->route('login')->with(['success'=>'User berhasil ditambahkan']);
    }

}
