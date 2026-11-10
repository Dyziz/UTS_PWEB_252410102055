@props(['username' => null])
<nav aria-label="Navigasi utama" class="mt-4 flex flex-col gap-4 rounded-2xl border border-accent/15 bg-ink px-4 py-4 text-sm text-white shadow-sm sm:mt-6 sm:px-6 lg:flex-row lg:items-center lg:justify-between">
    <div class="flex min-w-0 items-center gap-3 lg:max-w-[35%]">
        <span aria-hidden="true" class="flex size-10 shrink-0 items-center justify-center rounded-xl border border-accent/20 bg-accent/10 text-accent">
            <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="4" y="3" width="16" height="18" rx="3"/><path d="m8 9 2 2 5-5M8 16h8"/></svg>
        </span>
        <div class="min-w-0"><span class="block text-base font-semibold [overflow-wrap:anywhere]">{{ $username }}</span><span class="text-xs text-white/70">liat tugas</span></div>
    </div>
    <div class="grid grid-cols-2 gap-2 sm:flex sm:flex-wrap sm:items-center">
        @foreach (['dashboard' => 'Dashboard', 'profile' => 'Profile', 'daftartugas' => 'Daftar Tugas'] as $path => $label)
            <a href="{{ url('/'.$path) }}?username={{ urlencode($username ?? '') }}" @if(request()->is($path)) aria-current="page" @endif
               class="nav-link {{ request()->is($path) ? 'bg-accent text-ink shadow-sm' : 'text-white/90 hover:bg-accent/10 hover:text-accent' }}">{{ $label }}</a>
        @endforeach
        <a href="{{ url('/') }}" class="nav-link text-white/70 hover:bg-red-900 hover:text-white">Logout</a>
    </div>
</nav>
