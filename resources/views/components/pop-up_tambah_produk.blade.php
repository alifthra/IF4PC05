<div id="modalTambahProduk" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">
    <div class="bg-[var(--background)] w-[860px] rounded-2xl overflow-hidden shadow-xl">
        <div class="bg-[var(--primary-dark)] h-[60px] flex items-center justify-center relative">
            <h2 class="text-white text-[30px] font-bold">Tambah Produk</h2>
            <button type="button" onclick="closeModalTambahProduk()" class="absolute right-6 text-white text-[42px] leading-none hover:opacity-80">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <form action="{{ route('produk') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex gap-8 p-8">
                <div class="w-[240px] flex-shrink-0">
                    <label for="foto" class="w-[260px] h-[260px] bg-gray-300 rounded-xl flex items-center justify-center cursor-pointer">
                        <span class="text-gray-500 text-5xl font-bold">Foto</span>
                    </label>
                    <input type="file" id="foto" name="foto" class="hidden">
                </div>
                <div class="flex-1 flex flex-col">
                    <div class="mb-5">
                        <label class="block text-[18px] font-semibold mb-2">Nama Produk</label>
                        <input type="text" name="nama" placeholder="Nama Produk" class="w-full h-[42px] px-4 bg-white border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-5">
                        <label class="block text-[18px] font-semibold mb-2">Berat Produk</label>
                        <div class="flex gap-2">
                            <input type="text" name="berat" placeholder="Berat Produk" class="flex-1 h-[42px] px-4 bg-white border border-gray-300 rounded-md">
                            <button type="button" class="btn-tambah">
                                Ukur
                            </button>
                        </div>
                    </div>
                    <div class="mb-10">
                        <label class="block text-[18px] font-semibold mb-2">Harga Produk</label>
                        <input type="text" name="harga" placeholder="Harga Produk" class="w-full h-[42px] px-4 bg-white border border-gray-300 rounded-md">
                    </div>
                    <div class="flex justify-end pt-8">
                        <button type="submit" class="btn-tambah">
                            Tambah
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>