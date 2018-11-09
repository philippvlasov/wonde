<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Comment;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    public function index() {
        $topViewed = News::orderBy('views', 'desc')->take(5)->get();
        $lastNews = News::with('comments')->orderBy('created_at', 'desc')->take(5)->get();
        return view('main', [
            'topNews' => $topViewed,
            'lastNews' => $lastNews
        ]);
    }

    public function showSinglePost($id) {

        $selectedNews = News::find($id);

        if (!Session::get("news$id")) {

            Session::put("news$id", 'isViewed');

            $selectedNews->views += 1;
            $selectedNews->save();
        }

        $comments = Comment::where('News_id', $id)->get();

        return view('post', [
            'singleNews' => $selectedNews,
            'comments' => $comments
        ]);
    }
}
