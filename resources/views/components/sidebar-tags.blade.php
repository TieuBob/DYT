<div>
    <aside class="mb-7">
        <div class="border-bottom border-color-1 mb-5">
            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Tags Clouds</h3>
        </div>
        <div class="d-flex flex-wrap mx-n1">
            @foreach (getTags(40) as $tag)
                <a href="{{ route('tag_posts', urlencode($tag)) }}"
                    class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1">{{ $tag }}</a>
            @endforeach
        </div>
    </aside>
</div>
