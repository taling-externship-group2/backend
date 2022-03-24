<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\User;

class TestController extends Controller
{
    //

    public function index()
    { 
        $user = User::find(0);
        $asd = $user->contents;
    }
}
