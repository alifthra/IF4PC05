@extends('layouts.topbar')

@section('content')

<div style="padding: 2rem; padding-bottom:120px;">
    <div class="flex gap-4" style="align-items: flex-start;">
        <a href="#" style="background: var(--primary); width:36px; height:36px; border-radius:50%;" class="flex items-center justify-center text-white text-xl no-underline">
            <i class="fa-solid fa-chevron-left"></i>
        </a>
        <div>
            <h1 class="text-2xl font-bold">Tambah Catatan > Pesanan Reguler</h1>
            <p class="text-md text-amber-800">Pilih waktu transaksi</p>
            <input type="date" name="waktu" class="w-[200px] h-[42px] px-4 bg-white border border-gray-300 rounded-md">
            <p class="text-md mb-4 text-amber-800">Pilih produk yang dipesan</p>
        </div>
    </div>
    <div class="flex flex-col gap-4" style="max-width:700px; margin: 0 auto;">
        @foreach($products as $product)
            <x-option_card
            :nama="$product->nama"
            :berat="$product->berat"
            :harga="$product->harga"
            />
        @endforeach
    </div>
</div>

<div style="position:fixed; bottom:0; left:0; right:0; background: var(--primary);" class="flex justify-between items-center px-16 py-4">
    <div style="position:relative; display:inline-block; margin-left:40px;">
        <i class="fa-solid fa-cart-shopping text-3xl" style="color:white;"></i>
        <span style="position:absolute; top:-8px; right:-8px; background: var(--primary-dark); width:20px; height:20px;" class="text-white rounded-full text-xs flex items-center justify-center font-bold">3</span>
    </div>
    <div class="flex items-center gap-6" style="margin-right:40px;">
        <div class="text-right">
            <div class="text-sm text-white">Total</div>
            <div class="font-bold text-lg text-white">Rp. 00.000</div>
        </div>
        <button class="btn font-bold">
            Simpan
        </button>
    </div>
</div>

@endsection