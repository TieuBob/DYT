<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function welcome(Request $request)
    {
        $data = [
            'title' => 'DYT',
        ];
        return view('frontend.pages.home', $data);
    }

    public function index(Request $request)
    {
        $title = isset(settings()->site_title) ? settings()->site_title : '';
        $description = isset(settings()->site_meta_description) ? settings()->site_meta_description : '';
        $imgURL = isset(settings()->site_logo) ? asset('/images/site/' . settings()->site_logo) : '';
        $keywords = isset(settings()->site_meta_keywords) ? settings()->site_meta_keywords : '';
        $currentUrl = url()->current();

        /** Meta SEO */
        SEOTools::setTitle($title, false);
        SEOTools::setDescription($description);
        SEOMeta::setKeywords($keywords);

        /** Open Graph */
        SEOTools::opengraph()->setUrl($currentUrl);
        SEOTools::opengraph()->addImage($imgURL);
        SEOTools::opengraph()->addProperty('type', 'articles');

        /** Twitter */
        SEOTools::twitter()->addImage($imgURL);
        SEOTools::twitter()->setUrl($currentUrl);
        SEOTools::twitter()->setSite('@dyt');
        $data = [
            'title' => 'DYT - Blog',
        ];

        return view('frontend.pages.blog', $data);
    }

    public function categoryPosts(Request $request, $slug = null)
    {
        //Find Category by slug
        $category = Category::where('slug', $slug)->firstOrFail();

        //Retrieve posts related to this category and paginate
        $posts = Post::where('category', $category->id)->where('visibility', 1)->paginate(8);

        $title = 'Posts in Category: ' . $category->name;
        $description = 'Browse the latest posts in the ' . $category->name . ' category. Stay updated with articles, insights, and tutorials.';

        /** Meta SEO */
        SEOTools::setTitle($title, false);
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(url()->current());

        $data = [
            'title' => $category->name,
            'posts' => $posts
        ];
        return view('frontend.pages.category_posts', $data);
    }

    /** authorPosts */

    public function tagPosts(Request $request, $tag = null)
    {
        //Query posts that have the selected tag
        $posts = Post::where('tags', 'LIKE', "%{$tag}%")->where('visibility', 1)->paginate(8);

        //For meta tags
        $title = "Posts tagged with {$tag}";
        $description = "Explore all posts tagged with {$tag} on our blog.";

        /** set SEO meta tags */
        SEOTools::setTitle($title, false);
        SEOTools::setDescription($description);
        SEOTools::setCanonical(url()->current());

        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'articles');

        $data = [
            'title' => $title,
            'tag' => $tag,
            'posts' => $posts
        ];
        return view('frontend.pages.tag_posts', $data);
    }

    public function searchPosts(Request $request)
    {
        //Get search query from the input
        $query = $request->input('q');

        //If query is not empty, process the search
        if ($query) {
            $keywords = explode(' ', $query);
            $postsQuery = Post::query();

            foreach ($keywords as $keyword) {
                $postsQuery->orWhere('title', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('tags', 'LIKE', '%' . $keyword . '%');
            }
            $posts = $postsQuery->where('visibility', 1)
                ->orderBy('created_at', 'desc')
                ->paginate(2);

            //For meta tags
            $title = "Search results for {$query}";
            $description = "Browse search results for {$query} on our blog.";
        } else {
            $posts = collect();

            /** For Meta Tags */
            $title = 'Search';
            $description = 'Search for blog posts on our website.';
        }

        /** set SEO meta tags */
        SEOTools::setTitle($title, false);
        SEOTools::setDescription($description);

        $data = [
            'title' => $title,
            'query' => $query,
            'posts' => $posts
        ];
        return view('frontend.pages.search_posts', $data);
    }
}
