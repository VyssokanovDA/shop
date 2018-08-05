<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\News;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class MainController extends BaseController
{
    public function index(){
        //$news = News::orderBy('created_at');
        $products = Product::all();
        $menus = Menu::all();
        $categories = Category::all();
        return view('shop.index', [
            //'news' => $news,
            'products' => $products,
            'menus' => $menus,
            'categories' => $categories
        ]);
    }
    public function getNews(){
        $news = News::all();
        $menus = Menu::all();
        $categories = Category::all();
        $users = User::all();
        return view('shop.news', [
            'news' => $news,
            'menus' => $menus,
            'categories' => $categories,
            'users' => $users
        ]);
    }
}
