<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Dept;
use DB;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::orderBy('id', 'DESC')->get();

        // $data = User::orderBy('id', 'DESC')->all();

        return view('admin.users.index', compact('data'))
            ->with('i');
    }

    public function create()
    {
        $roles = Role::lists('display_name', 'id');
        $depts = Dept:: all();
        

        return view('admin.users.create', compact('roles','depts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'contactnum' => 'required',
           'dept_id' => 'required',
            'jobtitle' => 'required',
            'roles'    => 'required',
        ]);

        $input = $request->all();
       
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->dept_id = $request->dept_id;
    
        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }

        return redirect()->route('users.index')
                        ->with('success', 'User created successfully');
    }
    /*
    public function showprofile($id)
    {
        $user = User::find($id);

        return view('account.showprofile', compact('user'));
    } */

    public function show($id)
    {
        $user = User::find($id);

        return view('admin.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $depts = Dept::all()->pluck('name', 'id');
        $roles = Role::lists('display_name', 'id');
        $userRole = $user->roles->lists('id', 'id')->toArray();

        return view('admin.users.edit', compact('user', 'roles', 'userRole', 'depts'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email'    => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles'    => 'required',
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = array_except($input, ['password']);
        }

        $user = User::find($id);
        $user->update($input);

        DB::table('role_user')->where('user_id', $id)->delete();

        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }
        $user->dept_id = $request->dept_id;


        return redirect()->route('users.index')
                        ->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('users.index')
                        ->with('success', 'User deleted successfully');
    }
}
