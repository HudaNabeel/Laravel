<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller;
{

    public function __construct()
    {
    }

    public function index()
    {
        return response()->json(['data' => User::all(), 'message' => null]);
    }


    public function show(User $user)
    {

        return $user;
    }
}
