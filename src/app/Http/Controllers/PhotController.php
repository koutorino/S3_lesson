<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotController extends Controller
{
    public function upload(Request $request)
{
    $file = $request->file('file');

    // s3を使用した場合
    // Storage::disk('s3')->putFile('/', $file, 'public');

    // webサーバを使用した場合
    $path = Storage::put('/public', $file);
    $path = explode('/', $path);

    Post::insert([
        'image' => $path[1],
    ]);

    return redirect('/');
}

    public function show()
    {
        $memo = Post::where('id', 1)->first();
        return view('show',compact('memo'));
    }
}
