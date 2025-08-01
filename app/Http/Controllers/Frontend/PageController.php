<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use App\Models\Article;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;


class PageController extends BaseController
{

    public function home()
    {

        $latest_articles = Article::orderBy('id', 'desc')->where('status', 'approved')->limit(5)->get();
        $trending_articles = Article::orderBy('views', 'desc')->where('status', 'approved')->limit(8)->get();

        return view('frontend.home', compact('latest_articles', 'trending_articles'));
    }
    public function category($slug)
    {


        $category = Category::where('slug', $slug)->first();
        $articles = $category->articles()->where('status', 'approved')->paginate(2);
        $advertises = Advertise::where('expire_date', '>=', now())->limit(2)->get();
        return view('frontend.category', compact('articles', 'category', 'advertises'));
    }
    public function article($id)
    {
            $article = Article::findorfail($id);
            $data = Cookie::get("article$id");
            if (!$data)
            {
                $article->increment('views');

            Cookie::queue("article$id", $id);

            }
            return view('frontend.article', compact('article'));
    }
}
