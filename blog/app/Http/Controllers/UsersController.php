<?php

namespace App\Http\Controllers;
use App\Models\User;

class UsersController extends Controller
{
    function index()
    {
        $user = new User();
        $user->name = 'Esmeralda';
        $user->email = 'esmeralda@gmail.com';
        
        return response()->json([$user]);
    }
}
