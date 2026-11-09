<?php $__env->startSection('title', 'Ide Platform Agentic AI - ' . $tema); ?>

<?php $__env->startSection('content'); ?>
<section class="relative min-h-screen flex items-center overflow-hidden">

    <div class="relative z-10 flex justify-center w-full px-6">
        <div class="bg-white text-gray-900 rounded-6xl shadow-2xl max-w-xl w-full p-10">
            <p class="text-gray-500 mb-3">Ide Platform Agentic AI</p>

            <?php if($badge): ?>
                <span class="inline-block text-[10px] tracking-widest font-bold bg-gray-900 text-white rounded-full px-3 py-1 mb-3">
                    <?php echo e($badge); ?>

                </span>
            <?php endif; ?>

            <h1 class="mb-3 sm:text-4xl  text-gray-900"><?php echo e($tema); ?></h1>

            <p class="text-gray-700 leading-relaxed text-justify"><?php echo e($deskripsi); ?></p>

            <?php if(count($tags)): ?>
                <div class="flex flex-wrap gap-2 mt-6">
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="text-xs font-semibold bg-gray-100 text-gray-700 rounded-full px-3 py-1">
                            <?php echo e($tag); ?>

                        </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <p class="text-xs text-gray-400 mt-8">
                Format URL: /agent/{tema?} &mdash; parameter opsional, contoh: /agent/Security%20Agent
            </p>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\naaiy\Documents\SMT05\Project\PBKK\PBKK-B-5025241204\PBKK_Tugas-3\resources\views/agent.blade.php ENDPATH**/ ?>