@extends('layouts.app')

@section('content')



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
                            

                            <!--
                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image_name" id="customFile" lang="ja">
                                    <label class="custom-file-label" for="customFile">ファイル選択</label>
                                </div>
                            </div>
                            -->

                        </div>

                        <div class="form-group row">
                            <label for="take_date" class="col-md-4 col-form-label text-md-right">{{ __('撮影日') }}</label>

                            <div class="col-md-6">
                                <input type='date' name='take_date' class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_name" class="col-md-4 col-form-label text-md-right">{{ __('カメの名前') }}</label>

                            <div class="col-md-6">
                                <input type='text' name='id_name' placeholder='カメの名前を入力' class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tag_type" class="col-md-4 col-form-label text-md-right">{{ __('タグの種類') }}</label>

                            <div class="col-md-6">
                                <select name="tag_type" class="form-control" required>
                                    <option disabled selected value>選択してください</option>
                                    <option value="Metal">金属製</option>
                                    <option value="plastic">プラスチック製</option>
                                    <option value="unknown">不明</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="take_date" class="col-md-4 col-form-label text-md-right">{{ __('タグ番号') }}</label>

                            <div class="col-md-6">
                                <input type='text' name='tag_no' placeholder='タグ番号を入力' class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="carapace_length" class="col-md-4 col-form-label text-md-right">{{ __('甲長(cm)') }}</label>

                            <div class="col-md-6">
                                <input type='number' name='carapace_length' placeholder='甲長を入力' class="form-control" min="50" max="140">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="carapace_width" class="col-md-4 col-form-label text-md-right">{{ __('甲幅(cm)') }}</label>

                            <div class="col-md-6">
                                <input type='number' name='carapace_width' placeholder='甲幅を入力' class="form-control" min="30" max="100">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="part" class="col-md-4 col-form-label text-md-right">{{ __('撮影部位') }}</label>

                            <div class="col-md-6">
                                <select name="part" class="form-control"　required>
                                    <option disabled selected value>選択してください</option>
                                    <option value="head">頭頂部</option>
                                    <option value="carapace">甲羅</option>
                                    <option value="hind_carapace">お尻</option>
                                    <option value="hole">全身</option>
                                    <option value="front_flipper">前肢</option>
                                    <option value="back_flipper">後肢</option>
                                    <option value="other">その他</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="beach_name" class="col-md-4 col-form-label text-md-right">{{ __('浜の名称') }}</label>

                            <div class="col-md-6">
                                <input type='text' name='beach_name' placeholder='浜の名称を入力' class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nest_id" class="col-md-4 col-form-label text-md-right">{{ __('ネストID') }}</label>

                            <div class="col-md-6">
                                <input type='text' name='nest_id' placeholder='ネストIDを入力' class="form-control" required>
                            </div>
                        </div>


                        <!--
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
                        -->
                        <input type="hidden" name="env" value="陸上">

                        <!--
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
                        -->
                        <input type="hidden" name="location" value="石垣島">


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
