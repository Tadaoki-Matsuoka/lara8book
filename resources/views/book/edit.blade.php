@extends('layouts.default')
@section('title', 'Book.edit')

@include('layouts.menu')

@section('content')
<h1 class="page-header">書籍編集</h1>
@if(count($errors) > 0)
<ul class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form action="{{route('book.update', $book->id)}}" method="post">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="title">タイトル</label>
        <input class="form-control" type="text" name="title" value="{{old('title',$book->title)}}">
    </div>
    <div class="form-group">
        <label for="price">価格</label>
        <input class="form-control" type="text" name="price" value="{{old('price',$book->price)}}">
    </div>
    <div class="form-group">
        <label for="author">著者</label>
        <select class="form-control" type="text" name="author_id">
            @foreach($authors as $author)
            <option value="{{($author->id)}}"{{$author->id==old('author_id',$book->author_id)?'selected':''}}>{{($author->name)}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="category">カテゴリ</label>
        <select class="form-control" type="text" name="category_id">
            @foreach($categories as $category)
            <option value="{{($category->id)}}"{{$category->id==old('category_id',$book->category_id)?'selected':''}}>{{($category->name)}}</option>
            @endforeach
        </select>
    </div>
    <input class="btn btn-primary" type="submit" value="登録">
</form>
@endsection