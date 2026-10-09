<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Donors extends Controller
{
    function index(){
        return view('Donor');
    }
}
