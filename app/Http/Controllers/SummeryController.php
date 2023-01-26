<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummeryController extends Controller
{
    public function index(){
        return view('adminPage.summery.summery');
    }
}
