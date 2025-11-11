<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Nur Fadhil Ramadhan</title>
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
        
        .skill-bar {
            transition: width 1.5s ease-out;
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
                    <a href="{{ route('about') }}" class="text-purple-600 font-bold">About</a>
                    <a href="{{ route('projects') }}" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Projects</a>
                    <a href="{{ route('novel') }}" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Novel</a>
                    <a href="{{ route('home') }}#contact" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Contact</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="menuBtn" class="md:hidden text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden pb-4">
                <a href="{{ route('home') }}" class="block py-2 text-gray-700 hover:text-purple-600">Home</a>
                <a href="{{ route('about') }}" class="block py-2 text-purple-600 font-bold">About</a>
                <a href="{{ route('projects') }}" class="block py-2 text-gray-700 hover:text-purple-600">Projects</a>
                <a href="{{ route('novel') }}" class="block py-2 text-gray-700 hover:text-purple-600">Novel</a>
                <a href="{{ route('home') }}#contact" class="block py-2 text-gray-700 hover:text-purple-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-6 bg-gradient-to-br from-purple-600 via-purple-500 to-pink-500">
        <div class="max-w-5xl mx-auto text-center text-white fade-in-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">Tentang Saya</h1>
            <p class="text-xl md:text-2xl opacity-90">Designer, Developer, dan Storyteller</p>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="py-24 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-16 items-center mb-20">
                <div class="order-2 md:order-1">
                    <div class="rounded-3xl shadow-2xl overflow-hidden transform hover:scale-105 transition duration-300">
                        <img src="/images/about.jpg" alt="About Nur Fadhil Ramadhan" class="w-full h-auto object-cover">
                    </div>
                </div>
                
                <div class="order-1 md:order-2">
                    <h2 class="text-4xl font-bold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">
                        Nur Fadhil Ramadhan
                    </h2>
                    <p class="text-gray-700 text-lg mb-4 leading-relaxed">
                        Halo! Saya Fadhil, seorang mahasiswa Teknik Elektro dengan konsentrasi Software Engineering di Universitas Negeri Makassar. Saya passionate di bidang <span class="font-semibold text-purple-600">UI/UX Design</span> dan <span class="font-semibold text-pink-600">Creative Writing</span>.
                    </p>
                    <p class="text-gray-700 text-lg mb-4 leading-relaxed">
                        Bagi saya, mendesain interface dan menulis novel memiliki kesamaan yang mendalam - keduanya tentang menciptakan pengalaman yang berkesan dan menyentuh hati manusia.
                    </p>
                    <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                        Saya percaya bahwa teknologi yang baik tidak hanya fungsional, tetapi juga memiliki cerita dan emosi di dalamnya.
                    </p>
                    
                    <div class="flex flex-wrap gap-3 mb-6">
                        <span class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full font-semibold">UI/UX Designer</span>
                        <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full font-semibold">Web Developer</span>
                        <span class="bg-pink-100 text-pink-800 px-4 py-2 rounded-full font-semibold">Storyteller</span>
                    </div>
                    
                    <a href="/files/cv.pdf" download class="inline-block bg-purple-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-purple-700 transition duration-300 shadow-lg transform hover:scale-105">
                        Download CV
                    </a>
                </div>
            </div>

            <!-- Education -->
            <div class="mb-20">
                <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">Pendidikan</h2>
                <div class="max-w-3xl mx-auto">
                    <div class="bg-gradient-to-r from-purple-50 to-pink-50 p-8 rounded-3xl shadow-lg">
                        <div class="flex items-start gap-6">
                            <div class="bg-purple-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold flex-shrink-0">
                                🎓
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">Universitas Negeri Makassar</h3>
                                <p class="text-lg text-gray-600 mb-2">D4 Teknik Elektro - Konsentrasi Software Engineering</p>
                                <p class="text-gray-500">2023 - Sekarang</p>
                                <p class="text-gray-700 mt-4 leading-relaxed">
                                    Fokus pada pengembangan software, UI/UX design, dan web development dengan pendekatan user-centered design.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skills Section -->
            <div>
                <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">Skills & Expertise</h2>
                <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                    <!-- UI/UX Design -->
                    <div class="bg-white p-8 rounded-3xl shadow-lg">
                        <h3 class="text-2xl font-bold mb-6 text-purple-600 flex items-center gap-3">
                            <span class="text-4xl">🎨</span>
                            UI/UX Design
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold text-gray-700">Design System</span>
                                    <span class="text-purple-600 font-bold">85%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-3">
                                    <div class="skill-bar bg-gradient-to-r from-purple-500 to-purple-600 h-3 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold text-gray-700">User Experience</span>
                                    <span class="text-purple-600 font-bold">80%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-3">
                                    <div class="skill-bar bg-gradient-to-r from-purple-500 to-purple-600 h-3 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold text-gray-700">Prototyping</span>
                                    <span class="text-purple-600 font-bold">75%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-3">
                                    <div class="skill-bar bg-gradient-to-r from-purple-500 to-purple-600 h-3 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Web Development -->
                    <div class="bg-white p-8 rounded-3xl shadow-lg">
                        <h3 class="text-2xl font-bold mb-6 text-blue-600 flex items-center gap-3">
                            <span class="text-4xl">💻</span>
                            Web Development
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold text-gray-700">HTML & CSS</span>
                                    <span class="text-blue-600 font-bold">90%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-3">
                                    <div class="skill-bar bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold text-gray-700">JavaScript</span>
                                    <span class="text-blue-600 font-bold">75%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-3">
                                    <div class="skill-bar bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold text-gray-700">Laravel</span>
                                    <span class="text-blue-600 font-bold">70%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-3">
                                    <div class="skill-bar bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Creative Writing -->
                    <div class="bg-white p-8 rounded-3xl shadow-lg">
                        <h3 class="text-2xl font-bold mb-6 text-pink-600 flex items-center gap-3">
                            <span class="text-4xl">✍️</span>
                            Creative Writing
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold text-gray-700">Storytelling</span>
                                    <span class="text-pink-600 font-bold">85%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-3">
                                    <div class="skill-bar bg-gradient-to-r from-pink-500 to-pink-600 h-3 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold text-gray-700">Character Development</span>
                                    <span class="text-pink-600 font-bold">80%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-3">
                                    <div class="skill-bar bg-gradient-to-r from-pink-500 to-pink-600 h-3 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-semibold text-gray-700">Content Writing</span>
                                    <span class="text-pink-600 font-bold">85%</span>
                                </div>
                                <div class="bg-gray-200 rounded-full h-3">
                                    <div class="skill-bar bg-gradient-to-r from-pink-500 to-pink-600 h-3 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tools -->
                    <div class="bg-white p-8 rounded-3xl shadow-lg">
                        <h3 class="text-2xl font-bold mb-6 text-green-600 flex items-center gap-3">
                            <span class="text-4xl">🛠️</span>
                            Tools & Software
                        </h3>
                        <div class="flex flex-wrap gap-3">
                            <span class="bg-gray-100 text-gray-800 px-4 py-2 rounded-lg font-medium">Adobe XD</span>
                            <span class="bg-gray-100 text-gray-800 px-4 py-2 rounded-lg font-medium">VS Code</span>
                            <span class="bg-gray-100 text-gray-800 px-4 py-2 rounded-lg font-medium">Github</span>
                            <span class="bg-gray-100 text-gray-800 px-4 py-2 rounded-lg font-medium">Tailwind CSS</span>
                            <span class="bg-gray-100 text-gray-800 px-4 py-2 rounded-lg font-medium">Laravel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-900 to-gray-800 text-white py-10 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <p class="mb-3 text-xl font-bold">Nur Fadhil Ramadhan</p>
            <p class="text-gray-400 text-base mb-5">UI/UX Designer | Storyteller | Software Engineering Student</p>
            <div class="flex justify-center gap-4 mb-5">
                <a href="https://www.linkedin.com/in/nur-fadhil-ramadhan-73b05438b/" target="_blank" class="hover:text-purple-400 transition">LinkedIn</a>
                <a href="https://github.com/fadhilramadhan23" target="_blank" class="hover:text-purple-400 transition">GitHub</a>
                <a href="https://www.instagram.com/_fdhilramadhan" target="_blank" class="hover:text-purple-400 transition">Instagram</a>
            </div>
            <p class="text-gray-500 text-sm">&copy; 2025 Nur Fadhil Ramadhan. Made with ❤️</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 bg-purple-600 text-white w-12 h-12 rounded-full shadow-lg hover:bg-purple-700 transition hidden items-center justify-center z-50">
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