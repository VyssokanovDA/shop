@extends('admin.app')

@section('content')
    <h1>Добавить новость</h1>
    <hr>

    <form method="POST" enctype="multipart/form-data" action="{{ route('news.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Название статьи</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>

       {{-- <input type="hidden" name="img" value="default.jpg" class="form-control" id="">
        <input type="hidden" name="user_id" value="1" class="form-control" id="">--}}

        <div class="form-group">
            {{--<label for="alias">Алиас</label>
            <input type="text" name="alias" class="form-control" id="alias">--}}
            <label for="img">Картинка</label>
            <input type="file" name="img" class="form-control" id="img">
        </div>

        <div class="form-group">
            <label for="introtext">Вводный текст</label>
            <textarea name="introtext" class="form-control" id="introtext" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="text">Основной текст</label>
            <textarea name="text" class="form-control" id="text" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block float-right">
            Добавить
        </button>

    </form>

@endsection