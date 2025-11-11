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
                <div class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">
                    NFR
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">About</a>
                    <a href="#skills" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Skills</a>
                    <a href="#projects" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Projects</a>
                    <a href="#contact" class="text-gray-700 hover:text-purple-600 transition duration-300 font-medium">Contact</a>
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
                <a href="#home" class="block py-2 text-gray-700 hover:text-purple-600 transition">Home</a>
                <a href="#about" class="block py-2 text-gray-700 hover:text-purple-600 transition">About</a>
                <a href="#skills" class="block py-2 text-gray-700 hover:text-purple-600 transition">Skills</a>
                <a href="#projects" class="block py-2 text-gray-700 hover:text-purple-600 transition">Projects</a>
                <a href="#contact" class="block py-2 text-gray-700 hover:text-purple-600 transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 px-6 bg-gradient-to-br from-purple-600 via-purple-500 to-pink-500 min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto text-center text-white w-full fade-in-up">
            <div class="mb-8">
                <div class="w-48 h-48 bg-white rounded-full mx-auto mb-8 flex items-center justify-center shadow-2xl overflow-hidden border-4 border-white">
                    <span class="text-8xl">👨‍💻</span>
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
                <a href="#contact" class="bg-white text-purple-600 px-10 py-4 rounded-full text-lg font-bold hover:bg-gray-100 transition duration-300 shadow-xl transform hover:scale-105">
                    Hubungi Saya
                </a>
                <a href="#projects" class="bg-transparent border-2 border-white text-white px-10 py-4 rounded-full text-lg font-bold hover:bg-white hover:text-purple-600 transition duration-300 transform hover:scale-105">
                    Lihat Karya
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-5xl font-bold text-center mb-6 text-gray-800">Tentang Saya</h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto mb-16"></div>
            
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <!-- Profile Image -->
                <div class="order-2 md:order-1">
                    <div class="bg-gradient-to-br from-purple-500 via-purple-600 to-pink-500 h-[500px] rounded-3xl shadow-2xl flex items-center justify-center transform hover:scale-105 transition duration-300">
                        <span class="text-white text-9xl">✨</span>
                    </div>
                </div>
                
                <!-- About Text -->
                <div class="order-1 md:order-2">
                    <h3 class="text-4xl font-bold mb-8 text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">
                        Designer & Storyteller
                    </h3>
                    <p class="text-gray-700 text-xl mb-6 leading-relaxed">
                        Saya mahasiswa Elektro Konsentrasi Software Engineering di Universitas Negeri Makassar dengan fokus pada <span class="font-semibold text-purple-600">desain antarmuka dan pengalaman pengguna (UI/UX)</span>.
                    </p>
                    <p class="text-gray-700 text-xl mb-6 leading-relaxed">
                        Selain dunia teknologi, saya juga suka <span class="font-semibold text-pink-600">menulis novel</span> sebagai bentuk ekspresi diri. Saya menikmati proses menciptakan cerita, karakter, dan konflik yang bisa menyentuh pembaca.
                    </p>
                    <p class="text-gray-700 text-xl mb-8 leading-relaxed">
                        Bagi saya, <span class="font-semibold">menulis dan mendesain punya kesamaan</span>. Keduanya membutuhkan empati, ketelitian, dan kemampuan memahami manusia. Saya ingin terus belajar dan menggabungkan dua hal itu untuk menciptakan karya yang bermakna.
                    </p>
                    
                    <!-- Education -->
                    <div class="bg-gradient-to-r from-purple-100 to-pink-100 p-6 rounded-2xl mb-8 border-l-4 border-purple-600 shadow-lg">
                        <div class="flex items-center gap-4">
                            <span class="text-5xl">🎓</span>
                            <div>
                                <h4 class="font-bold text-xl text-gray-800">Universitas Negeri Makassar</h4>
                                <p class="text-gray-600 text-lg">Teknik elektro Konsentrasi Software Engineering</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="https://www.linkedin.com/in/nur-fadhil-ramadhan-73b05438b/" target="_blank" class="inline-block bg-purple-600 text-white px-8 py-4 rounded-xl text-lg font-bold hover:bg-purple-700 transition duration-300 shadow-xl transform hover:scale-105">
                        Lihat LinkedIn Saya
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-24 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-5xl font-bold text-center mb-6 text-gray-800">Skills & Expertise</h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto mb-16"></div>
            
            <div class="grid md:grid-cols-2 gap-10">
                <!-- UI/UX Design -->
                <div class="bg-white p-10 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 border-t-4 border-purple-500">
                    <div class="flex items-center gap-4 mb-8">
                        <span class="text-6xl">🎨</span>
                        <h3 class="text-3xl font-bold text-gray-800">UI/UX Design</h3>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <span class="bg-purple-100 text-purple-800 px-5 py-2.5 rounded-full text-base font-semibold">Figma</span>
                        <span class="bg-purple-100 text-purple-800 px-5 py-2.5 rounded-full text-base font-semibold">Adobe XD</span>
                        <span class="bg-purple-100 text-purple-800 px-5 py-2.5 rounded-full text-base font-semibold">Wireframing</span>
                        <span class="bg-purple-100 text-purple-800 px-5 py-2.5 rounded-full text-base font-semibold">Prototyping</span>
                        <span class="bg-purple-100 text-purple-800 px-5 py-2.5 rounded-full text-base font-semibold">User Research</span>
                        <span class="bg-purple-100 text-purple-800 px-5 py-2.5 rounded-full text-base font-semibold">Design System</span>
                    </div>
                </div>

                <!-- Web Development -->
                <div class="bg-white p-10 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 border-t-4 border-blue-500">
                    <div class="flex items-center gap-4 mb-8">
                        <span class="text-6xl">💻</span>
                        <h3 class="text-3xl font-bold text-gray-800">Web Development</h3>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <span class="bg-blue-100 text-blue-800 px-5 py-2.5 rounded-full text-base font-semibold">HTML</span>
                        <span class="bg-blue-100 text-blue-800 px-5 py-2.5 rounded-full text-base font-semibold">C#</span>
                        <span class="bg-blue-100 text-blue-800 px-5 py-2.5 rounded-full text-base font-semibold">JavaScript</span>
                        <span class="bg-blue-100 text-blue-800 px-5 py-2.5 rounded-full text-base font-semibold">CSS</span>
                        <span class="bg-blue-100 text-blue-800 px-5 py-2.5 rounded-full text-base font-semibold">Python</span>
                    </div>
                </div>

                <!-- Creative Writing -->
                <div class="bg-white p-10 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 border-t-4 border-pink-500">
                    <div class="flex items-center gap-4 mb-8">
                        <span class="text-6xl">✍️</span>
                        <h3 class="text-3xl font-bold text-gray-800">Creative Writing</h3>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <span class="bg-pink-100 text-pink-800 px-5 py-2.5 rounded-full text-base font-semibold">Novel Writing</span>
                        <span class="bg-pink-100 text-pink-800 px-5 py-2.5 rounded-full text-base font-semibold">Storytelling</span>
                        <span class="bg-pink-100 text-pink-800 px-5 py-2.5 rounded-full text-base font-semibold">Character Development</span>
                        <span class="bg-pink-100 text-pink-800 px-5 py-2.5 rounded-full text-base font-semibold">Content Writing</span>
                        <span class="bg-pink-100 text-pink-800 px-5 py-2.5 rounded-full text-base font-semibold">Copywriting</span>
                    </div>
                </div>

                <!-- Software Engineering -->
                <div class="bg-white p-10 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 border-t-4 border-green-500">
                    <div class="flex items-center gap-4 mb-8">
                        <span class="text-6xl">⚙️</span>
                        <h3 class="text-3xl font-bold text-gray-800">Software Engineering</h3>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <span class="bg-green-100 text-green-800 px-5 py-2.5 rounded-full text-base font-semibold">GitHub</span>
                        <span class="bg-green-100 text-green-800 px-5 py-2.5 rounded-full text-base font-semibold">Python</span>
                        <span class="bg-green-100 text-green-800 px-5 py-2.5 rounded-full text-base font-semibold">Database</span>
                        <span class="bg-green-100 text-green-800 px-5 py-2.5 rounded-full text-base font-semibold">Problem Solving</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section - Sesuai Screenshot -->
    <section id="projects" class="py-24 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-5xl font-bold text-center mb-6 text-gray-800">Projects & Portfolio</h2>
            <div class="w-24 h-1.5 bg-gradient-to-r from-purple-600 to-pink-600 mx-auto mb-6"></div>
            <p class="text-center text-gray-600 text-xl mb-16 max-w-3xl mx-auto">
                Berikut adalah beberapa karya yang menggabungkan desain, teknologi, dan storytelling
            </p>
            
            <div class="grid md:grid-cols-2 gap-10">
                <!-- Project 1 - Portfolio Website (Seperti di screenshot) -->
                <div class="project-card bg-white rounded-3xl overflow-hidden shadow-xl">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-700 h-72 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-purple-600 opacity-20"></div>
                        <svg class="w-32 h-32 text-cyan-300 relative z-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                        </svg>
                    </div>
                    <div class="p-8 bg-gradient-to-br from-purple-50 to-white">
                        <span class="bg-purple-600 text-white text-sm font-bold px-4 py-2 rounded-full inline-block mb-4">Web Dev</span>
                        <h3 class="text-3xl font-bold mb-4 text-gray-800">Portfolio Website</h3>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Website portfolio interaktif dengan desain modern dan responsif. Dibangun menggunakan HTML, CSS, dan JavaScript.
                        </p>
                        <div class="flex flex-wrap gap-3 mb-6">
                            <span class="text-sm bg-white text-gray-700 px-4 py-2 rounded-full border-2 border-gray-200 font-medium">HTML/CSS</span>
                            <span class="text-sm bg-white text-gray-700 px-4 py-2 rounded-full border-2 border-gray-200 font-medium">JavaScript</span>
                            <span class="text-sm bg-white text-gray-700 px-4 py-2 rounded-full border-2 border-gray-200 font-medium">Responsive</span>
                        </div>
                        <button onclick="openPortfolioModal()" class="text-purple-600 hover:text-purple-800 font-bold text-lg inline-flex items-center group">
                            Lihat Detail 
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Project 2 - Novel Projects (Seperti di screenshot) -->
                <div class="project-card bg-white rounded-3xl overflow-hidden shadow-xl">
                    <div class="bg-gradient-to-br from-pink-400 to-pink-600 h-72 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-pink-500 opacity-20"></div>
                        <svg class="w-32 h-32 text-blue-100 relative z-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/>
                        </svg>
                    </div>
                    <div class="p-8 bg-gradient-to-br from-pink-50 to-white">
                        <span class="bg-pink-600 text-white text-sm font-bold px-4 py-2 rounded-full inline-block mb-4">Writing</span>
                        <h3 class="text-3xl font-bold mb-4 text-gray-800">Novel Projects</h3>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Karya tulis kreatif yang mengeksplorasi karakter, konflik, dan emosi manusia melalui storytelling yang mendalam.
                        </p>
                        <div class="flex flex-wrap gap-3 mb-6">
                            <span class="text-sm bg-white text-gray-700 px-4 py-2 rounded-full border-2 border-gray-200 font-medium">Fiction</span>
                            <span class="text-sm bg-white text-gray-700 px-4 py-2 rounded-full border-2 border-gray-200 font-medium">Storytelling</span>
                            <span class="text-sm bg-white text-gray-700 px-4 py-2 rounded-full border-2 border-gray-200 font-medium">Creative</span>
                        </div>
                        <button onclick="openNovelModal()" class="text-pink-600 hover:text-pink-800 font-bold text-lg inline-flex items-center group">
                            Lihat Detail 
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
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
            
            <!-- Contact Cards -->
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <div class="bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 text-center transform hover:-translate-y-2">
                    <div class="text-6xl mb-6">📧</div>
                    <h3 class="font-bold mb-3 text-gray-800 text-xl">Email</h3>
                    <a href="mailto:amireders2005@gmail.com" class="text-purple-600 hover:text-purple-800 text-base break-all font-medium">amireders2005@gmail.com</a>
                </div>
                
                <div class="bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 text-center transform hover:-translate-y-2">
                    <div class="text-6xl mb-6">📱</div>
                    <h3 class="font-bold mb-3 text-gray-800 text-xl">WhatsApp</h3>
                    <p class="text-gray-600 text-base">+62 857-9709-3006</p>
                </div>
                
                <div class="bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300 text-center transform hover:-translate-y-2">
                    <div class="text-6xl mb-6">📍</div>
                    <h3 class="font-bold mb-3 text-gray-800 text-xl">Location</h3>
                    <p class="text-gray-600 text-base">Makassar, Sulawesi Selatan</p>
                </div>
            </div>
            
            <!-- Social Links -->
            <div class="text-center bg-white p-10 rounded-3xl shadow-xl">
                <h3 class="font-bold mb-8 text-gray-800 text-2xl">Connect With Me</h3>
                <div class="flex justify-center flex-wrap gap-4">
                    <a href="https://www.linkedin.com/in/nur-fadhil-ramadhan-73b05438b/" target="_blank" class="group flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-xl text-base font-bold hover:bg-blue-700 transition duration-300 shadow-lg transform hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                        LinkedIn
                    </a>
                    <a href="https://www.instagram.com/_fdhilramadhan" target="_blank" class="group flex items-center gap-2 bg-gradient-to-r from-purple-600 to-pink-600 text-white px-6 py-3 rounded-xl text-base font-bold hover:from-purple-700 hover:to-pink-700 transition duration-300 shadow-lg transform hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        Instagram
                    </a>
                    <a href="mailto:fdhlrmdhn23@gmail.com" class="group flex items-center gap-2 bg-red-600 text-white px-6 py-3 rounded-xl text-base font-bold hover:bg-red-700 transition duration-300 shadow-lg transform hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Gmail
                    </a>
                    <a href="https://github.com/fadhilramadhan23" target="_blank" class="group flex items-center gap-2 bg-gray-800 text-white px-6 py-3 rounded-xl text-base font-bold hover:bg-gray-900 transition duration-300 shadow-lg transform hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.840 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                        GitHub
                    </a>
                </div>
                <div class="mt-4 flex justify-center">
                    <a href="https://wa.me/6285797093006" target="_blank" class="group flex items-center gap-2 bg-green-600 text-white px-6 py-3 rounded-xl text-base font-bold hover:bg-green-700 transition duration-300 shadow-lg transform hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        WhatsApp
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

    <!-- Modal Portfolio Website -->
    <div id="portfolioModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl animate-fade-in">
            <!-- Modal Header -->
            <div class="sticky top-0 bg-gradient-to-r from-purple-600 to-purple-700 text-white p-6 rounded-t-3xl flex justify-between items-center">
                <div>
                    <span class="bg-white bg-opacity-20 text-xs font-bold px-3 py-1 rounded-full">Web Development</span>
                    <h2 class="text-3xl font-bold mt-2">Portfolio Website</h2>
                </div>
                <button onclick="closePortfolioModal()" class="text-white hover:bg-white hover:bg-opacity-20 rounded-full p-2 transition">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Modal Content -->
            <div class="p-8">
                <!-- Project Info -->
                <div class="grid grid-cols-3 gap-6 mb-8">
                    <div class="text-center p-4 bg-purple-50 rounded-xl">
                        <p class="text-sm font-semibold text-gray-500 mb-1">ROLE</p>
                        <p class="text-lg font-bold text-gray-800">Full Stack Developer</p>
                    </div>
                    <div class="text-center p-4 bg-purple-50 rounded-xl">
                        <p class="text-sm font-semibold text-gray-500 mb-1">DURATION</p>
                        <p class="text-lg font-bold text-gray-800">2 Minggu</p>
                    </div>
                    <div class="text-center p-4 bg-purple-50 rounded-xl">
                        <p class="text-sm font-semibold text-gray-500 mb-1">YEAR</p>
                        <p class="text-lg font-bold text-gray-800">2025</p>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Deskripsi Project</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Portfolio website ini dirancang untuk menampilkan karya-karya saya dalam bidang UI/UX design dan web development. Website ini dibangun dengan fokus pada pengalaman pengguna yang optimal, desain yang modern, dan performa yang cepat.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Menggunakan pendekatan mobile-first design, website ini dapat diakses dengan sempurna di berbagai perangkat. Setiap elemen dirancang dengan detail untuk memberikan pengalaman browsing yang menyenangkan.
                    </p>
                </div>

                <!-- Technologies -->
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Teknologi</h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full font-medium">HTML5</span>
                        <span class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full font-medium">CSS3</span>
                        <span class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full font-medium">JavaScript</span>
                        <span class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full font-medium">Tailwind CSS</span>
                        <span class="bg-purple-100 text-purple-800 px-4 py-2 rounded-full font-medium">Responsive Design</span>
                    </div>
                </div>

                <!-- Key Features -->
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Fitur Utama</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start gap-2">
                            <span class="text-purple-600 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Responsive Design - Optimal di semua perangkat</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-purple-600 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Smooth Animations - Transisi yang halus</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-purple-600 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Modern UI/UX - Desain contemporary</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-purple-600 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Fast Loading - Performance optimized</span>
                        </li>
                    </ul>
                </div>

                <!-- CTA -->
                <div class="flex gap-4 justify-center mt-8">
                    <a href="https://www.linkedin.com/in/nur-fadhil-ramadhan-73b05438b/" target="_blank" class="bg-purple-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-purple-700 transition inline-flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                        Lihat LinkedIn
                    </a>
                    <a href="#contact" onclick="closePortfolioModal()" class="bg-gray-200 text-gray-800 px-6 py-3 rounded-xl font-bold hover:bg-gray-300 transition">
                        Hubungi Saya
                    </a>
                    <button onclick="closePortfolioModal()" class="bg-gray-100 text-gray-600 px-6 py-3 rounded-xl font-bold hover:bg-gray-200 transition">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Novel Projects -->
    <div id="novelModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-4xl w-full max-h-[90vh] overflow-y-auto shadow-2xl animate-fade-in">
            <!-- Modal Header -->
            <div class="sticky top-0 bg-gradient-to-r from-pink-600 to-pink-700 text-white p-6 rounded-t-3xl flex justify-between items-center">
                <div>
                    <span class="bg-white bg-opacity-20 text-xs font-bold px-3 py-1 rounded-full">Creative Writing</span>
                    <h2 class="text-3xl font-bold mt-2">Novel Projects</h2>
                </div>
                <button onclick="closeNovelModal()" class="text-white hover:bg-white hover:bg-opacity-20 rounded-full p-2 transition">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Modal Content -->
            <div class="p-8">
                <!-- Project Info -->
                <div class="grid grid-cols-3 gap-6 mb-8">
                    <div class="text-center p-4 bg-pink-50 rounded-xl">
                        <p class="text-sm font-semibold text-gray-500 mb-1">GENRE</p>
                        <p class="text-lg font-bold text-gray-800">Fiction / Drama</p>
                    </div>
                    <div class="text-center p-4 bg-pink-50 rounded-xl">
                        <p class="text-sm font-semibold text-gray-500 mb-1">STATUS</p>
                        <p class="text-lg font-bold text-gray-800">Work in Progress</p>
                    </div>
                    <div class="text-center p-4 bg-pink-50 rounded-xl">
                        <p class="text-sm font-semibold text-gray-500 mb-1">YEAR</p>
                        <p class="text-lg font-bold text-gray-800">2024 - 2025</p>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Tentang Novel</h3>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Menulis novel bagi saya adalah cara untuk mengeksplorasi kompleksitas manusia - emosi, konflik internal, dan perjalanan karakter yang autentik. Setiap cerita yang saya tulis adalah upaya untuk menyentuh hati pembaca.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Saya sangat memperhatikan pengembangan karakter yang mendalam, plot yang engaging, dan dialog yang natural. Novel-novel saya mengeksplorasi tema pencarian jati diri, hubungan antar manusia, dan personal growth.
                    </p>
                </div>

                <!-- Themes -->
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Tema yang Dieksplorasi</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 p-3 bg-pink-50 rounded-xl">
                            <span class="text-2xl">🌟</span>
                            <span class="font-semibold text-gray-800">Pencarian Jati Diri</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-pink-50 rounded-xl">
                            <span class="text-2xl">❤️</span>
                            <span class="font-semibold text-gray-800">Hubungan Antar Manusia</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-pink-50 rounded-xl">
                            <span class="text-2xl">⚖️</span>
                            <span class="font-semibold text-gray-800">Konflik Moral</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 bg-pink-50 rounded-xl">
                            <span class="text-2xl">🦋</span>
                            <span class="font-semibold text-gray-800">Transformasi Personal</span>
                        </div>
                    </div>
                </div>

                <!-- Philosophy -->
                <div class="mb-6 bg-gradient-to-br from-pink-50 to-red-50 p-6 rounded-xl border-l-4 border-pink-600">
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Filosofi Menulis</h3>
                    <p class="text-gray-700 italic leading-relaxed">
                        "Menulis dan mendesain punya kesamaan - keduanya membutuhkan empati, ketelitian, dan kemampuan memahami manusia."
                    </p>
                </div>

                <!-- CTA -->
                <div class="flex gap-4 justify-center mt-8">
                    <a href="https://www.fizzo.org/page/share/?bid=7464585994327555266&isNew=1&from=copy_link&group=2&d=7840976461010614013&u=7839621574283539709&language=id&region=ID" target="_blank" class="bg-pink-600 text-white px-6 py-3 rounded-xl font-bold hover:bg-pink-700 transition inline-flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 5c-1.11-.35-2.33-.5-3.5-.5-1.95 0-4.05.4-5.5 1.5-1.45-1.1-3.55-1.5-5.5-1.5S2.45 4.9 1 6v14.65c0 .25.25.5.5.5.1 0 .15-.05.25-.05C3.1 20.45 5.05 20 6.5 20c1.95 0 4.05.4 5.5 1.5 1.35-.85 3.8-1.5 5.5-1.5 1.65 0 3.35.3 4.75 1.05.1.05.15.05.25.05.25 0 .5-.25.5-.5V6c-.6-.45-1.25-.75-2-1zm0 13.5c-1.1-.35-2.3-.5-3.5-.5-1.7 0-4.15.65-5.5 1.5V8c1.35-.85 3.8-1.5 5.5-1.5 1.2 0 2.4.15 3.5.5v11.5z"/>
                        </svg>
                        Baca Novel Saya
                    </a>
                    <a href="#contact" onclick="closeNovelModal()" class="bg-gray-200 text-gray-800 px-6 py-3 rounded-xl font-bold hover:bg-gray-300 transition">
                        Hubungi Saya
                    </a>
                    <button onclick="closeNovelModal()" class="bg-gray-100 text-gray-600 px-6 py-3 rounded-xl font-bold hover:bg-gray-200 transition">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Smooth scroll for all anchor links
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

        // Modal Functions
        function openPortfolioModal() {
            document.getElementById('portfolioModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closePortfolioModal() {
            document.getElementById('portfolioModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function openNovelModal() {
            document.getElementById('novelModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeNovelModal() {
            document.getElementById('novelModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('portfolioModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closePortfolioModal();
            }
        });

        document.getElementById('novelModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeNovelModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closePortfolioModal();
                closeNovelModal();
            }
        });

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe sections for animation
        document.querySelectorAll('section').forEach(section => {
            if (!section.id === 'home') {
                section.style.opacity = '0';
                section.style.transform = 'translateY(30px)';
                section.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
                observer.observe(section);
            }
        });

        // Project cards animation
        const projectCards = document.querySelectorAll('.project-card');
        projectCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
            
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 200 * index);
        });
    </script>
</body>
</html>