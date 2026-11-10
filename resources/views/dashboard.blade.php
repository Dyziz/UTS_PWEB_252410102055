@extends('layout.app')
@section('title', 'Dashboard')
@section('content')
    <section class="surface max-w-2xl px-6 py-12 text-center sm:px-12 sm:py-16">
        <header>
            <span aria-hidden="true" class="accent-mark mx-auto mb-8"></span>
            <h1 class="text-3xl font-semibold leading-tight tracking-tight [overflow-wrap:anywhere] sm:text-5xl"><span class="welcome-intro">Welcome,</span> <span class="welcome-name">{{ $username }}</span></h1>
            <p class="welcome-support mt-6 text-sm leading-6 text-muted sm:text-base">Aplikasi berisi track tugas yang ada</p>
        </header>
    </section>
@endsection
