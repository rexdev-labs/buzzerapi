<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class buzzerController extends Controller
{


    public function __invoke(Request $request) 
    {
        $data = $request->all();
        Status::create([
            'status'=> $data['status'],
            'id_user'=> $data['user']
        ]);
        
    }
}
