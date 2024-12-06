<footer id="footer" aria-label="Page footer" class="w-full bg-slate-100 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-8 py-16">
        <div class="mx-auto prose dark:prose-invert">
            <a href="#app" aria-label="Go to top of page" class="float-right">
                <button title="Scroll to top">
                    <svg width="1.5rem" height="1.5rem" role="presentation" class="fill-current text-gray-500 hover:text-black dark:hover:text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z" />
                    </svg>
                </button>
            </a>
            <div>
                <h1 class="text-[2rem] font-bold mb-8">Contact</h1>
                <p class="my-3 contact">Send me a <a href="mailto:wyneybanez@gmail.com">Message</a> and I'll reach out to you as soon as I can.</p>
                <div class="flex flex-col contact gap-3">
                    <div class="flex gap-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-telephone-fill mt-1 h-4 w-4 dark:text-gray-300"
                            viewBox="0 0 16 16"
                            >
                            <path
                                fillRule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                            />
                        </svg>
                        <a href="tel:+353 83 809 2402">+353 83 809 2402</a>
                    </div>
                    <div class="flex gap-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-envelope-fill mt-1.5 h-4 w-4 dark:text-gray-300"
                            viewBox="0 0 16 16"
                            >
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                        </svg>
                        <a href="mailto:wyneybanez@gmail.com">wyneybanez@gmail.com</a>
                    </div>
                    <div class="flex gap-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-pin-fill h-4 w-4 mt-1.5 dark:text-gray-300"
                            viewBox="0 0 16 16"
                            >
                            <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354z" />
                        </svg>
                        Cork, Munster, Ireland
                    </div>
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