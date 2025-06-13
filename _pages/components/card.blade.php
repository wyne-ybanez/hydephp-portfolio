<a href="{{ $url ?? '#' }}" target="_blank" class="github-repo p-6 border rounded-md" data-aos="fade-in"
    data-aos-delay="400">
    <div class="group flex flex-col w-full">
        <h4 class="text-2xl font-light">
            {{ $repoName ?? 'Unknown Repo Name' }}
        </h4>
        <p class="font-light my-4">
            {{ $repoDescription ?? 'Unknown Repo Description' }}
        </p>
        <div class="font-base group flex flex-row space-x-2 w-full items-center">
            <p>View Repository </p>
            <div class="transform group-hover:translate-x-2 transition duration-300">
                &rarr;
            </div>
        </div>
    </div>
</a>
