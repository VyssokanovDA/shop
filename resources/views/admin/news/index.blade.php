@extends('admin.app')

@section('content')
    <h1>Список новостей</h1>
    <hr>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Картинка</th>
            <th scope="col">Название новости</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->img}}</td>
                <td>{{$item->title}}</td>
                <td><a href="#">Edit</a> | <a href="#">Удалить</a></td>
            </tr>
        @endforeach
        <tr>
            <td colspan="4">
                <a class="btn btn-primary float-right" href="{{ route('news.create') }}">Добавить новость</a>
            </td>
        </tr>
        </tbody>
    </table>

@endsection