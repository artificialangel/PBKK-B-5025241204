<?php $__env->startSection('title', 'Profil Jurusan'); ?>

<?php $__env->startSection('content'); ?>
<section class="relative min-h-screen flex items-center overflow-hidden">

    <div class="relative z-10 max-w-3xl mx-auto w-full px-8 pt-24 text-center">
        <h1 class="mb-8"> <?php echo e($nama_departemen); ?> </h1>
        <p class="mb-6"><?php echo e($deskripsi); ?></p>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\naaiy\Documents\SMT05\Project\PBKK\PBKK-B-5025241204\PBKK_Tugas-3\resources\views/about.blade.php ENDPATH**/ ?>