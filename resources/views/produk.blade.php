@extends('layouts.app')

@section('content')

<div style="padding: 2rem;">
    <div class="flex items-start justify-between mb-8">
        <div>
            <h1 class="text-4xl font-bold text-slate-900" style="margin-bottom: 0.5rem;">
                Produk
            </h1>
            <p class="text-xl text-amber-800" style="margin-bottom: 1rem;">
                Produk apa yang anda jual?
            </p>
        </div>
        <button class="btn-tambah" onclick="openModalTambahProduk()">
            + Tambah Produk
        </button>
    </div>
    <div style="display: flex; flex-direction: column; gap: 0.5rem;">
        @foreach($products as $product)
            <x-product_card
            :id="$product->id"
            :nama="$product->nama"
            :berat="$product->berat"
            :harga="$product->harga"
            />
        @endforeach
    </div>
</div>

<x-pop-up_tambah_produk />

@endsection