<?php $__env->startSection('title', 'Beranda - ' . $nama); ?>

<?php $__env->startSection('content'); ?>
<section class="relative min-h-screen flex items-center overflow-hidden">

    <div class="relative z-10 max-w-7xl mx-auto w-full px-8 pt-24">
        <h1 class="mb-8 animate-typing overflow-hidden whitespace-nowrap border-r-3 border-r-black dark:border-r-white pr-5">
            Selamat Datang!
        </h1>

        <div class="flex flex-wrap gap-3">
            <a href="<?php echo e(route('agent')); ?>"
            class="inline-block bg-black text-white dark:bg-white dark:text-black font-semibold rounded-full px-6 py-3 text-sm hover:bg-white hover:text-black dark:hover:bg-black dark:hover:text-white transition">
                Rencana Proyek
            </a>
            <a href="<?php echo e(route('dashboard.mahasiswa.detail', $nrp)); ?>"
              class="inline-block border border-black text-black dark:border-white dark:text-white font-semibold rounded-full px-6 py-3 text-sm hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition">
                Lihat Profil Lengkap
            </a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\naaiy\Documents\SMT05\Project\PBKK\PBKK-B-5025241204\PBKK_Tugas-3\resources\views/home.blade.php ENDPATH**/ ?>