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
        $blogs = Blog::latest()->whereStatus(1)->limit(3)->get();
        $nextBlog = Blog::latest()->whereStatus(1)->get();
        return view('frontEnd.home.index',compact('blogs','nextBlog'));
    }


    public function blogDetails($slug){
        $blog = Blog::where('slug',$slug)->firstOrFail();
        $comments = Comment::where('blog_id', $blog->id)->get();
        return view('frontEnd.blog.details',compact('blog','comments'));
    }

    public function category($slug) {
        $ct = Category::where('slug', $slug)->firstOrFail();

        // Fetch blog posts for the given category
        $blogs = Blog::where('category_id', 'LIKE', '%"'.$ct->id.'"%')->whereStatus(1)->get();

        // Decode the category IDs for each blog post
        $nextBlog = $blogs->map(function($blog) {
            $categoryIds = json_decode($blog->category_id, true);
            $categories = [];

            // Fetch category details for each category ID
            foreach ($categoryIds as $categoryId) {
                $category = Category::find($categoryId);
                if ($category) {
                    $categories[] = $category;
                }
            }

            // Add categories to the blog post object
            $blog->categories = $categories;
            return $blog;
        });

        // Pass the category and related blog posts to the view
        return view('frontEnd.blog.category', compact('ct', 'nextBlog'));
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

        return view('frontEnd.blog.search', compact('blog', 'cleanedSearch'));
    }

    public function siteMap(): Response // Update the type hint to Illuminate\Http\Response
    {
        $posts = Blog::latest()->get();

        return response()->view('sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }




}
