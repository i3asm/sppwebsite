<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function update($id)
    {
        request()->validate([
            'name' => 'required',
            'email' => ['required', 'email:rfc,dns'],
            'role' => ['required', 'numeric', 'max:1', 'min:0'],
        ]);

        $user = user::find($id);
        $user->name = request('name');
        $user->email = request('email');
        $user->role = request('role');
        $user->save();

        return redirect('/admin');
    }

    public function distroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();
        return redirect('/admin');
    }

}
