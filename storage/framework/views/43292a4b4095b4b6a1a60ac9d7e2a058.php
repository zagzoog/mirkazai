<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'effect' => 1,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'effect' => 1,
]); ?>
<?php foreach (array_filter(([
    'effect' => 1,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $base_class = 'lqd-outline-glow absolute inline-block rounded-[inherit] pointer-events-none overflow-hidden lqd-outline-glow-effect-' . $effect;
    $inner_base_class = 'lqd-outline-glow-inner absolute start-1/2 top-1/2 inline-block aspect-square min-h-[150%] min-w-[150%] rounded-[inherit]';
?>

<span <?php echo e($attributes->withoutTwMergeClasses()->twMerge($base_class, $attributes->get('class'))); ?>>
    <span <?php echo e($attributes->twMergeFor('inner', $inner_base_class)); ?>></span>
</span>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/outline-glow.blade.php ENDPATH**/ ?>