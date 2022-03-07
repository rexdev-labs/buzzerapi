<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = $request->user();

        return Response()->json([
            'email'=> $user->email,
            'name'=> $user->name,
            'fullname'=> $user->fullname,
            'id'=> $user->id
        ]);
    }
}
