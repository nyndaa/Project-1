<nav class="bg-white text-gray-800 px-6 py-4 flex justify-between items-center sticky top-0 z-50 shadow-md" x-data="{ open: false, searchOpen: false }">

    <div class="flex items-center space-x-2">
        <div class="bg-yellow-500 p-2 rounded-lg">
            <i class="fas fa-robot text-white text-xl"></i>
        </div>
      <a href="http://localhost/Project-1/pages/shoppages.php" class="inline-block hover:opacity-80 transition-opacity">
    <span class="font-black text-2xl tracking-tighter text-gray-900">
        Cuttiest<span class="text-yellow-500">.co</span>
    </span>
</a>
    </div>

    <div class="hidden md:flex space-x-8 font-semibold uppercase text-sm tracking-wide">
        <a href="/TokoCantikBanget/index.php" class="hover:text-yellow-500 transition-colors">Home</a>
        <a href="/TokoCantikBanget/pages/shoppages.php" class="hover:text-yellow-500 transition-colors">Catalog</a>
        <a href="#" class="hover:text-yellow-500 transition-colors">Best Sellers</a>
        <a href="#" class="hover:text-yellow-500 transition-colors">Promo</a>
    </div>

    <div class="flex items-center space-x-5">
        <button @click="searchOpen = !searchOpen" class="hover:text-yellow-500 transition-transform hover:scale-110">
            <i class="fas fa-search text-xl"></i>
        </button>

        <a href="../pages/settings.php" class="hidden sm:block hover:text-yellow-500 transition-transform hover:scale-110">
            <i class="far fa-user text-xl"></i>
        </a>

        <a href=" /TokoCantikBanget/pages/shoppingcart.php" class="relative hover:text-yellow-500 transition-transform hover:scale-110">
            <i class="fas fa-shopping-bag text-xl"></i>
            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full">
                3
            </span>
        </a>

        <button @click="open = !open" class="md:hidden focus:outline-none">
            <i :class="open ? 'fa fa-times' : 'fa fa-bars-staggered'" class="text-2xl"></i>
        </button>
    </div>

    <div x-show="searchOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="absolute top-full left-0 w-full bg-white border-b p-4 shadow-xl">
        <div class="container mx-auto flex">
            <input type="text" placeholder="Search for your favorite figures..." class="w-full bg-gray-100 border-none rounded-full px-6 py-2 focus:ring-2 focus:ring-yellow-500 outline-none">
        </div>
    </div>

    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-x-full"
         x-transition:enter-end="opacity-100 translate-x-0"
         @click.away="open = false"
         class="fixed top-0 right-0 h-full w-64 bg-white shadow-2xl z-[60] p-6 md:hidden">
        
        <div class="flex justify-end mb-8">
            <button @click="open = false"><i class="fas fa-times text-2xl"></i></button>
        </div>

        <div class="flex flex-col space-y-6 font-bold text-lg">
            <a href="/TokoCantikBanget/index.php" class="border-b pb-2">Home</a>
            <a href="/TokoCantikBanget/pages/shoppages.php" class="border-b pb-2">Catalog</a>
            <a href="#" class="border-b pb-2">Best Sellers</a>
            <a href="#" class="border-b pb-2">Promo</a>
            <a href="#" class="text-yellow-600">Track Order</a>
        </div>
    </div>
</nav>