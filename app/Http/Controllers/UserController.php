<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Show(){
        return view('users', [
            'user' => User::All()
        ]);
    }
}
