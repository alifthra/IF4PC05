<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Pencatatan Digital' }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        @vite([
            'resources/css/app.css',
            'resources/js/app.js'
        ])
    </head>
    <body>
        <div class="wrapper" style="flex-direction: column;">
            <header class="topbar">
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <button onclick="toggleSidebar()" style="background: none; border: none; cursor: pointer; color: white; font-size: 1.5rem;">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="logo">
                        <img src="{{ asset('images/logo.png') }}">
                        <span>Pencatatan Digital</span>
                    </div>
                </div>
                <div class="user-menu" onclick="toggleDropdown()" style="position: relative; cursor: pointer;">Ini User
                    <div id="dropdown" style="display: none; position: absolute; right: 0; top: 110%; background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); min-width: 150px; z-index: 100;">
                        <a href="/logout" style="display: block; padding: 10px 16px; color: black; text-decoration: none;">Logout</a>
                    </div>
                </div>
            </header>
            <div style="display: flex; flex: 1; padding-top: 80px;">
                <aside class="sidebar">
                    <nav>
                        <div style="padding: 15px 20px; position: relative;">
                            <button class="btn" onclick="toggleCatatanDropdown()" style="width: 100%; text-align: left;">
                                + Tambah Catatan
                            </button>
                            <div id="catatanDropdown" style="display:none; position:absolute; left:20px; right:20px; top:100%; z-index:9999; background:white; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.3);">
                                <a href="/catreg" style="display:block; padding:10px 16px; color:#111827; text-decoration:none;">Pesanan Reguler</a>
                                <a href="/catmas" style="display:block; padding:10px 16px; color:#111827; text-decoration:none;">Pesanan Massal</a>
                            </div>
                        </div>                        
                        <a href="#">Dashboard</a>
                        <a href="/produk">Produk</a>
                        <a href="/riwayat">Riwayat</a>
                    </nav>
                </aside>
                <main class="content">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>