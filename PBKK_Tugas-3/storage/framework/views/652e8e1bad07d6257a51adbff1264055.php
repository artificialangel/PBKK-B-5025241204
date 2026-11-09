<?php $__env->startSection('title', 'Detail Mahasiswa - ' . $nrp); ?>

<?php $__env->startSection('content'); ?>
<section class="relative min-h-screen flex items-center justify-center px-4 py-32 overflow-hidden">
    <div class="relative z-10 bg-white text-gray-900 rounded-5xl shadow-2xl max-w-lg w-full p-10">

        <p class="text-gray-500 mb-3">Detail &middot; Mahasiswa</p>
        <h1 class="mb-6 sm:text-4xl text-gray-900">NRP <?php echo e($nrp); ?></h1>

        <?php if($profil): ?>
            <dl class="grid grid-cols-[130px_1fr] gap-y-2 text-sm">
                <?php if (isset($component)) { $__componentOriginal40edf33d2c377a0037b40037f6cdc014 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal40edf33d2c377a0037b40037f6cdc014 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-card','data' => ['label' => 'Nama','value' => $profil['nama']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('info-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nama','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profil['nama'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal40edf33d2c377a0037b40037f6cdc014)): ?>
<?php $attributes = $__attributesOriginal40edf33d2c377a0037b40037f6cdc014; ?>
<?php unset($__attributesOriginal40edf33d2c377a0037b40037f6cdc014); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40edf33d2c377a0037b40037f6cdc014)): ?>
<?php $component = $__componentOriginal40edf33d2c377a0037b40037f6cdc014; ?>
<?php unset($__componentOriginal40edf33d2c377a0037b40037f6cdc014); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal40edf33d2c377a0037b40037f6cdc014 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal40edf33d2c377a0037b40037f6cdc014 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-card','data' => ['label' => 'Program Studi','value' => $profil['prodi']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('info-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Program Studi','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profil['prodi'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal40edf33d2c377a0037b40037f6cdc014)): ?>
<?php $attributes = $__attributesOriginal40edf33d2c377a0037b40037f6cdc014; ?>
<?php unset($__attributesOriginal40edf33d2c377a0037b40037f6cdc014); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40edf33d2c377a0037b40037f6cdc014)): ?>
<?php $component = $__componentOriginal40edf33d2c377a0037b40037f6cdc014; ?>
<?php unset($__componentOriginal40edf33d2c377a0037b40037f6cdc014); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal40edf33d2c377a0037b40037f6cdc014 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal40edf33d2c377a0037b40037f6cdc014 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-card','data' => ['label' => 'Angkatan','value' => $profil['angkatan']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('info-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Angkatan','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profil['angkatan'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal40edf33d2c377a0037b40037f6cdc014)): ?>
<?php $attributes = $__attributesOriginal40edf33d2c377a0037b40037f6cdc014; ?>
<?php unset($__attributesOriginal40edf33d2c377a0037b40037f6cdc014); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40edf33d2c377a0037b40037f6cdc014)): ?>
<?php $component = $__componentOriginal40edf33d2c377a0037b40037f6cdc014; ?>
<?php unset($__componentOriginal40edf33d2c377a0037b40037f6cdc014); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal40edf33d2c377a0037b40037f6cdc014 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal40edf33d2c377a0037b40037f6cdc014 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-card','data' => ['label' => 'IPK','value' => $profil['ipk']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('info-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'IPK','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profil['ipk'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal40edf33d2c377a0037b40037f6cdc014)): ?>
<?php $attributes = $__attributesOriginal40edf33d2c377a0037b40037f6cdc014; ?>
<?php unset($__attributesOriginal40edf33d2c377a0037b40037f6cdc014); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40edf33d2c377a0037b40037f6cdc014)): ?>
<?php $component = $__componentOriginal40edf33d2c377a0037b40037f6cdc014; ?>
<?php unset($__componentOriginal40edf33d2c377a0037b40037f6cdc014); ?>
<?php endif; ?>
            </dl>
        <?php else: ?>
            <p class="text-sm text-gray-600">
                Data untuk NRP <span class="font-semibold"><?php echo e($nrp); ?></span> belum terdaftar
                di sistem ini. Tambahkan datanya di
                <code class="bg-gray-100 px-1 rounded">PageController@mahasiswa</code>.
            </p>
        <?php endif; ?>

        <p class="text-xs text-gray-400 mt-8">
            /dashboard/mahasiswa/5025211204
        </p>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\naaiy\Documents\SMT05\Project\PBKK\PBKK-B-5025241204\PBKK_Tugas-3\resources\views/mahasiswa.blade.php ENDPATH**/ ?>