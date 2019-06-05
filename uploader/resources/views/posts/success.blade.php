@extends('layouts.app')

@section('content')
<body>
    <div class='container'>
        <h1>
            せいこう！！
        </h1>
        <h2>
            <a href="{{ url('/') }}" class='header-menu'>とっぷへ</a>
            <a href="{{ url('/posts/create') }}" class='header-menu'>続けて投稿</a>
        </h2>
    </div>
</body>
</html>
@endsection