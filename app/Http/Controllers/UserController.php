<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Str;

class UserController extends Controller
{
    public function showRoles()
    {
        $roles = Role::all();
        return view('pages.admin.users.roles.index', compact('roles'));
    }

    public function editRoles($id)
    {
        $role = Role::findOrFail($id);
        return view('pages.admin.users.roles.edit', compact('role'));
    }

    public function updateRoles(Request $request, $id)
    {
        $data = $request->all();
        $role = Role::findOrFail($id);
        $data['name'] = Str::upper($data['name']);
        $role->update($data);
        return redirect()->route('admin');
    }

    public function showUsersRoles($roles)
    {
        $role = Role::where('name', $roles)->with('users')->first();
        $users = $role->users;
        return view('pages.admin.users.show', compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin');
    }

    public function createRoles()
    {
        return view('pages.admin.users.create');
    }

    public function storeRoles(Request $request)
    {
        $data = $request->all();
        $data['name'] = Str::upper($data['name']);
        $user = Role::create($data);
        return redirect()->route('admin');
    }

    public function editUserRoles($id) 
    {
        $roles = Role::all();
        $user = User::with('roles')->findOrFail($id);
        return view('pages.admin.users.edit', compact('user', 'roles'));
    }

    public function updateUserRoles(Request $request, $id)
    {
        $data = $request->all();
        $user = User::findOrFail($id);
        $user->update($data);
        return redirect()->route('admin');
    }

    public function deleteRoles($id)
    {
        $role = Role::findOrFail($id);
        User::where('role_id', $id)->update(['role_id' => 2]);
        $role->delete();
        return redirect()->route('admin');
    }
}
