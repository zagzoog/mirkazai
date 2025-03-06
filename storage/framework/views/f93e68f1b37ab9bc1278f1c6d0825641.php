<?php
    $base_class = 'lqd-alert border border-input-border bg-input-background flex gap-2 font-medium [&_:first-child]:mt-0 [&_:last-child]:mb-0';
    $icon_base_class = 'lqd-alert-icon size-5 shrink-0';

    $variations = [
        'variant' => [
            'info' => 'lqd-alert-info shadow-sm text-blue-600',
            'warn' => 'lqd-alert-warn shadow-sm text-orange-600',
            'danger' => 'lqd-alert-danger shadow-sm text-red-600 dark:text-red-500',
            'success' => 'lqd-alert-danger shadow-sm text-green-600',

            'info-fill' => 'lqd-alert-info bg-blue-700/10 text-blue-800 border-none',
            'warn-fill' => 'lqd-alert-warn bg-yellow-700/10 text-yellow-900 border-none dark:bg-yellow-300/10 dark:text-yellow-500',
            'danger-fill' => 'lqd-alert-danger bg-red-700/10 text-red-900 border-none',
            'success-fill' => 'lqd-alert-success bg-green-700/10 text-green-800 border-none',
        ],
        'size' => [
            'none' => 'lqd-alert-size-none',
            'sm' => 'lqd-alert-sm p-2 rounded-md',
            'md' => 'lqd-alert-md px-5 py-1.5 rounded-lg',
            'lg' => 'lqd-alert-lg p-6 rounded-xl',
        ],
    ];

    $variant = isset($variations['variant'][$variant]) ? $variations['variant'][$variant] : $variations['variant']['info'];
    $size = isset($variations['size'][$size]) ? $variations['size'][$size] : $variations['size']['md'];
?>

<div
    
    <?php echo e($attributes->withoutTwMergeClasses()->twMerge($base_class, $variant, $size)); ?>

    <?php echo e($attributes); ?>

>
    <?php if(filled($icon)): ?>
        <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => $attributes->withoutTwMergeClasses()->twMergeFor('icon', $icon_base_class)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
    <?php endif; ?>
    <div class="grow">
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/alert.blade.php ENDPATH**/ ?>