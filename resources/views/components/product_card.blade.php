<div style="background: var(--secondary); border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); padding: 1rem; display: flex; justify-content: space-between; align-items: stretch; margin-bottom: 1rem; overflow: visible; position: relative;">
    <div style="display: flex; gap: 1.25rem; align-items: flex-start;">
        <div style="width: 120px; height: 120px; min-width: 120px; min-height: 120px; background: #d1d5db; border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <span class="text-base font-bold text-gray-500">
                {{ $image ?? 'Foto' }}
            </span>
        </div>
        <div>
            <h3 class="text-2xl font-bold text-slate-900">
                {{ $nama }}
            </h3>
            <p class="text-lg text-slate-700 mt-1">
                Berat: {{ $berat }} gr
            </p>
        </div>
    </div>
    <div style="display: flex; flex-direction: column; justify-content: space-between; align-items: flex-end; position: relative;">
        <button onclick="toggleCardDropdown('dropdown-{{ $id }}')" style="background: none; border: none; cursor: pointer; font-size: 1.5rem; font-weight: bold;">⋮</button>
        <div id="dropdown-{{ $id }}" style="display: none; position: absolute; right: 0; top: 2rem; background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); min-width: 120px; z-index: 999;">
            <a href="/produk/{{ $id }}/edit" style="display: block; padding: 10px 16px; color: black; text-decoration: none;">Edit</a>
            <a href="/produk/{{ $id }}/hapus" style="display: block; padding: 10px 16px; color: #dc2626; text-decoration: none;">Hapus</a>
        </div>
        <span class="text-2xl font-bold text-slate-900">
            Rp {{ number_format($harga,0,',','.') }}
        </span>
    </div>
</div>