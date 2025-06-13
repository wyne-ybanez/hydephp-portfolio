@extends('hyde::layouts.app')
@section('content')
    @php($pageTitle = 'Projects - Wyne Ybanez')

    <div class="animate fade-right justify-center mb-6">
        <h1 class="text-5xl md:text-8xl font-light text-left dark:text-white">Projects</h1>
    </div>
    <div class="animate fade-in delay-600 md:pt-20 pt-10 md:pb-24 pb-20">
        <h3
            class="text-zinc-900 dark:text-gray-200 lg:px-0 col-span-3 text-xl md:text-3xl font-light leading-[2rem] md:leading-[4rem] lg:leading-[4rem]">
            In this collection you'll find a diverse array
            of milestone projects, largely developed out of personal interest.
            Feel free to contribute or clone any of these.
        </h3>
    </div>

    <div class="mx-auto grid grid-cols-1 md:grid-cols-2 gap-20 md:gap-10 lg:gap-20 lg:px-0">
        @foreach (config('data.personal_projects') as $idx => $proj)
            @include('components.project-card', [
                'title' => $proj['title'],
                'link' => $proj['link'],
                'imgUrl' => $proj['imgUrl'],
                'number' => $idx + 1,
                'description' => $proj['description'],
            ])
        @endforeach
    </div>
@endsection
