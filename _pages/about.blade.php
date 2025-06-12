@extends('hyde::layouts.app')
@section('content')
    @php($pageTitle = 'About - Wyne Ybanez')

    <div class="justify-center mb-6">
        <h1 class="text-5xl md:text-8xl font-light text-left dark:text-white" data-aos="fade-right">
            About Me
        </h1>
    </div>
    <div class="-mt-4">
        <div class="text-container md:pt-20 pt-10">
            <p class="text-xl lg:px-0 md:text-4xl font-base dark:text-gray-200 leading-[2rem] md:leading-[4rem] lg:leading-[4rem]"
                data-aos="fade-in" data-aos-delay="600">
                {{ config('data.about.title') }}.
                Currently building with
                <a class="hover:shadow-zinc-900 rounded-md px-2 py-0 mx-1 text-black dark:text-white hover:shadow-lg transform transition duration-200 dark:hover:shadow-zinc-400 underline hover:no-underline"
                    href={{ config('data.about.currentProjectUrl') }}>
                    {{ config('data.about.currentProject') }}
                </a>.
            </p>
        </div>
    </div>

    <div class="pt-20 grid grid-cols-1 md:grid-cols-3 mx-auto gap-y-10 md:gap-y-20 gap-x-20">
        <div class="inline-flex flex-col">
            <div>
                <h4 class="text-xl font-base dark:text-white">
                    Contact
                </h4>
                <p class="text-base font-base text-zinc-700 mt-4 dark:text-white">
                    Based in Co. Cork, Ireland.
                </p>
                <p class="text-base text-zinc-700 mt-4 dark:text-white">
                    For any enquiry, send me an
                    <a href="mailto:{{ config('data.email') }}"
                        class="text-zinc-800 border-b-2 border-zinc-800 dark:border-zinc-300 dark:text-zinc-300 hover:border-none">
                        e-mail
                    </a>
                    and I'll get back to you.
                </p>
            </div>

            <div class="mt-5">
                <h4 class="text-xl font-base mt-8 dark:text-white">
                    Social Links
                </h4>
                <div class="mt-4 ml-4">
                    <div class="flex flex-row justify-start items-center">
                        <a href="{{ config('data.social_links.github') }}"
                            class="flex flex-row items-center space-x-4 group" target="_blank">
                            <div class="my-4 dark:text-gray-300">&rarr;</div>
                            <div class="text-md text-zinc-300 font-mono relative overflow-hidden dark:text-white">
                                <div
                                    class="absolute h-0.5 w-full bg-zinc-400 transform bottom-0 -translate-x-24 group-hover:translate-x-0 transition duration-300">
                                </div>
                                GitHub
                            </div>
                        </a>
                    </div>

                    <div class="flex flex-row justify-start items-center">
                        <a href="{{ config('data.social_links.linkedin') }}"
                            class="flex flex-row items-center space-x-4 group" target="_blank">
                            <div class="my-4 dark:text-gray-300"">&rarr;</div>
                            <div class="text-md text-zinc-900 font-mono relative overflow-hidden dark:text-white">
                                <div
                                    class="absolute h-0.5 w-full bg-zinc-400 transform bottom-0 -translate-x-24 group-hover:translate-x-0 transition duration-300">
                                </div>
                                LinkedIn
                            </div>
                        </a>
                    </div>

                    <div class="flex flex-row justify-start items-center">
                        <a href="{{ config('data.social_links.instagram') }}"
                            class="flex flex-row items-center space-x-4 group" target="_blank">
                            <div class="my-4 dark:text-gray-300"">&rarr;</div>
                            <div class="text-md text-zinc-900 font-mono relative overflow-hidden dark:text-white">
                                <div
                                    class="absolute h-0.5 w-full bg-zinc-400 transform bottom-0 -translate-x-24 group-hover:translate-x-0 transition duration-300">
                                </div>
                                Instagram
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-1 md:col-span-2 text-lg dark:text-white">
            <p class="mb-4">
                From a humanities degree to a technical diplomas, my background bounces between
                e-commerce and digital marketing, giving me a good mix of technical skills and business sense.
            </p>
            <p class="mb-4">
                I've been coding professionally for nearly 3 years now, creating websites for businesses in a
                number
                of industries.
                These days, I'm diving deeper into Laravel, PHP backend work, and WordPress projects, while
                constantly learning about
                bigger enterprise-level architecture through online courses and my own exploring.
            </p>
            <p class="mb-4">
                What I really like is meeting different kinds of people, working in a team, seeing cool ideas
                turn
                into real world solutions.
                My Full-stack certification helps me approach projects with a technical mindset, but I never
                lose
                sight of what actually matters, that being - solutions that serve businesses and people.
            </p>
            <p class="mb-4">
                When I'm not glued to my screen coding, you'll probably find me on the football pitch, going out
                for
                a run or checking out some new tech to obsess over.
                I'm always looking to add new tools to my collection.
            </p>
        </div>
    </div>
@endsection
