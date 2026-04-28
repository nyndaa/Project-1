<!-- Navigation -->
 <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <!-- Alpine -->
<script src="https://unpkg.com/alpinejs" defer></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Tailwind -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<nav class="bg-black text-white px-6 py-4 flex justify-between items-center relative z-10">

    <!-- Logo -->
    <div class="font-bold text-2xl">
        Demo
    </div>

    <!-- Menu Desktop -->
    <div class="hidden md:flex space-x-10 font-medium">
        <a href="#" class="hover:text-yellow-400">Home</a>
        <a href="#" class="hover:text-yellow-400">Gallery</a>
        <a href="#" class="hover:text-yellow-400">Products</a>
        <a href="#" class="hover:text-yellow-400">About</a>
        <a href="#" class="hover:text-yellow-400">Contact</a>
    </div>

    <!-- Menu Mobile -->
    <div class="md:hidden" x-data="{ open: false }">
        <button @click="open = !open" class="focus:outline-none">
            <i class="fa fa-bars text-2xl"></i>
        </button>

        <div x-show="open" @click.away="open = false"
             class="absolute top-16 right-6 bg-white text-black shadow-lg rounded-lg p-6 w-48">
            
            <div class="flex flex-col space-y-4">
                <a href="#" class="hover:text-yellow-500">Home</a>
                <a href="#" class="hover:text-yellow-500">Gallery</a>
                <a href="#" class="hover:text-yellow-500">Products</a>
                <a href="#" class="hover:text-yellow-500">About</a>
                <a href="#" class="hover:text-yellow-500">Contact</a>
            </div>
        </div>
    </div>

</nav>