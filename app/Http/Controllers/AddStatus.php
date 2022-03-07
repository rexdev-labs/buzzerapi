<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class AddStatus extends Controller
{
    public function __invoke(Request $request)
    {

    return Status::create(
        [
            'id_user' => $request->id_user, 
            'status'=> $request->status
        ]
    );
    }

}
