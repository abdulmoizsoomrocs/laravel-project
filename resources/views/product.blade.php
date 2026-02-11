<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Premium Tech Product Detail</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:opsz,wght@6..72,400;6..72,500;6..72,600&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1466b8",
                        "background-light": "#f6f7f8",
                        "background-dark": "#111921",
                    },
                    fontFamily: {
                        "display": ["Newsreader", "serif"],
                        "sans": ["Inter", "sans-serif"]
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
        body { font-family: 'Inter', sans-serif; }
        .font-display { font-family: 'Newsreader', serif; }
        .glass-nav {
            background: rgba(246, 247, 248, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(20, 102, 184, 0.1);
        }
        .zoom-container:hover img {
            transform: scale(1.1);
        }
        .zoom-container img {
            transition: transform 0.5s ease;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 selection:bg-primary/30">
<!-- Sticky Glassmorphism Nav -->
<nav class="glass-nav fixed top-0 w-full z-50 py-4 px-6 md:px-12 flex justify-between items-center">
<div class="flex items-center gap-12">
<a class="text-2xl font-display font-semibold tracking-tight" href="#">AETHER</a>
<div class="hidden md:flex items-center gap-8 text-sm font-medium uppercase tracking-widest text-slate-600 dark:text-slate-400">
<a class="hover:text-primary transition-colors" href="#">Products</a>
<a class="hover:text-primary transition-colors" href="#">Story</a>
<a class="hover:text-primary transition-colors" href="#">Support</a>
</div>
</div>
<div class="flex items-center gap-6">
<button class="hover:text-primary transition-colors"><span class="material-icons text-xl">search</span></button>
<button class="relative hover:text-primary transition-colors">
<span class="material-icons text-xl">shopping_bag</span>
<span class="absolute -top-1 -right-1 bg-primary text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center">2</span>
</button>
</div>
</nav>
<main class="pt-24 pb-20 max-w-7xl mx-auto px-6 md:px-12">
<!-- Hero Section: Gallery & Info -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-24">
<!-- Gallery (Left) -->
<div class="lg:col-span-7 flex flex-col-reverse md:flex-row gap-4">
<div class="flex md:flex-col gap-3 overflow-x-auto md:overflow-y-visible">
<div class="w-20 h-20 flex-shrink-0 bg-white dark:bg-slate-800 rounded border border-primary p-1 cursor-pointer">
<img alt="Thumbnail 1" class="w-full h-full object-cover rounded" data-alt="Primary tech product side view" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCrcaCHM1phsmrGhnl-q0qQ1Sss08yUlhFhNWv3iWhZkjTjvxGBIZu9iTZMEcCVCU5V5-Fqld3cPBephww_HLvSXZpXNyyxzTJOqfHvkrTFU_2gg-nOJ0PbkwA6EoDQy7Ps2Zz57oc3c09VmYToBLlLrYzFp_DiN_a1ypbh-5sh95Spt89yCwCcMsQxNJhYy3HiUcVhGw3XgwgCjzaIaawpDMK6DsD2Dh0l8vocFLqbWIdFdRT6Kq4hrS1beoV3JYaH8B97FWmJVTW"/>
</div>
<div class="w-20 h-20 flex-shrink-0 bg-white dark:bg-slate-800 rounded border border-transparent hover:border-slate-300 dark:hover:border-slate-600 p-1 cursor-pointer">
<img alt="Thumbnail 2" class="w-full h-full object-cover rounded" data-alt="Tech product close up of buttons" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLuQQwNpFPzqFJV1yC1u-gamoyozvq8KhBPRJPYxWBVnPRUbK7OYBBg-v16nNj04JrDYOKvylE7_-IKk5zAWBNkODcQ-0TPeYtO3RCOe5fljQdoPocCuVz0k-diYBXxudB7n8OcPIjZHR4gDbrnf_-cs2OwHO_jSp--jr12jLNIdX72kDoc_wZrYYmORf-Y-9xbfFlf8ZDjDmT4EW1z-zScWMCcjD9wcCuU--rmtC5KD_yXACavkhr7I7RMSFgq990F5IxB_rU24FG"/>
</div>
<div class="w-20 h-20 flex-shrink-0 bg-white dark:bg-slate-800 rounded border border-transparent hover:border-slate-300 dark:hover:border-slate-600 p-1 cursor-pointer">
<img alt="Thumbnail 3" class="w-full h-full object-cover rounded" data-alt="Tech product rear view design" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3wcnV-qrOxhyKrK-hm0xdIEjfR6g2ara-DRszHx-5yZpOEPfvVu5ptoj8-Hd7BOvP6qzbo6C9FMs0nEYZGc6Duc8NC4rEPBRyIoTpomt6w2YKIw0CNEV5K2Zsl7YWOR3w6vL-IKjuNTuw2ise4AJ9YfkV_r5RbAknWSfIEgq1z-xDOVXLUzdnzX2gYwxBJ6gP_N8kM2KRdg6tUtB743EVavSDDlQFnV1qN8ELwxzhONqAs-qRihShj0TYqsErPGTqL1kG2cSER7_6"/>
</div>
</div>
<div class="flex-1 bg-white dark:bg-slate-800 rounded-xl overflow-hidden relative zoom-container cursor-crosshair">
<img alt="Main Product Image" class="w-full h-full object-cover" data-alt="High resolution minimalist tech device" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcVL-LHZCAgOzAUW--rag56CwYLm3K-G34ayzRWd4VH8zWDopsQMf2IvXDO8M1Q6fc5MxQg3XLrUwXxDjmNFIV-YQ5hZ51fQA3WVu8qPxeVSJQxRghdMj0ugN9BdRQqtn_fhVaZfI-7MN-p3a0n3ND1uBuC4rp6FZUG-nu4b2D3F2BJX9ijvj6u7yFc0ExdAFDxXcT_D_GefxLODZK8c1IOSSGS2ujH5iGlpcVRW3c210ya-4Jvp7ZC9jJS11cEiNeWp1EjoDuLbGV"/>
<div class="absolute bottom-6 right-6 bg-white/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] uppercase tracking-tighter text-slate-500 border border-slate-200">
                        Hover to Zoom
                    </div>
</div>
</div>
<!-- Product Info (Right) -->
<div class="lg:col-span-5 flex flex-col">
<div class="mb-2 text-primary font-semibold tracking-widest text-xs uppercase">Premium Edition</div>
<h1 class="text-5xl font-display font-medium mb-4 leading-tight">Lumina X1 Laptop</h1>
<div class="flex items-center gap-4 mb-6">
<div class="flex text-amber-400">
<span class="material-icons text-sm">star</span>
<span class="material-icons text-sm">star</span>
<span class="material-icons text-sm">star</span>
<span class="material-icons text-sm">star</span>
<span class="material-icons text-sm">star_half</span>
</div>
<span class="text-sm text-slate-500">4.8 (124 reviews)</span>
</div>
<div class="text-3xl font-display text-slate-900 dark:text-white mb-8">$1,499.00</div>
<p class="text-slate-600 dark:text-slate-400 mb-10 leading-relaxed max-w-md">
                    Engineered for modern creative professionals. A seamless blend of aeronautical-grade aluminum and breathtaking performance. Experience the future of minimalist computing.
                </p>
<!-- Configuration Options -->
<div class="space-y-8 mb-12">
<!-- Color Swatches -->
<div>
<label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-4">Color</label>
<div class="flex gap-4">
<button aria-label="Space Gray" class="w-10 h-10 rounded-full bg-slate-800 ring-2 ring-offset-2 ring-primary border border-white/10"></button>
<button aria-label="Silver" class="w-10 h-10 rounded-full bg-slate-300 ring-1 ring-slate-200 dark:ring-slate-700"></button>
<button aria-label="Midnight Blue" class="w-10 h-10 rounded-full bg-indigo-900 ring-1 ring-slate-200 dark:ring-slate-700"></button>
</div>
</div>
<!-- Storage Chips -->
<div>
<label class="block text-xs font-bold uppercase tracking-wider text-slate-500 mb-4">Storage</label>
<div class="flex flex-wrap gap-3">
<button class="px-6 py-2 rounded-lg border-2 border-primary text-primary font-medium text-sm">512GB</button>
<button class="px-6 py-2 rounded-lg border-2 border-slate-200 dark:border-slate-700 hover:border-slate-400 dark:hover:border-slate-500 transition-colors text-sm">1TB</button>
<button class="px-6 py-2 rounded-lg border-2 border-slate-200 dark:border-slate-700 hover:border-slate-400 dark:hover:border-slate-500 transition-colors text-sm">2TB</button>
</div>
</div>
</div>
<!-- CTA -->
<div class="flex flex-col gap-4">
<button class="w-full bg-primary text-white py-5 rounded-lg font-semibold tracking-wide shadow-xl shadow-primary/20 hover:bg-blue-700 transition-all transform active:scale-[0.98]">
                        Add to Cart
                    </button>
<button class="w-full flex items-center justify-center gap-2 text-slate-600 dark:text-slate-400 hover:text-primary transition-colors text-sm py-2">
<span class="material-icons text-base">favorite_border</span>
                        Add to Wishlist
                    </button>
</div>
<div class="mt-8 pt-8 border-t border-slate-200 dark:border-slate-800 flex justify-between">
<div class="flex items-center gap-3 text-xs text-slate-500">
<span class="material-icons text-primary">local_shipping</span>
<span>Free express shipping</span>
</div>
<div class="flex items-center gap-3 text-xs text-slate-500">
<span class="material-icons text-primary">verified</span>
<span>2 Year Warranty</span>
</div>
</div>
</div>
</div>
<!-- Technical Excellence Section -->
<section class="py-24 border-t border-slate-200 dark:border-slate-800">
<h2 class="text-4xl font-display mb-16 text-center">Technical Excellence</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-12 gap-y-16">
<div class="group">
<div class="text-xs font-bold text-primary mb-4 tracking-widest uppercase">Performance</div>
<h3 class="text-xl font-display mb-3">Custom Silicon</h3>
<p class="text-slate-500 text-sm leading-relaxed">Integrated 8-core CPU and 10-core GPU, providing desktop-class power in a mobile form factor.</p>
</div>
<div class="group">
<div class="text-xs font-bold text-primary mb-4 tracking-widest uppercase">Display</div>
<h3 class="text-xl font-display mb-3">Retina Liquid X</h3>
<p class="text-slate-500 text-sm leading-relaxed">14.2-inch OLED panel with 1600 nits peak brightness and ProMotion 120Hz technology.</p>
</div>
<div class="group">
<div class="text-xs font-bold text-primary mb-4 tracking-widest uppercase">Endurance</div>
<h3 class="text-xl font-display mb-3">All-Day Power</h3>
<p class="text-slate-500 text-sm leading-relaxed">Up to 18 hours of continuous video playback on a single charge. 50% charge in 30 minutes.</p>
</div>
<div class="group">
<div class="text-xs font-bold text-primary mb-4 tracking-widest uppercase">Build</div>
<h3 class="text-xl font-display mb-3">Ultra Portability</h3>
<p class="text-slate-500 text-sm leading-relaxed">Machined from a single block of aerospace aluminum. Weighting only 2.7 lbs (1.2 kg).</p>
</div>
</div>
</section>
<!-- Detailed Specifications Grid -->
<section class="py-16 bg-slate-100 dark:bg-slate-900/50 rounded-2xl px-12 mb-24">
<div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
<div>
<h4 class="font-display text-2xl mb-8">Full Specifications</h4>
<p class="text-slate-500 text-sm italic">Designed in Scandinavia. Engineered for the global frontier.</p>
</div>
<div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-8">
<div class="flex justify-between border-b border-slate-200 dark:border-slate-700 pb-4">
<span class="text-xs font-medium uppercase text-slate-400">Processor</span>
<span class="text-sm">M3 Pro Hexa-Core</span>
</div>
<div class="flex justify-between border-b border-slate-200 dark:border-slate-700 pb-4">
<span class="text-xs font-medium uppercase text-slate-400">Memory</span>
<span class="text-sm">16GB Unified LPDDR5X</span>
</div>
<div class="flex justify-between border-b border-slate-200 dark:border-slate-700 pb-4">
<span class="text-xs font-medium uppercase text-slate-400">Display Size</span>
<span class="text-sm">14.2-inch (diagonal)</span>
</div>
<div class="flex justify-between border-b border-slate-200 dark:border-slate-700 pb-4">
<span class="text-xs font-medium uppercase text-slate-400">Resolution</span>
<span class="text-sm">3024 x 1964 at 254 ppi</span>
</div>
<div class="flex justify-between border-b border-slate-200 dark:border-slate-700 pb-4">
<span class="text-xs font-medium uppercase text-slate-400">Biometrics</span>
<span class="text-sm">Fingerprint TouchID</span>
</div>
<div class="flex justify-between border-b border-slate-200 dark:border-slate-700 pb-4">
<span class="text-xs font-medium uppercase text-slate-400">Audio</span>
<span class="text-sm">6-Speaker High-Fidelity</span>
</div>
</div>
</div>
</section>
<!-- Related Products Section -->
<section>
<div class="flex justify-between items-end mb-12">
<h2 class="text-3xl font-display">Complete Your Setup</h2>
<a class="text-primary text-sm font-semibold hover:underline flex items-center gap-1" href="#">
                    View all accessories <span class="material-icons text-sm">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
<!-- Related Card 1 -->
<div class="group bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-700 hover:shadow-2xl hover:shadow-slate-200/50 dark:hover:shadow-none transition-all">
<div class="h-64 bg-slate-50 dark:bg-slate-900 flex items-center justify-center p-8 overflow-hidden">
<img alt="Headphones" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500" data-alt="Minimalist wireless over-ear headphones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAulfeAQwoKI0z69hV-a--OPI0MIeqFFXZ0Zp4hCNmzpFEteNrQ-ZkLz6--ByxJ972M9kacM4AlutTPCM1kD9-evkTMF-dapH7Hw7ZIwgpowk4Bsm7P6_cB0LH0K86rzuu7RijVwPQrRI8mO1D3paRSRl0hH5q-697lZRJ5GYUwouOrTU0TwKO44tuXlHDzNEpTUuwj9bg8EfjHa6c9B8-Tp2LPH_VijiaCAqHN6m0yEJFaz_1T7mKQp-XMBOA9JDEvOhW55uXLehdU"/>
</div>
<div class="p-6">
<div class="text-[10px] text-primary font-bold uppercase tracking-widest mb-1">Audio</div>
<h3 class="font-display text-lg mb-2">Sonic H1 Headphones</h3>
<div class="flex justify-between items-center">
<span class="text-slate-900 dark:text-white font-medium">$299.00</span>
<button class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400 hover:text-primary transition-colors">
<span class="material-icons text-lg">add</span>
</button>
</div>
</div>
</div>
<!-- Related Card 2 -->
<div class="group bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-700 hover:shadow-2xl hover:shadow-slate-200/50 dark:hover:shadow-none transition-all">
<div class="h-64 bg-slate-50 dark:bg-slate-900 flex items-center justify-center p-8 overflow-hidden">
<img alt="Laptop Sleeve" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500" data-alt="Sleek leather protective laptop sleeve" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHX6jt7DhGeePDkfd0e6sTZSVMJLjov27qmWVNLPN8hEe5o8-8WBKsuvugoLjVchQzQXmy0fMW-lvJkDp28HjxUdgO4LMg9Y850wv1LMQSuh4j2Fp9WXCsj2p3AAgxV4XIKGZQ01DK4zZxTXjIfsw-wStJvJUopZE5ZKpAOkQpGN1YKkkq60Wdlzt1aVUX8m2MEKufpNJXx76lDxLTU1j78IpkBoKzQhP-PiA2EpF9u4WgiO_tnWguvK_ZbGvKGJ_kSq2lJ-Nw7T6G"/>
</div>
<div class="p-6">
<div class="text-[10px] text-primary font-bold uppercase tracking-widest mb-1">Protection</div>
<h3 class="font-display text-lg mb-2">Nordic Leather Sleeve</h3>
<div class="flex justify-between items-center">
<span class="text-slate-900 dark:text-white font-medium">$89.00</span>
<button class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400 hover:text-primary transition-colors">
<span class="material-icons text-lg">add</span>
</button>
</div>
</div>
</div>
<!-- Related Card 3 -->
<div class="group bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-700 hover:shadow-2xl hover:shadow-slate-200/50 dark:hover:shadow-none transition-all">
<div class="h-64 bg-slate-50 dark:bg-slate-900 flex items-center justify-center p-8 overflow-hidden">
<img alt="Wireless Mouse" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500" data-alt="Ergonomic minimalist wireless mouse" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKHofSqrjzWSTcky8yCcmhI7wNlhyarPGU8BF_u0FyQ2tuFhQzsHIC_BaFCcBkXAS63PuL-lkdTI5vUlg02fxprfmZYjbc2rPei5rVAmvvmJ0rGsn8qS10MTZ03J-UZtjLQNSzcOH0dkPgQ7ixLxjkzBs8zPW_tBQapdzphMXBE1BTiF3Jpgrf6j5Z9wMkXgqIGp8XwtS2vWzbRXwOXzS5sYJ832P4xjHXCN9Le-g-fC5GadJ4g-6Wyftt6Qk5GSCxIVLVW6mBdAiq"/>
</div>
<div class="p-6">
<div class="text-[10px] text-primary font-bold uppercase tracking-widest mb-1">Peripherals</div>
<h3 class="font-display text-lg mb-2">Glide X Wireless Mouse</h3>
<div class="flex justify-between items-center">
<span class="text-slate-900 dark:text-white font-medium">$129.00</span>
<button class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400 hover:text-primary transition-colors">
<span class="material-icons text-lg">add</span>
</button>
</div>
</div>
</div>
<!-- Related Card 4 -->
<div class="group bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-100 dark:border-slate-700 hover:shadow-2xl hover:shadow-slate-200/50 dark:hover:shadow-none transition-all">
<div class="h-64 bg-slate-50 dark:bg-slate-900 flex items-center justify-center p-8 overflow-hidden">
<img alt="USB-C Hub" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500" data-alt="Compact multi-port docking station hub" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzyqKCSlSpKjkY7--UpZmujXZJ5pCTKERrrf3Q5HPOh2cHDYqc6rxbqZ3i-d92YMz71nEMHPHJGvTYd4bhtCV-EXNUm-4vWuVNglsuHjiBZP6l5PQqxZ4QykY4Z24f8hDmbvDtjcSCZWDlV5bE9AzH30lcDTInVes4pAXoRIaQmQ94yViE8SEaat2Z54IpJQG6CAhCCFO3w3SQgafJIO0iRqo2ONfv6I3KQCHZGkRYKv26GxtNEnmn-NgsUS0dozMgwT8ZCE8hsCYE"/>
</div>
<div class="p-6">
<div class="text-[10px] text-primary font-bold uppercase tracking-widest mb-1">Connectivity</div>
<h3 class="font-display text-lg mb-2">Connect Dock Plus</h3>
<div class="flex justify-between items-center">
<span class="text-slate-900 dark:text-white font-medium">$199.00</span>
<button class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400 hover:text-primary transition-colors">
<span class="material-icons text-lg">add</span>
</button>
</div>
</div>
</div>
</div>
</section>
</main>
<footer class="bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 py-20 px-6 md:px-12">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start gap-12">
<div class="max-w-xs">
<div class="text-2xl font-display font-semibold mb-6">AETHER</div>
<p class="text-slate-500 text-sm leading-relaxed">
                    Defining the next generation of premium tech through Scandinavian design principles and unmatched engineering.
                </p>
</div>
<div class="grid grid-cols-2 sm:grid-cols-3 gap-16">
<div>
<h5 class="text-xs font-bold uppercase tracking-widest text-slate-900 dark:text-white mb-6">Shop</h5>
<ul class="text-slate-500 text-sm space-y-4">
<li><a class="hover:text-primary transition-colors" href="#">Laptops</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Displays</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Audio</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Accessories</a></li>
</ul>
</div>
<div>
<h5 class="text-xs font-bold uppercase tracking-widest text-slate-900 dark:text-white mb-6">Support</h5>
<ul class="text-slate-500 text-sm space-y-4">
<li><a class="hover:text-primary transition-colors" href="#">Shipping</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Returns</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Warranty</a></li>
<li><a class="hover:text-primary transition-colors" href="#">FAQ</a></li>
</ul>
</div>
<div class="col-span-2 sm:col-span-1">
<h5 class="text-xs font-bold uppercase tracking-widest text-slate-900 dark:text-white mb-6">Stay Inspired</h5>
<div class="flex flex-col gap-4">
<div class="flex border border-slate-200 dark:border-slate-700 rounded-lg overflow-hidden max-w-sm">
<input class="bg-transparent border-none text-sm w-full focus:ring-0 px-4 py-2" placeholder="Email address" type="email"/>
<button class="bg-primary text-white px-4 py-2 text-sm font-semibold">Join</button>
</div>
<div class="flex gap-4 text-slate-400">
<a class="hover:text-primary transition-colors" href="#"><span class="material-icons text-xl">camera_alt</span></a>
<a class="hover:text-primary transition-colors" href="#"><span class="material-icons text-xl">facebook</span></a>
<a class="hover:text-primary transition-colors" href="#"><span class="material-icons text-xl">alternate_email</span></a>
</div>
</div>
</div>
</div>
</div>
<div class="max-w-7xl mx-auto mt-20 pt-8 border-t border-slate-100 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] uppercase tracking-widest text-slate-400">
<div>© 2024 AETHER TECHNOLOGIES. ALL RIGHTS RESERVED.</div>
<div class="flex gap-8">
<a class="hover:text-primary" href="#">Privacy Policy</a>
<a class="hover:text-primary" href="#">Terms of Service</a>
<a class="hover:text-primary" href="#">Accessibility</a>
</div>
</div>
</footer>
</body></html>