<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swing It Playsets - Where Imaginations Come to Life</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans text-gray-800 bg-gradient-to-b from-sky-50 to-white">
<?php include '../template/navbar.php';?>
<?php include '../template/footer.php';?>
    <!-- Hero Section -->
    <div class="relative">
        <!-- Full-width background image -->
        <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('https://images.unsplash.com/photo-1595434091143-b375ced5fe5c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); height: 85vh;">
            <div class="absolute inset-0 bg-black opacity-20"></div>
        </div>
        

        <!-- Hero Content -->
        <div class="container mx-auto px-6 pt-32 pb-48 relative z-10" x-data="{ fadeIn: false }" x-init="setTimeout(() => fadeIn = true, 500)">
            <div class="max-w-3xl transition-all duration-1000" :class="fadeIn ? 'opacity-100 transform translate-y-0' : 'opacity-0 transform translate-y-10'">
                <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight mb-6">Where Imaginations <br>Come to Life</h1>
                <p class="text-xl text-white mb-8 md:pr-12">Premium vinyl playsets designed for endless adventures, built to last for generations of fun.</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#featured" class="bg-yellow-500 hover:bg-yellow-400 text-gray-900 font-bold py-3 px-8 rounded-lg transition transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <span>Explore Playsets</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="#contact" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-gray-900 font-bold py-3 px-8 rounded-lg transition transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <span>Get a Quote</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-20 bg-white" id="features">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Families Choose SwingIt</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our premium playsets are designed with both children and parents in mind.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Feature 1 -->
                <div class="text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300" 
                     x-data="{ hover: false }" 
                     @mouseenter="hover = true" 
                     @mouseleave="hover = false">
                    <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center bg-yellow-100 text-yellow-500 rounded-full text-3xl" :class="{ 'transform scale-110': hover }">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Premium Quality</h3>
                    <p class="text-gray-600">Durable vinyl construction that withstands years of active play without fading, splintering, or requiring maintenance.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300" 
                     x-data="{ hover: false }" 
                     @mouseenter="hover = true" 
                     @mouseleave="hover = false">
                    <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center bg-blue-100 text-blue-500 rounded-full text-3xl" :class="{ 'transform scale-110': hover }">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Custom Designs</h3>
                    <p class="text-gray-600">Create a personalized playset that fits your space, budget, and your children's unique play preferences.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="text-center p-6 rounded-xl hover:shadow-xl transition-all duration-300" 
                     x-data="{ hover: false }" 
                     @mouseenter="hover = true" 
                     @mouseleave="hover = false">
                    <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center bg-green-100 text-green-500 rounded-full text-3xl" :class="{ 'transform scale-110': hover }">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Safety First</h3>
                    <p class="text-gray-600">Built with rounded edges, secure connections, and premium materials that meet rigorous safety standards.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonials -->
    <div class="py-20 bg-white" id="testimonials">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">What Our Customers Say</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Join hundreds of happy families who've chosen SwingIt for their children's outdoor play.</p>
            </div>
            
            <div class="max-w-4xl mx-auto" x-data="{ current: 0, testimonials: [0, 1, 2] }">
                <div class="relative">
                    <!-- Testimonial Slides -->
                    <div class="overflow-hidden relative h-80">
                        <!-- Testimonial 1 -->
                        <div class="absolute inset-0 transition-all duration-500 ease-in-out p-8 bg-gray-50 rounded-xl flex flex-col justify-center"
                             :class="{ 'opacity-100 transform translate-x-0': current === 0, 'opacity-0 transform translate-x-full': current !== 0 }">
                            <div class="text-yellow-500 mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-600 italic mb-6 text-lg">"I love my swing set! SwingIt helped me with the design and planning and was so pleasant to work with. They helped me stay within my budget and time frame, and the delivery and installation was hassle-free. Such nice people to work with!"</p>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-gray-300 flex-shrink-0"></div>
                                <div class="ml-4">
                                    <h4 class="font-bold">Ruthy J.</h4>
                                    <p class="text-gray-500 text-sm">Happy Parent</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="absolute inset-0 transition-all duration-500 ease-in-out p-8 bg-gray-50 rounded-xl flex flex-col justify-center"
                             :class="{ 'opacity-100 transform translate-x-0': current === 1, 'opacity-0 transform translate-x-full': current !== 1 }">
                            <div class="text-yellow-500 mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-600 italic mb-6 text-lg">"We are so very pleased and happy with our beautiful swing set! The process was super quick and easy and the customer service was unbeatable. Thank you for helping us get an incredible playset that will hopefully last us for many more years to come!"</p>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-gray-300 flex-shrink-0"></div>
                                <div class="ml-4">
                                    <h4 class="font-bold">Tzipora B.</h4>
                                    <p class="text-gray-500 text-sm">Delighted Customer</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Testimonial 3 -->
                        <div class="absolute inset-0 transition-all duration-500 ease-in-out p-8 bg-gray-50 rounded-xl flex flex-col justify-center"
                             :class="{ 'opacity-100 transform translate-x-0': current === 2, 'opacity-0 transform translate-x-full': current !== 2 }">
                            <div class="text-yellow-500 mb-4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-gray-600 italic mb-6 text-lg">"Highly recommend. Amazing service, very high-quality set. Children are using and abusing it and it's in perfect condition several years later. Only regret is not purchasing an even larger one. Worth every penny."</p>
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-gray-300 flex-shrink-0"></div>
                                <div class="ml-4">
                                    <h4 class="font-bold">Tzvi W.</h4>
                                    <p class="text-gray-500 text-sm">Satisfied Parent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navigation Buttons -->
                    <button @click="current = (current - 1 + testimonials.length) % testimonials.length" class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-6 w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center text-gray-800 hover:text-yellow-500 focus:outline-none transition">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button @click="current = (current + 1) % testimonials.length" class="absolute top-1/2 right-0 -translate-y-1/2 translate-x-6 w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center text-gray-800 hover:text-yellow-500 focus:outline-none transition">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                
                <!-- Indicators -->
                <div class="flex justify-center mt-8 space-x-2">
                    <template x-for="(_, index) in testimonials" :key="index">
                        <button @click="current = index" class="w-3 h-3 rounded-full focus:outline-none transition-all duration-300" :class="{ 'bg-yellow-500 scale-110': current === index, 'bg-gray-300': current !== index }"></button>
                    </template>
                </div>
            </div>
        </div>
    </div>


      <!-- Contact Form Section -->
    <div class="py-20 bg-gray-50" id="quote">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Form Column -->
                <div>
                    <h2 class="text-3xl font-bold mb-6">Request a Free Quote</h2>
                    <p class="text-gray-600 mb-8">Fill out the form below, and our team will get back to you within 24 hours with pricing information tailored to your needs.</p>
                    
                    <div x-data="contactForm">
                        <form @submit.prevent="submit">
                            <div class="mb-6">
                                <label for="name" class="block text-gray-700 font-medium mb-2">Your Name*</label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    x-model="name" 
                                    class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition"
                                    :class="{ 'border-red-500': errors.name }"
                                >
                                <div x-show="errors.name" class="text-red-500 text-sm mt-1" x-text="errors.name"></div>
                            </div>
                            
                            <div class="mb-6">
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email Address*</label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    x-model="email" 
                                    class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition"
                                    :class="{ 'border-red-500': errors.email }"
                                >
                                <div x-show="errors.email" class="text-red-500 text-sm mt-1" x-text="errors.email"></div>
                            </div>
                            
                            <div class="mb-6">
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                                <input 
                                    type="tel" 
                                    id="phone" 
                                    x-model="phone" 
                                    class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition"
                                >
                            </div>
                            
                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 font-medium mb-2">Tell Us About Your Project*</label>
                                <textarea 
                                    id="message" 
                                    x-model="message" 
                                    rows="4" 
                                    class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition"
                                    :class="{ 'border-red-500': errors.message }"
                                ></textarea>
                                <div x-show="errors.message" class="text-red-500 text-sm mt-1" x-text="errors.message"></div>
                            </div>
                            
                            <button 
                                type="submit" 
                                class="bg-yellow-500 hover:bg-yellow-400 text-gray-900 font-bold py-3 px-8 rounded-lg transition transform hover:-translate-y-1 inline-flex items-center justify-center"
                                :class="{ 'opacity-75 cursor-not-allowed': loading }"
                                :disabled="loading"
                            >
                                <span x-show="!loading">Submit Request</span>
                                <span x-show="loading" class="flex items-center">
                                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    Processing...
                                </span>
                            </button>
                            
                            <div x-show="submitted" class="mt-4 p-4 bg-green-100 text-green-700 rounded-lg">
                                Thank you for your request! We'll be in touch shortly.
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Info Column -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold mb-6">Why Choose Demo?</h3>
                    
                    <div class="mb-8">
                        <div class="flex mb-4">
                            <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-500 text-xl mr-4 flex-shrink-0">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Premium Materials</h4>
                                <p class="text-gray-600">Our vinyl construction offers superior durability without splinters or maintenance worries.</p>
                            </div>
                        </div>
                        
                        <div class="flex mb-4">
                            <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-500 text-xl mr-4 flex-shrink-0">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Professional Installation</h4>
                                <p class="text-gray-600">Expert installation included with every purchase for safety and peace of mind.</p>
                            </div>
                        </div>
                        
                        <div class="flex mb-4">
                            <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-500 text-xl mr-4 flex-shrink-0">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-1">Industry-Leading Warranty</h4>
                                <p class="text-gray-600">Comprehensive coverage that protects your investment for years to come.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h4 class="font-bold text-lg mb-4">Contact Information</h4>
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-500 text-lg mr-4 flex-shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <p class="text-gray-600">Serving NY, NJ & CT Areas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-20 bg-yellow-500" id="contact">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Ready to Create Endless Adventures?</h2>
                <p class="text-xl text-white mb-10">Get in touch with our playset experts and start designing your family's dream playset today.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-3xl mx-auto">
                    <!-- Phone -->
                    <a href="tel:9097779911" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all transform hover:-translate-y-1 flex items-center">
                        <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-500 text-xl mr-4">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="font-bold text-lg">Call Us</h3>
                            <p class="text-gray-600">909.777.9911</p>
                        </div>
                    </a>
                    
                    <!-- Email -->
                    <a href="mailto:info@demo.com" class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all transform hover:-translate-y-1 flex items-center">
                        <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center text-yellow-500 text-xl mr-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text-left">
                            <h3 class="font-bold text-lg">Email Us</h3>
                            <p class="text-gray-600">info@demo.com</p>
                        </div>
                    </a>
                </div>
                
                <div class="mt-12">
                    <a href="#quote" class="bg-gray-900 hover:bg-gray-800 text-white font-bold py-3 px-8 rounded-lg transition transform hover:-translate-y-1 inline-flex items-center justify-center">
                        <span>Request a Free Quote</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

                
                <!-- Products -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Products</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Swing Sets</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Playhouses</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Combo Playsets</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Accessories</a></li>
                    </ul>
                </div>
                
                <!-- Resources -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Gallery</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Safety Tips</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Installation Guide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">FAQs</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="text-gray-400 flex items-center">
                            <i class="fas fa-phone mr-2 text-yellow-500"></i>
                            <span>909.777.9911</span>
                        </li>
                        <li class="text-gray-400 flex items-center">
                            <i class="fas fa-envelope mr-2 text-yellow-500"></i>
                            <span>info@demo.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-gray-800 pt-8">
                <p class="text-gray-500 text-center">&copy; 2025 Demo. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Custom Alpine.js Components -->
    <script>
        // Add intersection observer polyfill for older browsers
        document.addEventListener('alpine:init', () => {
            // Custom directive for scroll animations
            Alpine.directive('intersect', (el, { value, expression, modifiers }) => {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            value(entry.target);
                            if (modifiers.includes('once')) {
                                observer.unobserve(entry.target);
                            }
                        }
                    });
                }, {
                    root: null,
                    threshold: 0.1,
                    rootMargin: '0px'
                });
                
                observer.observe(el);
                
                return () => {
                    observer.unobserve(el);
                };
            });
            
                       
            // Contact form
            Alpine.data('contactForm', () => ({
                name: '',
                email: '',
                phone: '',
                message: '',
                submitted: false,
                loading: false,
                errors: {},
                
                validate() {
                    this.errors = {};
                    
                    if (!this.name.trim()) {
                        this.errors.name = 'Name is required';
                    }
                    
                    if (!this.email.trim()) {
                        this.errors.email = 'Email is required';
                    } else if (!/^\S+@\S+\.\S+$/.test(this.email)) {
                        this.errors.email = 'Please enter a valid email';
                    }
                    
                    if (!this.message.trim()) {
                        this.errors.message = 'Message is required';
                    }
                    
                    return Object.keys(this.errors).length === 0;
                },
                
                submit() {
                    if (this.validate()) {
                        this.loading = true;
                        
                        // Simulate form submission
                        setTimeout(() => {
                            this.loading = false;
                            this.submitted = true;
                            this.resetForm();
                        }, 1500);
                    }
                },
                
                resetForm() {
                    this.name = '';
                    this.email = '';
                    this.phone = '';
                    this.message = '';
                }
            }));
        });
    </script>

    <!-- Back to top button -->
    <div x-data="{ showButton: false }" @scroll.window="showButton = window.pageYOffset > 500">
        <button 
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })" 
            x-show="showButton" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-10"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform translate-y-10"
            class="fixed bottom-8 right-8 bg-yellow-500 text-gray-900 w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:bg-yellow-400 transition focus:outline-none"
        >
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>
</body>
</html>