<div>
    <aside class="mb-7">
        <div class="border-bottom border-color-1 mb-5">
            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Recent Posts</h3>
        </div>
        @foreach (sidebar_latest_posts() as $item)
            <article class="mb-4">
                <div class="media">
                    <div class="width-75 height-75 mr-3">
                        <a href="{{ route('read_post', $item->slug) }}">
                            <img class="img-fluid object-fit-cover"
                                src="/images/posts/resized/resized_{{ $item->featured_image }}" alt="Image Description">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="font-size-14 mb-1">
                            <a href="{{ route('read_post', $item->slug) }}" class="text-gray-39">{{ $item->title }}</a>
                        </h4>
                        <span class="text-gray-5">{{ date_formatter($item->created_at) }}</span>
                    </div>
                </div>
            </article>
        @endforeach
    </aside>
</div>
