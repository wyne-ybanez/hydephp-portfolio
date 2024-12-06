<!DOCTYPE html>
<html lang="en">

@include('components.head')


<body id="app" class="flex flex-col min-h-screen overflow-x-hidden dark:bg-gray-900 dark:text-white" x-data="{ navigationOpen: false }" x-on:keydown.escape="navigationOpen = false;">
    <a href="#content" id="skip-to-content" class="sr-only focus:not-sr-only bg-black border-4 border-yellow-400 focus:absolute focus:mt-2 focus:mx-auto focus:p-2 focus:w-64 h-auto left-0 overflow-auto right-0 rounded-md text-center text-lg text-white top-auto z-50 ">Skip to content</a>

    @include('components.nav')

    <section>
        <main id="content" class="mx-auto max-w-7xl pb-16 pt-[6.25rem] px-8">
            <article class="mx-auto prose dark:prose-invert">
                <div class="pb-0 grid grid-cols-1 md:grid-cols-2">
                    <div class="justify-center">
                        <h1 class="text-[1.6rem]">Hi, I'm Wyne Ybañez</h1>
                        <h2 class="text-[2.8rem] mb-10 mt-0 md:my-0">Web Developer</h2>
                    </div>
                </div>

                <div class="w-full">
                    <img class="light-bg w-full object-cover my-0 py-28" src="media/bg-light.jpg" alt="Index hero image" />
                    <img class="dark-bg w-full object-cover my-0 pt-28 pb-24" src="media/bg-dark.svg" alt="Index hero image" />
                </div>

                <div class="article-content">
                    <h1 id="About">About Me</h1>
                    <h2 class="laravel">Enthusiastic, Learner, Curious, Active, Driven. Currently building with <a href="https://laravel.com/">Laravel</a></h2>
                    <p>I gained considerable experience whilst working for a digital marketing agency. I’ve developed and maintained websites for businesses within construction, healthcare, science and many other sectors.</p>

                    <h3>Educational Background</h3>
                    <p>I completed my undergraduate with a Degree in Arts: English Literature and Computer Science. During my time in college, I developed a strong foundation in critical thinking, creativity, and cultural studies, which enhanced my understanding of diverse human experiences and historical contexts. During the global COVID-19 pandemic, I decided to broaden my skills by learning a technical skill, that being Full Stack Software Development. Utilizing various online resources and joining Code Institute, I immersed myself in the world of web development, developing in both front-end and back-end technologies. This self-directed learning experience allowed me to combine my creative background with technical proficiency.</p>

                    <h3>Experience &amp; Continuous Learning</h3>
                    <p>As a web developer with 2 years of experience, I have honed a diverse skill set spanning website builds, technical maintenance, client support, and self-directed learning. Throughout my career, I have consistently demonstrated the ability to collaborate and coordinate effectively with cross-functional teams to deliver high-quality websites and applications.</p>
                    <p>One of the hallmarks of my work has been a commitment to thorough troubleshooting, testing, and software maintenance but also that of enhancing my relationships with others such as clients and those within my organization. I go above and beyond to identify and resolve issues before they impact the end-user experience. I track, document, and solve issues with absolute transparency. This dedication is complemented by my strong customer service orientation - I have a proven track record of managing support inquiries and training clients on website administration.</p>
                    <p>Beyond day-to-day operations, I leveraged my research and self-teaching skills to develop my own expertise. I undergo coding courses and build personal projects in order to enhance my skills and also familiarize myself with emerging technologies. Projects I have made have not only expanded my own knowledge, but have also enabled me to contribute positively to the organizations I serve.</p>
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
                    <p><br><br></p>
                </div>
            </article>
        </main>
    </section>

    @include('components.footer')
</body>

</html>