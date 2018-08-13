@extends('admin.app')

@section('content')
    <h1>Добавить товар</h1>
    <hr>

    <form method="POST" enctype="multipart/form-data" action="{{ route('products.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Название товара</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>

        {{-- <input type="hidden" name="img" value="default.jpg" class="form-control" id="">
         <input type="hidden" name="user_id" value="1" class="form-control" id="">--}}

        <div class="form-group">
            {{--<label for="alias">Алиас</label>
            <input type="text" name="alias" class="form-control" id="alias">--}}
            <label for="thumb">Картинка</label>
            <input type="file" name="thumb" class="form-control" id="thumb">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Цена</label>
            <input type="text" name="price" class="form-control" id="price">
        </div>

        <div class="form-group">
            <label for="quantity">Количество</label>
            <input type="text" name="quantity" class="form-control" id="quantity">
        </div>

        <div class="form-group">
            <label for="category_id">Категория</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="brand_id">Бренд</label>
            <select name="brand_id" id="brand_id" class="form-control">
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary btn-block float-right">
            Добавить
        </button>

    </form>

@endsection