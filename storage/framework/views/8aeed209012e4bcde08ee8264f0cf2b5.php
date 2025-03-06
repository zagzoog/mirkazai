<?php
    $base_class = 'lqd-navbar-dropdown ps-7';

    if (empty($open)) {
        $base_class .= ' hidden';
    }
?>

<ul
    <?php echo e($attributes->withoutTwMergeClasses()->twMerge($base_class, $attributes->get('class'))); ?>

    :class="{ 'hidden': !dropdownOpen && '<?php echo e($open); ?>' == '' }"
>
    <?php echo e($slot); ?>

</ul>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/navbar/dropdown/dropdown.blade.php ENDPATH**/ ?>