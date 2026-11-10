<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2A323F">
    <meta name="description" content="TrackTugas — ruang sederhana untuk melihat tugas kuliah dan progres belajarmu.">
    <title>@yield('title', 'TrackTugas') · TrackTugas</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-dvh flex-col font-sans text-ink antialiased">
<a href="#main-content" class="sr-only fixed left-4 top-4 z-50 rounded-xl bg-ink px-4 py-3 text-sm text-white focus:not-sr-only">Lewati ke konten</a>
<div class="page-container flex flex-1 flex-col">
    @unless(request()->is('/'))
        <x-navbar :username="$username ?? null" />
    @endunless
    <main id="main-content" class="flex flex-1 items-center justify-center py-8 sm:py-12">
        @yield('content')
    </main>
    @include('components.footer')
</div>
</body>
</html>
