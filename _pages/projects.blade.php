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
                <div class="justify-center mb-6">
                    <h1 class="text-5xl md:text-8xl font-light text-left dark:text-white">Projects</h1>
                </div>
                <div class="md:pt-20 pt-10 md:pb-24 pb-20" data-aos="fade-in" data-aos-delay="600">
                    <h3
                        class="text-zinc-900 dark:text-gray-200 lg:px-0 col-span-3 text-xl md:text-3xl font-base leading-[2rem] md:leading-[4rem] lg:leading-[4rem]">
                        In this collection you'll find a diverse array
                        of milestone projects, largely developed out of personal interest.
                        Feel free to contribute or clone any of these.
                    </h3>
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
