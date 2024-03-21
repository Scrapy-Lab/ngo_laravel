<article class="mt-6" itemscope itemtype="https://schema.org/Movie">
    <div class="px-6 pb-6 mx-auto bg-white dark:bg-gray-800 rounded-[2rem] rounded-bl-none rounded-tr-none shadow-md">
        <div class="flex items-center justify-between">
            {{-- <span class="font-light text-sm text-gray-600 dark:text-gray-200 mt-2">{{ optional($post->published_at)->diffForHumans() ?? '' }}</span> --}}
            <div>
                @unless ($post->tags->isEmpty())
                    @each($skyTheme.'.partial.category', $post->tags->where('type','category'), 'category')
                @endunless
            </div>
        </div>

        <div class="d-flex gap-5 justify-content-between">
        <div class="donateListblogMain">
            @if($post->image() !== null)
            {{-- <img alt="{{ $post->title }}" src="{{ $post->image() }}" class="my-10 w-full h-full shadow-md rounded-[2rem] rounded-bl-none z-0 object-cover"/> --}}
            <img alt="{{ $post->title }}" src="{{ $post->image() }}"  class="crd-img" />
        @endif
        </div>
        <div class="leftSides">
        <aside class="mt-2">
            <a href="{{ route('post',$post->slug) }}" class="blogMaintitle text-2xl md:text-3xl font-bold text-gray-700 dark:text-gray-200 hover:underline">
                {!! $post->title !!}
            </a>
            <div class="d-flex">

                <img class="paddingDateLogo" src="{{asset('images/logo/dateLogo.png')}}" alt="" width="35px">
                <span class="font-light text-sm text-gray-600 dark:text-gray-200 mt-2 paddingDateLogo pr-2">{{ optional($post->published_at)->diffForHumans() ?? '' }}</span>
                <a class="flex items-center gap-2">
                    <img src="{{ \Filament\Facades\Filament::getUserAvatarUrl($post->author) }}" alt="avatar" class="hidden object-cover w-8 h-8 rounded-full sm:block ">
                    <p class="text-gray-700 dark:text-gray-200 hover:underline">{{ $post->author->name ?? '' }}</p>
                </a>
            </div>
            <br>
            @if($post->description !== null)
                <p class="mt-2 text-gray-600 dark:text-gray-200">
                    {!! $post->description !!}
                </p>
            @endif
        </aside>
        <div class="flex items-center justify-between mt-4">
            <a href="{{ route('post',$post->slug) }}" class=" blogMainButton text-blue-500 dark:text-blue-200 hover:underline">Read more</a>
            <div>

            </div>
        </div>
    </div>
    </div>
    </div>
</article>
