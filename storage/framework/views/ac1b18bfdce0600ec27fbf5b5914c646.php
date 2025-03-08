<?php foreach ((['icon', 'action', 'error']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'icon' => null,
    'action' => null,
    'error' => null,
    'ace' => false,
    'aceMode' => null,
    'aceOptions' => []
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'icon' => null,
    'action' => null,
    'error' => null,
    'ace' => false,
    'aceMode' => null,
    'aceOptions' => []
]); ?>
<?php foreach (array_filter(([
    'icon' => null,
    'action' => null,
    'error' => null,
    'ace' => false,
    'aceMode' => null,
    'aceOptions' => []
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<!--[if BLOCK]><![endif]--><?php if($aceMode): ?>
    <?php
    $aceOptions['mode'] = $aceMode;
    ?>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
    <textarea <?php echo e($attributes->class('form-control lqd-input-size-none !w-full rounded-lg')); ?> <?php if($ace): ?> x-data="aceEditor('<?php echo e(json_encode($aceOptions)); ?>')" <?php endif; ?>
    <?php if($error): ?>
        aria-invalid="true" autofocus x-bind:aria-describedby="<?php if($id ?? ''): ?> <?php echo e($id); ?>-error <?php else: ?> $id('text-input') + '-error' <?php endif; ?>"
            <?php endif; ?>
    ><?php echo e($slot ?? ''); ?></textarea>
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

<?php if(! isset($__env->__pushonce_script_ace)): $__env->__pushonce_script_ace = 1; $__env->startPush('script'); ?>



<?php $__env->stopPush(); endif; ?>

<?php if(! isset($__env->__pushonce_css_ace)): $__env->__pushonce_css_ace = 1; $__env->startPush('css'); ?>
<style type="text/css" media="screen">
    .ace_editor {
        min-height: 200px;
    }
</style>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/form/textarea.blade.php ENDPATH**/ ?>