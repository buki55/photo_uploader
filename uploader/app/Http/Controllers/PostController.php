<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function index() {
        return view('posts.index');
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        // バリデーションルール
        $request->validate([
            'image_name' => 'required|file|image|mimes:jpeg,jpg,png',
            'id_name' => 'nullable',
            'tag_type' => 'nullable',
            'tag_no' => 'nullable',
            'carapace_length' => 'nullable',
            'carapace_width' => 'nullable',
            'take_date' => 'required',
            'part' => 'required',
            'env' => 'required',
            'location' => 'required',
            'beach_name' => 'nullable',
            'nest_id' => 'nullable',
            
        ]);

        $post = new Post();
        // ファイル名
        $post->image_name = $request->image_name->store('storage/post_images');
        // 撮影者
        $post->user_id = $request->user()->id;
        // 個体名
        $post->id_name = $request->id_name;
        // タグの種類
        $post->tag_type = $request->tag_type;
        // タグNo.
        $post->tag_no = $request->tag_no;
        // 甲長
        $post->carapace_length = $request->carapace_length;
        // 甲幅
        $post->carapace_width = $request->carapace_width;
        // 撮影日
        $post->take_date = $request->take_date;
        // 撮影部位
        $post->part = $request->part;
        // 撮影環境
        $post->env = $request->env;
        // 撮影地
        $post->location = $request->location;
        // 浜の名称
        $post->beach_name = $request->beach_name;
        // ネストID
        $post->nest_id = $request->nest_id;
        $post->save();
        // 二重送信対策
        $request->session()->regenerateToken();
        return view('posts.success');
    }
}
