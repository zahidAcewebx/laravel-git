<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    public function index()
{
    return view('jobseeker.dashboard');  
}
}
