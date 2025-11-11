@extends('layouts.app')

@section('title', 'Novel & Writing')

@section('styles')
<style>
    /* Hero Section */
    .hero {
        background: linear-gradient(135deg, #ec4899 0%, #a855f7 100%);
        padding: 150px 24px 80px;
        text-align: center;
        color: white;
    }
    
    .hero-icon {
        font-size: 80px;
        margin-bottom: 30px;
        opacity: 0.9;
    }
    
    .hero h1 {
        font-size: 60px;
        font-weight: bold;
        margin-bottom: 24px;
    }
    
    .hero p {
        font-size: 24px;
        opacity: 0.9;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.6;
    }
    
    /* About Section */
    .about-section {
        padding: 80px 24px;
        background: white;
    }
    
    .container {
        max-width: 1000px;
        margin: 0 auto;
        text-align: center;
    }
    
    .section-title {
        font-size: 40px;
        font-weight: bold;
        color: #1f2937;
        margin-bottom: 24px;
    }
    
    .title-underline {
        width: 96px;
        height: 6px;
        background: linear-gradient(135deg, #ec4899 0%, #9333ea 100%);
        margin: 0 auto 32px;
        border-radius: 3px;
    }
    
    .about-text {
        font-size: 20px;
        color: #374151;
        line-height: 1.8;
        margin-bottom: 24px;
    }
    
    /* Novel Section */
    .novel-section {
        padding: 80px 24px;
        background: #f9fafb;
    }
    
    .novel-grid {
        max-width: 1000px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 40px;
    }
    
    .novel-card {
        background: white;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    
    .novel-card:hover {
        transform: translateY(-8px);
    }
    
    .novel-card.placeholder {
        border: 2px dashed #d1d5db;
    }
    
    .novel-cover {
        height: 320px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    
    .novel-cover-pink {
        background: linear-gradient(135deg, #ec4899 0%, #be185d 100%);
    }
    
    .novel-cover-purple {
        background: linear-gradient(135deg, #8b5cf6 0%, #6d28d9 100%);
    }
    
    .novel-cover-gray {
        background: linear-gradient(135deg, #e5e7eb 0%, #d1d5db 100%);
    }
    
    .novel-icon {
        font-size: 120px;
        position: relative;
        z-index: 10;
    }
    
    .novel-overlay {
        position: absolute;
        inset: 0;
        opacity: 0.2;
    }
    
    .novel-content {
        padding: 32px;
    }
    
    .badge-container {
        display: flex;
        gap: 12px;
        margin-bottom: 16px;
        flex-wrap: wrap;
    }
    
    .badge {
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: bold;
    }
    
    .badge-pink {
        background: #ec4899;
        color: white;
    }
    
    .badge-purple {
        background: #8b5cf6;
        color: white;
    }
    
    .badge-gray {
        background: #9ca3af;
        color: white;
    }
    
    .badge-status {
        background: #d1fae5;
        color: #065f46;
    }
    
    .novel-title {
        font-size: 32px;
        font-weight: bold;
        color: #1f2937;
        margin-bottom: 16px;
    }
    
    .genre-label {
        color: #6b7280;
        font-size: 14px;
        margin-bottom: 8px;
    }
    
    .genre-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 16px;
    }
    
    .genre-tag {
        background: #fdf2f8;
        color: #be185d;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
    }
    
    .genre-tag.purple {
        background: #f3e8ff;
        color: #6d28d9;
    }
    
    .novel-description {
        color: #4b5563;
        line-height: 1.7;
        margin-bottom: 24px;
    }
    
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 16px 32px;
        border-radius: 12px;
        font-weight: bold;
        text-decoration: none;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
        font-size: 14px;
    }
    
    .btn-pink {
        background: #ec4899;
        color: white;
    }
    
    .btn-pink:hover {
        background: #be185d;
        transform: scale(1.05);
    }
    
    .btn-purple {
        background: #8b5cf6;
        color: white;
    }
    
    .btn-purple:hover {
        background: #6d28d9;
        transform: scale(1.05);
    }
    
    .btn-disabled {
        background: #d1d5db;
        color: #6b7280;
        cursor: not-allowed;
    }
    
    /* Themes Section */
    .themes-section {
        padding: 80px 24px;
        background: white;
    }
    
    .themes-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 32px;
    }
    
    .theme-card {
        text-align: center;
        padding: 32px 24px;
        background: linear-gradient(135deg, #fdf2f8 0%, #f3e8ff 100%);
        border-radius: 24px;
    }
    
    .theme-icon {
        font-size: 48px;
        margin-bottom: 16px;
    }
    
    .theme-title {
        font-size: 20px;
        font-weight: bold;
        color: #1f2937;
        margin-bottom: 12px;
    }
    
    .theme-text {
        color: #4b5563;
        font-size: 14px;
    }
    
    /* CTA Section */
    .cta-section {
        padding: 80px 24px;
        background: linear-gradient(135deg, #ec4899 0%, #9333ea 100%);
        text-align: center;
        color: white;
    }
    
    .cta-icon {
        font-size: 80px;
        margin-bottom: 24px;
        opacity: 0.9;
    }
    
    .cta-title {
        font-size: 40px;
        font-weight: bold;
        margin-bottom: 24px;
    }
    
    .cta-text {
        font-size: 20px;
        opacity: 0.9;
        margin-bottom: 32px;
    }
    
    .btn-white {
        background: white;
        color: #ec4899;
        padding: 16px 40px;
        font-size: 18px;
    }
    
    .btn-white:hover {
        background: #f3f4f6;
        transform: scale(1.05);
    }
    
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 40px;
        }
        
        .hero p {
            font-size: 18px;
        }
        
        .section-title {
            font-size: 32px;
        }
        
        .novel-grid {
            grid-template-columns: 1fr;
        }
        
        .themes-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="hero-icon">📖</div>
    <h1>Novel & Writing</h1>
    <p>Mengeksplorasi emosi, karakter, dan konflik manusia melalui storytelling</p>
</section>

<!-- About Writing Section -->
<section class="about-section">
    <div class="container">
        <h2 class="section-title">Tentang Menulis Saya</h2>
        <div class="title-underline"></div>
        <p class="about-text">
            Menulis novel bagi saya adalah cara untuk mengeksplorasi kompleksitas manusia - emosi yang mendalam, konflik internal yang rumit, dan perjalanan karakter yang autentik.
        </p>
        <p class="about-text">
            Saya percaya bahwa setiap cerita memiliki kekuatan untuk menyentuh hati, mengubah perspektif, dan menginspirasi pembaca untuk melihat dunia dengan cara yang baru.
        </p>
    </div>
</section>

<!-- Novel Section -->
<section class="novel-section">
    <div class="container">
        <h2 class="section-title">Karya Novel</h2>
        <div class="title-underline"></div>
    </div>
    
    <div class="novel-grid">
        
        <!-- Novel 1 -->
        <div class="novel-card">
            <div class="novel-cover novel-cover-pink">
                <div class="novel-overlay"></div>
                <div class="novel-icon">📖</div>
            </div>
            <div class="novel-content">
                <div class="badge-container">
                    <span class="badge badge-pink">Fiction</span>
                    <span class="badge badge-status">On Going</span>
                </div>
                <h3 class="novel-title">Novel di Fizzo</h3>
                <p class="genre-label">Genre:</p>
                <div class="genre-tags">
                    <span class="genre-tag">Drama</span>
                    <span class="genre-tag">Romance</span>
                    <span class="genre-tag">Fiction</span>
                </div>
                <p class="novel-description">
                    Sebuah perjalanan emosional yang mengeksplorasi hubungan antar manusia, pencarian jati diri, dan makna dari kebahagiaan sejati.
                </p>
                <a href="https://www.fizzo.org/page/share/?bid=7464585994327555266&isNew=1&from=copy_link&group=2&d=7840976461010614013&u=7839621574283539709&language=id&region=ID" target="_blank" class="btn btn-pink">
                    <span>📖</span>
                    Baca di Fizzo
                </a>
            </div>
        </div>

        <!-- Novel 2 -->
        <div class="novel-card">
            <div class="novel-cover novel-cover-purple">
                <div class="novel-overlay"></div>
                <div class="novel-icon">📚</div>
            </div>
            <div class="novel-content">
                <div class="badge-container">
                    <span class="badge badge-purple">Fiction</span>
                    <span class="badge badge-status">On Going</span>
                </div>
                <h3 class="novel-title">Novel Kedua di Fizzo</h3>
                <p class="genre-label">Genre:</p>
                <div class="genre-tags">
                    <span class="genre-tag purple">Drama</span>
                    <span class="genre-tag purple">Fiction</span>
                    <span class="genre-tag purple">Inspirational</span>
                </div>
                <p class="novel-description">
                    Karya terbaru yang menghadirkan cerita menarik dengan karakter yang kuat dan plot yang mengharukan.
                </p>
                <a href="https://www.fizzo.org/page/share/?bid=7358763976437529802&isNew=1&from=whatsapp&group=2&d=7840976461010614013&u=7839621574283539709&language=id&region=ID" target="_blank" class="btn btn-purple">
                    <span>📖</span>
                    Baca di Fizzo
                </a>
            </div>
        </div>

        <!-- Placeholder -->
        <div class="novel-card placeholder">
            <div class="novel-cover novel-cover-gray">
                <div class="novel-icon">➕</div>
            </div>
            <div class="novel-content">
                <div class="badge-container">
                    <span class="badge badge-gray">Coming Soon</span>
                </div>
                <h3 class="novel-title">Novel Berikutnya</h3>
                <p class="novel-description">
                    Saya sedang mengerjakan karya novel berikutnya. Stay tuned untuk cerita baru yang lebih menarik!
                </p>
                <button class="btn btn-disabled" disabled>
                    Coming Soon
                </button>
            </div>
        </div>

    </div>
</section>

<!-- Writing Themes -->
<section class="themes-section">
    <div class="container">
        <h2 class="section-title">Tema yang Saya Eksplorasi</h2>
        <div class="title-underline"></div>
    </div>
    
    <div class="themes-grid">
        <div class="theme-card">
            <div class="theme-icon">🌟</div>
            <h3 class="theme-title">Pencarian Jati Diri</h3>
            <p class="theme-text">Perjalanan menemukan siapa diri kita yang sebenarnya</p>
        </div>
        
        <div class="theme-card">
            <div class="theme-icon">❤️</div>
            <h3 class="theme-title">Hubungan Manusia</h3>
            <p class="theme-text">Dinamika cinta, persahabatan, dan keluarga</p>
        </div>
        
        <div class="theme-card">
            <div class="theme-icon">💭</div>
            <h3 class="theme-title">Konflik Internal</h3>
            <p class="theme-text">Pertarungan batin dan dilema moral</p>
        </div>
        
        <div class="theme-card">
            <div class="theme-icon">🌈</div>
            <h3 class="theme-title">Harapan & Mimpi</h3>
            <p class="theme-text">Kekuatan untuk terus bermimpi dan berjuang</p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-icon">📖</div>
    <h2 class="cta-title">Nikmati Cerita Saya</h2>
    <p class="cta-text">
        Baca novel saya dan rasakan perjalanan emosional yang tak terlupakan
    </p>
    <a href="https://www.fizzo.org/page/share/?bid=7464585994327555266&isNew=1&from=copy_link&group=2&d=7840976461010614013&u=7839621574283539709&language=id&region=ID" target="_blank" class="btn btn-white">
        Baca Sekarang
    </a>
</section>
@endsection