@extends('layouts.default')
@section('title', 'Book.create')

@include('layouts.menu')

@section('content')
<h1 class="page-header">書籍新規登録</h1>
@if(count($errors) > 0)
<ul class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form action="{{route('book.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">タイトル</label>
        <input class="form-control" type="text" name="title" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="price">価格</label>
        <input class="form-control" type="text" name="price" value="{{old('price')}}">
    </div>
    <div class="form-group">
        <label for="author">著者</label>
        <select class="form-control" type="text" name="author_id">
            @foreach($authors as $author)
            <option value="{{($author->id)}}">{{($author->name)}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="category">カテゴリ</label>
        <select class="form-control" type="text" name="category_id">
            @foreach($categories as $category)
            <option value="{{($category->id)}}">{{($category->name)}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group"><input class="btn btn-primary" type="submit" value="登録"></div>
</form>
@endsection