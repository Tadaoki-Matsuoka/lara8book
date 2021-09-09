@extends('layouts.default')
@section('title', 'Book.index')

@include('layouts.menu')

@section('content')
@if(session('success'))
<div class="alert alert-success" role="alert">{{session('success')}}</div>
@endif
@if(session('error'))
<div class="alert alert-error" role="alert">{{session('error')}}</div>
@endif
<h1 class="page-header">書籍一覧</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <tr>
        <th scope="col">@sortablelink('id',__('id'))</th>
        <th scope="col">@sortablelink('title',__('title'))</th>
        <th scope="col">@sortablelink('price',__('price'))</th>
        <th scope="col">@sortablelink('author_id',__('author_id'))</th>
        <th scope="col">@sortablelink('category_id',__('category_id'))</th>
        <th scope="col">@sortablelink('created_at',__('created_at'))</th>
        <th scope="col">@sortablelink('updated_at',__('updated_at'))</th>
        <th scope="col" class="actions">アクション</th>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->price}}</td>
        <td>{{$book->Author->name}}</td>
        <td>{{$book->Category->name}}</td>
        <td>{{$book->created_at->format('Y年m月d日H時i分')}}</td>
        <td>{{$book->updated_at->format('Y年m月d日H時i分')}}</td>
        <td class="actions text-nowrap">
            <a class="btn btn-primary" href="{{route('book.edit', $book->id)}}">編集</a>
        </td>
    </tr>
    @endforeach
</table>
<div class="paginator">
    <ul class="pagination justify-content-center">
        {{$books->appends(request()->query())->links()}}
    </ul>
</div>
@endsection