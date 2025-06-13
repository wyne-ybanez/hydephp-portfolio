<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body id="app" class="flex flex-col min-h-screen overflow-x-hidden dark:bg-black dark:text-white"
    x-data="{ navigationOpen: false }" x-on:keydown.escape="navigationOpen = false;">
    <a href="#content" id="skip-to-content"
        class="sr-only focus:not-sr-only bg-black border-4 border-yellow-400 focus:absolute focus:mt-2 focus:mx-auto focus:p-2 focus:w-64 h-auto left-0 overflow-auto right-0 rounded-md text-center text-lg text-white top-auto z-50 ">Skip
        to content</a>

    @include('components.nav')

    <div class="mx-auto md:mx-16 lg:mx-28">
        <div class="mx-auto md:mx-28">
            <div
                class="mt-[2.5rem] md:mt-24 flex items-start justify-center md:justify-start mx-auto lg:mx-[13rem] max-w-6xl">
                <h1 class="text-[2rem] md:text-[1.7rem] uppercase tracking-[0.2em] font-bold md:font-semibold text-zinc-500 dark:text-gray-300 my-2 md:pb-8 whitespace-nowrap transition duration-500"
                    data-aos="fade-in">
                    Wyne Ybañez
                </h1>
            </div>

            {{-- Hero --}}
            <div class="block overflow-hidden mx-auto lg:mx-[13rem]">
                <div class="flex flex-col w-full justify-center md:justify-start items-center md:items-start">
                    <h2 class="flex flex-row md:justify-start text-5xl md:text-7xl lg:text-8xl font-light text-zinc-700 dark:text-gray-200 my-5 lg:my-8 overflow-hidden"
                        data-aos="fade" data-aos-delay="300">
                        <div
                            class="text-black dark:text-gray-400 transform transition duration-500 flex md:flex-row items-center">
                            <div>Developer</div>
                            <span class="line hidden md:inline-block md:w-[30vw]"></span>
                        </div>
                    </h2>
                    <h2 class="flex flex-row md:justify-start text-5xl md:text-7xl lg:text-8xl font-light text-zinc-700 dark:text-gray-200 my-5 lg:my-8"
                        data-aos="fade" data-aos-delay="600">
                        <div
                            class="text-black dark:text-gray-300 transform transition duration-500 flex md:flex-row items-center">
                            <span class="plus inline-block"></span>
                            <div>Engineer</div>
                        </div>
                    </h2>
                    <h2 class="flex flex-row md:justify-start text-5xl md:text-7xl lg:text-8xl font-light text-zinc-700 dark:text-gray-200 my-5 lg:my-8"
                        data-aos="fade" data-aos-delay="900">
                        <div
                            class="text-black dark:text-gray-200 transform transition duration-500 flex md:flex-row items-center">
                            <span class="plus inline-block"></span>
                            <span class="plus inline-block"></span>
                            <div>Artisan</div>
                        </div>
                    </h2>
                </div>
            </div>
        </div>

        {{-- Favourite Projects --}}
        <div class="-mt-40 md:mt-[5.5rem]">
            <div
                class="flex flex-col md:flex-row justify-between items-center pt-44 md:pt-20 lg:mx-10 md:mb-20 lg:my-0">
                <h1
                    class="text-5xl md:text-9xl max-w-lg font-light text-zinc-900 mt-20 mb-10 md:my-0 md:text-zinc-200 dark:text-gray-400 text-center">
                    Favourite Projects
                </h1>
                <a href="/projects.html/"
                    class="mb-20 md:mb-0 px-8 py-4 rounded-md shadow-lg text-xl font-base flex flex-row space-x-4 items-center dark:text-white
               transform transition ease-out duration-500 hover:dark:bg-gray-200 hover:bg-zinc-800 hover:text-white dark:hover:text-black dark:border dark:border-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-right-square" stroke="4" strokeWidth="4" viewBox="0 0 16 16">
                        <path fillRule="evenodd"
                            d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
                    </svg>
                    <p>View all</p>
                </a>
            </div>
            @include('components.light-mode-projects')
            @include('components.dark-mode-projects')
        </div>

        {{-- Latest Code --}}
        <div class="latest-code">
            <div class="flex flex-col md:flex-row justify-between items-center md:pt-10 md:mx-10">
                <h2
                    class="text-5xl md:text-9xl max-w-lg font-light text-zinc-900 mt-20 mb-10 md:my-0 md:text-zinc-200 dark:text-gray-400 text-center lg:text-left relative -z-10">
                    Latest Code
                </h2>
                <a href="{{ config('data.social_links.github') }}"
                    class="mb-20 md:mb-0 px-8 py-4 rounded-md bg-transparent shadow-lg text-xl font-base flex flex-row space-x-4 items-center dark:text-white
            transform transition ease-out duration-500 hover:dark:bg-gray-200 dark:border dark:border-white hover:bg-zinc-800 hover:text-white dark:hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-up-right-square" stroke="4" strokeWidth="4" viewBox="0 0 16 16">
                        <path fillRule="evenodd"
                            d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z" />
                    </svg>
                    <p>View GitHub</p>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:-mt-6 gap-y-10 mx-8 md:mx-0">
                @php
                    /* this is using the github api, comment out for the mean time for a more static approach
                     * calling the api and applying its data is causing performance issues
                     */
                    // $githubUsername = config('data.github_username');
                    // $repositories = getLatestRepos($githubUsername);

                    $repositories = config('data.repositories');
                @endphp

                @foreach ($repositories as $repo)
                    @include('components.github-repo-card', [
                        'url' => $repo['url'],
                        'repoName' => $repo['name'],
                        'repoDescription' => $repo['description'],
                    ])
                @endforeach
            </div>
        </div>

    </div>

    @include('components.footer')
</body>

</html>
