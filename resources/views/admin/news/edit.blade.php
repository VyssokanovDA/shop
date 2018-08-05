@extends('admin.app')

@section('content')
    <h1>Редактирование новости "{{ $novost->title }}"</h1>
    <hr>
    {{--Роут для обновления новости. В метод route можно передавать массив значений--}}
    <form method="POST" enctype="multipart/form-data" action="{{ route('news.update', ['id' => $novost->id]) }}">
        {{ csrf_field() }}
        {{--Чтобы работало редактирование--}}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="title">Название статьи</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $novost->title }}">
        </div>


        {{--<input type="hidden" name="user_id" value="1" class="form-control" id="">--}}

        <div class="form-group">
            <label for="img">Картинка</label>
            <img width="150" src="/{{ env('URL_IMAGE_NEWS') . $novost->img }}" alt="">
            <input type="file" name="img" class="form-control" id="img" value="">
        </div>

        <div class="form-group">
            <label for="introtext">Вводный текст</label>
            <textarea name="introtext" class="form-control" id="introtext" rows="3">{{$novost->introtext}}</textarea>
        </div>

        <div class="form-group">
            <label for="text">Основной текст</label>
            <textarea name="text" class="form-control" id="text" rows="3">{{$novost->text}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block float-right">
            Редактировать
        </button>

    </form>

@endsection