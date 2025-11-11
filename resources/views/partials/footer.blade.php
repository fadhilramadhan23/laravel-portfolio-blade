<style>
    footer {
        background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
        color: white;
        padding: 60px 24px 40px;
        margin-top: 80px;
    }
    
    .footer-container {
        max-width: 1280px;
        margin: 0 auto;
    }
    
    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }
    
    .footer-section h3 {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 16px;
        background: linear-gradient(135deg, #9333ea 0%, #ec4899 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .footer-section p,
    .footer-section a {
        color: #9ca3af;
        line-height: 1.8;
        text-decoration: none;
        display: block;
        margin-bottom: 8px;
        transition: color 0.3s;
    }
    
    .footer-section a:hover {
        color: #ec4899;
    }
    
    .social-links {
        display: flex;
        gap: 16px;
        margin-top: 16px;
    }
    
    .social-link {
        width: 40px;
        height: 40px;
        background: #374151;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: white;
        font-size: 18px;
        transition: all 0.3s;
    }
    
    .social-link:hover {
        background: linear-gradient(135deg, #9333ea 0%, #ec4899 100%);
        transform: translateY(-4px);
    }
    
    .footer-divider {
        height: 1px;
        background: #374151;
        margin: 32px 0;
    }
    
    .footer-bottom {
        text-align: center;
    }
    
    .footer-name {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 8px;
    }
    
    .footer-role {
        color: #9ca3af;
        margin-bottom: 12px;
        font-size: 14px;
    }
    
    .footer-copyright {
        color: #6b7280;
        font-size: 14px;
    }
    
    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
            text-align: center;
        }
        
        .social-links {
            justify-content: center;
        }
    }
</style>

<footer>
    <div class="footer-container">
        <div class="footer-content">
            
            <div class="footer-section">
                <h3>Nur Fadhil Ramadhan</h3>
                <p>UI/UX Designer, Storyteller, dan Software Engineering Student yang passionate dalam menciptakan pengalaman digital yang bermakna.</p>
                <div class="social-links">
                    <a href="#" class="social-link" target="_blank" title="LinkedIn">💼</a>
                    <a href="#" class="social-link" target="_blank" title="GitHub">💻</a>
                    <a href="#" class="social-link" target="_blank" title="Instagram">📷</a>
                    <a href="#" class="social-link" target="_blank" title="Email">✉️</a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About Me</a>
                <a href="{{ route('projects') }}">Projects</a>
                <a href="{{ route('novel') }}">Novel & Writing</a>
                <a href="{{ route('home') }}#contact">Contact</a>
            </div>
            
            <div class="footer-section">
                <h3>Services</h3>
                <a href="#">UI/UX Design</a>
                <a href="#">Web Development</a>
                <a href="#">Mobile App Design</a>
                <a href="#">Creative Writing</a>
                <a href="#">Consultation</a>
            </div>
            
            <div class="footer-section">
                <h3>Get In Touch</h3>
                <p>📍 Makassar, South Sulawesi, ID</p>
                <p>📧 your.email@example.com</p>
                <p>📱 +62 xxx xxxx xxxx</p>
                <p>🌐 www.yourwebsite.com</p>
            </div>
            
        </div>
        
        <div class="footer-divider"></div>
        
        <div class="footer-bottom">
            <p class="footer-name">Nur Fadhil Ramadhan</p>
            <p class="footer-role">UI/UX Designer | Storyteller | Software Engineering Student</p>
            <p class="footer-copyright">&copy; {{ date('Y') }} Nur Fadhil Ramadhan. Made with ❤️ and ☕</p>
        </div>
    </div>
</footer>