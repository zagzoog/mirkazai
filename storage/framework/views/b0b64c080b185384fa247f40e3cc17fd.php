<?php
    $base_class =
        'lqd-navbar-dropdown-link py-2 px-5 hover:bg-transparent hover:underline [&.active]:bg-transparent [&.active]:underline dark:[&.active]:before:hidden group-[&.navbar-shrinked]/body:group-hover/nav-item:bg-transparent group-[&.navbar-shrinked]/body:group-hover/nav-item:text-inherit';
?>

<?php if (isset($component)) { $__componentOriginal4bc111d20df937dde026191dc017d829 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bc111d20df937dde026191dc017d829 = $attributes; } ?>
<?php $component = App\View\Components\Navbar\Link::resolve(['href' => $href,'slug' => $slug,'label' => $label,'icon' => $icon,'iconHtml' => $iconHtml,'activeCondition' => $activeCondition,'new' => $new,'letterIcon' => $letterIcon,'dropdownTrigger' => $dropdownTrigger,'badge' => $badge] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Navbar\Link::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->withoutTwMergeClasses()->twMerge($base_class, $attributes->get('class')))]); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bc111d20df937dde026191dc017d829)): ?>
<?php $attributes = $__attributesOriginal4bc111d20df937dde026191dc017d829; ?>
<?php unset($__attributesOriginal4bc111d20df937dde026191dc017d829); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bc111d20df937dde026191dc017d829)): ?>
<?php $component = $__componentOriginal4bc111d20df937dde026191dc017d829; ?>
<?php unset($__componentOriginal4bc111d20df937dde026191dc017d829); ?>
<?php endif; ?>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/navbar/dropdown/link.blade.php ENDPATH**/ ?>