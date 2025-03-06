<?php
    $base_class = 'lqd-navbar-item relative group/nav-item';
?>

<li
    <?php echo e($attributes->withoutTwMergeClasses()->twMerge($base_class, $attributes->get('class'))); ?>

    x-data="navbarItem()"
    x-bind="item"
>
    <?php echo e($slot); ?>

</li>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/navbar/item.blade.php ENDPATH**/ ?>