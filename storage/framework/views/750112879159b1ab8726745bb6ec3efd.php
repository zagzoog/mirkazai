<span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
    'lqd-change-indicator inline-flex items-center leading-none text-3xs px-1.5 py-0.5 leading-snug rounded-md',
    'text-foreground bg-foreground/10' => $value == 0,
    'text-red-700 bg-red-700/10 dark:bg-red-600/10 dark:text-red-600' =>
        $value < 0,
    'text-green-600 bg-green-500/10' => $value > 0,
]); ?>">
    <?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $value == 0 ? 'tabler-minus' : ($value < 0 ? 'tabler-chevron-down' : 'tabler-chevron-up')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-3']); ?>
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
    <?php echo e($value); ?>%
</span>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/change-indicator.blade.php ENDPATH**/ ?>