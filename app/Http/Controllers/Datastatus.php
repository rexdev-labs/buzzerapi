<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\User;

class Datastatus extends Controller
{
    public function __invoke()
    {

        $status = Status::orderBy('created_at', 'DESC')->get()->toArray();
        $status_new = array_map(function ($status_loop)
        {
            $status_loop['user'] = User::where('id', $status_loop['id_user'])->first()->toArray();
            return $status_loop;
        }, $status);
        return $status_new;
    }
}
