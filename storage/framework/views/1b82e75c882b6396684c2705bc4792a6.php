<div
    <?php if($stepper): ?> x-data='{
		value: <?php echo e(!empty($value) ? $value : 0); ?>,
		min: <?php echo e($attributes->has('min') ? $attributes->get('min') : 0); ?>,
		max: <?php echo e($attributes->has('max') ? $attributes->get('max') : 999999); ?>,
		step: <?php echo e($attributes->has('step') ? $attributes->get('step') : 1); ?>

	}' <?php endif; ?>
    <?php echo e($attributes->twMerge('form-group lqd-input-container relative')); ?>

    x-id="['text-input', 'input-description', 'input-error']"
>

    <!--[if BLOCK]><![endif]--><?php if($label && !$noGroupLabel): ?>
        <?php if (isset($component)) { $__componentOriginal306f477fe089d4f950325a3d0a498c1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal306f477fe089d4f950325a3d0a498c1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.label','data' => ['attributes' => $attributes->twMergeFor('label')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->twMergeFor('label'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal306f477fe089d4f950325a3d0a498c1c)): ?>
<?php $attributes = $__attributesOriginal306f477fe089d4f950325a3d0a498c1c; ?>
<?php unset($__attributesOriginal306f477fe089d4f950325a3d0a498c1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal306f477fe089d4f950325a3d0a498c1c)): ?>
<?php $component = $__componentOriginal306f477fe089d4f950325a3d0a498c1c; ?>
<?php unset($__componentOriginal306f477fe089d4f950325a3d0a498c1c); ?>
<?php endif; ?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <?php echo e($slot); ?>


    <!--[if BLOCK]><![endif]--><?php if($error || $help): ?>
        <div class="mb-0.5 mt-0.5 grid gap-y-0.5">
            <!--[if BLOCK]><![endif]--><?php if($error): ?>
                <p
                    class="text-2xs text-red-500"
                    x-bind:id="$id('input-error')"
                >
                    <?php echo e($error); ?>

                </p>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--><?php if($help): ?>
                <p
                    class="text-2xs text-gray-500 dark:text-slate-400"
                    x-bind:id="$id('input-description')"
                ><?php echo e($help); ?></p>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/components/form/group.blade.php ENDPATH**/ ?>