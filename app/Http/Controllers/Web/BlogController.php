<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Get Blogs Page For End User.
     *
     * @return View
     */
    public function getBlogs()
    {
        $featuredBlogs = Blog::with('category')->latest()->take(2)->get();
        $blogs = Blog::with('category')->latest()->paginate(9);
        $categories = Category::latest()->get();
        return view('website.pages.blogs', compact('blogs', 'categories', 'featuredBlogs'));
    }

    /**
     * Show Blog.
     *
     * @return View
     */
    public function showBlog($slug)
    {
        $blog = Blog::whereSlug($slug)->with('category')->firstOrFail();
        $latestBlogs = Blog::with('category')->where('category_id', $blog->category_id)->latest()->limit(3)->get();
        return view('website.pages.show_blog', \compact('blog', 'latestBlogs'));
    }
}
