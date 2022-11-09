<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store', 'edit']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
        $this->middleware('permission:user-update-status', ['only' => ['updateStatus']]);
    }


    public function index(Request $request)
    {
        $data = User::all();
        $activeUsers = DB::table('users')->where('status', 1)->pluck('id', 'id')->all();

        return view('admin.User.index', compact('data', 'activeUsers'));
    }


    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();

        return view('admin.User.create', compact('roles'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'persian_alpha', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8'],
            'Mobile' => ['required', 'numeric', 'iran_mobile'],
            'NationalID' => ['required', 'numeric', 'melli_code'],
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        $permissions = Permission::pluck('name', 'name')->all();
        $userPermission = $user->permissions()->pluck('name', 'name')->all();
        //$userPermission = DB::table('model_has_permissions')->where('model_id', $id)->pluck('name', 'name')->all();
        //dd($userRole);
        return view('admin.User.show', compact('user', 'userRole'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('admin.User.edit', compact('user', 'roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'persian_alpha', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'Mobile' => ['required', 'numeric', 'iran_mobile'],
            'NationalID' => ['required', 'numeric', 'melli_code'],
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }

    public function updateStatus(Request $request, $id)
    {

        //$user = User::find($id);



        //$currentStatus = DB::table('users')->where('id', $id)->pluck('status');
        //$nextStatus = $currentStatus[0] == "block" ? 'active' : 'block';
        $nextStatus = (!$request->status);
        //dd($currentStatus[0] == 'active');
        //$nextStatus = '';
        /*  if ($currentStatus === 'active') {
            $nextStatus = 'block';
        } elseif ($currentStatus === 'block') {
            $nextStatus = 'active';
        } */
        //dd($nextStatus);
        DB::table('users')->where('id', $id)->update(
            ['status' => $nextStatus]
        );
        return \redirect()->route('users.index');
    }
}
