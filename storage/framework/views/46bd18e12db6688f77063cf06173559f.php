<?php
    $base_class = 'lqd-form-step flex items-center gap-3 rounded-xl bg-[rgba(157,107,221,0.1)] px-4 py-3 text-sm font-semibold';
    $step_base_class = 'lqd-form-step-num inline-flex size-6 shrink-0 items-center justify-center rounded-full bg-[#9D6BDD] text-sm text-white';
?>

<h3
    <?php echo e($attributes->withoutTwMergeClasses()->twMerge($base_class)); ?>

    <?php echo e($attributes); ?>

>
    <span <?php echo e($attributes->twMergeFor('step', $step_base_class)); ?>>
        <?php echo e($step); ?>

    </span>
    <?php echo e($label); ?>

    <?php echo e($slot); ?>

</h3>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/form-step.blade.php ENDPATH**/ ?>