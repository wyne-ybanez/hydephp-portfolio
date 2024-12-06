<footer aria-label="Page footer" class="w-full bg-slate-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-8 py-16">
        <div class="mx-auto prose dark:prose-invert">
            <a href="#app" aria-label="Go to top of page" class="float-right">
                <button title="Scroll to top">
                    <svg width="1.5rem" height="1.5rem" role="presentation" class="fill-current text-gray-500 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z" />
                    </svg>
                </button>
            </a>
            <div class="">
                <h1 class="text-[2rem] font-bold mb-4">Contact</h1>
                <p class="my-3 contact">Send me a <a href="mailto:wyneybanez@gmail.com">Message</a> and I'll reach out to you as soon as I can.</p>
                <div class="flex flex-col contact gap-3">
                    <div>+353 83 809 2402</div>
                    <div><a href="mailto:wyneybanez@gmail.com">wyneybanez@gmail.com</a></div>
                    <div>Cork, Munster, Ireland</div>
                </div>
            </div>
        </div>
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