<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuttiest.co - Premium Action Figures & Collectibles</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
     <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 512 512%22><text y=%22400%22 font-size=%22400%22>🤖</text></svg>">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        [x-cloak] { display: none !important; }
        .hero-gradient { background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.7)); }
    </style>
</head>
<body class="font-sans text-gray-800 bg-gray-50 selection:bg-yellow-200">
    <?php include 'template/navbar.php'; ?>

    <section class="relative min-h-screen flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="h-full w-full bg-cover bg-center transition-transform duration-[10000ms] scale-110 " 
                 style="background-image: url('https://img3.wallspic.com/previews/2/4/6/2/62642/62642-hulk-film-pc_game-fictional_character-superhero_movie-x750.jpg');">
                <div class="absolute inset-0 hero-gradient"></div>
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
            <div class="max-w-3xl transition-all duration-1000 transform" 
                 :class="loaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
                
                <span class="inline-block px-4 py-1 rounded-full bg-yellow-500 text-gray-900 font-bold text-xs uppercase tracking-widest mb-4">
                    New Arrivals 2026
                </span>
                
                <h1 class="text-5xl md:text-7xl font-black text-white leading-tight mb-6 tracking-tight">
                    Bring Your <span class="text-yellow-500">Heroes</span> To Life.
                </h1>
                
                <p class="text-lg md:text-xl text-gray-200 mb-10 leading-relaxed md:pr-24">
                    Koleksi action figure premium dengan detail tinggi. Dari karakter ikonik hingga edisi terbatas yang langka, temukan joy dalam setiap box.
                </p>
                
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="pages/shoppages.php" class="bg-yellow-500 hover:bg-yellow-400 text-gray-900 font-bold py-4 px-10 rounded-xl shadow-lg shadow-yellow-500/20 transition-all hover:scale-105 flex items-center justify-center group">
                        Explore Collection
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition"></i>
                    </a>
                    <a href="#quote" class="bg-white/10 backdrop-blur-md border border-white/30 text-white hover:bg-white hover:text-gray-900 font-bold py-4 px-10 rounded-xl transition-all flex items-center justify-center">
                        Request Pre-Order
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white py-10 border-b border-gray-100">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-3xl font-black text-gray-900">10k+</p>
                    <p class="text-gray-500 text-sm">Figures Sold</p>
                </div>
                <div>
                    <p class="text-3xl font-black text-gray-900">500+</p>
                    <p class="text-gray-500 text-sm">Limited Editions</p>
                </div>
                <div>
                    <p class="text-3xl font-black text-gray-900">4.9/5</p>
                    <p class="text-gray-500 text-sm">Rating Reviews</p>
                </div>
                <div>
                    <p class="text-3xl font-black text-gray-900">24h</p>
                    <p class="text-gray-500 text-sm">Fast Shipping</p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-24" id="featured">
        <div class="container mx-auto px-6 text-center mb-16">
            <h2 class="text-4xl font-black text-gray-900 mb-4 tracking-tight">Edisi Kolektor Terbaru</h2>
            <p class="text-gray-600 max-w-xl mx-auto">Dipilih secara khusus untuk kamu yang menghargai kualitas dan detail sempurna.</p>
        </div>

        <div class="container mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <template x-for="item in [
                { name: 'Cyber Hero X', img: 'https://images.unsplash.com/photo-1613771404784-3a6b7c1b1a6a', price: '$89.00', category: 'Futuristic' },
                { name: 'Shadow Ninja', img: 'https://images.unsplash.com/photo-1608889175638-3c0a1d6c0d9e', price: '$120.00', category: 'Warrior' },
                { name: 'Galaxy Warrior', img: 'https://images.unsplash.com/photo-1612831455546-9f1b8b3a1b7a', price: '$95.00', category: 'Sci-Fi' }
            ]">
                <div class="group bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-500">
                    <div class="relative overflow-hidden aspect-square">
                        <img :src="item.img" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-4 left-4 bg-yellow-500 text-gray-900 text-[10px] font-bold px-2 py-1 rounded">HOT ITEM</div>
                        <div class="absolute inset-x-0 bottom-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform">
                            <button class="w-full bg-gray-900 text-white py-3 rounded-lg font-bold text-sm shadow-xl">+ Add to Cart</button>
                        </div>
                    </div>
                    <div class="p-6 text-left">
                        <p class="text-yellow-600 text-xs font-bold uppercase tracking-wider mb-1" x-text="item.category"></p>
                        <h3 class="text-xl font-bold text-gray-900 mb-2" x-text="item.name"></h3>
                        <p class="text-gray-900 font-black text-lg" x-text="item.price"></p>
                    </div>
                </div>
            </template>
        </div>
    </section>

    <section class="py-24 bg-gray-900 text-white overflow-hidden relative">
        <div class="absolute top-0 right-0 w-64 h-64 bg-yellow-500 rounded-full blur-[120px] opacity-10"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2">
                    <h2 class="text-4xl font-black mb-6 leading-tight">Kenapa Kolektor <br>Memilih <span class="text-yellow-500">Cuttiest.co?</span></h2>
                    <p class="text-gray-400 mb-8">Kami tidak hanya menjual mainan, kami membantu kamu membangun warisan koleksi yang berharga.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-yellow-500/10 text-yellow-500 rounded-lg flex items-center justify-center shrink-0 mr-4">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">100% Original Guaranteed</h4>
                                <p class="text-gray-500 text-sm">Semua item datang dengan sertifikat keaslian resmi.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-yellow-500/10 text-yellow-500 rounded-lg flex items-center justify-center shrink-0 mr-4">
                                <i class="fas fa-box-open"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Collector-Grade Packaging</h4>
                                <p class="text-gray-500 text-sm">Box dipacking dengan double bubble-wrap + kardus tebal.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaad5b" class="rounded-2xl shadow-2xl mt-8" alt="figure1">
                    <img src="https://images.unsplash.com/photo-1594736224132-33b45058c971" class="rounded-2xl shadow-2xl" alt="figure2">
                </div>
            </div>
        </div>
    </section>

    <section class="py-24" id="quote">
        <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            
            <div x-data="contactForm">
                <div class="bg-white p-10 rounded-3xl shadow-2xl border border-gray-100">
                    <h2 class="text-3xl font-black text-gray-900 mb-2">Request Exclusive Item</h2>
                    <p class="text-gray-500 mb-8 text-sm">Cari figure langka? Hubungi tim pemburu kami.</p>
                    
                    <form @submit.prevent="submit" class="space-y-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-bold uppercase text-gray-400 mb-2">Full Name</label>
                                <input type="text" x-model="name" class="w-full bg-gray-50 border-none rounded-xl px-5 py-3 focus:ring-2 focus:ring-yellow-500 outline-none transition">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase text-gray-400 mb-2">Email Address</label>
                                <input type="email" x-model="email" class="w-full bg-gray-50 border-none rounded-xl px-5 py-3 focus:ring-2 focus:ring-yellow-500 outline-none transition">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase text-gray-400 mb-2">Figure yang dicari</label>
                            <textarea x-model="message" rows="3" class="w-full bg-gray-50 border-none rounded-xl px-5 py-3 focus:ring-2 focus:ring-yellow-500 outline-none transition"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gray-900 text-white font-bold py-4 rounded-xl hover:bg-yellow-500 hover:text-gray-900 transition-all shadow-lg" :disabled="loading">
                            <span x-show="!loading">Send Request</span>
                            <span x-show="loading">Processing...</span>
                        </button>
                        <div x-show="submitted" x-cloak class="p-4 bg-green-50 text-green-700 rounded-xl text-sm font-medium">
                            Permintaan berhasil dikirim! Tim kami akan menghubungi via Email.
                        </div>
                    </form>
                </div>
            </div>

            <div class="space-y-8">
                <div class="inline-block p-2 bg-yellow-100 text-yellow-600 rounded-lg text-xs font-black uppercase tracking-tighter mb-4">Collectors Stories</div>
                <h2 class="text-4xl font-black text-gray-900 leading-tight">Apa Kata Mereka Tentang Cuttiest.co?</h2>
                <div class="bg-gray-50 p-8 rounded-2xl border-l-4 border-yellow-500 italic text-gray-600">
                    "Kualitas packingnya juara! Figure sampai tanpa penyok sedikitpun di box-nya. Sangat direkomendasikan untuk kolektor yang detail-oriented."
                    <div class="mt-6 flex items-center not-italic">
                        <div class="w-10 h-10 bg-yellow-500 rounded-full mr-3 flex items-center justify-center font-bold text-gray-900">RJ</div>
                        <div>
                            <p class="font-bold text-gray-900 text-sm">Ruthy J.</p>
                            <p class="text-xs text-gray-400">Verified Collector</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include 'template/footer.php';?>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('contactForm', () => ({
                name: '', email: '', message: '',
                submitted: false, loading: false,
                submit() {
                    if(!this.name || !this.email) return;
                    this.loading = true;
                    setTimeout(() => {
                        this.loading = false;
                        this.submitted = true;
                        this.name = ''; this.email = ''; this.message = '';
                    }, 1500);
                }
            }));
        });
    </script>

    <div x-data="{ show: false }" @scroll.window="show = window.pageYOffset > 500">
        <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })" 
                x-show="show" x-transition x-cloak
                class="fixed bottom-10 right-10 bg-yellow-500 text-gray-900 w-14 h-14 rounded-2xl shadow-2xl shadow-yellow-500/40 hover:scale-110 transition active:scale-95 flex items-center justify-center z-50 group">
            <i class="fas fa-chevron-up group-hover:-translate-y-1 transition"></i>
        </button>
    </div>
</body>
</html>