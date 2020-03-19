<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempEvent;
class ApiController extends Controller
{

    public function newEvent(Request $request)
    {
        TempEvent::insert([
            'request' => json_encode($request->all())
        ]);
        echo 'saved ' . json_encode($request->all());
    }

}
