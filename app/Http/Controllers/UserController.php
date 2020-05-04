<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function add(AdminRequest $req)
    {

        $user = User::create([
            'name' => $req->name,
            'surname' => $req->surname,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'rol' => 0,
        ]);

        return response()->json(['success' => 'success'], 200);

    }

    public function allAdmins()
    {
        $admins = User::where('rol', 0)->get();
        return $admins;
    }

    public function delete(Request $req)
    {

        $admin = User::findOrFail($req->id);
        $admin->delete();

        return response()->json(['success' => 'success'], 200);

    }
}
