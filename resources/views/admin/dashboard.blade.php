@extends('layouts.admin')

@section('title', 'Dashboard - SmartWeight')

@section('content')
    <div class="admin-page-header">
        <h1 class="admin-page-heading">Dashboard</h1>
        <p class="admin-page-subtitle">Berikut ringkasan penjualan Anda hari ini.</p>
    </div>

    <div class="admin-stats-grid">
        <article class="admin-stat-card">
            <p class="admin-stat-label">Total Produk</p>
            <p class="admin-stat-value">2</p>
            <button type="button" class="admin-stat-btn">Lihat</button>
        </article>

        <article class="admin-stat-card">
            <p class="admin-stat-label">Total Transaksi</p>
            <p class="admin-stat-value">2</p>
            <button type="button" class="admin-stat-btn">Lihat</button>
        </article>

        <article class="admin-stat-card">
            <p class="admin-stat-label">Total Penjualan</p>
            <p class="admin-stat-value">Rp.50.000</p>
            <button type="button" class="admin-stat-btn">Lihat</button>
        </article>
    </div>

    <section class="admin-chart-section">
        <div class="admin-chart-header">
            <h2 class="admin-chart-title">Perkembangan Penjualan Harian</h2>
            <select class="admin-chart-filter" aria-label="Filter periode">
                <option selected>Mingguan</option>
                <option>Bulanan</option>
            </select>
        </div>

        <div class="admin-chart-box">
            <canvas id="salesChart" aria-label="Grafik perkembangan penjualan harian"></canvas>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('salesChart');

            if (!ctx) return;

            const primaryGradient = ctx.getContext('2d').createLinearGradient(0, 0, 0, 320);
            primaryGradient.addColorStop(0, 'rgba(0, 210, 190, 0.35)');
            primaryGradient.addColorStop(1, 'rgba(0, 210, 190, 0)');

            const secondaryGradient = ctx.getContext('2d').createLinearGradient(0, 0, 0, 320);
            secondaryGradient.addColorStop(0, 'rgba(180, 180, 180, 0.25)');
            secondaryGradient.addColorStop(1, 'rgba(180, 180, 180, 0)');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['senin', 'selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                    datasets: [
                        {
                            label: 'Produk A',
                            data: [20, 14, 26, 18, 38, 10, 12],
                            borderColor: '#00D2BE',
                            backgroundColor: primaryGradient,
                            borderWidth: 3,
                            tension: 0.45,
                            fill: true,
                            pointRadius: 0,
                        },
                        {
                            label: 'Produk B',
                            data: [18, 14, 12, 28, 23, 19, 8],
                            borderColor: '#CFCFCF',
                            backgroundColor: secondaryGradient,
                            borderWidth: 3,
                            tension: 0.45,
                            fill: true,
                            pointRadius: 0,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                        tooltip: { mode: 'index', intersect: false },
                    },
                    scales: {
                        x: {
                            grid: { display: false },
                            ticks: {
                                color: '#6b7280',
                                font: { size: 12 },
                            },
                        },
                        y: {
                            min: 0,
                            max: 50,
                            title: {
                                display: true,
                                text: 'Jumlah produk',
                                color: '#374151',
                                font: { size: 12, weight: '600' },
                            },
                            ticks: {
                                stepSize: 10,
                                color: '#6b7280',
                                font: { size: 12 },
                            },
                            grid: {
                                color: '#e5e7eb',
                                borderDash: [4, 4],
                            },
                        },
                    },
                },
            });
        });
    </script>
@endpush