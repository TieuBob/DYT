<?php

namespace App\Http\Controllers;

use App\Helpers\CMail;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
    public function authorPosts(Request $request, $username = null)
    {
        // Find the author based on the username
        $author = User::where('username', $username)->firstOrFail();

        // Retrieve posts related to this category and paginate
        $posts = Post::where('author_id', $author->id)->where('visibility', 1)->orderBy('created_at', 'asc')->paginate(8);

        $title = $author->name . ' - Blog Posts';
        $description = 'Browse the latest posts by ' . $author->name . '. on various topics.';

        /** set Meta SEO  tags */
        SEOTools::setTitle($title, false);
        SEOTools::setDescription($description);
        SEOTools::setCanonical(route('author_posts', ['username' => $author->username]));
        SEOTools::opengraph()->setUrl(route('author_posts', ['username' => $author->username]));
        SEOTools::opengraph()->addProperty('type', 'profile');
        SEOTools::opengraph()->setProfile([
            'first_name' => $author->name,
            'username' => $author->username
        ]);

        $data = [
            'title' => $author->name,
            'author' => $author,
            'posts' => $posts
        ];
        return view('frontend.pages.author_posts', $data);
    }

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

    public function readPost(Request $request, $slug = null)
    {
        // Fetch single post by slug
        $post = Post::where('slug', $slug)->firstOrFail();

        // Get related posts
        $relatedPost = Post::where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->where('visibility', 1)
            ->take(6)
            ->get();

        // Get the next post
        $nextPost = Post::where('id', '>', $post->id)
            ->where('visibility', 1)
            ->orderBy('id', 'asc')
            ->first();

        // Get the previous post
        $prevPost = Post::where('id', '<', $post->id)
            ->where('visibility', 1)
            ->orderBy('id', 'desc')
            ->first();

        /** set SEO meta tags */
        $title = $post->title;
        $description = ($post->meta_description != '') ? $post->description : words($post->content, 35);

        SEOTools::setTitle($title, false);
        SEOTools::setDescription($description);
        SEOTools::opengraph()->setUrl(route('read_post', ['slug' => $post->slug]));
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::opengraph()->addImage(asset('images/posts/' . $post->featured_image));
        SEOTools::twitter()->setImage(asset('images/posts/' . $post->featured_image));

        $data = [
            'title' => $title,
            'post' => $post,
            'relatedPosts' => $relatedPost,
            'nextPost' => $nextPost,
            'prevPost' => $prevPost
        ];
        return view('frontend.pages.single_post', $data);
    }

    public function contactPage(Request $request)
    {
        $title = 'Contact Us';
        $description = 'Hate Forms? Write Us Email';
        SEOTools::setTitle($title, false);
        SEOTools::setDescription($description);

        return view('frontend.pages.contact');
    }

    public function sendEmail(Request $request)
    {
        //validate the form
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $siteInfo = settings();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'subject' => $request->subject,
        ];

        $mail_body = view('email-templates.contact-message-template', $data);

        $mail_config = [
            'from_name' => $request->name,
            'replyToAddress' => $request->email,
            'replyToName' => $request->name,
            'recipient_address' => $siteInfo->site_email,
            'recipient_name' => $siteInfo->site_title,
            'subject' => $request->subject,
            'body' => $mail_body,
        ];

        if (CMail::send($mail_config, true)) {
            return redirect()->back()->with('success', 'Email sent successfully!.');
        } else {
            return redirect()->back()->withInput()->with('fail', 'Something went wrong. Try again later.');
        }
    }
}
