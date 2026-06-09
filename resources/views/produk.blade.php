@extends('layouts.app')

@section('content')

<div class="p-8">
    <div class="flex items-start justify-between mb-8">
        <div>
            <h1 class="text-4xl font-bold text-slate-900">
                Produk
            </h1>
            <p class="text-xl text-amber-800 mt-2">
                Produk apa yang anda jual?
            </p>
        </div>
        <button class="bg-[var(--secondary-dark)] hover:bg-[var(--primary)] text-white px-6 py-3 rounded-xl text-xl font-semibold shadow">
            + Tambah Produk
        </button>
    </div>
    <div class="space-y-6">
        <div class="space-y-6">
        @foreach($products as $product)
            <x-product_card
                :nama="$product->nama"
                :berat="$product->berat"
                :harga="$product->harga"
            />
        @endforeach
        </div>
    </div>
</div>

@endsection