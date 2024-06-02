<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotController extends Controller
{
    public function upload(Request $request)
{
    $file = $request->file('file');
    // 第一引数はディレクトリの指定
    // 第二引数はファイル
    // 第三引数はpublickを指定することで、URLによるアクセスが可能となる
    Storage::disk('s3')->put('/', $file, 'public');
    // hogeディレクトリにアップロード
    // $path = Storage::disk('s3')->putFile('/hoge', $file, 'public');
    // ファイル名を指定する場合はputFileAsを利用する
    // $path = Storage::disk('s3')->putFileAs('/', $file, 'hoge.jpg', 'public');
    return redirect('/');
}
}
