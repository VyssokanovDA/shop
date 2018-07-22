
<h1>Тестовый шаблон</h1>

@foreach ($news as $item)
    <h2>{{$item->title}}</h2>
    <p>{{$item->introtext}}</p>
@endforeach