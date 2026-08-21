<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function scholarships(){
        return view('scholarship');
    }
}
