<?php foreach ((['icon', 'action', 'size', 'error', 'stepper']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'icon' => null,
    'action' => null,
    'stepper' => null,
    'error' => null,
    'sizes' => [
        'none' => 'lqd-input-size-none rounded-lg',
        'sm' => 'lqd-input-sm h-9 rounded-md',
        'md' => 'lqd-input-md h-10 rounded-lg',
        'lg' => 'lqd-input-lg h-11 rounded-xl',
        'xl' => 'lqd-input-xl h-14 rounded-2xl px-6',
        '2xl' => 'lqd-input-2xl h-16 rounded-full px-8',
    ],
    'size' => 'lg',
    'type' => 'text',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'icon' => null,
    'action' => null,
    'stepper' => null,
    'error' => null,
    'sizes' => [
        'none' => 'lqd-input-size-none rounded-lg',
        'sm' => 'lqd-input-sm h-9 rounded-md',
        'md' => 'lqd-input-md h-10 rounded-lg',
        'lg' => 'lqd-input-lg h-11 rounded-xl',
        'xl' => 'lqd-input-xl h-14 rounded-2xl px-6',
        '2xl' => 'lqd-input-2xl h-16 rounded-full px-8',
    ],
    'size' => 'lg',
    'type' => 'text',
]); ?>
<?php foreach (array_filter(([
    'icon' => null,
    'action' => null,
    'stepper' => null,
    'error' => null,
    'sizes' => [
        'none' => 'lqd-input-size-none rounded-lg',
        'sm' => 'lqd-input-sm h-9 rounded-md',
        'md' => 'lqd-input-md h-10 rounded-lg',
        'lg' => 'lqd-input-lg h-11 rounded-xl',
        'xl' => 'lqd-input-xl h-14 rounded-2xl px-6',
        '2xl' => 'lqd-input-2xl h-16 rounded-full px-8',
    ],
    'size' => 'lg',
    'type' => 'text',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalb85af50ff6dfe218db4ad241fa9e35f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb85af50ff6dfe218db4ad241fa9e35f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.wrapper','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <input
        <?php echo e($attributes->class(['form-control', 'form-input-stepper' => $stepper, 'border-2 border-rose-500' => $error])); ?>

        :id="$id('text-input')"
        type="<?php echo e($type); ?>"
        <?php if($attributes->has('wire:model')): ?> x-data="{ value: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?> }"
               <?php if($stepper): ?>
                   x-model="value"
                    x-on:input="value = (value).toString().includes('.') ? parseFloat(value).toFixed(2) : value"
               <?php else: ?>
                   x-model="value" <?php endif; ?>
        <?php endif; ?>
    <?php if($error): ?> aria-invalid="true" autofocus x-bind:aria-describedby="<?php if($id ?? ''): ?> <?php echo e($id); ?>-error <?php else: ?> $id('text-input') + '-error' <?php endif; ?>"
    <?php endif; ?>/>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb85af50ff6dfe218db4ad241fa9e35f5)): ?>
<?php $attributes = $__attributesOriginalb85af50ff6dfe218db4ad241fa9e35f5; ?>
<?php unset($__attributesOriginalb85af50ff6dfe218db4ad241fa9e35f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb85af50ff6dfe218db4ad241fa9e35f5)): ?>
<?php $component = $__componentOriginalb85af50ff6dfe218db4ad241fa9e35f5; ?>
<?php unset($__componentOriginalb85af50ff6dfe218db4ad241fa9e35f5); ?>
<?php endif; ?>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/form/text.blade.php ENDPATH**/ ?>