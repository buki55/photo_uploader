@extends('layouts.app')

@section('content')

<!--
<body>
    <div class='container'>
        <h1>
        とうこうがめん
        </h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form enctype="multipart/form-data" method='post' action="{{ url('/posts') }}">
            {{ csrf_field()}}
            
            <p>
                <input type='file' name='image_name' required>
            </p>
            <p>
                撮影部位：
                <select name="part" required>
                    <option disabled selected value>選択してください</option>
                    <option value="head">頭頂部</option>
                    <option value="carapace">甲羅</option>
                    <option value="hole">全身</option>
                </select>
            </p>
            <p>
                撮影環境：
                <select name="env" required>
                    <option disabled selected value>選択してください</option>
                    <option value="land">陸上</option>
                    <option value="uw">水中</option>
                </select>
            </p>
            <p>
                撮影地：
                <select name="location" required>
                    <option disabled selected value>選択してください</option>
                    <option value="Ishigaki">石垣島</option>
                    <option value="Ogasawara">小笠原諸島</option>
                </select>
            </p>
            <p>
                撮影日：
                <input type='date' name='take_date'>
            </p>
            <p>
                タグID：
                <input type='text' name='tag_no' placeholder='タグIDを入力'>
            </p>
            <p>
                <input type='submit' value='投稿'>
            </p>
        </form>
        <h2>
            <a href="{{ url('/') }}" class='header-menu'>Topへ</a>
        </h2>
        
    </div>
</body>
-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('アップロード') }}</div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method='post' action="{{ url('/posts') }}">
                        @csrf

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="image_name" class="col-md-4 col-form-label text-md-right">{{ __('ファイル') }}</label>

                            <div class="col-md-6">
                                <input type='file' name='image_name' required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="part" class="col-md-4 col-form-label text-md-right">{{ __('撮影部位') }}</label>

                            <div class="col-md-6">
                                <select name="part" class="form-control"　required>
                                    <option disabled selected value>選択してください</option>
                                    <option value="head">頭頂部</option>
                                    <option value="carapace">甲羅</option>
                                    <option value="hole">全身</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="env" class="col-md-4 col-form-label text-md-right">{{ __('撮影環境') }}</label>

                            <div class="col-md-6">
                                <select name="env" class="form-control" required>
                                    <option disabled selected value>選択してください</option>
                                    <option value="land">陸上</option>
                                    <option value="uw">水中</option>
                                </select>    
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('撮影地') }}</label>

                            <div class="col-md-6">
                                <select name="location" class="form-control" required>
                                    <option disabled selected value>選択してください</option>
                                    <option value="Ishigaki">石垣島</option>
                                    <option value="Ogasawara">小笠原諸島</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="take_date" class="col-md-4 col-form-label text-md-right">{{ __('撮影日') }}</label>

                            <div class="col-md-6">
                                <input type='date' name='take_date' class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="take_date" class="col-md-4 col-form-label text-md-right">{{ __('タグNo.') }}</label>

                            <div class="col-md-6">
                                <input type='text' name='tag_no' placeholder='タグNoを入力' class="form-control" required>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('アップロード') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
