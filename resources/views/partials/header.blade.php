<style>
    nav {
        background: white;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }
    
    .nav-container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 20px 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .logo {
        font-size: 24px;
        font-weight: bold;
        background: linear-gradient(135deg, #9333ea 0%, #ec4899 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-decoration: none;
    }
    
    .nav-links {
        display: flex;
        gap: 32px;
        list-style: none;
    }
    
    .nav-links a {
        color: #374151;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s;
        position: relative;
    }
    
    .nav-links a:hover {
        color: #9333ea;
    }
    
    .nav-links a.active {
        color: #9333ea;
        font-weight: 700;
    }
    
    .nav-links a.active::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(135deg, #9333ea 0%, #ec4899 100%);
        border-radius: 2px;
    }
    
    .mobile-menu-btn {
        display: none;
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: #374151;
    }
    
    #mobileMenu {
        display: none;
        padding-bottom: 16px;
    }
    
    #mobileMenu a {
        display: block;
        padding: 12px 0;
        color: #374151;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s;
    }
    
    #mobileMenu a:hover,
    #mobileMenu a.active {
        color: #9333ea;
    }
    
    #mobileMenu.hidden {
        display: none;
    }
    
    @media (max-width: 768px) {
        .nav-links {
            display: none;
        }
        
        .mobile-menu-btn {
            display: block;
        }
        
        #mobileMenu {
            display: block;
        }
    }
</style>

<nav>
    <div class="nav-container">
        <a href="{{ route('home') }}" class="logo">NFR</a>
        
        <ul class="nav-links">
            <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('projects') }}" class="{{ Request::routeIs('projects') ? 'active' : '' }}">Projects</a></li>
            <li><a href="{{ route('novel') }}" class="{{ Request::routeIs('novel') ? 'active' : '' }}">Novel</a></li>
            <li><a href="{{ route('home') }}#contact">Contact</a></li>
        </ul>
        
        <button class="mobile-menu-btn" id="menuBtn">☰</button>
    </div>
    
    <div id="mobileMenu" class="hidden">
        <a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('projects') }}" class="{{ Request::routeIs('projects') ? 'active' : '' }}">Projects</a>
        <a href="{{ route('novel') }}" class="{{ Request::routeIs('novel') ? 'active' : '' }}">Novel</a>
        <a href="{{ route('home') }}#contact">Contact</a>
    </div>
</nav>