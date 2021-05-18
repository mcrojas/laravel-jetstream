@extends('layouts.web')

@section('content')

<div class="flex justify-center flex-wrap">
    <div class="grid grid-cols-3 gap-4">
    <div class="p-8 bg-gray-200 col-span-1 rounded-lg">
        <ul class="flex flex-col">
            <li class="font-bold text-lg text-gray-600 mb-4">Contenido</li>
            @foreach ($course->posts as $post)
            <li class="hover:bg-gray-50 cursor-pointer flex justify-between my-2 items-center flex-wrap p-2 rounded-lg">
                <span class="text-sm text-gray-600 w-4/5">{{ $post->name}}</span>
                @if($post->free)
                    <span class="px-2 py-2 text-sm text-gray-600 bg-yellow-200 rounded-xl">Gratis</span>
                @endif
                <div class="bg-gray-400 h-px w-full mt-3"></div>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="text-gray-700 col-span-2">
        <img class="rounded-lg" src="{{ $course->image }}" alt="">
        <h2 class="text-3xl text-gray-600 py-2">{{ $course->name }}</h2>
        <p class="text-gray-600">{{ $course->description }}</p>
        <div class="flex mt-3">
            <img src="{{ $course->user->avatar }}" class="h-10 w-10 rounded-full mr-2" alt="">
            <div>
                <p class="text-gray-500 text-sm">{{ $course->user->name }}</p>
                <p class="text-gray-300 text-xs">{{ $course->created_at->diffForHumans() }}</p>
            </div>
        </div>
        <h2 class="mt-6 text-3xl font-bold text-gray-400">Cursos similares</h2>
        <div class="grid grid-cols-2 gap-4 mt-2">
            @foreach ($course->similar() as $course)
                <x-course-card :course="$course" />
            @endforeach
        </div>
    </div>
    </div>
    <div class="text-center mt-4 mb-5">
        <h2 class="mt-6 text-3xl font-bold text-gray-400 md:text-5xl">Últimos Cursos</h2>
        <h3 class="text-xl font-medium tracking-wider text-gray-300 mb-2">Fórmate online como profesional en tecnología</h3>
    </div>
    <livewire:course-list>
@endsection