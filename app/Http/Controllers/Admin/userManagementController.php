<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class userManagementController extends Controller
{
    public function index(){
        return view('userManagement.index');
    }
}
