@extends('layouts.default')
@section('title', 'Category.show')

@include('layouts.menu')

@section('content')
<h1 class="page-header">カテゴリ表示</h1>
<table class="table" cellpadding="0" cellspacing="0">
    <tr>
        <td>ID</td>
        <td>{{$category->id}}</td>
    </tr>
    <tr>
        <td>名前</td>
        <td>{{$category->name}}</td>
    </tr>
</table>
@if(!empty($category->books))
<h3>関連する本</h3>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>タイトル</th>
        <th>金額</th>
    </tr>
@foreach($category->books as $book)
<tr>
    <td>{{$book->id}}</td>
    <td>{{$book->title}}</td>
    <td>{{$book->price}}</td>
</tr>
@endforeach
</table>
@endif
@endsection