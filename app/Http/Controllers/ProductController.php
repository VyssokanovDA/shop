<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Menu;
use App\MyHelpers;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $menus = Menu::all();
        return view('admin.products.index', [
            'products' => $products, //отдаем шаблону на рендер
            'menus' => $menus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.create', [
            'categories' => $categories,
            'brands' => $brands,
            'menus' => Menu::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Валидация даных
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);

        $data = $request->all();


        $data['alias'] = date('d-m-Y') . '-' . MyHelpers::str2url($data['title']);
        $data['user_id'] = Auth::id();

        if($request->hasFile('thumb')){
            //Экземпляр объекта класса UploadFile
            $image = $request->file('thumb');
            //Задаем уникальное имя использую временнную метку и рандомайзер
            //getClientOriginalExtension() - получаем расширение передаваемого файла
            $filename = time() . '_' . rand(1,9) . '.' . $image->getClientOriginalExtension();
            //Путь где будет храниться наше изображение
            //public_path($str) - обращается к корню public клиентской части
            //принимает доп. параметр  пути внутри public
            $location = public_path(env('URL_IMAGE_PRODUCTS') . $filename);
            //локальное размещение
            //Режим и сохраняем в нашей папке
            Image::make($image)->resize(330, 380)->save($location);
            // Image::make($image)->resize(50, 60)->save(env('URL_IMAGE_PRODUCTS') . '/mini_' . $location);
            // $all = $request->all();
            $data['thumb'] = $filename;
            $data['old_price'] = $data['price'];
            $data['images'] = $filename;

        }

        //News::create($data);
        /**
         * Проверка на создание новой записи
         * прочитать про try - catch обработчик ошибок (исключений)
         * Session::flash() записывает сессию на 1 раз (вспышка)
         */

        try{
            //dd($data);
            Product::create($data);
            $message = 'Запись успешно добавлена в базу!';
        }catch (\Exception $e){
            $message = '<b>Ошибка</b>: ' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::all();
        $single = Product::find($id);
        $category = Category::find($single->category_id);
        $brand = Brand::find($single->brand_id);
        //dd($category);
        return view('shop.single', [
            'users' => $users,
            'single' => $single, //получаем единственную запись в помощью find по id
            'category' => $category,
            'brand' => $brand,
            'menus' => Menu::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.edit', [
            'product' => Product::find($id), //получаем единственную запись в помощью find по id
            'categories' => $categories,
            'brands' => $brands,
            'menus' => Menu::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Находим экземпляр товара по id
        $product = Product::find($id);
        //Получаем все данные из форм
        $data = $request->all();
        //Работа с картинкой
        if($request->hasFile('thumb')){
            //Экземпляр объекта класса UploadFile
            $image = $request->file('thumb');
            $filename = time() . '_' . rand(1,9) . '.' . $image->getClientOriginalExtension();
            $location = public_path( env('URL_IMAGE_PRODUCTS') . $filename);
            Image::make($image)->resize(330, 380)->save($location);
            //удаляем старый файл из папки
            // unset(env('URL_IMAGE_PRODUCTS') . $product->img);
            $data['thumb'] = $filename;
            $data['images'] = $filename;
        }
        try{
            $product->update($data);
            $message = "Товар {$product->title} успешно обновлен!";
        }catch (\Exception $e){
            $message = '<b>Ошибка</b>: ' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            //Удаление запиcи
            Product::find($id)->delete();
            //Или News::destroy($id)
            $message = "Запись успешно удалена!";
        }catch (\Exception $e){
            $message = '<b>Ошибка: </b>' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('products.index');
    }
}
