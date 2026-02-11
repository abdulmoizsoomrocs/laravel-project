<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Premium Tech | Scandinavian Minimalist</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1152d4",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        .glass-nav {
            background: rgba(16, 22, 34, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        .product-card:hover .quick-add {
            opacity: 1;
            transform: translateY(0);
        }
        .zoom-img:hover img {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased overflow-x-hidden">
<!-- Promo/Progress Bar Header -->
<div class="w-full bg-slate-900 dark:bg-slate-950 py-2 border-b border-white/5 relative z-[60]">
<div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
<div class="flex items-center gap-3">
<span class="text-[10px] font-bold uppercase tracking-widest text-primary">Status</span>
<p class="text-xs font-medium text-slate-400">Free shipping on all orders over $150</p>
</div>
<div class="hidden md:flex items-center gap-4 w-48 bg-slate-800/50 h-1 rounded-full overflow-hidden">
<div class="bg-primary h-full w-2/3"></div>
</div>
<div class="text-[10px] font-bold uppercase tracking-widest text-slate-400">
                Ends in: 12:45:02
            </div>
</div>
</div>
<!-- Navigation -->
<nav class="sticky top-0 z-50 glass-nav">
<div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
<div class="flex items-center gap-12">
<a class="text-2xl font-bold tracking-tighter flex items-center gap-2" href="#">
<div class="w-8 h-8 bg-primary rounded flex items-center justify-center">
<span class="material-icons-round text-white text-lg">bolt</span>
</div>
<span>NOVA<span class="text-primary">.</span></span>
</a>
<div class="hidden lg:flex items-center gap-8">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Audio</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Wearables</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Workplace</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Explore</a>
</div>
</div>
<div class="flex items-center gap-6">
<div class="hidden md:flex items-center bg-slate-100 dark:bg-slate-800/50 rounded-lg px-3 py-2 border border-slate-200 dark:border-white/5 group focus-within:border-primary/50 transition-all">
<span class="material-icons-round text-slate-400 text-lg">search</span>
<input class="bg-transparent border-none focus:ring-0 text-sm w-48 placeholder:text-slate-500" placeholder="Search devices..." type="text"/>
</div>
<div class="flex items-center gap-4">
<button class="hover:text-primary transition-colors">
<span class="material-icons-round">person_outline</span>
</button>
<button class="relative hover:text-primary transition-colors">
<span class="material-icons-round">shopping_bag</span>
<span class="absolute -top-1 -right-1 bg-primary text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center">2</span>
</button>
<button class="lg:hidden">
<span class="material-icons-round">menu</span>
</button>
</div>
</div>
</div>
</nav>
<!-- Hero Section -->
<header class="relative min-h-[85vh] flex items-center overflow-hidden">
<!-- Abstract background elements -->
<div class="absolute top-1/4 -left-20 w-96 h-96 bg-primary/10 rounded-full blur-[120px]"></div>
<div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-primary/5 rounded-full blur-[120px]"></div>
<div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center w-full">
<!-- Hero Image Column -->
<div class="lg:col-span-7 order-2 lg:order-1 relative">
<div class="aspect-square w-full max-w-2xl mx-auto rounded-3xl overflow-hidden shadow-2xl bg-slate-100 dark:bg-slate-800/20 border border-white/5">
<img alt="Premium Headphones" class="w-full h-full object-cover" data-alt="Close up shot of professional studio headphones on dark background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABO-5PQT14CWSy61JjOqm0939nP9oTXhh7i8EQ-BjPTsSqc9_m5Hl_sCb67A_ZvMGpxMoMH57jBDoKdGiBwuhhz4lRFbOTWZSObsYNGxTtjUZMrO6pvxVRdgzBGEgPNC2bDdVFGBZ7v-cUGorjIVAu0WwaYBfZh6ZwCpR6oFFcJrKEAQDSSVvK88faMBC7TRDFXSYbrxMISkUGzmRQiS2Nf00UFunE_LwgCrUxirQxZoLM7nV_I1wE80WJLJQUji9idwX0mjCIEuie"/>
</div>
<!-- Float card -->
<div class="absolute -bottom-6 -right-6 md:right-12 bg-white dark:bg-slate-900 p-6 rounded-xl shadow-2xl border border-white/5 glass-nav hidden md:block">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center text-primary">
<span class="material-icons-round">high_quality</span>
</div>
<div>
<p class="text-xs text-slate-400 font-bold uppercase tracking-widest">Hi-Res Audio</p>
<p class="text-sm font-semibold">Lossless Streaming</p>
</div>
</div>
</div>
</div>
<!-- Hero Text Column -->
<div class="lg:col-span-5 order-1 lg:order-2 space-y-8">
<div class="space-y-4">
<span class="inline-block px-4 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-widest border border-primary/20">
                        New Arrival 2024
                    </span>
<h1 class="text-5xl lg:text-7xl font-bold leading-[1.1] tracking-tight">
                        Future of <br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-400">Pure Sound.</span>
</h1>
<p class="text-lg text-slate-500 dark:text-slate-400 max-w-md leading-relaxed">
                        Experience audio like never before. Engineered for clarity, designed for comfort, and built for the future of professional sound.
                    </p>
</div>
<div class="flex flex-col sm:flex-row gap-4">
<button class="px-8 py-4 bg-primary text-white font-bold rounded-lg hover:bg-primary/90 transition-all flex items-center justify-center gap-2 group shadow-xl shadow-primary/20">
                        Shop Now
                        <span class="material-icons-round text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
<button class="px-8 py-4 bg-transparent border border-slate-200 dark:border-slate-700 font-bold rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800 transition-all flex items-center justify-center gap-2">
<span class="material-icons-round text-primary">play_circle</span>
                        Watch Demo
                    </button>
</div>
<div class="pt-8 border-t border-slate-200 dark:border-white/5 grid grid-cols-3 gap-8">
<div>
<p class="text-2xl font-bold">24h</p>
<p class="text-[10px] text-slate-400 uppercase tracking-widest font-bold">Battery Life</p>
</div>
<div>
<p class="text-2xl font-bold">ANC</p>
<p class="text-[10px] text-slate-400 uppercase tracking-widest font-bold">Noise Cancel</p>
</div>
<div>
<p class="text-2xl font-bold">LDAC</p>
<p class="text-[10px] text-slate-400 uppercase tracking-widest font-bold">High Fidelity</p>
</div>
</div>
</div>
</div>
</header>
<!-- Product Grid Section -->
<section class="max-w-7xl mx-auto px-6 py-24">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
<div class="space-y-2">
<h2 class="text-3xl font-bold tracking-tight">Curated Selection</h2>
<p class="text-slate-500 dark:text-slate-400">Handpicked premium tech for your digital lifestyle.</p>
</div>
<div class="flex gap-2">
<button class="w-10 h-10 rounded-full border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
<span class="material-icons-round">chevron_left</span>
</button>
<button class="w-10 h-10 rounded-full border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
<span class="material-icons-round">chevron_right</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
<!-- Product Card 1 -->
<div class="product-card group cursor-pointer">
<div class="zoom-img relative aspect-[4/5] bg-slate-100 dark:bg-slate-900 rounded-xl overflow-hidden mb-6 border border-slate-200 dark:border-white/5">
<img alt="Nova Audio X1" class="w-full h-full object-cover transition-transform duration-700" data-alt="Minimalist wireless overhead headphones in matte black" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9QA487MwGCxeqEbddxhcy2ZHL2qxdsGvjup5VkdZg-19ocXz97bf-rVZtv1rZ91zPbMIAfOBwnZoQoTGe_z1j9pPQmw166H8q6llzThAD-f3GT_W67fFH6U7ADC0dmGkcAiJKLQzVdVuywicVM3NuI4vX1UiNDkZvkFZI6h_XJwWDAGJzFqWiu1ND0MCyIxGq_1cvVy6HBpuQ_8BtjdE6iUD4iJjcbTyiZUbI622iIQuhLHnXR5VieZbRus20NZ8lLQ71oM5v72ov"/>
<div class="quick-add absolute inset-x-4 bottom-4 opacity-0 translate-y-2 transition-all duration-300">
<button class="w-full py-3 bg-white dark:bg-slate-950 text-slate-900 dark:text-white font-bold text-sm rounded-lg shadow-xl border border-white/10 hover:bg-primary hover:text-white transition-colors">
                            Quick Add
                        </button>
</div>
<button class="absolute top-4 right-4 w-10 h-10 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-icons-round text-sm">favorite_border</span>
</button>
</div>
<div class="space-y-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-lg">Nova Audio X1</h3>
<p class="text-lg font-medium text-slate-900 dark:text-slate-100">$299.00</p>
</div>
<div class="flex items-center gap-1 text-yellow-500">
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs text-slate-300 dark:text-slate-700">star</span>
<span class="text-xs text-slate-400 font-medium ml-1">(48)</span>
</div>
</div>
</div>
<!-- Product Card 2 -->
<div class="product-card group cursor-pointer">
<div class="zoom-img relative aspect-[4/5] bg-slate-100 dark:bg-slate-900 rounded-xl overflow-hidden mb-6 border border-slate-200 dark:border-white/5">
<img alt="Nova Watch 4" class="w-full h-full object-cover transition-transform duration-700" data-alt="Modern smartwatch with minimalist white strap and dark face" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBmBCwtyXgLqoTma1Scj-d_1dZu0em4YolOxOaOUNaiioLoLQ_kLVr8A1DxtCAmyL_lM5zbbh_eW2wvACGA1T3e9wWqI50PunbGfcuCUllvOfu6BHAPnt12rIsFhkUy6ZWcJLuyA_IKSQFifofN_F6o-i-d_UZxPZAkmByW-7fFfhlRUGZ86farvm-oJoJfxeNjm-5sG5Xi_6r_mY-ge2R9Uwjbfbn0cdMSAUG7s3fmSZxS6IBHvusRZyLoAe9J8kMZkUEnqWA-Yqu"/>
<div class="quick-add absolute inset-x-4 bottom-4 opacity-0 translate-y-2 transition-all duration-300">
<button class="w-full py-3 bg-white dark:bg-slate-950 text-slate-900 dark:text-white font-bold text-sm rounded-lg shadow-xl border border-white/10 hover:bg-primary hover:text-white transition-colors">
                            Quick Add
                        </button>
</div>
</div>
<div class="space-y-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-lg">Nova Watch 4</h3>
<p class="text-lg font-medium text-slate-900 dark:text-slate-100">$349.00</p>
</div>
<div class="flex items-center gap-1 text-yellow-500">
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="text-xs text-slate-400 font-medium ml-1">(124)</span>
</div>
</div>
</div>
<!-- Product Card 3 -->
<div class="product-card group cursor-pointer">
<div class="zoom-img relative aspect-[4/5] bg-slate-100 dark:bg-slate-900 rounded-xl overflow-hidden mb-6 border border-slate-200 dark:border-white/5">
<img alt="Work Station Mini" class="w-full h-full object-cover transition-transform duration-700" data-alt="Compact minimalist aluminum laptop stand and accessories" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPFecM8FPWW41-lRAgLaN8z3BiKrg04bewht2LWhw1bExtGefkXEf4sG-JUUPS8qDBQbiaJrAJoaA3qsSSGxhiirorhv9_qYxx3n_6p7hptqJLOXBZF6PCk5ZWymseOyfpfvXYD6GzD03LuVtOWuLwtG_kWeIA9laIiN68AA75V7_dA3puDTT2qzzom3PJxqa5MVLaTojHSD1UVEk738uUknUi1Bwzvr--l8173k0v7fjNh18uyHQi_-JMnZIaP5jPzAd2PEPeXSG5"/>
<div class="quick-add absolute inset-x-4 bottom-4 opacity-0 translate-y-2 transition-all duration-300">
<button class="w-full py-3 bg-white dark:bg-slate-950 text-slate-900 dark:text-white font-bold text-sm rounded-lg shadow-xl border border-white/10 hover:bg-primary hover:text-white transition-colors">
                            Quick Add
                        </button>
</div>
</div>
<div class="space-y-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-lg">Nova Dock Pro</h3>
<p class="text-lg font-medium text-slate-900 dark:text-slate-100">$129.00</p>
</div>
<div class="flex items-center gap-1 text-yellow-500">
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs text-slate-300 dark:text-slate-700">star</span>
<span class="text-xs text-slate-400 font-medium ml-1">(31)</span>
</div>
</div>
</div>
<!-- Product Card 4 -->
<div class="product-card group cursor-pointer">
<div class="zoom-img relative aspect-[4/5] bg-slate-100 dark:bg-slate-900 rounded-xl overflow-hidden mb-6 border border-slate-200 dark:border-white/5">
<img alt="Studio Sound Bar" class="w-full h-full object-cover transition-transform duration-700" data-alt="Modern horizontal smart speaker in sleek metallic finish" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBW-ibHXUt9wiBULhPdPqQzzp4QSffeN5WHNjqhVO_j8Mc_aU-oJT4win6af0n47X0-T0uq0HO8JDEWvIzYgDBMhW-CFoPca6-cRXldCSdtvjCGU_PaNs7jiAG2i6zorEAb4o6cIidgvZL4kGmxKdg8Kd-44ltp31GW_cNHlr80ksanVUckPoiE5QlTyRdfBIciMcCuTmVxhKEhTbIUVIXaWEb4wCE0lbdRn7xcDpFd1TiGWUnRgtphLc5WIOlwEV_Jq7tsv63B0zz9"/>
<div class="quick-add absolute inset-x-4 bottom-4 opacity-0 translate-y-2 transition-all duration-300">
<button class="w-full py-3 bg-white dark:bg-slate-950 text-slate-900 dark:text-white font-bold text-sm rounded-lg shadow-xl border border-white/10 hover:bg-primary hover:text-white transition-colors">
                            Quick Add
                        </button>
</div>
</div>
<div class="space-y-1">
<div class="flex justify-between items-start">
<h3 class="font-bold text-lg">Nova Beam Speaker</h3>
<p class="text-lg font-medium text-slate-900 dark:text-slate-100">$499.00</p>
</div>
<div class="flex items-center gap-1 text-yellow-500">
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="material-icons-round text-xs">star</span>
<span class="text-xs text-slate-400 font-medium ml-1">(89)</span>
</div>
</div>
</div>
</div>
</section>
<!-- Category Highlights -->
<section class="bg-slate-100 dark:bg-slate-900/50 py-24">
<div class="max-w-7xl mx-auto px-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="relative group overflow-hidden rounded-2xl h-[400px]">
<img alt="Workplace" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" data-alt="Minimalist productive office setup with laptop and accessories" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8eWYdBdgaJhYfoVfN9vWPafJJ_qYPS99TaeiX0si0feVkBYCsaXBMFTvM1LgYigw87SUsp5jpBRMbwGjgKoDnZeEqBKPbUDLU8uggPiVwB1Zm1_S-tqNMT0YPgqUAsBmDFKQDQBhAfb9JWO-00zw3DpTJRoMpsQoAwJPEqVFfUTu176zVKzmQ7nfxu6Deto5Z5xMZ2iqjafTgtTHY5JT_7SBjLIMhG3KGjklnqbl9Lp7NHVK0YQsCu2BvCUVN2k9Kqeye6a0MMHoS"/>
<div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent flex flex-col justify-end p-10">
<h3 class="text-3xl font-bold text-white mb-2">Workspace Elite</h3>
<p class="text-slate-300 mb-6 max-w-xs">Elevate your productivity with our curated desk essentials collection.</p>
<a class="text-primary font-bold flex items-center gap-2 group/link" href="#">
                            Explore Collection
                            <span class="material-icons-round text-sm group-hover/link:translate-x-1 transition-transform">east</span>
</a>
</div>
</div>
<div class="relative group overflow-hidden rounded-2xl h-[400px]">
<img alt="Travel" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" data-alt="Modern tech gadgets organized for travel lifestyle" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDiOnptxHtAiA2LmmJ5NT7qKCwPdhEpdPtas3tSBViWV4ZX0gUaSEbcTjki1cI7C6dWxZS1HSTMnwRTi9quovRFmSBsC_T9qYlaZqEMZh9xViDHPx8F7nRto1-Y-tA_r56MKfE_zbe2HZTCj4cfNpp_xbGRa8jFo_HS4gNvsqA2Z1PguLf3nPRsRe1VsaqVIdPEZGyRHpOOsTYvIag6VR06_SeBzbfMFtc8LDVc9qHAQNX3Br5OWwnXzw6fyg9W0R-GOQEzz62-97Y"/>
<div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent flex flex-col justify-end p-10">
<h3 class="text-3xl font-bold text-white mb-2">On The Go</h3>
<p class="text-slate-300 mb-6 max-w-xs">Compact, powerful tech designed for the modern nomadic life.</p>
<a class="text-primary font-bold flex items-center gap-2 group/link" href="#">
                            Explore Collection
                            <span class="material-icons-round text-sm group-hover/link:translate-x-1 transition-transform">east</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- Footer -->
<footer class="pt-24 pb-12 bg-white dark:bg-background-dark border-t border-slate-200 dark:border-white/5">
<div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
<div class="space-y-6">
<a class="text-2xl font-bold tracking-tighter flex items-center gap-2" href="#">
<div class="w-8 h-8 bg-primary rounded flex items-center justify-center">
<span class="material-icons-round text-white text-lg">bolt</span>
</div>
<span>NOVA<span class="text-primary">.</span></span>
</a>
<p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">
                    Setting the standard for premium tech with a commitment to minimalist design and peak performance.
                </p>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:text-primary transition-colors" href="#">
<i class="material-icons-round text-lg">facebook</i>
</a>
<a class="w-10 h-10 rounded-full border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:text-primary transition-colors" href="#">
<i class="material-icons-round text-lg">camera_alt</i>
</a>
<a class="w-10 h-10 rounded-full border border-slate-200 dark:border-slate-800 flex items-center justify-center hover:text-primary transition-colors" href="#">
<i class="material-icons-round text-lg">alternate_email</i>
</a>
</div>
</div>
<div>
<h4 class="font-bold mb-6">Shop</h4>
<ul class="space-y-4 text-sm text-slate-500 dark:text-slate-400">
<li><a class="hover:text-primary transition-colors" href="#">New Arrivals</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Best Sellers</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Audio Collection</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Refurbished</a></li>
</ul>
</div>
<div>
<h4 class="font-bold mb-6">Company</h4>
<ul class="space-y-4 text-sm text-slate-500 dark:text-slate-400">
<li><a class="hover:text-primary transition-colors" href="#">About Nova</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Sustainability</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Careers</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Store Locator</a></li>
</ul>
</div>
<div>
<h4 class="font-bold mb-6">Newsletter</h4>
<p class="text-sm text-slate-500 dark:text-slate-400 mb-6 leading-relaxed">Join for early access to product launches and exclusive offers.</p>
<div class="flex gap-2">
<input class="bg-slate-100 dark:bg-slate-800/50 border-none rounded-lg focus:ring-1 focus:ring-primary w-full text-sm" placeholder="Email address" type="email"/>
<button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-all font-bold text-sm">Join</button>
</div>
</div>
</div>
<div class="max-w-7xl mx-auto px-6 pt-8 border-t border-slate-200 dark:border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
<p class="text-xs text-slate-500 dark:text-slate-600">© 2024 Nova Technologies. All rights reserved.</p>
<div class="flex gap-8 text-xs text-slate-500 dark:text-slate-600">
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
<a class="hover:text-primary transition-colors" href="#">Shipping Info</a>
</div>
</div>
</footer>
</body></html>