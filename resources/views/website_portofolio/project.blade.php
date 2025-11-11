<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Nur Fadhil Ramadhan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
        
        @keyframes fadeInUp {
            from { 
                opacity: 0; 
                transform: translateY(30px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
        
        .project-card {
            transition: all 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-8px);
        }
        
        .filter-btn {
            transition: all 0.3s ease;
        }
        
        .filter-btn.active {
            background: linear-gradient(135deg, #9333ea 0%, #ec4899 100%);
            color: white;
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-50">
    
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center py-5">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">
                    NFR
                </a>
                
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">About</a>
                    <a href="{{ route('projects') }}" class="text-purple-600 font-bold">Projects</a>
                    <a href="{{ route('novel') }}" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Novel</a>
                    <a href="{{ route('home') }}#contact" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Contact</a>
                </div>
                
                <button id="menuBtn" class="md:hidden text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <div id="mobileMenu" class="hidden md:hidden pb-4">
                <a href="{{ route('home') }}" class="block py-2 text-gray-700 hover:text-purple-600">Home</a>
                <a href="{{ route('about') }}" class="block py-2 text-gray-700 hover:text-purple-600">About</a>
                <a href="{{ route('projects') }}" class="block py-2 text-purple-600 font-bold">Projects</a>
                <a href="{{ route('novel') }}" class="block py-2 text-gray-700 hover:text-purple-600">Novel</a>
                <a href="{{ route('home') }}#contact" class="block py-2 text-gray-700 hover:text-purple-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-6 bg-gradient-to-br from-purple-600 via-purple-500 to-pink-500">
        <div class="max-w-6xl mx-auto text-center text-white fade-in-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">My Projects</h1>
            <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">
                Koleksi karya UI/UX Design, Web Development, dan Creative Projects
            </p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-12 px-6 bg-white border-b">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="filter-btn active px-8 py-3 rounded-full font-bold bg-gray-100 text-gray-700 hover:bg-gray-200" data-filter="all">
                    All Projects
                </button>
                <button class="filter-btn px-8 py-3 rounded-full font-bold bg-gray-100 text-gray-700 hover:bg-gray-200" data-filter="uiux">
                    UI/UX Design
                </button>
                <button class="filter-btn px-8 py-3 rounded-full font-bold bg-gray-100 text-gray-700 hover:bg-gray-200" data-filter="webdev">
                    Web Development
                </button>
                <button class="filter-btn px-8 py-3 rounded-full font-bold bg-gray-100 text-gray-700 hover:bg-gray-200" data-filter="other">
                    Other
                </button>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-24 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10" id="projectsGrid">
                
                <!-- Project 1: Portfolio Website -->
                <div class="project-card bg-white rounded-3xl overflow-hidden shadow-xl" data-category="webdev">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-700 h-64 flex items-center justify-center">
                        <svg class="w-24 h-24 text-cyan-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full inline-block mb-3">Web Development</span>
                        <h3 class="text-2xl font-bold mb-3 text-gray-800">Portfolio Website</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Website portfolio interaktif dengan Laravel & Tailwind CSS yang responsive dan modern.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Laravel</span>
                            <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Tailwind CSS</span>
                            <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full">PHP</span>
                        </div>
                        <a href="#" class="inline-flex items-center gap-2 text-purple-600 font-bold hover:text-purple-800 transition">
                            View Project
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 2: E-Commerce UI -->
                <div class="project-card bg-white rounded-3xl overflow-hidden shadow-xl" data-category="uiux">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-700 h-64 flex items-center justify-center">
                        <svg class="w-24 h-24 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full inline-block mb-3">UI/UX Design</span>
                        <h3 class="text-2xl font-bold mb-3 text-gray-800">E-Commerce Dashboard</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Dashboard admin untuk toko online dengan analytics dan product management.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Figma</span>
                            <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full">UI/UX</span>
                            <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Dashboard</span>
                        </div>
                        <a href="#" class="inline-flex items-center gap-2 text-blue-600 font-bold hover:text-blue-800 transition">
                            View Design
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Project 3: Mobile App Design -->
                <div class="project-card bg-white rounded-3xl overflow-hidden shadow-xl" data-category="uiux">
                    <div class="bg-gradient-to-br from-pink-500 to-pink-700 h-64 flex items-center justify-center">
                        <svg class="w-24 h-24 text-blue-100" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="bg-pink-600 text-white text-xs font-bold px-3 py-1 rounded-full inline-block mb-3">UI/UX Design</span>
                        <h3 class="text-2xl font-bold mb-3 text-gray-800">Mobile App UI Kit</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Complete mobile app UI kit dengan berbagai screen dan components yang reusable.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Figma</span>
                            <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Mobile</span>
                            <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full">UI Kit</span>
                        </div>
                        <a href="#" class="inline-flex items-center gap-2 text-pink-600 font-bold hover:text-pink-800 transition">
                            View Design
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Placeholder untuk project baru -->
                <div class="project-card bg-white rounded-3xl overflow-hidden shadow-xl border-2 border-dashed border-gray-300" data-category="other">
                    <div class="bg-gradient-to-br from-gray-200 to-gray-300 h-64 flex items-center justify-center">
                        <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="bg-gray-400 text-white text-xs font-bold px-3 py-1 rounded-full inline-block mb-3">Coming Soon</span>
                        <h3 class="text-2xl font-bold mb-3 text-gray-800">Your Next Project</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Tempat untuk project selanjutnya. Tinggal tambahkan detail dan gambar project Anda di sini.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full">Add tags</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Empty State (hidden by default) -->
            <div id="emptyState" class="hidden text-center py-20">
                <svg class="w-32 h-32 mx-auto text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">No Projects Found</h3>
                <p class="text-gray-600">Try selecting a different filter</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-6 bg-gradient-to-br from-purple-600 to-pink-600">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-4xl font-bold mb-6">Punya Project Menarik?</h2>
            <p class="text-xl mb-8 opacity-90">
                Mari berkolaborasi untuk menciptakan sesuatu yang amazing bersama!
            </p>
            <a href="{{ route('home') }}#contact" class="inline-block bg-white text-purple-600 px-10 py-4 rounded-full text-lg font-bold hover:bg-gray-100 transition shadow-xl transform hover:scale-105">
                Mari Ngobrol!
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-900 to-gray-800 text-white py-10 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <p class="mb-3 text-xl font-bold">Nur Fadhil Ramadhan</p>
            <p class="text-gray-400 text-base mb-5">UI/UX Designer | Storyteller | Software Engineering Student</p>
            <p class="text-gray-500 text-sm">&copy; 2025 Nur Fadhil Ramadhan. Made with ❤️</p>
        </div>
    </footer>

    <!-- Back to Top -->
    <button id="backToTop" class="fixed bottom-8 right-8 bg-purple-600 text-white w-14 h-14 rounded-full shadow-lg hover:bg-purple-700 transition hidden items-center justify-center z-50">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <script>
        // Mobile Menu
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Filter Projects
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');
        const emptyState = document.getElementById('emptyState');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.dataset.filter;
                let visibleCount = 0;

                projectCards.forEach(card => {
                    if (filter === 'all' || card.dataset.category === filter) {
                        card.style.display = 'block';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (visibleCount === 0) {
                    emptyState.classList.remove('hidden');
                } else {
                    emptyState.classList.add('hidden');
                }
            });
        });

        // Back to Top
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.remove('hidden');
                backToTop.classList.add('flex');
            } else {
                backToTop.classList.add('hidden');
                backToTop.classList.remove('flex');
            }
        });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>