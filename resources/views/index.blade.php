@extends('layouts.web')

@section('content')
    <div class="text-center mb-5">
        <h1 class="mt-6 text-3xl font-bold text-gray-400 md:text-5xl">Últimos Cursos</h1>
        <h2 class="text-xl font-medium tracking-wider text-gray-300 mb-2">Fórmate online como profesional en tecnología</h2>
    </div>
    <livewire:course-list>
@endsection