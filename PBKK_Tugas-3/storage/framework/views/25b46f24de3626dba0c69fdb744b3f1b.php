<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['type' => 'info']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['type' => 'info']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $colors = [
        'error'   => 'text-red-400',
        'success' => 'text-green-400',
        'info'    => 'text-blue-300',
    ];
    $colorClass = $colors[$type] ?? $colors['info'];
?>

<p <?php echo e($attributes->merge(['class' => "$colorClass text-xs mt-4"])); ?>>
    <?php echo e($slot); ?>

</p>
<?php /**PATH C:\Users\naaiy\Documents\SMT05\Project\PBKK\PBKK-B-5025241204\PBKK_Tugas-3\resources\views/components/status-banner.blade.php ENDPATH**/ ?>