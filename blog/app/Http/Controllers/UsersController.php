<?php

namespace App\Http\Controllers;
use App\Models\User;

class UsersController extends Controller
{
    function index()
    {
        /*$user = new User();
        $user->name = 'Esmeralda';
        $user->email = 'esmeralda@gmail.com';*/
        
        $users = User::all();
        return response()->json([$users]);
    }
}
