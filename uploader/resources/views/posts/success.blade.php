@extends('layouts.app')

@section('content')
<body>
    <div class='container'>
        

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('アップロード完了') }}</div>
                        <div class="card-body">
                            <div class="text-center">
                                <br><br>
                                <h4>ご協力ありがとうございました.</h4>
                                <br>
                                <br>
                                <br>
                                <br>
                                <button type="button" onclick="location.href='/'" class="btn btn-primary btn-lg"> 
                                   {{ __('Topページへ') }}
                                </button>

                                <button type="button" onclick="location.href='/posts/create'" class="btn btn-primary btn-lg"> 
                                   {{ __('続けてアップロード') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection