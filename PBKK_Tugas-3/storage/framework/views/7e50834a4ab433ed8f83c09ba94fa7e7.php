<?php $__env->startSection('title', 'Hasil Kalkulator IPK'); ?>

<?php $__env->startSection('content'); ?>
<section class="relative min-h-screen flex items-center justify-center px-4 py-32 overflow-hidden">
    <div class="relative z-10 w-full max-w-xl rounded-2xl shadow-2xl overflow-hidden border border-white/10">

        
        <div class="bg-white dark:bg-black px-6 py-4 flex items-center gap-3 border-b border-white/10">
            <span class="text-xs font-bold tracking-wide text-black dark:text-white">PBKK</span>
            <span class="text-xs text-gray-400 font-mono">/hitung-ipk/&#123;ip1&#125;/&#123;ip2&#125;</span>
        </div>

        <div class="bg-white dark:bg-black px-8 py-10">
            <h1 class="font-serif text-3xl sm:text-4xl mb-3">
                <span class="italic">Calculate</span> Your GPA.
            </h1>
            <p class="text-gray-300 text-sm mb-8">
                Here's your total and average across two semesters.
            </p>

            <div class="flex flex-wrap items-center gap-3 text-sm">
                <label class="font-semibold">GPA 1</label>
                <span class="w-24 inline-block rounded-lg px-3 py-2 text-gray-900 bg-gray-200 text-center font-semibold"><?php echo e($ip1); ?></span>
                <span class="font-semibold">and GPA 2</span>
                <span class="w-24 inline-block rounded-lg px-3 py-2 text-gray-900 bg-gray-200 text-center font-semibold"><?php echo e($ip2); ?></span>
            </div>
        </div>

        <div class="bg-white dark:bg-black border-t border-white/10 px-8 py-6 flex flex-wrap items-center gap-x-10 gap-y-3">
            <a href="<?php echo e(route('calculator')); ?>"
                    class="border border-black dark:border-white text-black dark:text-white font-semibold rounded-lg px-6 py-3 text-sm hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition">
                Recount
            </a>
            <p class="text-sm font-bold">Total GPA: <span class="text-black dark:text-white"><?php echo e($jumlah); ?></span></p>
            <p class="text-sm font-bold">Average GPA: <span class="text-black dark:text-white"><?php echo e($rataRata); ?></span></p>
        </div>
    </div>

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\naaiy\Documents\SMT05\Project\PBKK\PBKK-B-5025241204\PBKK_Tugas-3\resources\views/hitung-ipk.blade.php ENDPATH**/ ?>