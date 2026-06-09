<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'IF4PC05' }}</title>

        @vite([
            'resources/css/app.css',
            'resources/js/app.js'
        ])
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                    <span>SmartWeight</span>
                </div>
                <nav>
                    <a href="/dashboard">Dashboard</a>
                    <a href="/produk">Produk</a>
                    <a href="/riwayat">Riwayat</a>
                </nav>
            </aside>
            <!-- Main Content -->
            <main class="content">
                <!-- Topbar -->
                <header class="topbar">
                    <div class="user-menu">
                        Admin
                    </div>
                </header>
                @yield('content')
            </main>
        </div>
    </body>
</html>