@extends('layouts.app')

@section('content')

<body>
    <div class='container'>
        <h1>
            トップ画面
        </h1>
        <h2>
            <a href="{{ url('/posts/create') }}" class='header-menu'>New Post</a>
        </h2>
    </div>
</body>
@endsection
