<?php if (!defined('APPSDEDDY')) exit; ?>
:root{--primary:#6366f1;--primary-dark:#4f46e5;--secondary:#ec4899;--dark:#0f172a;--gray-600:#475569;--gray-500:#64748b;--gray-100:#f1f5f9;--white:#fff;--gradient-primary:linear-gradient(135deg,#6366f1 0%,#ec4899 100%);--radius-sm:8px;--radius-md:12px;--radius-lg:16px;--radius-full:9999px;--text-sm:.875rem;--text-base:1rem;--text-lg:1.125rem;--text-6xl:3.8rem;--font-display:system-ui,-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif}
[data-theme=dark]{--bg-primary:#0f172a;--bg-secondary:#1e293b;--text-primary:#f1f5f9;--text-secondary:#94a3b8;--border-color:rgba(255,255,255,.1)}
[data-theme=light],html:not([data-theme]){--bg-primary:#fff;--bg-secondary:#f1f5f9;--text-primary:#0f172a;--text-secondary:#475569;--border-color:rgba(0,0,0,.1)}
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth;font-size:16px;overflow-x:hidden}
body{font-family:var(--font-display);background:var(--bg-primary,var(--white));color:var(--text-primary,var(--dark));line-height:1.7;overflow-x:hidden;-webkit-font-smoothing:antialiased}
a{text-decoration:none;color:inherit}
ul{list-style:none}
img{max-width:100%;height:auto;display:block}
button{font-family:inherit;cursor:pointer;border:none;background:none}
.container{max-width:1320px;margin:0 auto;padding:0 24px}
.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}
.skip-link{position:absolute;top:-100px;left:16px;z-index:10001;padding:10px 16px;background:var(--primary);color:#fff;border-radius:var(--radius-md);font-weight:600}
.skip-link:focus{top:16px}
.navbar{position:fixed;top:0;left:0;width:100%;padding:12px 0;z-index:1000;background:transparent}
.navbar.scrolled{padding:10px 0;background:#fff}
.navbar .container{display:flex;align-items:center;justify-content:space-between}
.logo{display:flex;align-items:center;z-index:1001}
.logo-img{height:40px;width:auto;max-width:220px;object-fit:contain}
.nav-menu{display:flex;align-items:center;gap:4px}
.nav-link{font-weight:600;font-size:var(--text-sm);color:var(--text-primary,var(--dark));padding:6px 12px}
.nav-actions{display:flex;align-items:center;gap:12px}
.nav-toggle{display:none;flex-direction:column;gap:5px;padding:8px;border-radius:var(--radius-sm)}
.nav-toggle span{display:block;width:24px;height:2px;background:var(--text-primary,var(--dark));transition:.3s}
.btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:12px 24px;font-weight:600;font-size:var(--text-base);border-radius:var(--radius-md);transition:.3s}
.btn-primary{background:var(--gradient-primary);color:#fff;box-shadow:0 4px 20px rgba(99,102,241,.35)}
.btn-lg{padding:14px 28px;font-size:var(--text-lg)}
.hero{min-height:100vh;display:flex;align-items:center;padding:70px 0 60px;position:relative;overflow:hidden;background:var(--bg-primary,var(--white))}
.hero .container{display:grid;grid-template-columns:1fr 1fr;gap:50px;align-items:center;position:relative;z-index:1}
.hero-content{max-width:620px}
.hero-title{font-size:var(--text-6xl);font-weight:700;line-height:1.1;margin-bottom:24px}
body.home .hero-title .title-line{color:var(--primary-dark)}
.hero-description{font-size:var(--text-lg);color:var(--text-secondary,var(--gray-600));margin-bottom:40px;line-height:1.8}
.hero-buttons{display:flex;gap:16px;flex-wrap:wrap;margin-bottom:60px}
.hero-stats{display:flex;padding:14px 20px;background:var(--bg-secondary,var(--gray-100));border-radius:var(--radius-lg);border:1px solid var(--border-color,rgba(0,0,0,.05))}
.hero-stats-inner{display:grid;grid-template-columns:repeat(2,1fr);gap:20px 30px;width:100%}
@media(max-width:992px){.nav-toggle{display:flex}.nav-menu{position:fixed;top:72px;right:-320px;width:min(280px,85vw);max-height:calc(100vh - 100px);background:var(--bg-primary,var(--white));flex-direction:column;padding:20px;box-shadow:0 24px 48px rgba(0,0,0,.2);z-index:1000}.nav-menu.active{right:16px}.nav-actions .nav-btn{display:none}.hero .container{grid-template-columns:1fr;gap:40px}.hero-title{font-size:2.5rem}}
@media(max-width:768px){.hero{padding:60px 0 45px}.hero-description{font-size:var(--text-base);margin-bottom:30px}.hero-buttons .btn{width:100%;max-width:280px;justify-content:center}}
