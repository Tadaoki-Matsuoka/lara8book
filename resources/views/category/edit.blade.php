@extends('layouts.default')
@section('title', 'Category.edit')

@include('layouts.menu')

@section('content')
<h1 class="page-header">カテゴリ編集</h1>
@if(count($errors) > 0)
<ul class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form action="{{route('category.update', $category->id)}}" method="post">
    @method('PUT')
    @csrf
    <input class="form-control" type="text" name="name" value="{{old('name', $category->name)}}">
    <input class="btn btn-primary" type="submit" value="登録">
</form>
@endsection