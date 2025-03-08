<?php foreach ((['error', 'label', 'error']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'label' => null,
    'tooltip' => null,
    'checked' => false,
    'error' => null,
    'position' => 'right',
    'change' => null,
    'name' => null,
    'xModel' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'label' => null,
    'tooltip' => null,
    'checked' => false,
    'error' => null,
    'position' => 'right',
    'change' => null,
    'name' => null,
    'xModel' => null,
]); ?>
<?php foreach (array_filter(([
    'label' => null,
    'tooltip' => null,
    'checked' => false,
    'error' => null,
    'position' => 'right',
    'change' => null,
    'name' => null,
    'xModel' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<label
    <?php echo e($attributes->withoutTwMergeClasses()->twMerge('form-check form-switch flex items-center gap-2 mb-0')); ?>

    :for="$id('text-input')"
>
    <!--[if BLOCK]><![endif]--><?php if($position === 'left'): ?>
        <!--[if BLOCK]><![endif]--><?php if($tooltip): ?>
            <?php if (isset($component)) { $__componentOriginal9acd6c99af8d8c9491f2759be41ef2c4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9acd6c99af8d8c9491f2759be41ef2c4 = $attributes; } ?>
<?php $component = App\View\Components\InfoTooltip::resolve(['text' => ''.e($tooltip).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InfoTooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9acd6c99af8d8c9491f2759be41ef2c4)): ?>
<?php $attributes = $__attributesOriginal9acd6c99af8d8c9491f2759be41ef2c4; ?>
<?php unset($__attributesOriginal9acd6c99af8d8c9491f2759be41ef2c4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9acd6c99af8d8c9491f2759be41ef2c4)): ?>
<?php $component = $__componentOriginal9acd6c99af8d8c9491f2759be41ef2c4; ?>
<?php unset($__componentOriginal9acd6c99af8d8c9491f2759be41ef2c4); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <span class="form-check-label !m-0 text-2xs"><?php echo e($label); ?></span>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <input
        <?php echo e($attributes->twMergeFor('input', 'form-check-input cursor-pointer')); ?>

        :id="$id('text-input')"
        type="checkbox"
        <?php if($attributes->has('wire:model')): ?> wire:model="<?php echo e($attributes->get('wire:model')); ?>" <?php endif; ?>
        <?php if($error): ?> aria-invalid="true" autofocus x-bind:aria-describedby="<?php if($id ?? ''): ?> <?php echo e($id); ?>-error <?php else: ?> $id('text-input') + '-error' <?php endif; ?>"
        <?php endif; ?>
    <?php if($checked): ?> checked <?php endif; ?>
    <?php if($name): ?> name="<?php echo e($name); ?>" <?php endif; ?>
    <?php if($change): ?> @change="<?php echo e($change); ?>" <?php endif; ?>
    <?php if($xModel): ?> x-model="<?php echo e($xModel); ?>" <?php endif; ?>
    >

    <!--[if BLOCK]><![endif]--><?php if($position === 'right'): ?>
        <span class="form-check-label !m-0 text-2xs"><?php echo e($label); ?></span>

        <!--[if BLOCK]><![endif]--><?php if($tooltip): ?>
            <?php if (isset($component)) { $__componentOriginal9acd6c99af8d8c9491f2759be41ef2c4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9acd6c99af8d8c9491f2759be41ef2c4 = $attributes; } ?>
<?php $component = App\View\Components\InfoTooltip::resolve(['text' => ''.e($tooltip).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InfoTooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9acd6c99af8d8c9491f2759be41ef2c4)): ?>
<?php $attributes = $__attributesOriginal9acd6c99af8d8c9491f2759be41ef2c4; ?>
<?php unset($__attributesOriginal9acd6c99af8d8c9491f2759be41ef2c4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9acd6c99af8d8c9491f2759be41ef2c4)): ?>
<?php $component = $__componentOriginal9acd6c99af8d8c9491f2759be41ef2c4; ?>
<?php unset($__componentOriginal9acd6c99af8d8c9491f2759be41ef2c4); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</label>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/form/checkbox.blade.php ENDPATH**/ ?>