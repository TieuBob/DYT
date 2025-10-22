@extends('frontend.layout.pages-layout')
@section('title', isset($title) ? $title : 'Page title here')
@section('meta_tags')
    {!! SEO::generate() !!}
@endsection
@section('content')
    <main id="content" role="main">
        <div class="bg-gray-1 py-5 mb-10 mb-lg-15">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-5 mb-xl-0 col-xl text-center">
                        <img class="img-fluid mb-3 rounded-circle" src="{{ $author->picture }}" alt="Card image cap"
                            style="max-width: 208.33px">
                        <h2 class="font-size-18 font-weight-semi-bold mb-0">{{ $author->name }}</h2>
                        <span class="text-gray-41">CEO/Founder</span>
                        <!-- author link social -->
                        <div class="my-4 my-md-4">
                            @if ($author->social_links)
                                <ul class="list-inline mb-0 opacity-7">
                                    @if ($author->social_links->facebook_url)
                                        <li class="list-inline-item mr-0">
                                            <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                                href="{{ $author->social_links->facebook_url }}">
                                                <span class="fab fa-facebook-f btn-icon__inner"></span>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($author->email)
                                        <li class="list-inline-item mr-0">
                                            <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                                href="{{ $author->email }}">
                                                <span class="fab fa-google btn-icon__inner"></span>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($author->social_links->instagram_url)
                                        <li class="list-inline-item mr-0">
                                            <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                                href="{{ $author->social_links->instagram_url }}">
                                                <span class="fab fa-instagram btn-icon__inner"></span>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($author->social_links->youtube_url)
                                        <li class="list-inline-item mr-0">
                                            <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                                href="{{ $author->social_links->youtube_url }}">
                                                <span class="fab fa-youtube btn-icon__inner"></span>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($author->social_links->twitter_url)
                                        <li class="list-inline-item mr-0">
                                            <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                                href="{{ $author->social_links->twitter_url }}">
                                                <span class="fab fa-twitter btn-icon__inner"></span>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($author->social_links->linkedin_url)
                                        <li class="list-inline-item mr-0">
                                            <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                                href="{{ $author->social_links->linkedin_url }}">
                                                <span class="fab fa-linkedin btn-icon__inner"></span>
                                            </a>
                                        </li>
                                    @endif
                                    @if ($author->social_links->github_url)
                                        <li class="list-inline-item mr-0">
                                            <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                                href="{{ $author->social_links->github_url }}">
                                                <span class="fab fa-github btn-icon__inner"></span>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12 mb-4 mb-md-0">
                        <div class="card mb-3 border-0 text-center rounded-0">
                            <div class="card-body">
                                <p class="text-gray-90 mx-auto">{{ $author->bio }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-wd">
                    <div class="min-width-1100-wd">

                        @if ($posts->count())
                            @foreach ($posts as $post)
                                <article class="card mb-13 border-0">
                                    <div class="row">
                                        <div class="col-lg-4 mb-5 mb-lg-0">
                                            <a href="{{ route('read_post', $post->slug) }}" class="d-block">
                                                <img class="img-fluid"
                                                    src="/images/posts/resized/resized_{{ $post->featured_image }}"
                                                    alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="card-body p-0">
                                                <h4 class="mb-3">
                                                    <a
                                                        href="{{ route('read_post', $post->slug) }}">{{ $post->title }}</a>
                                                </h4>
                                                <div class="mb-3 pb-3 border-bottom">
                                                    <div
                                                        class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                                        <a href="{{ route('category_posts', $post->post_category->slug) }}"
                                                            class="mx-0dot5 text-gray-5">{{ $post->post_category->name }}</a>
                                                        <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i
                                                                class="fas fa-circle"></i></span>
                                                        <div class="mx-0dot5 text-gray-5">
                                                            {{ date_formatter($post->created_at) }},
                                                            <i class="ti-timer mr-1"></i>
                                                            {{ readDuration($post->title, $post->content) }}
                                                            @choice('min|mins', readDuration($post->title, $post->content))
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                                        <div class="mx-0dot5 text-gray-5">Tags: {{ $post->tags }}</div>
                                                    </div>
                                                </div>
                                                <p>{!! Str::ucfirst(words($post->content, 45)) !!}</p>
                                                <div class="flex-horizontal-center">
                                                    <a href="{{ route('read_post', $post->slug) }}"
                                                        class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read
                                                        More</a>
                                                    <a href="#" class="font-size-12 text-gray-5 ml-4"><i
                                                            class="far fa-comment"></i> Leave a comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        @else
                            <p><span class="text-danger">No posts found for this author!</span></p>
                        @endif

                    </div>
                    {{ $posts->appends(request()->input())->links('custom_pagination') }}
                </div>
                <div class="col-xl-3 col-wd">
                    <!-- sidebar serach blog -->
                    <x-sidebar-search-blog></x-sidebar-search-blog>
                    <!-- about blog -->
                    <aside class="mb-7">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">About Blog</h3>
                        </div>
                        <p class="text-gray-90 mb-0">
                            {{ isset(settings()->site_meta_description) ? settings()->site_meta_description : '' }}</p>
                    </aside>
                    <!-- sidebar categories -->
                    <x-sidebar-categories-posts></x-sidebar-categories-posts>
                    <!-- Recent posts -->
                    <x-sidebar-latest-posts></x-sidebar-latest-posts>
                    <!-- Sidebar tags -->
                    <x-sidebar-tags></x-sidebar-tags>
                </div>
            </div>
        </div>
    </main>
@endsection
