<!DOCTYPE html>
<html lang="en">

@include('components.head')


<body id="app" class="flex flex-col min-h-screen overflow-x-hidden dark:bg-black dark:text-white"
    x-data="{ navigationOpen: false }" x-on:keydown.escape="navigationOpen = false;">
    <a href="#content" id="skip-to-content"
        class="sr-only focus:not-sr-only bg-black border-4 border-yellow-400 focus:absolute focus:mt-2 focus:mx-auto focus:p-2 focus:w-64 h-auto left-0 overflow-auto right-0 rounded-md text-center text-lg text-white top-auto z-50 ">Skip
        to content</a>

    @include('components.nav')

    <div class="mx-auto md:mx-24 lg:mx-auto max-w-6xl">
        <div
            class="mt-[2.5rem] md:mt-24 flex items-start justify-center md:justify-start mx-auto lg:mx-[13rem] max-w-6xl">
            <h1 class="text-[2rem] md:text-[1.7rem] uppercase tracking-[0.2em] font-bold md:font-semibold text-zinc-500 dark:text-gray-300 my-2 md:pb-8 whitespace-nowrap transition duration-500"
                data-aos="fade-in">
                Wyne Ybañez
            </h1>
        </div>

        <div class="hidden md:block overflow-hidden mx-auto lg:mx-[13rem]">
            <div class="flex flex-col w-full justify-center md:justify-start items-center md:items-start">
                <h2 class="flex flex-row md:justify-start text-5xl md:text-7xl lg:text-8xl font-base text-zinc-700 dark:text-gray-200 my-5 lg:my-8 overflow-hidden"
                    data-aos="fade" data-aos-delay="300">
                    <div
                        class="text-black dark:text-gray-400 transform transition duration-500 flex md:flex-row items-center">
                        <div>Developer</div>
                        <span class="line hidden md:inline-block md:w-[30vw]"></span>
                    </div>
                </h2>
                <h2 class="flex flex-row md:justify-start text-5xl md:text-7xl lg:text-8xl font-base text-zinc-700 dark:text-gray-200 my-5 lg:my-8"
                    data-aos="fade" data-aos-delay="600">
                    <div
                        class="text-black dark:text-gray-300 transform transition duration-500 flex md:flex-row items-center">
                        <span class="plus inline-block"></span>
                        <div>Engineer</div>
                    </div>
                </h2>
                <h2 class="flex flex-row md:justify-start text-5xl md:text-7xl lg:text-8xl font-base text-zinc-700 dark:text-gray-200 my-5 lg:my-8"
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

    {{-- <section>
        <main id="content" class="mx-auto max-w-7xl py-[6.25rem] px-8">
            <article class="mx-auto prose dark:prose-invert">
                <div class="pb-0 grid grid-cols-1 md:grid-cols-2">
                    <div class="justify-center">
                        <h1 class="text-[1.6rem]">Hi, I'm Wyne Ybañez</h1>
                        <h2 class="text-[2.8rem] mb-10 mt-0 md:my-0">Web Developer</h2>
                    </div>
                </div>

                <div class="w-full">
                    <img class="light-bg w-full object-cover my-0 md:py-28" src="media/bg-light.jpg"
                        alt="Index hero image" />
    
                    <div class="dark-bg w-full">
                        <div class="grid md:grid-cols-3 gap-8 pt-6 pb-24 md:py-28">
                            <a href="https://fast-travel-self-driving.netlify.app/" target="_blank"
                                class="w-full block col-span-3">
                                <div class="relative overflow-hidden md:rounded-md dark:shadow-cyan-400 dark:shadow-xl h-fit">
                                    <img src="media/fast-travel.png" alt="Fast-Travel, Self-Driving Taxi Booking App"
                                        class="transform hover:scale-105 transition duration-1000 ease-out object-cover md:rounded-md" />
                                </div>
                            </a>
                            <a href="https://space-invaderz-ultra-wyne.netlify.app//" target="_blank"
                                class="w-full block col-span-3 sm:col-span-2">
                                <div class="relative overflow-hidden md:rounded-md dark:shadow-purple-500 dark:shadow-xl h-fit">
                                    <img src="media/space-invaders.png" alt="Space Invaderz Ultra"
                                        class="transform hover:scale-105 transition duration-1000 ease-out object-cover" />
                                </div>
                            </a>
                            <a href="https://weathertop-v2.herokuapp.com/" target="_blank"
                                class="w-full block col-span-3 sm:col-span-1 object-cover">
                                <div class="relative overflow-hidden md:rounded-md dark:shadow-green-300 dark:shadow-xl h-fit">
                                    <img src="media/weathertop.png" alt="WeatherTop V2"
                                        class="transform hover:scale-105 transition duration-1000 ease-out object-cover md:rounded-md" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="article-content">
                    <h1 id="about">About Me</h1>
                    <h2 class="laravel">Enthusiastic, Learner, Curious, Active, Driven. Currently building with <a
                            href="https://laravel.com/">Laravel</a></h2>
                    <p>I gained considerable experience whilst working for a digital marketing agency. I’ve developed
                        and maintained websites for businesses within construction, healthcare, science and many other
                        sectors.</p>

                    <h3>Educational Background</h3>
                    <p>I completed my undergraduate with a Degree in Arts: English Literature and Computer Science.
                        During my time in college, I developed a strong foundation in critical thinking, creativity, and
                        cultural studies, which enhanced my understanding of diverse human experiences and historical
                        contexts. During the global COVID-19 pandemic, I decided to broaden my skills by learning a
                        technical skill, that being Full Stack Software Development. Utilizing various online resources
                        and joining Code Institute, I immersed myself in the world of web development, developing in
                        both front-end and back-end technologies. This self-directed learning experience allowed me to
                        combine my creative background with technical proficiency.</p>

                    <h3>Experience &amp; Continuous Learning</h3>
                    <p>As a web developer with 2 years of experience, I have honed a diverse skill set spanning website
                        builds, technical maintenance, client support, and self-directed learning. Throughout my career,
                        I have consistently demonstrated the ability to collaborate and coordinate effectively with
                        cross-functional teams to deliver high-quality websites and applications.</p>
                    <p>One of the hallmarks of my work has been a commitment to thorough troubleshooting, testing, and
                        software maintenance but also that of enhancing my relationships with others such as clients and
                        those within my organization. I go above and beyond to identify and resolve issues before they
                        impact the end-user experience. I track, document, and solve issues with absolute transparency.
                        This dedication is complemented by my strong customer service orientation - I have a proven
                        track record of managing support inquiries and training clients on website administration.</p>
                    <p>Beyond day-to-day operations, I leveraged my research and self-teaching skills to develop my own
                        expertise. I undergo coding courses and build personal projects in order to enhance my skills
                        and also familiarize myself with emerging technologies. Projects I have made have not only
                        expanded my own knowledge, but have also enabled me to contribute positively to the
                        organizations I serve.</p>
                    </p>

                    <h3>Active Skills</h3>
                    <ul class="flexbox-horizontal">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>SCSS</li>
                        <li>Tailwind</li>
                        <li>JavaScript</li>
                        <li>Vue</li>
                        <li>SQL</li>
                        <li>Git</li>
                        <li>Wordpress</li>
                    </ul>

                    <h3>Previous Tools</h3>
                    <ul class="flexbox-horizontal">
                        <li>Python</li>
                        <li>Java</li>
                        <li>Flask</li>
                        <li>Django</li>
                        <li>MongoDB</li>
                        <li>Express.js</li>
                        <li>Markdoc</li>
                        <li>Material UI</li>
                        <li>Bootstrap</li>
                    </ul>

                    <h3>Diving Into</h3>
                    <ul class="flexbox-horizontal">
                        <li>HTTP</li>
                        <li>Laravel</li>
                        <li>*NIX Systems</li>
                        <li>Intertia.js</li>
                    </ul>
                </div>
            </article>
        </main>
    </section> --}}

    @include('components.footer')
</body>

</html>
