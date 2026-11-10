@extends('layout.app')
@section('title', 'Daftar Tugas')
@section('content')
    <section class="surface max-w-3xl px-5 py-7 sm:px-9 sm:py-9">
        <header class="mb-5">
            <span aria-hidden="true" class="accent-mark mb-5"></span>
            <h1 class="text-xl font-semibold tracking-tight sm:text-2xl">Daftar tugas-tugas kuliah :</h1>
        </header>
        <ul class="divide-y divide-line">
            @foreach($tugas as $item)
                <li style="--row-delay: {{ min($loop->index, 6) * 65 }}ms" class="task-row grid grid-cols-[minmax(0,1fr)_auto] items-center gap-3 py-5 sm:gap-5">
                    <div class="min-w-0 [overflow-wrap:anywhere]">
                        <h2 class="text-sm font-semibold leading-6 sm:text-base">{{ $item['tugas'] }}</h2>
                        <p class="mt-1 text-xs leading-5 text-muted sm:text-sm">{{ $item['matkul'] }}</p>
                    </div>
                    <p class="rounded-full px-3 py-1.5 text-xs font-medium ring-1 ring-inset {{ $item['status'] === 'udah' ? 'bg-accent/40 text-ink ring-ink/10' : 'bg-ink/5 text-ink/75 ring-ink/15' }}">{{ $item['status'] }}</p>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
