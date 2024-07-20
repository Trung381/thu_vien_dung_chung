<?php

namespace App\Http\Controllers;
use App\Models\Test;
use App\Models\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function cake(Request $request)
    {
        return Test::all();
    }
    public function cake2(Request $request)
    {
        return 3;
    }
}

