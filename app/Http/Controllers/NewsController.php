<?php
namespace App\Http\Controllers;
use App\MyHelpers;
use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
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
        return view('admin.news.index', [
            'news' => $news //отдаем шаблону на рендер
        ]);
    }
    /**
     * Отображает форму для создания ресурса.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            $location = public_path( env('URL_IMAGE_PRODUCTS') . $filename);
            //локальное размещение
            //Режим и сохраняем в нашей папке
            Image::make($image)->resize(330, 380)->save($location);
            // $all = $request->all();
            $data['img'] = $filename;
        }

        News::create($data);
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
        //
    }
    /**
     * Отображает форму для редактирования ресурса
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
    /**
     * Удаление конкретного ресурса с БД
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getNewsOnPublic(){}
}