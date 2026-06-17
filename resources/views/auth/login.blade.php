@extends('layouts.auth')

@section('title', 'Masuk - SmartWeight')

@section('content')
    <h2 class="auth-panel-title">Masuk ke Akun Anda</h2>

    <form class="auth-form" action="#" method="get">
        <div class="auth-field">
            <label class="auth-label" for="username">Username</label>
            <input
                id="username"
                type="text"
                name="username"
                class="auth-input"
                placeholder="Masukkan Username"
            >
        </div>

        <div class="auth-field">
            <label class="auth-label" for="password">Password</label>
            <input
                id="password"
                type="password"
                name="password"
                class="auth-input"
                placeholder="Masukkan Password"
            >
            <a href="#" class="auth-forgot">Lupa Password ?</a>
        </div>

        <button type="button" class="auth-btn">Masuk Sekarang</button>
    </form>

    <p class="auth-footer">
        Belum Punya Akun ? <a href="{{ route('register') }}">Daftar Di sini</a>
    </p>
@endsection
