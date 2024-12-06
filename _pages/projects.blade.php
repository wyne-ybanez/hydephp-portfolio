<!DOCTYPE html>
<html lang="en">
@php
$pageTitle = 'Projects - Wyne Ybañez';
@endphp

@include('components.head')


<body id="app" class="flex flex-col min-h-screen overflow-x-hidden dark:bg-gray-900 dark:text-white" x-data="{ navigationOpen: false }" x-on:keydown.escape="navigationOpen = false;">
    <a href="#content" id="skip-to-content" class="sr-only focus:not-sr-only bg-black border-4 border-yellow-400 focus:absolute focus:mt-2 focus:mx-auto focus:p-2 focus:w-64 h-auto left-0 overflow-auto right-0 rounded-md text-center text-lg text-white top-auto z-50 ">Skip to content</a>

    @include('components.nav')

    <section>
        <main id="content" class="mx-auto max-w-7xl py-16 px-8">
            <article class="mx-auto prose">

                <div class="grid md:grid-cols-3 gap-8 lg:-mt-8 pb-40">
                    <a
                        href="https://fast-travel-self-driving.netlify.app/"
                        target="_blank"
                        class="w-full block col-span-3"
                        data-aos="fade-up">
                        <div class="relative overflow-hidden md:rounded-md dark:shadow-cyan-400 dark:shadow-xl">
                            <img
                                src="media/fast-travel.png"
                                alt="Fast-Travel, Self-Driving Taxi Booking App"
                                class="transform hover:scale-105 transition duration-1000 ease-out md:rounded-md" />
                        </div>
                    </a>
                    <a
                        href="https://space-invaderz-ultra-wyne.netlify.app//"
                        target="_blank"
                        class="w-full block col-span-3 sm:col-span-2"
                        data-aos="fade-right"
                        data-aos-delay="400">
                        <div class="relative overflow-hidden md:rounded-md dark:shadow-purple-500 dark:shadow-xl">
                            <img
                                src="media/space-invaders.png"
                                alt="Space Invaderz Ultra"
                                class="transform hover:scale-105 transition duration-1000 ease-out md:rounded-md" />
                        </div>
                    </a>
                    <a
                        href="https://weathertop-v2.herokuapp.com/"
                        target="_blank"
                        class="w-full block col-span-3 sm:col-span-1 object-cover"
                        data-aos="fade-left"
                        data-aos-delay="400">
                        <div class="relative overflow-hidden md:rounded-md dark:shadow-zinc-300 dark:shadow-xl">
                            <img
                                src="media/weathertop.png"
                                alt="WeatherTop V2"
                                class="transform hover:scale-105 transition duration-1000 ease-out object-cover md:rounded-md" />
                        </div>
                    </a>
                </div>

            </article>
        </main>
    </section>

    @include('components.footer')
</body>

</html>