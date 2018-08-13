<?php
namespace App\Http\Controllers;
use App\Menu;
use App\MyHelpers;
use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class NewsController extends BaseController
{
    /**
     * Список ресурсов.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Получаем все новости из БД
        //$news = News::all();
        $news = News::orderBy('id', 'desc')->get();
        $menus = Menu::all();
        return view('admin.news.index', [
            'news' => $news, //отдаем шаблону на рендер
            'menus' => $menus
        ]);
    }
    /**
     * Отображает форму для создания ресурса.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        return view('admin.news.create', [
            'menus' => $menus
        ]);
    }
    /**
     * Обработчик запроса на созадние ресурса.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $novost = new News();
//        $novost->title = $request->get('title');
//        $novost->img = $request->get('img');
//        $novost->save();
        //dd($request);

        //Валидация даных
        $request->validate([
            'title' => 'required|max:255',
            'introtext' => 'required',
            'text' => 'required',
        ]);

        $data = $request->all();
        //dd($data);

        $data['alias'] = date('d-m-Y') . '-' . MyHelpers::str2url($data['title']);
        $data['user_id'] = Auth::id();
        if($request->hasFile('img')){
            //Экземпляр объекта класса UploadFile
            $image = $request->file('img');
            //Задаем уникальное имя использую временнную метку и рандомайзер
            //getClientOriginalExtension() - получаем расширение передаваемого файла
            $filename = time() . '_' . rand(1,9) . '.' . $image->getClientOriginalExtension();
            //Путь где будет храниться наше изображение
            //public_path($str) - обращается к корню public клиентской части
            //принимает доп. параметр  пути внутри public
            $location = public_path(env('URL_IMAGE_NEWS') . $filename);
            //локальное размещение
            //Режим и сохраняем в нашей папке
            Image::make($image)->resize(330, 380)->save($location);
            // Image::make($image)->resize(50, 60)->save(env('URL_IMAGE_NEWS') . '/mini_' . $location);
            // $all = $request->all();
            $data['img'] = $filename;
        }

        //News::create($data);
        /**
         * Проверка на создание новой записи
         * прочитать про try - catch обработчик ошибок (исключений)
         * Session::flash() записывает сессию на 1 раз (вспышка)
         */
        try{
            News::create($data);
            $message = 'Запись успешно добавлена в базу!';
        }catch (\Exception $e){
            $message = '<b>Ошибка</b>: ' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('news.index');
    }
    /**
     * Отображает конкретную запись
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::all();
        $users = User::all();
        $menus = Menu::all();
        return view('shop.single_blog', [
            'news' => $news,
            'menus' => $menus,
            'users' => $users,
            'blog' => News::find($id) //получаем единственную запись в помощью find по id
        ]);
    }
    /**
     * Отображает форму для редактирования ресурса
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus = Menu::all();
        return view('admin.news.edit', [
            //News::findOrFail();
            //DB::select('news')->where(['id' => $id])->get();
            'novost' => News::find($id), //получаем единственную запись в помощью find по id
            'menus' => $menus
        ]);
    }
    /**
     * Обновляет товар в БД. Обработчик обновления конкретного ресурса
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Находим экземпляр новости по id
        $novost = News::find($id);
        //Получаем все данные из форм
        $data = $request->all();
        //Работа с картинкой
        if($request->hasFile('img')){
            //Экземпляр объекта класса UploadFile
            $image = $request->file('img');
            $filename = time() . '_' . rand(1,9) . '.' . $image->getClientOriginalExtension();
            $location = public_path( env('URL_IMAGE_NEWS') . $filename);
            Image::make($image)->resize(330, 380)->save($location);
            //удаляем старый файл из папки
            // unset(env('URL_IMAGE_NEWS') . $novost->img);
            $data['img'] = $filename;
        }
        try{
            $novost->update($data);
            $message = "Новость {$novost->title} успешно обновлена!";
        }catch (\Exception $e){
            $message = '<b>Ошибка</b>: ' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('news.index');
    }
    /**
     * Удаление конкретного ресурса с БД
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            //Удаление запиcи
            News::find($id)->delete();
            //Или News::destroy($id)
            $message = "Запись успешно удалена!";
        }catch (\Exception $e){
            $message = '<b>Ошибка: </b>' . $e->getMessage();
        }
        Session::flash('message', $message);
        return redirect()->route('news.index');
    }

    //Какой-то метод для получения новостей в клиентской части
    public function getNewsOnPublic(){}
}