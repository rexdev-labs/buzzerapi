<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
class DeleteStatus extends Controller
{
    public function __invoke(Request $request)
    {
        Status::where('id', $request->id)->delete();
    }
}
