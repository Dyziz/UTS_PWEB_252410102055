@extends('layout.app')
@section('title', 'Login')
@section('content')
    <section class="surface card-enter max-w-sm p-6 sm:p-9">
        <header class="mb-8 text-center">
            <span aria-hidden="true" class="accent-mark mx-auto mb-6"></span>
            <h1 class="text-2xl font-semibold tracking-tight">Track Tugas by Dizy</h1>
        </header>
        <form class="grid gap-5" method="GET" action="{{ url('/dashboard') }}">
            <div class="grid gap-2">
                <label for="username" class="text-sm font-medium">Username</label>
                <input type="text" name="username" id="username" placeholder="Masukin username" required autocomplete="username" class="form-input">
            </div>
            <div class="grid gap-2">
                <label for="password" class="text-sm font-medium">Password:</label>
                <input type="password" id="password" placeholder="Masukin Password" required autocomplete="current-password" class="form-input">
            </div>
            <button class="primary-button mt-2 min-h-12 rounded-xl px-4 text-sm font-semibold" type="submit">Submit</button>
        </form>
    </section>
@endsection
