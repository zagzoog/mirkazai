<div class="px-7 pt-7 pb-11 rounded-3xl text-center <?php echo e($plan->is_featured ? 'border' : ''); ?> max-xl:px-6 max-lg:px-4">
    <h6 class="mb-6 rounded-md border p-[0.35rem] text-[11px] text-opacity-80"><?php echo e(__($plan->name)); ?></h6>
    <p class="mb-1 text-[45px] font-medium leading-none -tracking-wide text-heading-foreground">

        <?php if(currencyShouldDisplayOnRight(currency()->symbol)): ?>
            <?php echo e(formatPrice($plan->price, 2)); ?><sup class="text-[0.53em]"><?php echo e(currency()->symbol); ?></sup>
        <?php else: ?>
            <sup class="text-[0.53em]"><?php echo e(currency()->symbol); ?></sup><?php echo e(formatPrice($plan->price, 2)); ?>

        <?php endif; ?>

    </p>
    <p class="mb-4 text-sm opacity-60"><?php echo e(__($period)); ?></p>
    <a
        class="block w-full rounded-lg bg-black bg-opacity-[0.03] p-3 font-medium text-heading-foreground transition-colors hover:bg-black hover:text-white"
        href="<?php echo e(route('register', ['plan' => $plan->id])); ?>"
    ><?php echo e(__('Select').'  '.__($plan->name)); ?></a>

    <?php if (isset($component)) { $__componentOriginal108762a00a61bbda2e149b49ad544dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal108762a00a61bbda2e149b49ad544dca = $attributes; } ?>
<?php $component = App\View\Components\PlanDetailsCard::resolve(['plan' => $plan,'period' => $period] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('plan-details-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PlanDetailsCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal108762a00a61bbda2e149b49ad544dca)): ?>
<?php $attributes = $__attributesOriginal108762a00a61bbda2e149b49ad544dca; ?>
<?php unset($__attributesOriginal108762a00a61bbda2e149b49ad544dca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal108762a00a61bbda2e149b49ad544dca)): ?>
<?php $component = $__componentOriginal108762a00a61bbda2e149b49ad544dca; ?>
<?php unset($__componentOriginal108762a00a61bbda2e149b49ad544dca); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/landing-page/pricing/item-content.blade.php ENDPATH**/ ?>