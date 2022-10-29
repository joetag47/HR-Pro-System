<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userManagementController extends Controller
{
    public function index(){
        return view('userManagement.index');
    }
}
