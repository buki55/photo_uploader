@extends('layouts.app')

@section('content')

<body>
    <div class="jumbotron jumbotron-h1">
        <div class='container'>
        
        
            <div class="text-center">
                <br>
                <br><br><br><br><br><br>

                <h1>Sea turtle Photo-ID Project</h1>
                
                <hr>
                <br><br><br>
                <br>
                <br>
                <br><br><br>

            <!--
            <h2>
                <a href="{{ url('/posts/create') }}" class='header-menu'>New Post</a>
            </h2>
            -->
                <h5>石垣島のアオウミガメを画像により個体識別するプロジェクトのページです.</h5>
                <h5>登録済みユーザの方は下のボタンをクリックしてアップロード画面にお進みください.</h5>
                <br>
                <button type="button" onclick="location.href='/posts/create'" class="btn btn-primary btn-lg"> 
                    {{ __('画像をアップロード') }}
                </button>
                
            </div>
        
        </div>
    </div>
</body>
@endsection
