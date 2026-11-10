@extends('layout.app')
@section('title', 'Profile')
@section('content')
    <section class="surface card-enter max-w-lg px-6 py-10 text-center sm:p-12">
        <img src="{{ asset('dizy.jpeg') }}"
             alt="Foto profil {{ $username }}" width="112" height="112"
             class="profile-photo mx-auto mb-7 size-28 rounded-full border-4 border-white object-cover shadow-sm">
        <h1 class="text-2xl font-semibold tracking-tight sm:text-3xl">Welcome to My profile</h1>
        <p class="mt-3 text-base font-medium leading-6 text-muted">{{ $username }}</p>
        <p class="mt-8 border-t border-line pt-5 text-xs leading-6 text-muted">coming soon (never coming ;P).</p>
    </section>
@endsection
