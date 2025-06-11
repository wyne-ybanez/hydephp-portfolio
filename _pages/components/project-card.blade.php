<div>
    <a href="{{ $link ?? '#' }}" target="_blank" class="w-full block md:rounded-md dark:border border">
        <div class="relative overflow-hidden md:rounded-md">
            <div class="h-[200px] md:h-72 object-cover">
                <img src="{{ $imgUrl ?? '#' }}" alt="portfolio"
                    class="md:rounded-md transform hover:scale-105 transition duration-1000 ease-out object-cover h-full w-full" />
            </div>
        </div>
    </a>
    <h3
        class="
        bg-transparent dark:text-zinc-100
        w-max font-base rounded-md mt-8
        lg:px-0 text-xl
    ">
        {{ $title ?? '' }}
    </h3>
    <p class="mt-5 text-base lg:px-0 dark:text-white leading-loose">
        {{ $description ?? '' }}
    </p>
</div>
