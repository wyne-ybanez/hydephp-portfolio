<!DOCTYPE html>
<html lang="en">
@php
    $pageTitle = 'Projects - Wyne Ybañez';
@endphp

@include('components.head')


<body id="app" class="flex flex-col min-h-screen overflow-x-hidden dark:bg-black dark:text-white"
    x-data="{ navigationOpen: false }" x-on:keydown.escape="navigationOpen = false;">
    <a href="#content" id="skip-to-content"
        class="sr-only focus:not-sr-only bg-black border-4 border-yellow-400 focus:absolute focus:mt-2 focus:mx-auto focus:p-2 focus:w-64 h-auto left-0 overflow-auto right-0 rounded-md text-center text-lg text-white top-auto z-50 ">Skip
        to content</a>

    @include('components.nav')

    <section>
        <main id="content" class="mx-auto max-w-7xl p-[6.25rem] px-8">
            <article class="mx-auto dark:prose-invert">
                <div class="pb-0 grid grid-cols-1 md:grid-cols-2">
                    <div class="justify-center mb-6">
                        <h1 class="text-[2.8rem]">Projects</h1>
                    </div>
                </div>

                <div class="mx-auto grid grid-cols-1 md:grid-cols-2 gap-20 md:gap-10 lg:gap-20 md:px-7 lg:px-0">
                    @foreach (config('projects.personal_projects') as $idx => $proj)
                        @include('components.project-card', [
                            'title' => $proj['title'],
                            'link' => $proj['link'],
                            'imgUrl' => $proj['imgUrl'],
                            'number' => $idx + 1,
                            'description' => $proj['description'],
                        ])
                    @endforeach
                </div>

            </article>
        </main>
    </section>

    @include('components.footer')
</body>

</html>
