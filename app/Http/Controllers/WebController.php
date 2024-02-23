<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\FavoriteGames;
use App\Models\Game;
use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\Response; // Import the Response class


class WebController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->limit(3)->get();
        return view('frontEnd.home.index',compact('blogs'));
    }


    public function blogDetails($slug){
        $blog = Blog::where('slug',$slug)->firstOrFail();
        $comments = Comment::where('blog_id', $blog->id)->get();
        return view('frontEnd.blog.details',compact('blog','comments'));
    }

    public function category($slug){
        $category = Category::where('slug',$slug)->firstOrFail();
       // return $category;
        return view('frontEnd.pages.category',compact('category'));
    }


    public function about(){
        $about = About::find(1);
        return view('frontEnd.pages.about',compact('about'));
    }
    public function privacyPolicy(){
        $privacy = Page::find(1);
        return view('frontEnd.pages.privacy',compact('privacy'));
    }
    public function searchRecipe(Request $request){
        $search = '%' . $request->input('search') . '%';

        $cleanedSearch = str_replace('%', '', $search);

        $blog = Blog::where('name', 'like', $search)
            ->orWhere('description', 'like', $search)
            ->orWhere('main_content', 'like', $search)
            ->orWhere('ingredients', 'like', $search)
            ->get();

        return view('frontEnd.pages.search', compact('blog', 'cleanedSearch'));
    }

    public function siteMap(): Response // Update the type hint to Illuminate\Http\Response
    {
        $posts = Blog::latest()->get();

        return response()->view('sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }


//
//    public function contact(){
//        return view('frontend.pages.contact_us');
//    }
//    public function service(){
//        return view('frontend.pages.services');
//    }
//
//    public function resources(){
//        return view('frontend.pages.resources');
//    }
//

//
//    public function resourcesDetails($slug){
//        $blog = Blog::where('slug',$slug)->first();
//        $comments = Comment::where('blog_id', $blog->id)->get();
//        return view('frontend.pages.details',compact('blog','comments'));
//    }
//
//
//
//    public function game(){
//        return view('homePage.game.game');
//    }
//    public function favoriteGame(){
//
//        return view('homePage.game.mygame');
//    }
//    public function gameDetails($slug){
//        $game = Game::where('slug',$slug)->first();
//        return view('homePage.game.details',compact('game'));
//    }

}
