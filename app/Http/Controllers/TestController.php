<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        //$news = DB::table('news')->get();

        $news = News::all();

        $novost = News::find(1);
        $novost->title = 'Новое название новости d';
        $novost->save();
        //dd(novost);
        return view('test', [
            'news' => $news
        ]);
    }
}
