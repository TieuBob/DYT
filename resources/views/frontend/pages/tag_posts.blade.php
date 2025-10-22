@extends('frontend.layout.pages-layout')
@section('title', isset($title) ? $title : 'Page title here')
@section('meta_tags')
    {!! SEO::generate() !!}
@endsection
@section('content')
    <main id="content" role="main">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">Home</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                    href="{{ route('posts') }}">Blog</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">
                                {{ $title }}</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

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
                                                    <a href="{{ route('read_post', $post->slug) }}">{{ $post->title }}</a>
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
                            <p><span class="text-danger">No posts found in this tag</span></p>
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
