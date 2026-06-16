<div style="background:#ffddc5; border-radius:12px; padding:1rem; display:flex; justify-content:space-between; align-items:stretch; margin-bottom:1rem;">
    <div style="display:flex; gap:1.25rem; align-items:flex-start;">
        <div style="width:100px; height:100px; min-width:100px; min-height:100px; background:#d1d5db; border-radius:8px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
            <span class="font-bold text-gray-500">
                {{ $image ?? 'Foto' }}
            </span>
        </div>
        <div>
            <h3 class="text-lg font-bold">
                {{ $nama }}
            </h3>
            <p class="text-sm text-gray-600 mt-1">
                Berat: {{ $berat }} gr
            </p>
            <p class="font-bold mt-2">
                Rp {{ number_format($harga,0,',','.') }}
            </p>
        </div>
    </div>
    <div style="display:flex; flex-direction:column; justify-content:flex-end; align-items:flex-end;">
        <button style="background:#872f2f; width:44px; height:44px; flex-shrink:0; border:none; cursor:pointer;" class="text-white rounded-lg text-2xl">+</button>
    </div>
</div>