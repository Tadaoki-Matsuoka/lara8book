@section('menu')

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{route('book.index')}}" class="navbar-brand">書籍くん</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSapportedContent" aria-expanded="false" aria-label="{{__('Toggle navigation')}}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">書籍</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('book.index')}}">一覧</a></li>
                        <li><a class="dropdown-item" href="{{route('book.create')}}">新規追加</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">著者</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('author.index')}}">一覧</a></li>
                        <li><a class="dropdown-item" href="{{route('author.create')}}">新規追加</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">カテゴリ</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('category.index')}}">一覧</a></li>
                        <li><a class="dropdown-item" href="{{route('category.create')}}">新規追加</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection