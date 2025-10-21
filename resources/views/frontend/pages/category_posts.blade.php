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
            <div class="border-bottom mb-6 pb-2">
                <ul class="nav list-unstyled justify-content-center list-divider">
                    <li class="nav-item flex-horizontal-center m-0"><a class="nav-link text-gray-90 underline-on-hover px-1"
                            title="Technology" href="#">Technology</a></li>
                    <li class="nav-item flex-horizontal-center m-0"><a class="nav-link text-gray-90 underline-on-hover px-1"
                            title="Design" href="#">Design</a></li>
                    <li class="nav-item flex-horizontal-center m-0"><a class="nav-link text-gray-90 underline-on-hover px-1"
                            title="News" href="#">News</a></li>
                    <li class="nav-item flex-horizontal-center m-0"><a class="nav-link text-gray-90 underline-on-hover px-1"
                            title="Events" href="#">Events</a></li>
                    <li class="nav-item flex-horizontal-center m-0"><a class="nav-link text-gray-90 underline-on-hover px-1"
                            title="Links &amp; Quotes" href="#">Links &amp; Quotes</a></li>
                    <li class="nav-item flex-horizontal-center m-0"><a class="nav-link text-gray-90 underline-on-hover px-1"
                            title="Videos" href="#">Videos</a></li>
                </ul>
            </div>
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
                            <p><span class="text-danger">No posts found in this category</span></p>
                        @endif

                    </div>
                    {{ $posts->appends(request()->input())->links('custom_pagination') }}
                </div>
                <div class="col-xl-3 col-wd">
                    <aside class="mb-7">
                        <form class="">
                            <div class="d-flex align-items-center">
                                <label class="sr-only" for="signupSrEmail">Search Electro blog</label>
                                <div class="input-group">
                                    <input type="text" class="form-control px-4" name="search" id="signupSrEmail"
                                        placeholder="Search..." aria-label="Search Electro blog">
                                </div>
                                <button type="submit" class="btn btn-primary text-nowrap ml-3 d-none">
                                    <span class="fas fa-search font-size-1 mr-2"></span> Search
                                </button>
                            </div>
                        </form>
                    </aside>
                    <aside class="mb-7">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">About Blog</h3>
                        </div>
                        <p class="text-gray-90 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae
                            neque. Quisque id sodales libero.</p>
                    </aside>
                    <!-- sidebar categories -->
                    <x-sidebar-categories></x-sidebar-categories>
                    <!-- Recent posts -->
                    <aside class="mb-7">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Recent Posts</h3>
                        </div>
                        <article class="mb-4">
                            <div class="media">
                                <div class="width-75 height-75 mr-3">
                                    <img class="img-fluid object-fit-cover" src="/frontend/assets/img/1500X730/img1.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <h4 class="font-size-14 mb-1"><a href="single-blog-post.html"
                                            class="text-gray-39">Robot Wars – Post with Gallery</a></h4>
                                    <span class="text-gray-5">March 3, 2020</span>
                                </div>
                            </div>
                        </article>
                        <article class="mb-4">
                            <div class="media">
                                <div class="width-75 height-75 mr-3">
                                    <img class="img-fluid object-fit-cover" src="/frontend/assets/img/1500X730/img4.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <h4 class="font-size-14 mb-1"><a href="single-blog-post.html"
                                            class="text-gray-39">Robot Wars – Now Closed – Post with Audio</a></h4>
                                    <span class="text-gray-5">March 3, 2020</span>
                                </div>
                            </div>
                        </article>
                        <article class="mb-4">
                            <div class="media">
                                <div class="width-75 height-75 mr-3">
                                    <img class="img-fluid object-fit-cover" src="/frontend/assets/img/1500X730/img5.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <h4 class="font-size-14 mb-1"><a href="single-blog-post.html"
                                            class="text-gray-39">Robot Wars – Now Closed – Post with Video</a></h4>
                                    <span class="text-gray-5">March 3, 2020</span>
                                </div>
                            </div>
                        </article>
                        <article class="mb-4">
                            <div class="media">
                                <div class="width-75 height-75 mr-3 position-relative">
                                    <img class="img-fluid object-fit-cover" src="/frontend/assets/img/1500X730/img5.jpg"
                                        alt="Image Description">
                                    <i class="fa fa-paragraph position-absolute-center text-white"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="font-size-14 mb-1"><a href="single-blog-post.html"
                                            class="text-gray-39">Announcement – Post without Image</a></h4>
                                    <span class="text-gray-5">March 3, 2020</span>
                                </div>
                            </div>
                        </article>
                        <article class="mb-4">
                            <div class="media">
                                <div class="width-75 height-75 mr-3">
                                    <img class="img-fluid object-fit-cover" src="/frontend/assets/img/1500X730/img6.jpg"
                                        alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <h4 class="font-size-14 mb-1"><a href="single-blog-post.html"
                                            class="text-gray-39">Robot Wars – Now Closed</a></h4>
                                    <span class="text-gray-5">March 3, 2020</span>
                                </div>
                            </div>
                        </article>
                    </aside>
                    <!-- Sidebar tags -->
                    <x-sidebar-tags></x-sidebar-tags>
                </div>
            </div>
        </div>
    </main>
@endsection
