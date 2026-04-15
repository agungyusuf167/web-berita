<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($post->title); ?> - Cempaka News</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .content-area p { margin-bottom: 1.5rem; line-height: 1.8; color: #374151; }
        .content-area h2 { font-size: 1.5rem; font-weight: 700; margin-top: 2rem; margin-bottom: 1rem; color: #111827; }
        .content-area img { border-radius: 0.75rem; margin-top: 2rem; margin-bottom: 2rem; }
    </style>
</head>
<body class="bg-gray-50 antialiased">

    <nav class="bg-white/80 backdrop-blur-md border-b border-gray-100 p-4 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-black italic tracking-tighter text-blue-600">CEMPAKA NEWS</a>
            <div class="flex items-center space-x-4">
                <a href="/" class="text-sm font-semibold text-gray-500 hover:text-blue-600 transition">Beranda</a>
                <span class="text-gray-300">|</span>
                <span class="text-xs font-medium text-gray-400">Sedang Membaca Berita</span>
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-8 md:mt-12 px-4 pb-24">
        <div class="flex flex-wrap -mx-4">
            
            <div class="w-full lg:w-2/3 px-4 mb-10">
                <article class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                    
                    <div class="relative h-[300px] md:h-[500px]">
                        <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-8 left-8">
                            <span class="bg-blue-600 text-white text-[10px] px-3 py-1 rounded-md font-bold uppercase tracking-wider shadow-lg">
                                <?php echo e($post->category); ?>

                            </span>
                        </div>
                    </div>

                    <div class="p-6 md:p-12">
                        <div class="flex items-center text-gray-400 text-xs mb-6 space-x-4">
                            <div class="flex items-center">
                                <span class="font-semibold text-gray-700">Admin Cempaka</span>
                            </div>
                            <span>•</span>
                            <span><?php echo e($post->created_at->translatedFormat('d F Y')); ?></span>
                        </div>

                        <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 leading-[1.15] mb-8">
                            <?php echo e($post->title); ?>

                        </h1>

                        <div class="content-area">
                            <?php echo $post->content; ?>

                        </div>

                        <div class="mt-16 pt-8 border-t border-gray-100 flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <a href="/" class="inline-flex items-center text-blue-600 font-bold hover:gap-3 transition-all duration-300">
                                <span class="mr-2">←</span> Kembali ke Beranda
                            </a>
                            <div class="flex items-center space-x-3">
                                <span class="text-xs font-bold text-gray-400 uppercase">Bagikan:</span>
                                <button class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center hover:bg-blue-600 hover:text-white transition group">
                                    <span class="font-bold">f</span>
                                </button>
                                <button class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center hover:bg-green-500 hover:text-white transition group">
                                    <span class="font-bold">w</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="w-full lg:w-1/3 px-4">
                <div class="sticky top-28 space-y-8">
                    
                    <div class="bg-white p-6 md:p-8 rounded-3xl shadow-sm border border-gray-100">
                        <h3 class="text-lg font-bold mb-6 text-gray-900 flex items-center">
                            <span class="w-2 h-6 bg-blue-600 rounded-full mr-3"></span>
                            Berita Lainnya
                        </h3>
                        
                        <div class="space-y-8">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $terpopuler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <a href="<?php echo e(route('berita.show', $tp->slug)); ?>" class="flex items-start gap-4 group">
                                <div class="text-3xl font-black text-gray-100 group-hover:text-blue-200 transition-colors">
                                    0<?php echo e($key + 1); ?>

                                </div>
                                <div>
                                    <h4 class="font-bold text-sm text-gray-700 group-hover:text-blue-600 transition leading-snug">
                                        <?php echo e($tp->title); ?>

                                    </h4>
                                    <p class="text-[10px] text-gray-400 mt-2 font-bold uppercase tracking-widest"><?php echo e($tp->category); ?></p>
                                </div>
                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p class="text-sm text-gray-400 italic">Tidak ada berita lain.</p>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-blue-700 to-blue-900 p-8 rounded-3xl text-white relative overflow-hidden">
                        <div class="relative z-10">
                            <h4 class="font-bold text-xl mb-2">SMKS CEMPAKA</h4>
                            <p class="text-blue-100 text-xs leading-relaxed opacity-80">
                                Inovasi pendidikan berbasis teknologi untuk masa depan gemilang.
                            </p>
                        </div>
                        <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-white/10 rounded-full blur-2xl"></div>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <footer class="bg-white border-t border-gray-100 py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-xl font-extrabold italic text-gray-300 mb-4 tracking-tighter uppercase">Cempaka News Portal</h2>
            <p class="text-gray-400 text-[10px] font-bold tracking-[0.2em] uppercase">
                &copy; <?php echo e(date('Y')); ?> SMKS CEMPAKA. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html><?php /**PATH C:\Users\USER\web-berita\resources\views/show.blade.php ENDPATH**/ ?>