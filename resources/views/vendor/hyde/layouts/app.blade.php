<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body id="app" class="flex flex-col min-h-screen overflow-x-hidden dark:bg-black dark:text-white"
    x-data="{ navigationOpen: false }" x-on:keydown.escape="navigationOpen = false;">
    @include('hyde::components.skip-to-content-button')
    @include('components.nav')

    <section>
        @yield('content')
    </section>

    @include('components.footer')
</body>

</html>
