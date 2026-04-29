<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Cuttiest.co</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans text-gray-800 bg-gray-50">

    <?php include '../template/navbar.php';?>

    <main class="pt-32 pb-20" x-data="{ 
        cartItems: [
            { id: 1, name: 'Cyber Hero X', price: 89, qty: 1, img: 'https://picsum.photos/id/26/200/200' },
            { id: 2, name: 'Mecha Samurai', price: 210, qty: 1, img: 'https://picsum.photos/id/201/200/200' }
        ],
        shipping: 15,
        get subtotal() {
            return this.cartItems.reduce((sum, item) => sum + (item.price * item.qty), 0);
        },
        get total() {
            return this.subtotal + this.shipping;
        },
        removeItem(id) {
            this.cartItems = this.cartItems.filter(item => item.id !== id);
        }
    }">
        <div class="container mx-auto px-6">
            <h1 class="text-3xl font-black text-gray-900 mb-10 italic uppercase">Shopping <span class="text-yellow-500">Bag</span></h1>

            <div class="flex flex-col lg:flex-row gap-12">
                <div class="lg:w-2/3">
                    <template x-if="cartItems.length > 0">
                        <div class="space-y-6">
                            <template x-for="item in cartItems" :key="item.id">
                                <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm flex items-center gap-6">
                                    <div class="w-24 h-24 bg-gray-100 rounded-2xl overflow-hidden flex-shrink-0">
                                        <img :src="item.img" class="w-full h-full object-cover">
                                    </div>

                                    <div class="flex-grow">
                                        <h3 class="font-bold text-lg text-gray-900" x-text="item.name"></h3>
                                        <p class="text-gray-400 text-sm mb-2">Mint in Box (MIB)</p>
                                        <p class="text-yellow-600 font-black" x-text="'$' + item.price + '.00'"></p>
                                    </div>

                                    <div class="flex items-center border border-gray-100 bg-gray-50 rounded-xl px-2">
                                        <button @click="if(item.qty > 1) item.qty--" class="p-2 hover:text-yellow-600 transition"><i class="fas fa-minus text-xs"></i></button>
                                        <span class="px-4 font-bold w-8 text-center" x-text="item.qty"></span>
                                        <button @click="item.qty++" class="p-2 hover:text-yellow-600 transition"><i class="fas fa-plus text-xs"></i></button>
                                    </div>

                                    <button @click="removeItem(item.id)" class="text-gray-300 hover:text-red-500 transition ml-4">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </template>

                    <template x-if="cartItems.length === 0">
                        <div class="bg-white py-20 rounded-3xl border-2 border-dashed border-gray-200 text-center">
                            <i class="fas fa-shopping-basket text-6xl text-gray-100 mb-4"></i>
                            <p class="text-gray-400 font-medium">Keranjangmu masih kosong nih.</p>
                            <a href="shoppages.php" class="inline-block mt-6 bg-gray-900 text-white px-8 py-3 rounded-xl font-bold hover:bg-yellow-500 hover:text-gray-900 transition">Mulai Belanja</a>
                        </div>
                    </template>
                </div>

                <aside class="lg:w-1/3">
                    <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-xl sticky top-32">
                        <h2 class="text-xl font-black mb-6 uppercase tracking-tighter">Order Summary</h2>
                        
                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between text-gray-500">
                                <span>Subtotal</span>
                                <span class="font-bold text-gray-900" x-text="'$' + subtotal + '.00'"></span>
                            </div>
                            <div class="flex justify-between text-gray-500">
                                <span>Shipping</span>
                                <span class="font-bold text-gray-900" x-text="'$' + shipping + '.00'"></span>
                            </div>
                            <div class="border-t border-gray-100 pt-4 flex justify-between">
                                <span class="font-black text-lg">Total</span>
                                <span class="font-black text-2xl text-yellow-600" x-text="'$' + total + '.00'"></span>
                            </div>
                        </div>

                        <button class="w-full bg-gray-900 text-white py-4 rounded-2xl font-black uppercase tracking-widest hover:bg-yellow-500 hover:text-gray-900 transition-all shadow-lg active:scale-95">
                            Checkout Now
                        </button>

                        <div class="mt-6 flex items-center justify-center gap-4 grayscale opacity-50">
                            <i class="fab fa-cc-visa text-2xl"></i>
                            <i class="fab fa-cc-mastercard text-2xl"></i>
                            <i class="fab fa-cc-paypal text-2xl"></i>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>

    <?php include '../template/footer.php';?>

</body>
</html>