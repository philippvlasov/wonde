<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        $user_name = Auth::user()->name;

        Comment::create([
            'news_id' => $request->id,
            'user_name' => $user_name,
            'comment_text' => $request->comment
        ]);

        return redirect()->route('post', [$request->id]);
    }
}
