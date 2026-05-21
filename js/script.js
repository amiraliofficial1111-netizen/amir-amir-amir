// ========================================
// AppsDeddy - Ultra Professional Website
// Advanced JavaScript with Premium Features
// ========================================

document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // ===== Preloader =====
    const preloader = document.getElementById('preloader');
    
    window.addEventListener('load', () => {
        setTimeout(() => {
            if (preloader) {
                preloader.classList.add('hidden');
            }
            document.body.classList.remove('no-scroll');
        }, preloader ? 1500 : 0);
    });

    // ===== Theme Toggle =====
    const themeToggle = document.getElementById('themeToggle');
    const themeToggleMenu = document.getElementById('themeToggleMenu');
    const savedTheme = localStorage.getItem('theme') || 'light';
    
    document.documentElement.setAttribute('data-theme', savedTheme);
    
    function toggleTheme() {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
    }
    
    if (themeToggle) themeToggle.addEventListener('click', toggleTheme);
    if (themeToggleMenu) themeToggleMenu.addEventListener('click', toggleTheme);

    // ===== Navigation =====
    const navbar = document.getElementById('navbar');
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Scroll effect
    let lastScroll = 0;
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY;
        
        if (currentScroll > 10) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        
        lastScroll = currentScroll;
    });
    
    // Mobile menu overlay (injected for backdrop)
    let navOverlay = document.getElementById('navOverlay');
    if (!navOverlay) {
        navOverlay = document.createElement('div');
        navOverlay.className = 'nav-overlay';
        navOverlay.id = 'navOverlay';
        navOverlay.setAttribute('aria-hidden', 'true');
        document.body.appendChild(navOverlay);
    }
    navOverlay.addEventListener('click', closeMobileMenu);

    // Mobile menu toggle
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            const isOpening = !navMenu.classList.contains('active');
            navToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
            if (navOverlay) navOverlay.classList.toggle('active', navMenu.classList.contains('active'));
            if (!isOpening) {
                const navDropdown = document.querySelector('.nav-dropdown');
                if (navDropdown) navDropdown.classList.remove('active');
            }
        });
    }
    
    function closeMobileMenu() {
        if (navToggle && navMenu && window.innerWidth <= 992) {
            navToggle.classList.remove('active');
            navMenu.classList.remove('active');
            document.body.classList.remove('no-scroll');
            if (navOverlay) navOverlay.classList.remove('active');
            const navDropdown = document.querySelector('.nav-dropdown');
            if (navDropdown) navDropdown.classList.remove('active');
        }
    }
    
    // Close menu on link click (including dropdown submenu links)
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 992) {
                const isDropdownParent = link.closest('.nav-dropdown') && link.getAttribute('href') === 'services.html';
                if (!isDropdownParent) closeMobileMenu();
            }
        });
    });
    
    document.querySelectorAll('.dropdown-menu a').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 992) closeMobileMenu();
        });
    });
    
    // Mobile dropdown toggle for Services
    const navDropdown = document.querySelector('.nav-dropdown');
    if (navDropdown) {
        const dropdownLink = navDropdown.querySelector('.nav-link');
        dropdownLink.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                navDropdown.classList.toggle('active');
            }
        });
    }
    
    // Set active state on current page's dropdown link
    const currentPath = window.location.pathname.split('/').pop() || 'index.html';
    document.querySelectorAll('.dropdown-menu a').forEach(link => {
        const href = link.getAttribute('href') || '';
        if (href === currentPath || (currentPath === '' && href === 'index.html')) {
            link.classList.add('active');
        }
    });

    // ===== Search Functionality =====
    const navSearch = document.getElementById('navSearch');
    const navSearchWrap = document.querySelector('.nav-search-wrap');
    
    const searchData = [
        { title: 'Home', url: 'index.php', keywords: 'home main page index', icon: 'fa-home' },
        { title: 'Services', url: 'services.php', keywords: 'services all offerings', icon: 'fa-cogs' },
        { title: 'Web & Mobile App Development', url: 'web-mobile-app-development.php', keywords: 'web mobile app development ios android react native flutter application', icon: 'fa-mobile-alt' },
        { title: 'Data Engineering Solutions', url: 'data-engineering-solutions.php', keywords: 'data engineering pipeline analytics big data integration', icon: 'fa-database' },
        { title: 'Gen AI Integration', url: 'gen-ai-integration.php', keywords: 'ai artificial intelligence generative ai machine learning chatbot', icon: 'fa-robot' },
        { title: 'UX & UI Design', url: 'ux-ui-design.php', keywords: 'ux ui design user experience interface wireframe prototype', icon: 'fa-paint-brush' },
        { title: 'How We Work', url: 'how-we-work.php', keywords: 'how we work process methodology', icon: 'fa-project-diagram' },
        { title: 'About Us', url: 'about.php', keywords: 'about us company team', icon: 'fa-info-circle' },
        { title: 'Portfolio', url: 'https://www.behance.net/AppsDeddy', keywords: 'portfolio projects case studies work', icon: 'fa-briefcase' },
        { title: 'FAQ', url: 'faq.php', keywords: 'faq frequently asked questions help', icon: 'fa-question-circle' },
        { title: 'Contact', url: 'contact.php', keywords: 'contact get in touch email phone message', icon: 'fa-envelope' },
        { title: 'Privacy Policy', url: 'privacy-policy.php', keywords: 'privacy policy data', icon: 'fa-shield-alt' },
        { title: 'Terms & Conditions', url: 'terms-conditions.php', keywords: 'terms conditions', icon: 'fa-file-alt' },
        { title: 'Cookie Policy', url: 'cookie-policy.php', keywords: 'cookie policy cookies', icon: 'fa-cookie-bite' },
        { title: 'Testimonials', url: 'testimonials.php', keywords: 'testimonials reviews feedback', icon: 'fa-star' }
    ];
    
    if (navSearch && navSearchWrap) {
        let resultsDiv = navSearchWrap.querySelector('.nav-search-results');
        if (!resultsDiv) {
            resultsDiv = document.createElement('div');
            resultsDiv.className = 'nav-search-results';
            navSearchWrap.style.position = 'relative';
            navSearchWrap.appendChild(resultsDiv);
        }
        
        function performSearch(query) {
            const q = query.trim().toLowerCase();
            if (q.length < 2) {
                resultsDiv.classList.remove('active');
                resultsDiv.innerHTML = '';
                return;
            }
            const results = searchData.filter(item => {
                return item.title.toLowerCase().includes(q) || 
                       item.keywords.toLowerCase().includes(q) ||
                       item.url.toLowerCase().includes(q);
            });
            renderResults(results, q);
        }
        
        function renderResults(results, query) {
            resultsDiv.innerHTML = '';
            if (results.length === 0) {
                resultsDiv.innerHTML = '<div class="nav-search-no-results">No results found for "' + escapeHtml(query) + '"</div>';
            } else {
                results.forEach(item => {
                    const a = document.createElement('a');
                    a.href = item.url;
                    a.innerHTML = '<i class="fas ' + item.icon + '"></i><span class="search-result-title">' + escapeHtml(item.title) + '</span>';
                    a.addEventListener('click', () => {
                        resultsDiv.classList.remove('active');
                        navSearch.value = '';
                    });
                    resultsDiv.appendChild(a);
                });
            }
            resultsDiv.classList.add('active');
        }
        
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }
        
        navSearch.addEventListener('input', () => performSearch(navSearch.value));
        navSearch.addEventListener('focus', () => {
            if (navSearch.value.trim().length >= 2) performSearch(navSearch.value);
        });
        navSearch.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                resultsDiv.classList.remove('active');
                navSearch.blur();
            } else if (e.key === 'Enter' && resultsDiv.classList.contains('active')) {
                const firstLink = resultsDiv.querySelector('a');
                if (firstLink) {
                    window.location.href = firstLink.href;
                }
            }
        });
        
        document.addEventListener('click', (e) => {
            if (!navSearchWrap.contains(e.target)) {
                resultsDiv.classList.remove('active');
            }
        });
    }

    // ===== Smooth Scrolling =====
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offset = 100;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ===== Active Section Detection =====
    const sections = document.querySelectorAll('section[id]');
    
    function updateActiveNav() {
        const scrollY = window.scrollY;
        
        sections.forEach(section => {
            const sectionHeight = section.offsetHeight;
            const sectionTop = section.offsetTop - 150;
            const sectionId = section.getAttribute('id');
            const navLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);
            
            if (navLink) {
                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    navLinks.forEach(link => link.classList.remove('active'));
                    navLink.classList.add('active');
                }
            }
        });
    }
    
    window.addEventListener('scroll', updateActiveNav);

    // ===== Typing Effect =====
    const typedText = document.getElementById('typedText');
    if (typedText) {
        const words = ['Drive Revenue', 'Engage Users', 'Scale Fast', 'Win Markets'];
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        
        function type() {
            const currentWord = words[wordIndex];
            
            if (isDeleting) {
                typedText.textContent = currentWord.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typedText.textContent = currentWord.substring(0, charIndex + 1);
                charIndex++;
            }
            
            let typeSpeed = isDeleting ? 50 : 100;
            
            if (!isDeleting && charIndex === currentWord.length) {
                typeSpeed = 2000;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                typeSpeed = 500;
            }
            
            setTimeout(type, typeSpeed);
        }
        
        type();
    }

    // ===== Particle Effect =====
    function createParticles() {
        const particlesContainer = document.getElementById('particles');
        if (!particlesContainer) return;
        
        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 15 + 's';
            particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
            particlesContainer.appendChild(particle);
        }
    }
    
    createParticles();

    // ===== Counter Animation =====
    const counters = document.querySelectorAll('.stat-number');
    let countersAnimated = false;
    
    function animateCounters() {
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const duration = 2500;
            const startTime = performance.now();
            
            function updateCounter(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                
                // Easing function
                const easeOutQuart = 1 - Math.pow(1 - progress, 4);
                const current = Math.floor(target * easeOutQuart);
                
                counter.textContent = current;
                
                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            }
            
            requestAnimationFrame(updateCounter);
        });
    }
    
    const heroStats = document.querySelector('.hero-stats');
    if (heroStats) {
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !countersAnimated) {
                    animateCounters();
                    countersAnimated = true;
                }
            });
        }, { threshold: 0.5 });
        
        statsObserver.observe(heroStats);
    }

    // ===== AOS (Animate On Scroll) =====
    const animatedElements = document.querySelectorAll('[data-aos]');
    
    const aosObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const delay = entry.target.getAttribute('data-aos-delay') || 0;
                setTimeout(() => {
                    entry.target.classList.add('aos-animate');
                }, parseInt(delay));
            }
        });
    }, { threshold: 0.1 });
    
    animatedElements.forEach(el => aosObserver.observe(el));

    // ===== Portfolio Filter =====
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            portfolioItems.forEach((item, index) => {
                const category = item.getAttribute('data-category');
                
                if (filter === 'all' || filter === category) {
                    item.style.transitionDelay = index * 0.1 + 's';
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0) scale(1)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px) scale(0.95)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // ===== Testimonials Slider =====
    const testimonialTrack = document.querySelector('.testimonial-track');
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    const prevBtn = document.getElementById('prevTestimonial');
    const nextBtn = document.getElementById('nextTestimonial');
    const dots = document.querySelectorAll('.testimonial-dots .dot');
    
    let currentSlide = 0;
    let slideInterval;
    
    function goToSlide(index) {
        if (!testimonialTrack || !testimonialCards.length) return;
        currentSlide = index;
        testimonialTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentSlide);
        });
    }
    
    function nextSlide() {
        if (!testimonialTrack || !testimonialCards.length) return;
        currentSlide = (currentSlide + 1) % testimonialCards.length;
        goToSlide(currentSlide);
    }
    
    function prevSlide() {
        if (!testimonialTrack || !testimonialCards.length) return;
        currentSlide = (currentSlide - 1 + testimonialCards.length) % testimonialCards.length;
        goToSlide(currentSlide);
    }
    
    function startAutoSlide() {
        if (!testimonialTrack || !testimonialCards.length) return;
        slideInterval = setInterval(nextSlide, 5000);
    }
    
    function stopAutoSlide() {
        clearInterval(slideInterval);
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });
    }
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            stopAutoSlide();
            goToSlide(index);
            startAutoSlide();
        });
    });
    
    if (testimonialTrack && testimonialCards.length) {
        startAutoSlide();
    }

    // ===== FAQ Accordion =====
    const accordionItems = document.querySelectorAll('.accordion-item');
    
    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        
        header.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all
            accordionItems.forEach(i => i.classList.remove('active'));
            
            // Open clicked if wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // ===== Video Modal =====
    const playVideoBtn = document.getElementById('playVideoBtn');
    const videoModal = document.getElementById('videoModal');
    const closeModal = document.getElementById('closeModal');
    const modalOverlay = videoModal?.querySelector('.modal-overlay');
    
    if (playVideoBtn && videoModal) {
        playVideoBtn.addEventListener('click', () => {
            videoModal.classList.add('active');
            document.body.classList.add('no-scroll');
        });
        
        closeModal.addEventListener('click', closeVideoModal);
        modalOverlay.addEventListener('click', closeVideoModal);
        
        function closeVideoModal() {
            videoModal.classList.remove('active');
            document.body.classList.remove('no-scroll');
        }
        
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && videoModal.classList.contains('active')) {
                closeVideoModal();
            }
        });
    }

    // ===== Back to Top =====
    const backToTop = document.getElementById('backToTop');
    
    if (backToTop) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });
        
        backToTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ===== Contact Form (AJAX + PHP Backend) =====
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            let isValid = true;
            const requiredFields = this.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                const wrapper = field.closest('.input-wrapper');
                if (!field.value.trim()) {
                    isValid = false;
                    if (wrapper) wrapper.style.borderColor = '#ef4444';
                } else {
                    if (wrapper) wrapper.style.borderColor = '';
                }
            });
            
            const emailField = this.querySelector('input[type="email"]');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (emailField && !emailRegex.test(emailField.value)) {
                isValid = false;
                emailField.closest('.input-wrapper').style.borderColor = '#ef4444';
            }
            
            if (!isValid) return;

            const btn = this.querySelector('button[type="submit"]');
            const originalContent = btn.innerHTML;
            const formData = new FormData(this);
            
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> <span>Sending...</span>';
            btn.disabled = true;

            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    btn.innerHTML = '<i class="fas fa-check"></i> <span>Message Sent!</span>';
                    btn.style.background = 'linear-gradient(135deg, #10b981 0%, #059669 100%)';
                    this.reset();
                    setTimeout(() => {
                        btn.innerHTML = originalContent;
                        btn.style.background = '';
                        btn.disabled = false;
                    }, 4000);
                } else {
                    btn.innerHTML = '<i class="fas fa-exclamation-circle"></i> <span>' + (data.message || 'Error') + '</span>';
                    btn.style.background = 'linear-gradient(135deg, #ef4444 0%, #dc2626 100%)';
                    setTimeout(() => {
                        btn.innerHTML = originalContent;
                        btn.style.background = '';
                        btn.disabled = false;
                    }, 4000);
                }
            })
            .catch(() => {
                btn.innerHTML = '<i class="fas fa-exclamation-circle"></i> <span>Connection error</span>';
                btn.style.background = 'linear-gradient(135deg, #ef4444 0%, #dc2626 100%)';
                setTimeout(() => {
                    btn.innerHTML = originalContent;
                    btn.style.background = '';
                    btn.disabled = false;
                }, 4000);
            });
        });
        
        contactForm.querySelectorAll('input, select, textarea').forEach(field => {
            field.addEventListener('input', function() {
                const wrapper = this.closest('.input-wrapper');
                if (wrapper) wrapper.style.borderColor = '';
            });
        });
    }

    // ===== Parallax Effect on Orbs =====
    const orbs = document.querySelectorAll('.gradient-orb');
    
    document.addEventListener('mousemove', (e) => {
        const x = (e.clientX / window.innerWidth - 0.5) * 2;
        const y = (e.clientY / window.innerHeight - 0.5) * 2;
        
        orbs.forEach((orb, index) => {
            const speed = (index + 1) * 15;
            orb.style.transform = `translate(${x * speed}px, ${y * speed}px)`;
        });
    });

    // ===== Scroll Progress Indicator =====
    function createScrollProgress() {
        const progress = document.createElement('div');
        progress.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            background: linear-gradient(90deg, #6366f1, #ec4899);
            z-index: 10000;
            transition: width 0.1s ease;
        `;
        document.body.appendChild(progress);
        
        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            progress.style.width = scrollPercent + '%';
        });
    }
    
    createScrollProgress();

    // ===== Lazy Load Images =====
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });
    
    lazyImages.forEach(img => imageObserver.observe(img));

    // ===== Keyboard Navigation =====
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (navToggle && navMenu) {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
            }
            document.body.classList.remove('no-scroll');
        }
    });

    // ===== Performance: Debounce & Throttle =====
    function debounce(func, wait = 10) {
        let timeout;
        return function(...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), wait);
        };
    }
    
    function throttle(func, limit = 100) {
        let inThrottle;
        return function(...args) {
            if (!inThrottle) {
                func.apply(this, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }

    // ===== Add Focus Styles for Accessibility =====
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Tab') {
            document.body.classList.add('keyboard-navigation');
        }
    });
    
    document.addEventListener('mousedown', () => {
        document.body.classList.remove('keyboard-navigation');
    });

    // ===== Service Cards Tilt Effect =====
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 20;
            const rotateY = (centerX - x) / 20;
            
            this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
        });
    });

    // ===== Console Welcome Message =====
    console.log('%c AppsDeddy ', 'background: linear-gradient(135deg, #6366f1, #ec4899); color: white; font-size: 24px; padding: 10px 20px; border-radius: 10px;');
    console.log('%c US-based Premium App Development Agency ', 'color: #6366f1; font-size: 14px;');
    console.log('%c Website initialized successfully! ', 'color: #10b981; font-size: 12px;');

});

// ===== Utility Functions =====

// Detect mobile device
function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

// Add mobile class
if (isMobile()) {
    document.body.classList.add('is-mobile');
}

// Smooth reveal on scroll
function revealOnScroll() {
    const reveals = document.querySelectorAll('.reveal');
    
    reveals.forEach(element => {
        const windowHeight = window.innerHeight;
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;
        
        if (elementTop < windowHeight - elementVisible) {
            element.classList.add('active');
        }
    });
}

window.addEventListener('scroll', revealOnScroll);
