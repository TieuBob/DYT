<?php

namespace App\Http\Controllers;

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

        return view('frontend.pages.index', $data);
    }
}
