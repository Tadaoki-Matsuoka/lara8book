@extends('layouts.default')
@section('title', 'Author.index')

@include('layouts.menu')

@section('content')
@if(session('success'))
<div class="alert alert-success" role="alert">{{session('success')}}</div>
@endif
@if(session('error'))
<div class="alert alert-danger" role="alert">{{session('error')}}</div>
@endif
<h1 class="page-header">著者一覧</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <tr>
        <th scope="col">{{__('id')}}</th>
        <th scope="col">{{__('name')}}</th>
        <th scope="col">{{__('created_at')}}</th>
        <th scope="col">{{__('update_at')}}</th>
        <th scope="col" class="actions">アクション</th>
    </tr>
    @foreach($authors as $author)
    <tr>
        <td>{{$author->id}}</td>
        <td>{{$author->name}}</td>
        <td>{{$author->created_at->format('Y年m月d日H時i分')}}</td>
        <td>{{$author->updated_at->format('Y年m月d日H時i分')}}</td>
        <td class="actions text-nowrap">
            <a class="btn btn-primary" href="{{route('author.show', $author->id)}}">表示</a>
            <a class="btn btn-primary" href="{{route('author.edit', $author->id)}}">編集</a>
        </td>
    </tr>
    @endforeach
</table>
<div class="paginator">
    <ul class="pagination justify-content-center">
        {{$authors->links()}}
    </ul>
</div>
@endsection