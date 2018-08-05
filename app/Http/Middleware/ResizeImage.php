<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class ResizeImage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->img){
            //Экземпляр объекта класса UploadFile
            $image = $request->file('img');
            //Задаем уникальное имя использую временнную метку и рандомайзер
            //getClientOriginalExtension() - получаем расширение передаваемого файла
            $filename = time() . '_' . rand(1,9) . '.' . $image->getClientOriginalExtension();
            //Путь где будет храниться наше изображение
            //public_path($str) - обращается к корню public клиентской части
            //принимает доп. параметр  пути внутри public
            $location = public_path(env('URL_IMAGE_PRODUCTS') . $filename);
            //локальное размещение
            //Режем и сохраняем в нашей папке
            Image::make($image)->resize(330, 380)->save(env('URL_IMAGE_PRODUCTS') .$location);
            // Image::make($image)->resize(50, 60)->save(env('URL_IMAGE_PRODUCTS') . '/mini_' . $location);
            // $all = $request->all();
            $data['img'] = $filename;
        }else{
            return redirect()->route('news.create');
        }
        return $next($request);
    }
}
