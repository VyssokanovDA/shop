<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Menu;
use App\News;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends BaseController
{
    public function index(){
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

    public function getProducts(){
        $products = Product::all();
        $menus = Menu::all();
        $categories = Category::all();
        return view('shop.products', [
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
