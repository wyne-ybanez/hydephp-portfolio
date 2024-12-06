<div>
    <a href="{{ $link ?? '#' }}" target="_blank" class="w-full block md:rounded-md shadow shadow-lg dark:shadow-lg dark:hover:shadow-gray-300">
        <div class="relative overflow-hidden md:rounded-md">
            <div class="h-72 object-cover">
                <img
                    src="{{ $imgUrl ?? '#' }}"
                    alt="portfolio"
                    class="md:rounded-md transform hover:scale-105 transition duration-1000 ease-out object-cover h-full w-full"
                />
            </div>
        </div>
    </a>
    <div class="mt-2 text-sm lg:px-0 flex gap-2">
        @if(!empty($technologies))
            @foreach( $technologies as $technology)
                <span class="bg-zinc-200 dark:bg-gray-800 dark:text-gray-300 bg-opacity-[80%] rounded p-2">
                    {{ $technology ?? '' }}
                </span>
            @endforeach
        @endif
    </div>
    <h3 class="
        dark:bg-zinc-900 dark:text-zinc-100
        w-max font-semibold rounded-md mt-5
        lg:px-0 text-2xl
    ">
        {{ $title ?? '' }}
    </h3>
    <p class="mt-5 text-base lg:px-0 dark:text-white leading-loose">
        {{ $description ?? '' }}
    </p>
</div>