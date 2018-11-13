<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\News;
use App\Comment;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index() {

        $topViewed = $this::getTopNews();
        $lastNews = $this::getLastNews(5);

        $partners = DB::table('partners')->get();

        return view('main', [
            'topNews' => $topViewed,
            'lastNews' => $lastNews,
            'partners' => $partners
        ]);
    }

    public function showSinglePost($id) {

        $selectedNews = News::with('category')->find($id);

        if (!Session::get("news$id")) {

            Session::put("news$id", 'isViewed');

            $selectedNews->views += 1;
            $selectedNews->save();
        }

        $comments = Comment::where('News_id', $id)->get();
        $categories = Category::all();
        $dayTop = $this->getNewsOfDay();
        $lastNews = $this->getLastNews(3);

        return view('post', [
            'singleNews' => $selectedNews,
            'comments' => $comments,
            'categories' => $categories,
            'dayTop' => $dayTop,
            'lastNews' => $lastNews
        ]);
    }

    public function portfolio() {

        $lastNews = $this::getLastNews(5);
        $popularNews = $this::getTopNews();
        $bestNews = $this::getBestNews();

        return view('portfolio', [
            'lastNews' => $lastNews,
            'popularNews' => $popularNews,
            'bestNews' => $bestNews
        ]);
    }

    public function blog($category = null) {

        if (!$category) {
            $allNews = News::with('comments', 'category')->paginate(2);
        } else {
            $allNews = News::with('comments', 'category')->whereHas('category', function ($query) use ($category) {
                $query->where('category_uri', $category);
            })->paginate(2);
        }

        $categories = Category::all();
        $dayTop = $this->getNewsOfDay();
        $lastNews = $this->getLastNews(3);

        return view('blog', [
            'allNews' => $allNews,
            'categories' => $categories,
            'dayTop' => $dayTop,
            'lastNews' => $lastNews
        ]);
    }

    public function search(Request $request) {

        $searchResult = News::with('comments', 'category')->where('title' , 'like', "%$request->search%")
            ->orWhere('short_content' , 'like', "%$request->search%")
            ->orWhere('sub_title' , 'like', "%$request->search%")
            ->orWhere('content' , 'like', "%$request->search%")
            ->paginate(2);

        $categories = Category::all();


        return view('blog', [
            'allNews' => $searchResult,
            'categories' => $categories
        ]);

    }

    public function getTopNews() {

        $fromDate = Carbon::now()->subDays(8)->format('Y-m-d');
        $tillDate = Carbon::now()->subDays(-1)->toDateString();

        return News::with('category')->where('created_at', '>=', $fromDate)->where('created_at', '<=', $tillDate)->orderBy('views', 'desc')->get();
    }

    public function getNewsOfDay() {

        $dayTop = News::with('category')->whereDate('created_at', Carbon::today())->orderBy('views', 'desc')->take(1)->get();

        if (count($dayTop) == 0) {
            $dayTop = $this->getTopNews();
            if (count($dayTop) == 0) {
                $dayTop = $this->getLastNews(1);
            }
        }

        return $dayTop->first();
    }

    public function getLastNews($count) {
        return News::with('comments')->orderBy('created_at', 'desc')->take($count)->get();
    }

    public function getBestNews() {

        return News::orderBy('views', 'desc')->take(5)->get();
    }

}
