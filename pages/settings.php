<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings - Cuttiest.co</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
     <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 512 512%22><text y=%22400%22 font-size=%22400%22>🤖</text></svg>">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans text-gray-800 bg-gray-50">

    <?php include '../template/navbar.php';?>

    <main class="pt-32 pb-20">
        <div class="container mx-auto px-6">
            <h1 class="text-3xl font-black text-gray-900 mb-10 uppercase italic tracking-tighter">Account <span class="text-yellow-500">Settings</span></h1>

            <div class="flex flex-col lg:flex-row gap-10" x-data="{ tab: 'profile' }">
                
                <aside class="lg:w-1/4">
                    <div class="bg-white rounded-3xl p-4 shadow-sm border border-gray-100">
                        <nav class="flex flex-col space-y-1">
                            <button @click="tab = 'profile'" :class="tab === 'profile' ? 'bg-yellow-500 text-gray-900 font-bold' : 'text-gray-500 hover:bg-gray-50'" 
                                    class="flex items-center gap-3 px-6 py-4 rounded-2xl transition-all text-sm">
                                <i class="fas fa-user-circle text-lg"></i> Public Profile
                            </button>
                            <button @click="tab = 'security'" :class="tab === 'security' ? 'bg-yellow-500 text-gray-900 font-bold' : 'text-gray-500 hover:bg-gray-50'" 
                                    class="flex items-center gap-3 px-6 py-4 rounded-2xl transition-all text-sm">
                                <i class="fas fa-shield-alt text-lg"></i> Password & Security
                            </button>
                            <button @click="tab = 'orders'" :class="tab === 'orders' ? 'bg-yellow-500 text-gray-900 font-bold' : 'text-gray-500 hover:bg-gray-50'" 
                                    class="flex items-center gap-3 px-6 py-4 rounded-2xl transition-all text-sm">
                                <i class="fas fa-box text-lg"></i> My Orders
                            </button>
                            <hr class="my-2 border-gray-50">
                            <button class="flex items-center gap-3 px-6 py-4 rounded-2xl text-red-500 hover:bg-red-50 transition-all text-sm font-bold">
                                <i class="fas fa-sign-out-alt text-lg"></i> Log Out
                            </button>
                        </nav>
                    </div>
                </aside>

                <div class="lg:w-3/4">
                    
                    <div x-show="tab === 'profile'" x-transition class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                        <h2 class="text-xl font-bold text-gray-900 mb-8">Personal Information</h2>
                        
                        <form action="#" class="space-y-6">
                            <div class="flex items-center gap-6 mb-8 pb-8 border-b border-gray-50">
                                <div class="relative group">
                                    <img src="https://picsum.photos/id/64/200/200" alt="Avatar" class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-md">
                                    <button class="absolute inset-0 bg-black/40 rounded-full opacity-0 group-hover:opacity-100 transition flex items-center justify-center text-white text-xs">
                                        <i class="fas fa-camera text-xl"></i>
                                    </button>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Your Avatar</h4>
                                    <p class="text-sm text-gray-400">PNG or JPG, max 2MB.</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-xs font-bold uppercase text-gray-400 tracking-widest">Full Name</label>
                                    <input type="text" value="Alexander Cuttiest" class="w-full bg-gray-50 border-none rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-yellow-500 outline-none">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-xs font-bold uppercase text-gray-400 tracking-widest">Email Address</label>
                                    <input type="email" value="alex@example.com" class="w-full bg-gray-50 border-none rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-yellow-500 outline-none">
                                </div>
                                <div class="space-y-2 md:col-span-2">
                                    <label class="text-xs font-bold uppercase text-gray-400 tracking-widest">Bio</label>
                                    <textarea rows="3" class="w-full bg-gray-50 border-none rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-yellow-500 outline-none" placeholder="Tell us about your collection..."></textarea>
                                </div>
                            </div>

                            <div class="pt-6">
                                <button type="submit" class="bg-gray-900 text-white px-10 py-3 rounded-xl font-bold hover:bg-yellow-500 hover:text-gray-900 transition shadow-lg shadow-gray-200">Save Changes</button>
                            </div>
                        </form>
                    </div>

                    <div x-show="tab === 'security'" x-transition class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                        <h2 class="text-xl font-bold text-gray-900 mb-8">Update Password</h2>
                        <form action="#" class="space-y-6 max-w-md">
                            <div class="space-y-2">
                                <label class="text-xs font-bold uppercase text-gray-400 tracking-widest">Current Password</label>
                                <input type="password" class="w-full bg-gray-50 border-none rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-yellow-500 outline-none">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold uppercase text-gray-400 tracking-widest">New Password</label>
                                <input type="password" class="w-full bg-gray-50 border-none rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-yellow-500 outline-none">
                            </div>
                            <div class="pt-6">
                                <button type="submit" class="bg-gray-900 text-white px-10 py-3 rounded-xl font-bold hover:bg-yellow-500 hover:text-gray-900 transition shadow-lg">Change Password</button>
                            </div>
                        </form>
                    </div>

                    <div x-show="tab === 'orders'" x-transition class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Order History</h2>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-2xl">
                                <div class="flex items-center gap-4">
                                    <div class="bg-white p-2 rounded-lg border border-gray-100 font-bold text-xs">#INV-9901</div>
                                    <div>
                                        <p class="font-bold text-sm">2 Items Purchased</p>
                                        <p class="text-xs text-gray-400">Ordered on April 28, 2026</p>
                                    </div>
                                </div>
                                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-[10px] font-black uppercase">Delivered</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php include '../template/footer.php';?>

</body>
</html>