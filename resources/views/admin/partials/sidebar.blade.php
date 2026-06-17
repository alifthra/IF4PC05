<aside class="admin-sidebar">
    <button type="button" class="admin-sidebar-action">
        <span>Tambah Catatan</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 9l6 6 6-6"/>
        </svg>
    </button>

    <nav class="admin-nav">
        <a href="{{ route('admin.dashboard') }}" class="admin-nav-link @if(request()->routeIs('admin.dashboard')) is-active @endif">
            Dashboard
        </a>
        <a href="#" class="admin-nav-link">Produk</a>
        <a href="#" class="admin-nav-link">Riwayat</a>
    </nav>
</aside>
