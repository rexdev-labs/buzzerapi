<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class Register extends Controller
{
    public function __invoke(Request $request)
    {
            if (User::where('email', $request['email'])->count() == 0) {
                return User::create([
                    'name' => $request['name'],
                    'fullname' => $request['fullname'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password'])
                ]);
            } else {
                return response('email already used', 409);
            }
        
    }
}
