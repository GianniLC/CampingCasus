<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function Show(){
        return view('welcome');
    }

    public function Create($request){
        //dd($request->all());

        return User::create($request->only([
            'firstname',
            'lastname',
            'city',
            'address',
            'addressnumber',
            'zipcode',
            'email',
            'phonenumber',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]));
    }

    public function Store(RegisterRequest $request){
        $user = $this->Create($request);

        return redirect('/');
    }
}
