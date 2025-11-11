<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nur Fadhil Ramadhan | UI/UX Designer & Storyteller</title>
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
            animation: fadeInUp 0.6s ease-out;
        }
        
        .project-card {
            transition: all 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-8px);
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
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="{{ route('home') }}" class="text-purple-600 font-bold">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">About</a>
                    <a href="{{ route('projects') }}" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Projects</a>
                    <a href="{{ route('novel') }}" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Novel</a>
                    <a href="#contact" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Contact</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="flex items-center gap-4 md:hidden">
                    <button id="menuBtn" class="text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden pb-4">
                <a href="{{ route('home') }}" class="block py-2 text-purple-600 font-bold">Home</a>
                <a href="{{ route('about') }}" class="block py-2 text-gray-700 hover:text-purple-600 transition">About</a>
                <a href="{{ route('projects') }}" class="block py-2 text-gray-700 hover:text-purple-600 transition">Projects</a>
                <a href="{{ route('novel') }}" class="block py-2 text-gray-700 hover:text-purple-600 transition">Novel</a>
                <a href="#contact" class="block py-2 text-gray-700 hover:text-purple-600 transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 px-6 bg-gradient-to-br from-purple-600 via-purple-500 to-pink-500 min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto text-center text-white w-full fade-in-up">
            <div class="mb-8">
                <div class="w-48 h-48 bg-white rounded-full mx-auto mb-8 flex items-center justify-center shadow-2xl overflow-hidden border-4 border-white">
                    <img src="/images/profil.jpg" alt="Nur Fadhil Ramadhan" class="w-full h-full object-cover">
                </div>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-6">Nur Fadhil Ramadhan</h1>
            <p class="text-2xl md:text-3xl mb-4 font-semibold">UI/UX Designer | Storyteller | Penulis Novel</p>
            <p class="text-lg mb-3 max-w-3xl mx-auto opacity-95 leading-relaxed">
                Mahasiswa Teknik Elektro Konsentrasi Software Engineering @ Universitas Negeri Makassar
            </p>
            <p class="text-base mb-10 max-w-2xl mx-auto opacity-90 italic">
                "Menggabungkan empati desain dengan kekuatan storytelling"
            </p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="{{ route('about') }}" class="bg-white text-purple-600 px-10 py-4 rounded-full text-lg font-bold hover:bg-gray-100 transition duration-300 shadow-xl transform hover:scale-105">
                    Kenali Saya
                </a>
                <a href="{{ route('projects') }}" class="bg-transparent border-2 border-white text-white px-10 py-4 rounded-full text-lg font-bold hover:bg-white hover:text-purple-600 transition duration-300 transform hover:scale-105">
                    Lihat Karya
                </a>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="py-24 px-6 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-5xl font-bold mb-6 text-gray-800">Tentang Saya</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto mb-8"></div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="rounded-3xl shadow-2xl overflow-hidden transform hover:scale-105 transition duration-300">
                        <img src="/images/about.jpg" alt="About Nur Fadhil Ramadhan" class="w-full h-auto object-cover">
                    </div>
                </div>
                
                <div>
                    <h3 class="text-4xl font-bold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">
                        Designer & Storyteller
                    </h3>
                    <p class="text-gray-700 text-xl mb-6 leading-relaxed">
                        Saya mahasiswa Teknik Elektro dengan fokus pada <span class="font-semibold text-purple-600">UI/UX Design</span> dan passionate di <span class="font-semibold text-pink-600">Creative Writing</span>.
                    </p>
                    <p class="text-gray-700 text-xl mb-8 leading-relaxed">
                        Bagi saya, mendesain dan menulis punya kesamaan - keduanya tentang menciptakan pengalaman yang menyentuh hati manusia.
                    </p>
                    
                    <a href="{{ route('about') }}" class="inline-flex items-center gap-2 bg-purple-600 text-white px-8 py-4 rounded-xl text-lg font-bold hover:bg-purple-700 transition duration-300 shadow-xl transform hover:scale-105">
                        Kenali Saya Lebih Jauh
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Preview Section -->
    <section class="py-24 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-5xl font-bold text-center mb-6 text-gray-800">Skills & Expertise</h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto mb-16"></div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 border-t-4 border-purple-500">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-5xl">🎨</span>
                        <h3 class="text-2xl font-bold text-gray-800">UI/UX Design</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Menciptakan pengalaman digital yang intuitif dan menyenangkan untuk pengguna.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">Figma</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">Adobe XD</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">Wireframing</span>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 border-t-4 border-blue-500">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-5xl">💻</span>
                        <h3 class="text-2xl font-bold text-gray-800">Web Development</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Membangun website modern yang responsif dan performan dengan teknologi terkini.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">HTML/CSS</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">JavaScript</span>
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">Laravel</span>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 border-t-4 border-pink-500">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-5xl">✍️</span>
                        <h3 class="text-2xl font-bold text-gray-800">Creative Writing</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Menulis cerita yang mengeksplorasi emosi, karakter, dan konflik manusia.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-sm font-semibold">Storytelling</span>
                        <span class="bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-sm font-semibold">Novel</span>
                        <span class="bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-sm font-semibold">Content</span>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-purple-600 hover:text-purple-800 font-bold text-lg transition">
                    Lihat Semua Skills
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Projects Preview Section -->
    <section class="py-24 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-5xl font-bold text-center mb-6 text-gray-800">Featured Projects</h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto mb-6"></div>
            <p class="text-center text-gray-600 text-xl mb-16 max-w-3xl mx-auto">
                Beberapa karya pilihan yang menggabungkan desain, teknologi, dan storytelling
            </p>
            
            <div class="grid md:grid-cols-2 gap-10 mb-12">
                <div class="project-card bg-white rounded-3xl overflow-hidden shadow-xl">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-700 h-72 flex items-center justify-center">
                        <svg class="w-32 h-32 text-cyan-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                        </svg>
                    </div>
                    <div class="p-8">
                        <span class="bg-purple-600 text-white text-sm font-bold px-4 py-2 rounded-full inline-block mb-4">UI/UX Design</span>
                        <h3 class="text-3xl font-bold mb-4 text-gray-800">Portfolio Website</h3>
                        <p class="text-gray-600 text-lg mb-6">
                            Website portfolio interaktif dengan desain modern dan responsif menggunakan Laravel & Tailwind CSS.
                        </p>
                    </div>
                </div>

                <div class="project-card bg-white rounded-3xl overflow-hidden shadow-xl">
                    <div class="bg-gradient-to-br from-pink-400 to-pink-600 h-72 flex items-center justify-center">
                        <svg class="w-32 h-32 text-blue-100" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/>
                        </svg>
                    </div>
                    <div class="p-8">
                        <span class="bg-pink-600 text-white text-sm font-bold px-4 py-2 rounded-full inline-block mb-4">Writing</span>
                        <h3 class="text-3xl font-bold mb-4 text-gray-800">Novel Projects</h3>
                        <p class="text-gray-600 text-lg mb-6">
                            Karya tulis kreatif yang mengeksplorasi karakter, konflik, dan emosi manusia melalui storytelling.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <a href="{{ route('projects') }}" class="inline-flex items-center gap-2 bg-purple-600 text-white px-10 py-4 rounded-full text-lg font-bold hover:bg-purple-700 transition duration-300 shadow-xl transform hover:scale-105">
                    Lihat Semua Project
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 px-6 bg-gradient-to-br from-gray-50 to-purple-50">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-5xl font-bold text-center mb-6 text-gray-800">Mari Berkolaborasi</h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto mb-6"></div>
            <p class="text-center text-gray-600 text-xl mb-16 max-w-3xl mx-auto">
                Punya proyek UI/UX, butuh web developer, atau ingin berdiskusi tentang storytelling? Mari terhubung!
            </p>
            
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 text-center transform hover:-translate-y-2">
                    <div class="text-6xl mb-6">
                        <svg class="w-16 h-16 mx-auto text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold mb-3 text-gray-800 text-xl">Email</h3>
                    <a href="mailto:fdhlrmdhn23@gmail.com" class="text-purple-600 hover:text-purple-800 text-base break-all font-medium">fdhlrmdhn23@gmail.com</a>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 text-center transform hover:-translate-y-2">
                    <div class="text-6xl mb-6">
                        <svg class="w-16 h-16 mx-auto text-green-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold mb-3 text-gray-800 text-xl">WhatsApp</h3>
                    <a href="https://wa.me/6285797093006" target="_blank" class="text-green-600 hover:text-green-800 text-base font-medium">+62 857-9709-3006</a>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition duration-300 text-center transform hover:-translate-y-2">
                    <div class="text-6xl mb-6">
                        <svg class="w-16 h-16 mx-auto text-red-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8 8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57V12c0-2.76-2.24-5-5-5s-5 2.24-5 5 2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47.65.89 1.77 1.47 2.96 1.47 1.97 0 3.5-1.6 3.5-3.57V12c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold mb-3 text-gray-800 text-xl">Location</h3>
                    <p class="text-gray-600 text-base">Makassar, Sulawesi Selatan</p>
                </div>
            </div>
            
            <div class="text-center bg-white p-10 rounded-3xl shadow-xl">
                <h3 class="font-bold mb-8 text-gray-800 text-2xl">Connect With Me</h3>
                <div class="flex justify-center flex-wrap gap-4">
                    <a href="https://www.linkedin.com/in/nur-fadhil-ramadhan-73b05438b/" target="_blank" class="flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-blue-700 transition shadow-lg transform hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                        LinkedIn
                    </a>
                    <a href="https://www.instagram.com/_fdhilramadhan" target="_blank" class="flex items-center gap-2 bg-gradient-to-r from-purple-600 to-pink-600 text-white px-6 py-3 rounded-xl font-bold hover:from-purple-700 hover:to-pink-700 transition shadow-lg transform hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        Instagram
                    </a>
                    <a href="https://github.com/fadhilramadhan23" target="_blank" class="flex items-center gap-2 bg-gray-800 text-white px-6 py-3 rounded-xl font-bold hover:bg-gray-900 transition shadow-lg transform hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.840 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                        GitHub
                    </a>
                    <a href="mailto:fdhlrmdhn23@gmail.com" class="flex items-center gap-2 bg-red-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-red-700 transition shadow-lg transform hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Gmail
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-900 to-gray-800 text-white py-10 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <p class="mb-3 text-xl font-bold">Nur Fadhil Ramadhan</p>
            <p class="text-gray-400 text-base mb-5">UI/UX Designer | Storyteller | Software Engineering Student</p>
            <p class="text-gray-500 text-sm">&copy; 2025 Nur Fadhil Ramadhan. Made with ❤️ and Tailwind CSS</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 bg-purple-600 text-white w-14 h-14 rounded-full shadow-lg hover:bg-purple-700 transition hidden items-center justify-center z-50">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    <script>
        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Back to Top Button
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