@extends('admin.app')

@section('content')
    <h1>Список товаров</h1>
    <hr>

    {{-- Если в сессии есть переменная, то выводим--}}
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        <hr>
    @endif

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Картинка</th>
            <th scope="col">Название товара</th>
            <th scope="col" colspan="2">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td><img width="75" src="/{{ env('URL_IMAGE_PRODUCTS') . $item->thumb }}"></td>
                <td>{{$item->title}}</td>
                <td><a class="btn btn-success btn-block" href="{{ route('products.edit', ['id' => $item->id]) }}">Edit</a></td>
                <td>
                    <form action="{{ route('products.destroy', ['id' => $item->id]) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger btn-block" value="Delete"/>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5">
                <a class="btn btn-primary float-right" href="{{ route('products.create') }}">Добавить товар</a>
            </td>
        </tr>
        </tbody>
    </table>

@endsection