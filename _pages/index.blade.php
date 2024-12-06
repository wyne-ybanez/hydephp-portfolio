<!DOCTYPE html>
<html lang="en">

@include('components.head')


<body id="app" class="flex flex-col min-h-screen overflow-x-hidden dark:bg-gray-900 dark:text-white" x-data="{ navigationOpen: false }" x-on:keydown.escape="navigationOpen = false;">
    <a href="#content" id="skip-to-content" class="sr-only focus:not-sr-only bg-black border-4 border-yellow-400 focus:absolute focus:mt-2 focus:mx-auto focus:p-2 focus:w-64 h-auto left-0 overflow-auto right-0 rounded-md text-center text-lg text-white top-auto z-50 ">Skip to content</a>

    @include('components.nav')

    <section>
        <main id="content" class="mx-auto max-w-7xl pb-16 pt-[8.25rem] px-8">
            <article class="mx-auto prose dark:prose-invert">
                <div class="pb-[8.25rem] grid grid-cols-1 md:grid-cols-2 lg:gap-24">
                    <div class="justify-center content-end">
                        <h1 class="text-[1.6rem]">Hi, I'm Wyne Ybañez</h1>
                        <h2 class="text-[2.8rem] mb-10 mt-0 md:my-0">Web Developer</h2>
                    </div>
                    <div class="">
                        <img class="w-full lg:max-h-[500px] lg:max-w-[400px] object-cover my-0 rounded" src="media/avatar.webp" alt="Wyne Ybanez" />
                    </div>
                </div>
                <div class="article-content">
                    <h1 id="About">About Me</h1>
                    <h2 class="laravel">Enthusiastic, Learner, Curious, Active, Driven. Currently building with <a href="https://laravel.com/">Laravel</a></h2>
                    <p>I gained considerable experience whilst working for a digital marketing agency. I’ve developed and maintained websites for businesses within construction, healthcare, science and many other sectors.
                        Educational Background</p>
                    <p>I completed my undergraduate with a degree in Arts and Humanities. During my time in college, I developed a strong foundation in critical thinking, creativity, and cultural studies, which enhanced my understanding of diverse human experiences and historical contexts. During the global COVID-19 pandemic, I decided to broaden my skills by learning a technical skill, that being full stack web development. Utilizing various online resources and joining Code Institute, I immersed myself in the world of web development, developing in both front-end and back-end technologies. This self-directed learning experience allowed me to combine my creative background with technical proficiency.</p>
                    <h3>Experience &amp; Continuous Learning</h3>
                    <p>At present, I've been coding professionally and my skills are constantly evolving. I've dived into creating Laravel and Wordpress projects as well as exploring concepts that spark my curiosity. It is my belief that with a strong foundations and practice, one can create solutions that are long-lasting, iterative, and improvable. To that end, I strive to create solutions that are efficient, simple, clean. I am continuously building upon my skills in order to achieve this.</p>
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
                    <p><br><br></p>
                </div>
            </article>
        </main>
    </section>

    @include('components.footer')
</body>

</html>