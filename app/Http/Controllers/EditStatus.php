<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
class EditStatus extends Controller
{
    public function __invoke(Request $request)
    {
        Status::where('id', $request->id)->update([
            'status' => $request->status
        ]);
    }
}
