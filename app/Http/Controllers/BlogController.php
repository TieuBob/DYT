<?php

namespace App\Http\Controllers;

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
        $data = [
            'title' => $title
        ];
        return view('frontend.pages.index', $data);
    }
}
