@extends('layouts.default')
@section('title', 'Category.index')

@include('layouts.menu')

@section('content')
@if(session('success'))
<div class="alert alert-success" role="alert">{{session('success')}}</div>
@endif
@if(session('error'))
<div class="alert alert-error" role="alert">{{session('error')}}</div>
@endif
<h1 class="page-header">カテゴリ一覧</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <tr>
        <th scope="col">{{__('id')}}</th>
        <th scope="col">{{__('name')}}</th>
        <th scope="col">{{__('created_at')}}</th>
        <th scope="col">{{__('update_at')}}</th>
        <th scope="col" class="actions">アクション</th>
    </tr>
    @foreach($categories as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->created_at->format('Y年m月d日H時i分')}}</td>
        <td>{{$category->updated_at->format('Y年m月d日H時i分')}}</td>
        <td class="actions text-nowrap">
            <a class="btn btn-primary" href="{{route('category.show', $category->id)}}">表示</a>
            <a class="btn btn-primary" href="{{route('category.edit', $category->id)}}">編集</a>
        </td>
    </tr>
    @endforeach
</table>
<div class="paginator">
    <ul class="pagination justify-content-center">
        {{$categories->links()}}
    </ul>
</div>
@endsection