<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk - Cuttiest.co</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
     <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 512 512%22><text y=%22400%22 font-size=%22400%22>🤖</text></svg>">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="font-sans text-gray-800 bg-gray-50">

    <?php include '../template/navbar.php';?>
    <div>

</div>
    <header class="pt-32 pb-10 bg-white border-b border-gray-100 shadow-sm">
        <div class="container mx-auto px-6">
            <h1 class="text-3xl font-black text-gray-900 italic uppercase tracking-tighter">
                Explore <span class="text-yellow-500">Collection</span>
            </h1>
            <p class="text-gray-500 mt-2 text-sm">Menampilkan semua koleksi terbaik dari Cuttiest.</p>
        </div>
    </header>

  
<main class="py-10"
x-data="{
    search: '',
    selectedCategory: 'All',
    products: [],

    init: function() {
        fetch('data_produk.php')
            .then(res => res.json())
            .then(data => {
                console.log('DATA:', data);
                this.products = data;
            })
            .catch(err => console.log('ERROR:', err));
    },

    filteredProducts: function() {
        return this.products.filter(p => {
            const name = p.name ? p.name.toLowerCase() : '';
            const matchSearch = name.includes(this.search.toLowerCase());
            const matchCat = this.selectedCategory === 'All' || p.cat === this.selectedCategory;
            return matchSearch && matchCat;
        });
    }
}"
x-init="init()">

<div class="container mx-auto px-6">
    <div class="flex flex-col lg:flex-row gap-10">

        <!-- SIDEBAR -->
        <aside class="lg:w-1/4 space-y-8">

            <!-- SEARCH -->
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-xs uppercase tracking-widest mb-4">Search</h3>
                <div class="relative">
                    <input type="text" x-model="search" placeholder="Cari nama barang..." 
                        class="w-full bg-gray-50 rounded-2xl px-4 py-3 text-sm focus:ring-2 focus:ring-yellow-500 outline-none">
                    <i class="fas fa-search absolute right-4 top-3.5 text-gray-300"></i>
                </div>
            </div>

            <!-- CATEGORY -->
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-xs uppercase tracking-widest mb-4">Categories</h3>
                <div class="flex flex-col space-y-1">
                    <template x-for="category in ['All','Sci-Fi','Robot','Anime','Superhero']" :key="category">
                        <button @click="selectedCategory = category"
                            :class="selectedCategory === category ? 'bg-yellow-500 text-gray-900 font-bold' : 'text-gray-500 hover:bg-gray-50'"
                            class="text-left px-4 py-2.5 rounded-xl text-sm transition-all flex justify-between">
                            <span x-text="category"></span>
                        </button>
                    </template>
                </div>
            </div>

        </aside>

        <!-- CONTENT -->
        <div class="lg:w-3/4">

            <!-- EMPTY STATE -->
            <div x-show="filteredProducts().length === 0" x-cloak
                class="py-20 text-center bg-white rounded-3xl border-2 border-dashed border-gray-100">
                <i class="fas fa-search text-5xl text-gray-200 mb-4"></i>
                <p class="text-gray-400">Produk tidak ditemukan.</p>
            </div>

            <!-- GRID PRODUK -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">

<template x-for="product in filteredProducts()" :key="product.id">
    <div class="group bg-white rounded-3xl overflow-hidden border shadow-sm hover:shadow-lg transition">

        <!-- GAMBAR -->
        <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
            <img :src="product.img"
                 class="w-full h-full object-cover group-hover:scale-105 transition">

            <!-- ICON MATA -->
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
               <a :href="'detailmenu.php?id=' + product.id"
                class="bg-white p-3 rounded-full shadow hover:bg-yellow-500 hover:text-white">
                    <i class="fas fa-eye"></i>
                </a>
            </div>
        </div>

        <!-- INFO -->
        <div class="p-4">
            <span class="text-xs text-gray-400" x-text="product.cat"></span>
            <h3 class="font-bold text-lg mt-1" x-text="product.name"></h3>
            <p class="text-yellow-500 font-semibold mt-2"
               x-text="'Rp ' + product.price"></p>
        </div>

    </div>
</template>

</div>

        </div>

    </div>
</div>
</main>

    <?php include '../template/footer.php';?>

</body>
</html>