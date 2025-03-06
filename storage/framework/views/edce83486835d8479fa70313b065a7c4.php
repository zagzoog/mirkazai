<?php
    $href =
        \App\Helpers\Classes\Helper::hasRoute($item['route']) && $item['route_slug']
            ? route($item['route'], $item['route_slug'])
            : route(\App\Helpers\Classes\Helper::hasRoute($item['route']) ? $item['route'] : 'default');

    $is_active = $href === url()->current();

    if (!$is_active) {
        foreach ($item['children'] as $child) {
            if (!Route::has($child['route'])) {
                continue;
            }

            $child_href = $child['route_slug'] ? route($child['route'], $child['route_slug']) : route($child['route']);
            $child_is_active = $child_href === url()->current();

            if ($child_is_active) {
                $is_active = true;
                break;
            }
        }
    }
?>

<?php if (isset($component)) { $__componentOriginalb27b722146f03c6dfe842ca439b6bf3b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb27b722146f03c6dfe842ca439b6bf3b = $attributes; } ?>
<?php $component = App\View\Components\Navbar\Item::resolve(['hasDropdown' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Navbar\Item::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => ''.e(data_get($item, 'parent_key') ? data_get($item, 'parent_key') . '-' : '').''.e(data_get($item, 'key')).'']); ?>
    <?php if (isset($component)) { $__componentOriginal4bc111d20df937dde026191dc017d829 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bc111d20df937dde026191dc017d829 = $attributes; } ?>
<?php $component = App\View\Components\Navbar\Link::resolve(['label' => ''.e(__($item['label'])).'','href' => ''.e($item['route']).'','slug' => ''.e($item['route_slug']).'','icon' => ''.e($item['icon']).'','activeCondition' => ''.e($is_active).'','badge' => ''.e(data_get($item, 'badge') ?? '').'','dropdownTrigger' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Navbar\Link::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ''.e(data_get($item, 'class')).'','onclick' => ''.e(data_get($item, 'onclick') ?? '').'']); ?>
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
    <?php if (isset($component)) { $__componentOriginal320b3f0f1f8bdc0197efc59d430dad8e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal320b3f0f1f8bdc0197efc59d430dad8e = $attributes; } ?>
<?php $component = App\View\Components\Navbar\Dropdown\Dropdown::resolve(['open' => ''.e($is_active).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar.dropdown.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Navbar\Dropdown\Dropdown::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php $__currentLoopData = $item['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $key = data_get($child, 'key');
            ?>

            <?php if(\App\Helpers\Classes\PlanHelper::planMenuCheck($userPlan, $key)): ?>
                <?php if(data_get($child, 'show_condition', true) && data_get($item, 'is_active')): ?>
                    <?php
                        $child_href =
                            $child['route_slug'] && \App\Helpers\Classes\Helper::hasRoute($child['route'])
                                ? route($child['route'], $child['route_slug'])
                                : route(\App\Helpers\Classes\Helper::hasRoute($child['route']) ? $child['route'] : 'default');
                        $child_is_active = $child_href === url()->current();
                    ?>

                    <?php if (isset($component)) { $__componentOriginal60637a43ee5621f27401d19a772c7214 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal60637a43ee5621f27401d19a772c7214 = $attributes; } ?>
<?php $component = App\View\Components\Navbar\Dropdown\Item::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar.dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Navbar\Dropdown\Item::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginale968805dd6dfc366edc702d403340d9e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale968805dd6dfc366edc702d403340d9e = $attributes; } ?>
<?php $component = App\View\Components\Navbar\Dropdown\Link::resolve(['icon' => ''.e($child['icon'] ?: '').'','label' => ''.e(__($child['label'])).'','href' => ''.e($child['route']).'','badge' => ''.e(data_get($child, 'badge') ?? '').'','slug' => ''.e($child['route_slug']).'','activeCondition' => ''.e($child_is_active).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar.dropdown.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Navbar\Dropdown\Link::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale968805dd6dfc366edc702d403340d9e)): ?>
<?php $attributes = $__attributesOriginale968805dd6dfc366edc702d403340d9e; ?>
<?php unset($__attributesOriginale968805dd6dfc366edc702d403340d9e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale968805dd6dfc366edc702d403340d9e)): ?>
<?php $component = $__componentOriginale968805dd6dfc366edc702d403340d9e; ?>
<?php unset($__componentOriginale968805dd6dfc366edc702d403340d9e); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal60637a43ee5621f27401d19a772c7214)): ?>
<?php $attributes = $__attributesOriginal60637a43ee5621f27401d19a772c7214; ?>
<?php unset($__attributesOriginal60637a43ee5621f27401d19a772c7214); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal60637a43ee5621f27401d19a772c7214)): ?>
<?php $component = $__componentOriginal60637a43ee5621f27401d19a772c7214; ?>
<?php unset($__componentOriginal60637a43ee5621f27401d19a772c7214); ?>
<?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal320b3f0f1f8bdc0197efc59d430dad8e)): ?>
<?php $attributes = $__attributesOriginal320b3f0f1f8bdc0197efc59d430dad8e; ?>
<?php unset($__attributesOriginal320b3f0f1f8bdc0197efc59d430dad8e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal320b3f0f1f8bdc0197efc59d430dad8e)): ?>
<?php $component = $__componentOriginal320b3f0f1f8bdc0197efc59d430dad8e; ?>
<?php unset($__componentOriginal320b3f0f1f8bdc0197efc59d430dad8e); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb27b722146f03c6dfe842ca439b6bf3b)): ?>
<?php $attributes = $__attributesOriginalb27b722146f03c6dfe842ca439b6bf3b; ?>
<?php unset($__attributesOriginalb27b722146f03c6dfe842ca439b6bf3b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb27b722146f03c6dfe842ca439b6bf3b)): ?>
<?php $component = $__componentOriginalb27b722146f03c6dfe842ca439b6bf3b; ?>
<?php unset($__componentOriginalb27b722146f03c6dfe842ca439b6bf3b); ?>
<?php endif; ?>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/navbar/partials/types/item-dropdown.blade.php ENDPATH**/ ?>