<div class="bg-[var(--secondary)] rounded-xl shadow-md p-4 flex justify-between">
    <div class="flex gap-5">
        <div class="w-32 h-32 bg-gray-300 rounded-lg flex items-center justify-center">
            <span class="text-4xl font-bold text-gray-500">
                {{ $image ?? 'Foto' }}
            </span>
        </div>
        <div>
            <h3 class="text-3xl font-bold">
                {{ $nama }}
            </h3>
            <p class="text-2xl mt-2">
                Berat: {{ $berat }} gr
            </p>
        </div>
    </div>
    <div class="flex flex-col justify-between items-end">
        <button class="text-4xl font-bold">
            ⋮
        </button>
        <span class="text-3xl font-bold">
            Rp {{ number_format($harga,0,',','.') }}
        </span>
    </div>
</div>