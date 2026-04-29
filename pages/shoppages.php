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

    <header class="pt-32 pb-10 bg-white border-b border-gray-100 shadow-sm">
        <div class="container mx-auto px-6">
            <h1 class="text-3xl font-black text-gray-900 italic uppercase tracking-tighter">
                Explore <span class="text-yellow-500">Collection</span>
            </h1>
            <p class="text-gray-500 mt-2 text-sm">Menampilkan semua koleksi terbaik dari Cuttiest.</p>
        </div>
    </header>

    <main class="py-10" x-data="{ 
        search: '', 
        selectedCategory: 'All',
products: [
    { id: 1, name: 'Cyber Hero X', price: 89, cat: 'Sci-Fi', img: 'https://picsum.photos/id/26/500/600' },
    { id: 2, name: 'Storm Trooper Custom', price: 120, cat: 'Sci-Fi', img: 'https://picsum.photos/id/103/500/600' },
    { id: 3, name: 'Mecha Samurai', price: 210, cat: 'Robot', img: 'https://picsum.photos/id/201/500/600' },
    { id: 4, name: 'Neon Valkyrie', price: 95, cat: 'Anime', img: 'https://picsum.photos/id/445/500/600' },
    { id: 5, name: 'Iron Sentinel', price: 150, cat: 'Robot', img: 'https://picsum.photos/id/1060/500/600' },
    { id: 6, name: 'Dark Knight Rises', price: 135, cat: 'Superhero', img: 'https://picsum.photos/id/1070/500/600' },
    { id: 7, name: 'Pikachu Cosplay', price: 65, cat: 'Anime', img: 'https://picsum.photos/id/237/500/600' },
    { id: 8, name: 'Optimus Prime G1', price: 250, cat: 'Robot', img: 'https://picsum.photos/id/433/500/600' },
    { id: 9, name: 'Iron Man MK-50', price: 180, cat: 'Superhero', img: 'https://picsum.photos/id/577/500/600' }
],
        get filteredProducts() {
            return this.products.filter(p => {
                const matchSearch = p.name.toLowerCase().includes(this.search.toLowerCase());
                const matchCat = this.selectedCategory === 'All' || p.cat === this.selectedCategory;
                return matchSearch && matchCat;
            });
        }
    }">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-10">
                
                <aside class="lg:w-1/4 space-y-8">
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                        <h3 class="font-bold text-xs uppercase tracking-widest mb-4">Search</h3>
                        <div class="relative">
                            <input type="text" x-model="search" placeholder="Cari nama barang..." 
                                   class="w-full bg-gray-50 border-none rounded-2xl px-4 py-3 text-sm focus:ring-2 focus:ring-yellow-500 outline-none">
                            <i class="fas fa-search absolute right-4 top-3.5 text-gray-300"></i>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                        <h3 class="font-bold text-xs uppercase tracking-widest mb-4">Categories</h3>
                        <div class="flex flex-col space-y-1">
                            <template x-for="category in ['All', 'Sci-Fi', 'Robot', 'Anime', 'Superhero']" :key="category">
                                <button @click="selectedCategory = category" 
                                        :class="selectedCategory === category ? 'bg-yellow-500 text-gray-900 font-bold' : 'text-gray-500 hover:bg-gray-50'"
                                        class="text-left px-4 py-2.5 rounded-xl text-sm transition-all flex items-center justify-between" >
                                    <span x-text="category"></span>
                                    <i class="fas fa-chevron-right text-xs opacity-50" x-show="selectedCategory === category"></i>
                                </button>
                            </template>
                        </div>
                    </div>
                </aside>

                <div class="lg:w-3/4">
                    <div x-show="filteredProducts.length === 0" x-cloak class="py-20 text-center bg-white rounded-3xl border-2 border-dashed border-gray-100">
                        <i class="fas fa-search text-5xl text-gray-200 mb-4"></i>
                        <p class="text-gray-400">Oops! Produk yang kamu cari tidak ditemukan.</p>
                        <button @click="search = ''; selectedCategory = 'All'" class="mt-4 text-yellow-600 hover:underline text-sm font-medium">Reset Filter</button>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
                        <template x-for="product in filteredProducts" :key="product.id">
                            <div class="group bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500">
                                <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                                    <img :src="product.img" :alt="product.name" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                                    
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-white/90 backdrop-blur-md text-[10px] font-black px-3 py-1.5 rounded-full uppercase tracking-tighter shadow-sm text-gray-900" x-text="product.cat"></span>
                                    </div>
                                    
                                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center gap-3">
                                        <button class="bg-white text-gray-900 p-4 rounded-full hover:bg-yellow-500 transition shadow-lg hover:scale-110 active:scale-95">
                                            <i class="fas fa-cart-plus text-lg"></i>
                                        </button>
                                        <a href="detailmenu.php" class="bg-yellow-500 text-gray-900 p-4 rounded-full hover:bg-white transition shadow-lg hover:scale-110 active:scale-95">
                                            <i class="fas fa-eye text-lg"></i>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="p-5">
                                    <h3 class="font-bold text-gray-900 text-lg mb-1 truncate" x-text="product.name"></h3>
                                    <div class="flex items-end justify-between">
                                        <p class="text-yellow-600 font-black text-2xl tracking-tight" x-text="'$' + product.price + '.00'"></p>
                                        <span class="text-xs text-gray-400 font-medium">In Stock</span>
                                    </div>
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