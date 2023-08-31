<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    //
    public function index()
    {
        //lista de useri: "SELECT * FROM users"
        $users = User::all();
    }

    public function view($id)
    {
        //vezi un user: "SELECT * FROM users WHERE id=.$id"
        $user = User::find($id);
        //SA TE UITI AICI $user_dupa_nume=User::where("name",$name)->get();
    }

    public function edit($id, Request $request)
    {
        //editeaza un user
        $new_user_data = $request->all();
        $user = User::find($id);
        $user->name = $new_user_data['name'];
        $user->email = $new_user_data['email'];
        $user->password = $new_user_data['password'];
        //toate campurile care sunt in User trebuie sa fie si aici
        $user->save();
    }

    public function create(Request $request)
    {
        //creaza un userview('profile.edit', ['user' => $request->user(),])
        $new_user_data = $request->all();
        $user = new User();
        $user->name = $new_user_data['name'];
        $user->email = $new_user_data['email'];
        $user->password = $new_user_data['password'];
        //toate campurile care sunt in User trebuie sa fie si aici
        $user->save();
    }

    public function delete($id)
    {
        //sterge un user
        $user = User::find($id);
        //e nevoie facute validarile, adica daca exista sau nu userul respectiv = validari logice
        if ($user)
            $user->delete();
    }
}
