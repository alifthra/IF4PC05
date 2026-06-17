@extends('layouts.auth')

@section('title', 'Daftar - SmartWeight')

@section('content')
    <h2 class="auth-panel-title">Buat Akun Baru</h2>

    <form class="auth-form" action="#" method="get">
        <div class="auth-field">
            <label class="auth-label" for="name">Nama Lengkap</label>
            <input
                id="name"
                type="text"
                name="name"
                class="auth-input"
                placeholder="Masukkan Nama Lengkap"
            >
        </div>

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
            <label class="auth-label" for="email">Alamat Email</label>
            <input
                id="email"
                type="email"
                name="email"
                class="auth-input"
                placeholder="Masukkan Email"
            >
        </div>

        <div class="auth-field">
            <label class="auth-label" for="password">Password</label>
            <input
                id="password"
                type="password"
                name="password"
                class="auth-input"
                placeholder="Minimal 8 Karakter"
            >
        </div>

        <button type="button" class="auth-btn">Daftar Sekarang</button>
    </form>

    <p class="auth-footer">
        Sudah Punya Akun ? <a href="{{ route('login') }}">Masuk Disini</a>
    </p>
@endsection
