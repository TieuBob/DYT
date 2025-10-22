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
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                    href="{{ route('category_posts', $post->post_category->slug) }}">{{ $post->post_category->name }}</a>
                            </li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">
                                {{ $post->title }}</li>
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
                        <article class="card mb-8 border-0">
                            <img class="img-fluid" src="/images/posts/{{ $post->featured_image }}" alt="Image Description">
                            <div class="card-body pt-5 pb-0 px-0">
                                <div class="d-block d-md-flex flex-center-between mb-4 mb-md-0">
                                    <h4 class="mb-md-3 mb-1">{{ $post->title }}</h4>
                                    <a href="#" class="font-size-12 text-gray-5 ml-md-4"><i
                                            class="far fa-comment"></i> Leave a comment</a>
                                </div>
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
                                <p>{!! $post->content !!}</p>
                            </div>
                        </article>
                        <div class="bg-gray-1 px-3 py-5 mb-10">
                            <!-- Review -->
                            <div class="d-block d-md-flex media">
                                <div class="u-xl-avatar mb-4 mb-md-0 mr-md-4">
                                    <img class="img-fluid" src="{{ $post->author->picture }}" alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <h3 class="font-size-18 mb-3"><a
                                            href="{{ route('author_posts', $post->author->username) }}">{{ $post->author->name }}</a>
                                    </h3>
                                    <p class="mb-0">{{ $post->author->bio }}</p>
                                </div>
                            </div>
                            <!-- End Review -->
                        </div>
                        <ul class="nav justify-content-between mb-11">
                            <li class="nav-item m-0">
                                @if ($prevPost)
                                    <a class="nav-link text-gray-27 px-0" href="{{ route('read_post', $prevPost->slug) }}">
                                        <span class="mr-1">←</span> {{ $prevPost->title }}
                                    </a>
                                @endif
                            </li>
                            <li class="nav-item m-0">
                                @if ($nextPost)
                                    <a class="nav-link text-gray-27 px-0" href="{{ route('read_post', $nextPost->slug) }}">
                                        {{ $nextPost->title }} <span class="ml-1">→</span>
                                    </a>
                                @endif
                            </li>
                        </ul>
                        <div class="mb-10">
                            <div class="border-bottom border-color-1 mb-10">
                                <h4 class="section-title mb-0 pb-3 font-size-25">3 Comments</h4>
                            </div>
                            <ol class="nav">
                                <li class="w-100 border-bottom pb-6 mb-6 border-color-1">
                                    <!-- Review -->
                                    <div class="d-block d-md-flex media">
                                        <div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
                                            <img class="img-fluid rounded-circle"
                                                src="/frontend/assets/img/100X100/img19.jpg" alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim
                                                eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel
                                                est ut mollis. Donec luctus condimentum ante et euismod.</p>
                                            <div class="d-flex">
                                                <h4 class="font-size-14 font-weight-bold mr-2"><a
                                                        href="single-blog-post.html" class="">John Doe</a></h4>
                                                <span><a href="single-blog-post.html" class="text-gray-23">March 16,
                                                        2016</a></span>
                                                <a href="#" class="text-blue ml-auto">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Review -->
                                </li>
                                <li class="w-100 border-bottom pb-6 mb-6 border-color-1">
                                    <!-- Review -->
                                    <div class="d-block d-md-flex media">
                                        <div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
                                            <img class="img-fluid rounded-circle"
                                                src="/frontend/assets/img/100X100/img18.jpg" alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                                turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu
                                                tincidunt faucibus.</p>
                                            <div class="d-flex">
                                                <h4 class="font-size-14 font-weight-bold mr-2"><a
                                                        href="single-blog-post.html" class="">Anna Kowalsky</a></h4>
                                                <span><a href="single-blog-post.html" class="text-gray-23">March 16,
                                                        2016</a></span>
                                                <a href="#" class="text-blue ml-auto">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Review -->
                                </li>
                                <li class="w-100">
                                    <!-- Review -->
                                    <div class="d-block d-md-flex media">
                                        <div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
                                            <img class="img-fluid rounded-circle"
                                                src="/frontend/assets/img/100X100/img20.jpg" alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <p>Sed id tincidunt sapien. Pellentesque cursus accumsan tellus, nec ultricies
                                                nulla sollicitudin eget. Donec feugiat orci vestibulum porttitor sagittis.
                                            </p>
                                            <div class="d-flex">
                                                <h4 class="font-size-14 font-weight-bold mr-2"><a
                                                        href="single-blog-post.html" class="">Peter Wargner</a></h4>
                                                <span><a href="single-blog-post.html" class="text-gray-23">March 16,
                                                        2016</a></span>
                                                <a href="#" class="text-blue ml-auto">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Review -->
                                </li>
                            </ol>
                        </div>
                        <div class="mb-10">
                            <div class="border-bottom border-color-1 mb-6">
                                <h4 class="section-title mb-0 pb-3 font-size-25">Leave a Reply</h4>
                            </div>
                            <p class="text-gray-90">Your email address will not be published. Required fields are marked
                                <span class="text-dark">*</span>
                            </p>
                            <form class="js-validate" novalidate="novalidate">
                                <div class="js-form-message mb-4">
                                    <label class="form-label">
                                        Comment
                                    </label>

                                    <div class="input-group">
                                        <textarea class="form-control p-5" rows="4" name="text" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-4">
                                            <label class="form-label">
                                                Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="Name" placeholder=""
                                                aria-label="" required="" data-msg="Please enter your name."
                                                data-error-class="u-has-error" data-success-class="u-has-success"
                                                autocomplete="off">
                                        </div>
                                        <!-- End Input -->
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Input -->
                                        <div class="js-form-message mb-4">
                                            <label class="form-label">
                                                Email address
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" class="form-control" name="emailAddress"
                                                placeholder="" aria-label="" required=""
                                                data-msg="Please enter a valid email address."
                                                data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                        <!-- End Input -->
                                    </div>
                                    <div class="col-md-12">
                                        <!-- Input -->
                                        <div class="js-form-message mb-4">
                                            <label class="form-label">
                                                Website
                                            </label>
                                            <input type="text" class="form-control" name="website" placeholder=""
                                                aria-label="" data-msg="Please enter website name."
                                                data-error-class="u-has-error" data-success-class="u-has-success">
                                        </div>
                                        <!-- End Input -->
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary-dark-w px-5">Post Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
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
            <!-- Related posts -->
            <div class="mb-6">
                <div class="py-2 border-top">
                    <div class="js-slick-carousel u-slick my-1" data-slides-show="5" data-slides-scroll="1"
                        data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                        data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                        data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                        data-responsive='[{
                                "breakpoint": 992,
                                "settings": {
                                    "slidesToShow": 2
                                }
                            }, {
                                "breakpoint": 768,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }, {
                                "breakpoint": 554,
                                "settings": {
                                    "slidesToShow": 1
                                }
                            }]'>

                        @if ($relatedPosts)
                            @foreach ($relatedPosts as $related)
                                <div class="js-slide">
                                    <a href="{{ route('read_post', $related->slug) }}" class="d-block">
                                        <img class="img-fluid m-auto p-3"
                                            src="/images/posts/resized/resized_{{ $related->featured_image }}"
                                            alt="Image Description">
                                    </a>
                                    <article class="card mb-5 border-0">
                                        <div class="card-body pb-0 px-0 p-3">
                                            <h4 class="font-size-14 font-weight-bold mr-2">
                                                <a href="{{ route('read_post', $related->slug) }}"
                                                    class="">{{ $related->title }}</a>
                                            </h4>
                                            <div class="mb-3 pb-3 border-bottom">
                                                <div
                                                    class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                                    <a href="{{ route('category_posts', $related->post_category->slug) }}"
                                                        class="mx-0dot5 text-gray-5">{{ $related->post_category->name }}</a>
                                                    <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i
                                                            class="fas fa-circle"></i></span>
                                                    <div class="mx-0dot5 text-gray-5">
                                                        {{ date_formatter($related->created_at) }}
                                                    </div>
                                                </div>
                                                <div
                                                    class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                                    <div class="mx-0dot5 text-gray-5">Tags: {{ $related->tags }}</div>
                                                </div>
                                            </div>
                                            <p>{!! Str::ucfirst(words($post->content, 4)) !!}</p>
                                            <div class="flex-horizontal-center">
                                                <a href="{{ route('read_post', $related->slug) }}"
                                                    class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
