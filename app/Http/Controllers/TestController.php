<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class TestController extends Controller
{
    public function index(){

        return view('test');
    }
}
