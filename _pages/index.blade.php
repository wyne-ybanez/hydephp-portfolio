<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wyne Ybañez - Web Developer</title>



    <meta name="twitter:title" content="Wyne Ybañez - Web Developer">
    <meta property="og:title" content="Wyne Ybañez - Web Developer">


    <meta name="generator" content="HydePHP v1.7.3">
    <meta property="og:site_name" content="Wyne Ybañez">




    <style>
        [x-cloak] {
            display: none !important
        }
    </style>


    <link rel="stylesheet" href="media/app.css?v=22dc5d4eeaec84a6e6c6b472b0f6a74b">






    <meta id="meta-color-scheme" name="color-scheme" content="light">
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            document.getElementById('meta-color-scheme').setAttribute('content', 'dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>






</head>

<body id="app" class="flex flex-col min-h-screen overflow-x-hidden dark:bg-gray-900 dark:text-white" x-data="{ navigationOpen: false }" x-on:keydown.escape="navigationOpen = false;">
    <a href="#content" id="skip-to-content" class="sr-only focus:not-sr-only bg-black border-4 border-yellow-400 focus:absolute focus:mt-2 focus:mx-auto focus:p-2 focus:w-64 h-auto left-0 overflow-auto right-0 rounded-md text-center text-lg text-white top-auto z-50 ">Skip to content</a>
    <nav aria-label="Main navigation" id="main-navigation" class="flex flex-wrap items-center justify-between p-4 shadow-lg sm:shadow-xl md:shadow-none dark:bg-gray-800">
        <div class="flex flex-grow items-center flex-shrink-0 text-gray-700 dark:text-gray-200">
            <a href="index.html" class="font-bold px-4 flex flex-col flex-wrap" aria-label="Home page">
                Wyne Ybañez
                <span class="font-light text-[14px]">Developer Portfolio</span>
            </a>
            <div class="ml-auto">
                <button @click="toggleTheme" class="theme-toggle-button flex items-center px-2 py-1 hover:text-gray-700 dark:text-gray-200" title="Toggle theme">
                    <span class="sr-only">Toggle dark theme</span>
                    <svg width="1.25rem" height="1.25rem" class="w-5 h-5 hidden dark:block" fill="#FFFFFF" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                    <svg width="1.25rem" height="1.25rem" class="w-5 h-5 block dark:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div class="block md:hidden">
            <button id="navigation-toggle-button" class="flex items-center px-3 py-1 hover:text-gray-700 dark:text-gray-200"
                aria-label="Toggle navigation menu" @click="navigationOpen = ! navigationOpen">
                <svg id="open-main-navigation-menu-icon" title="Open Navigation Menu" class="dark:fill-gray-200"
                    xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24"
                    x-show="! navigationOpen" style="display: block;">
                    <title>Open Menu</title>
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
                </svg>
                <svg id="close-main-navigation-menu-icon" title="Close Navigation Menu" class="dark:fill-gray-200"
                    xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24"
                    x-show="navigationOpen" style="display: none;">
                    <title>Close Menu</title>
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                </svg>
            </button>
        </div>

        <div id="main-navigation-links" class="w-full x-uncloak-md md:flex flex-grow md:flex-grow-0 md:items-center md:w-auto px-6 -mx-4 border-t mt-3 pt-3 md:border-none md:mt-0 md:py-0 border-gray-200 dark:border-gray-700"
            :class="navigationOpen ? '' : 'hidden'" x-cloak>
            <ul aria-label="Navigation links" class="md:flex-grow md:flex justify-end">
                <li class="md:mx-2">
                    <a href="index.html" aria-current="page" class="block my-2 md:my-0 md:inline-block py-1 text-gray-700 hover:text-gray-900 dark:text-gray-100 border-l-4 border-indigo-500 md:border-none font-medium -ml-6 pl-5 md:ml-0 md:pl-0 bg-gray-100 dark:bg-gray-800 md:bg-transparent dark:md:bg-transparent">Home</a>
                </li>
                <li class="md:mx-2">
                    <a href="guide.html" class="block my-2 md:my-0 md:inline-block py-1 text-gray-700 hover:text-gray-900 dark:text-gray-100">Guide</a>
                </li>
            </ul>
        </div>
    </nav>
    <section>

        <main id="content" class="mx-auto max-w-7xl py-16 px-8">
            <article class="mx-auto prose dark:prose-invert">
                <h2>Hi, I'm Wyne Ybañez</h2>
                <h1>Web Developer</h1>
                <p><img src="media/avatar.webp" alt="Wyne Ybanez" /></p>
                <p><br><br></p>
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
            </article>
        </main>

    </section>

    <footer aria-label="Page footer" class="mx-auto py-16 px-8 bg-slate-100 dark:bg-gray-800 w-full">
        <!-- <div class="prose dark:prose-invert text-center mx-auto">
            <p>Site built with <a href="https://github.com/hydephp/hyde">HydePHP</a></p>
        </div>
        <a href="#app" aria-label="Go to top of page" class="float-right">
            <button title="Scroll to top">
                <svg width="1.5rem" height="1.5rem" role="presentation" class="fill-current text-gray-500 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z" />
                </svg>
            </button>
        </a> -->
        <div class="mx-auto">
            <h1 class="text-xl">Contact</h1>
            <p class="contact">Send me an E-mail and I'll reach out to you as soon as I can. Here's a helpful link - <a href="mailto:wyneybanez@gmail.com">Message</a></p>
            <ul class="contact">
                <li>+353 83 809 2402</li>
                <li>
                    <a href="mailto:wyneybanez@gmail.com">wyneybanez@gmail.com</a>
                </li>
                <li>Cork, Munster, Ireland</li>
            </ul>
        </div>
    </footer>

    <script defer src="media/app.js?v=017ef5b4877407c326217aedc1c21eb3"></script>


    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.3/dist/cdn.min.js" integrity="sha256-gOkV4d9/FmMNEkjOzVlyM2eNAWSUXisT+1RbMTTIgXI=" crossorigin="anonymous"></script>

    <script>
        function toggleTheme() {
            if (localStorage.getItem('color-theme') === 'dark' || !('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.remove("dark");
                localStorage.setItem('color-theme', 'light');
                document.getElementById('meta-color-scheme').setAttribute('content', 'light');
            } else {
                document.documentElement.classList.add("dark");
                localStorage.setItem('color-theme', 'dark');
                document.getElementById('meta-color-scheme').setAttribute('content', 'dark');
            }
        }
    </script>






</body>

</html>