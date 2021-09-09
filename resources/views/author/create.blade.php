@extends('layouts.default')
@section('title', 'Author.create')

@include('layouts.menu')

@section('content')
<h1 class="page-header">著者登録</h1>
@if(count($errors) > 0)
<ul class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form action="{{route('author.store')}}" method="post">
    @csrf
    <input class="form-control" type="text" name="name" value="{{old('name')}}">
    <input class="btn btn-primary" type="submit" value="登録">
</form>
@endsection