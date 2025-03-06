<?php
    $wrap_base_class = 'lqd-table-wrap w-full max-w-full overflow-x-auto';
    $base_class = 'lqd-table w-full text-start overflow-x-auto [-webkit-overflow-scrolling:touch] max-w-full';
    $head_base_class = 'lqd-table-head border-b text-start text-4xs leading-tight uppercase tracking-wider font-medium text-label transition-border';
    $body_base_class = '[&_tr:not(:last-child)]:border-b';
    $foot_base_class = 'lqd-table-foot';

    $variations = [
        'variant' => [
            'none' => 'lqd-table-variant-none shadow-none p-0',
            'solid' => 'lqd-table-solid rounded-xl bg-table-background pt-1',
            'outline' => 'lqd-table-outline rounded-xl border border-table-border pt-1',
            'shadow' => 'lqd-table-shadow rounded-xl shadow-table bg-table-background pt-1',
            'plain' => 'lqd-table-plain',
            'outline-shadow' => 'lqd-table-outline-shadow rounded-xl border border-table-border pt-1 shadow-table bg-table-background',
        ],
    ];

    $variant = isset($variations['variant'][$variant]) ? $variations['variant'][$variant] : $variations['variant'][Theme::getSetting('defaultVariations.table.variant', 'outline')];
?>

<div <?php echo e($attributes->withoutTwMergeClasses()->twMergeFor('wrap', $variant, $wrap_base_class)); ?>>
    <table <?php echo e($attributes->twMerge($base_class, $attributes->get('class'))); ?>>
        <?php if(!empty($head)): ?>
            <thead
                <?php echo e($attributes->twMergeFor('head', $head_base_class, $head->attributes->get('class'))); ?>

                <?php echo e($head->attributes); ?>

            >
                <?php echo e($head); ?>

            </thead>
        <?php endif; ?>
        <?php if(!empty($body)): ?>
            <tbody
                <?php echo e($attributes->twMergeFor('body', $body_base_class, $body->attributes->get('class'))); ?>

                <?php echo e($body->attributes); ?>

            >
                <?php echo e($body); ?>

            </tbody>
        <?php endif; ?>
        <?php if(!empty($foot)): ?>
            <tfoot
                <?php echo e($attributes->twMergeFor('foot', $foot_base_class, $foot->attributes->get('class'))); ?>

                <?php echo e($foot->attributes); ?>

            >
                <?php echo e($foot); ?>

            </tfoot>
        <?php endif; ?>
    </table>
</div>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/table.blade.php ENDPATH**/ ?>