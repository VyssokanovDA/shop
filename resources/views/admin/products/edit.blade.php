@extends('admin.app')

@section('content')
    <h1>Редактирование товара "{{ $product->title }}"</h1>
    <hr>
    <form method="POST" enctype="multipart/form-data" action="{{ route('products.update', ['id' => $product->id]) }}">
        {{ csrf_field() }}
        {{--Чтобы работало редактирование--}}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="title">Название товара</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $product->title }}">
        </div>

        <div class="form-group">
            <label for="thumb">Картинка</label>
            <img width="150" src="/{{ env('URL_IMAGE_PRODUCTS') . $product->thumb }}" alt="">
            <input type="file" name="thumb" class="form-control" id="thumb" value="">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea name="description" class="form-control" id="description" rows="3">{{$product->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Цена</label>
            <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}">
        </div>

        <div class="form-group">
            <label for="quantity">Количество</label>
            <input type="text" name="quantity" class="form-control" id="quantity" value="{{ $product->quantity }}">
        </div>

        <div class="form-group">
            <label for="category_id">Категория</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="{{ $product->category_id }}" selected>{{ \App\Category::find($product->category_id)->title }}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="brand_id">Бренд</label>
            <select name="brand_id" id="brand_id" class="form-control">
                <option value="{{ $product->brand_id }}" selected>{{ \App\Brand::find($product->brand_id)->title }}</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary btn-block float-right">
            Редактировать
        </button>

    </form>

@endsection