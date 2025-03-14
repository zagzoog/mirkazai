<?php
    $base_class =
        'lqd-icon flex items-center justify-center shrink-0 relative shadow-xs rounded-full transition-all bg-primary text-primary-foreground [&_svg]:max-w-full [&_svg]:h-auto';

    $original_size = $size;

    $variations = [
        'size' => [
            'none' => 'lqd-icon-size-none',
            'sm' => 'lqd-icon-sm size-7',
            'md' => 'lqd-icon-md size-9',
            'lg' => 'lqd-icon-lg size-10',
            'xl' => 'lqd-icon-xl size-11',
        ],
    ];

    $size = isset($variations['size'][$size]) ? $variations['size'][$size] : $variations['size']['md'];
?>

<span <?php echo e($attributes->withoutTwMergeClasses()->twMerge($base_class, $size, $attributes->get('class'))); ?>>
    <?php echo e($slot); ?>


    <?php if($activeBadge): ?>
        <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'absolute bottom-0 end-0 inline-block rounded-full border-2 border-background',
            'size-3' => $original_size !== 'sm' && $original_size !== 'xs',
            'size-2.5' => $original_size === 'sm' || $original_size === 'xs',
            'bg-green-500' => $activeBadgeCondition,
            'bg-red-500' => !$activeBadgeCondition,
        ]); ?>"></span>
    <?php endif; ?>
</span>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/lqd-icon.blade.php ENDPATH**/ ?>