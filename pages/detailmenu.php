<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Cyber Hero X - Cuttiest.co</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans text-gray-800 bg-white">

    <?php include '../template/navbar.php';?>

    <main class="pt-24 pb-20">
        <div class="container mx-auto px-6">
            <nav class="flex text-sm text-gray-500 mb-8">
                <a href="index.php" class="hover:text-yellow-600">Home</a>
                <span class="mx-2">/</span>
                <a href="#" class="hover:text-yellow-600">Action Figures</a>
                <span class="mx-2">/</span>
                <span class="text-gray-900 font-medium">Cyber Hero X</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12" x-data="{ quantity: 1, selectedVersion: 'Standard' }">
                
                <div class="space-y-4">
                    <div class="aspect-square bg-gray-100 rounded-3xl overflow-hidden shadow-inner border border-gray-100">
                        <img src="https://images.unsplash.com/photo-1613771404784-3a6b7c1b1a6a" alt="Cyber Hero X Main" class="w-full h-full object-cover">
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <div class="aspect-square rounded-xl overflow-hidden border-2 border-yellow-500 cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1613771404784-3a6b7c1b1a6a" class="w-full h-full object-cover">
                        </div>
                        <div class="aspect-square rounded-xl overflow-hidden bg-gray-100 cursor-pointer opacity-50 hover:opacity-100 transition">
                            <img src="https://images.unsplash.com/photo-1594736224132-33b45058c971" class="w-full h-full object-cover">
                        </div>
                        <div class="aspect-square rounded-xl overflow-hidden bg-gray-100 cursor-pointer opacity-50 hover:opacity-100 transition">
                            <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaad5b" class="w-full h-full object-cover">
                        </div>
                        <div class="aspect-square rounded-xl overflow-hidden bg-gray-100 flex items-center justify-center text-gray-400 text-xs font-bold uppercase tracking-tighter border border-dashed border-gray-300">
                            +5 Photos
                        </div>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="mb-6">
                        <span class="text-yellow-600 font-bold text-sm uppercase tracking-widest">Limited Edition</span>
                        <h1 class="text-4xl font-black text-gray-900 mt-2">Cyber Hero X: Neon Protocol</h1>
                        <div class="flex items-center mt-3 space-x-4">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-400 text-sm">(128 Customer Reviews)</span>
                        </div>
                    </div>

                    <div class="text-3xl font-black text-gray-900 mb-8">
                        $89.00
                    </div>

                    <hr class="border-gray-100 mb-8">

                    <div class="mb-8">
                        <label class="block text-sm font-bold uppercase text-gray-400 mb-4 tracking-tighter">Select Edition</label>
                        <div class="flex flex-wrap gap-3">
                            <button @click="selectedVersion = 'Standard'" 
                                    :class="selectedVersion === 'Standard' ? 'border-yellow-500 bg-yellow-50 text-yellow-700' : 'border-gray-200 text-gray-600'"
                                    class="px-6 py-3 border-2 rounded-xl font-bold text-sm transition">Standard</button>
                            <button @click="selectedVersion = 'Collectors'" 
                                    :class="selectedVersion === 'Collectors' ? 'border-yellow-500 bg-yellow-50 text-yellow-700' : 'border-gray-200 text-gray-600'"
                                    class="px-6 py-3 border-2 rounded-xl font-bold text-sm transition">Collector's (+$20)</button>
                        </div>
                    </div>

                    <div class="mb-8">
                        <label class="block text-sm font-bold uppercase text-gray-400 mb-4 tracking-tighter">Quantity</label>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center border border-gray-200 rounded-xl px-4 py-2 bg-gray-50">
                                <button @click="if(quantity > 1) quantity--" class="p-2 hover:text-yellow-600 transition"><i class="fas fa-minus"></i></button>
                                <span class="px-6 font-bold text-lg" x-text="quantity"></span>
                                <button @click="quantity++" class="p-2 hover:text-yellow-600 transition"><i class="fas fa-plus"></i></button>
                            </div>
                            <span class="text-gray-400 text-sm font-medium">Only 12 items left!</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                        <button class="bg-yellow-500 hover:bg-yellow-400 text-gray-900 font-black py-4 rounded-2xl shadow-xl shadow-yellow-500/20 transition-all flex items-center justify-center">
                            <i class="fas fa-shopping-bag mr-2"></i> Add to Bag
                        </button>
                        <button class="bg-gray-900 hover:bg-gray-800 text-white font-black py-4 rounded-2xl transition-all shadow-xl flex items-center justify-center">
                            Buy Now
                        </button>
                    </div>

                    <div class="grid grid-cols-2 gap-4 p-6 bg-gray-50 rounded-2xl border border-gray-100">
                        <div class="flex items-center text-xs font-bold text-gray-600 uppercase">
                            <i class="fas fa-shipping-fast text-yellow-500 mr-2 text-lg"></i> Fast Shipping
                        </div>
                        <div class="flex items-center text-xs font-bold text-gray-600 uppercase">
                            <i class="fas fa-shield-alt text-yellow-500 mr-2 text-lg"></i> Authenticity Card
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-20 border-t border-gray-100 pt-16">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-2xl font-black mb-6">Description</h3>
                    <div class="prose prose-gray text-gray-600 leading-loose">
                        <p class="mb-4">
                            Hadirkan masa depan ke dalam koleksi Anda dengan **Cyber Hero X**. Dibuat dengan presisi tinggi menggunakan bahan PVC berkualitas militer, figure ini memiliki 32 titik artikulasi yang memungkinkan Anda melakukan berbagai pose dinamis layaknya di dalam film.
                        </p>
                        <ul class="space-y-2 list-none p-0">
                            <li class="flex items-center"><i class="fas fa-check text-yellow-500 mr-3"></i> Tinggi: 18cm (Skala 1:12)</li>
                            <li class="flex items-center"><i class="fas fa-check text-yellow-500 mr-3"></i> Aksesoris: 3 Pasang tangan, 2 Senjata Plasma, 1 Jubah Fabric</li>
                            <li class="flex items-center"><i class="fas fa-check text-yellow-500 mr-3"></i> Finishing: Hand-painted with UV reactive paint</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include '../template/footer.php';?>

    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="fixed bottom-8 right-8 bg-white border border-gray-100 shadow-xl w-12 h-12 rounded-full flex items-center justify-center hover:bg-yellow-500 transition-colors group">
        <i class="fas fa-arrow-up group-hover:-translate-y-1 transition-transform"></i>
    </button>

</body>
</html>