<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body id="app" class="flex flex-col min-h-screen overflow-x-hidden dark:bg-black dark:text-white"
    x-data="{ navigationOpen: false }" x-on:keydown.escape="navigationOpen = false;">
    @include('hyde::components.skip-to-content-button')
    @include('components.nav')

    <section>
        <main id="main" class="max-w-[75rem] mx-auto pt-16 pb-0 lg:pt-16 md:mx-16 lg:mx-auto px-8 md:px-0">
            <article class="mx-auto dark:prose-invert">
                @yield('content')
            </article>
        </main>
    </section>

    @include('components.footer')
</body>

</html>
