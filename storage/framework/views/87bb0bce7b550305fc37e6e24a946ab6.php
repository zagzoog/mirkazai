<?php foreach (([
    'action',
    'icon',
    'stepper',
]) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'action' => null,
    'icon' => null,
    'stepper' => null,
    'force' => false,
    'inputActions' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'action' => null,
    'icon' => null,
    'stepper' => null,
    'force' => false,
    'inputActions' => null,
]); ?>
<?php foreach (array_filter(([
    'action' => null,
    'icon' => null,
    'stepper' => null,
    'force' => false,
    'inputActions' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<!--[if BLOCK]><![endif]--><?php if($action || $stepper || $icon || $force): ?>
    <div class="relative" <?php if($stepper): ?>
         x-data="{
            value: <?php if($attributes->has('wire:model')): ?> <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?> <?php else: ?> <?php echo e($attributes->get('value')?? 0); ?> <?php endif; ?>,
            min: <?php echo e($attributes->has('min') ? $attributes->get('min') : 0); ?>,
            max: <?php echo e($attributes->has('max') ? $attributes->get('max') : 999999); ?>,
            step: <?php echo e($attributes->has('step') ? $attributes->get('step') : 1); ?>,
        }"
    <?php endif; ?>>
        <?php echo e($slot); ?>


        
        <!--[if BLOCK]><![endif]--><?php if($icon): ?>
            <?php echo $icon; ?>

        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        
        <!--[if BLOCK]><![endif]--><?php if($action): ?>
            <div class="absolute inset-y-0 end-0 border-s">
                <?php echo e($action); ?>

            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><?php if($inputActions): ?>
            <?php echo $inputActions; ?>

        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?><!--[if ENDBLOCK]><![endif]--><?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/form/wrapper.blade.php ENDPATH**/ ?>