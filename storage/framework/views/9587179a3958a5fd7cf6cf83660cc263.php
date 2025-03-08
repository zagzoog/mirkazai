<div class="flex">

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('offline', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1986761932-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <div class="mx-auto w-full py-10 lg:w-2/3">
        <?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5e767ad160784309dfcad41e788743b = $attributes; } ?>
<?php $component = App\View\Components\Alert::resolve(['variant' => 'warn-fill'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-8 p-4 text-xs shadow-none']); ?>
            <?php echo app('translator')->get("We've revamped the plan management system to give you full control over your pricing strategies. Your users' credits will be migrated to the new pricing system, so you may need to review and update your pricing plans. New pricing plans won't be affected."); ?>
            <a
                class="text-heading-foreground underline"
                href="/docs/membership-plans-setup"
                target="_blank"
            >
                <?php echo e(__('Documentation')); ?>

            </a>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb5e767ad160784309dfcad41e788743b)): ?>
<?php $attributes = $__attributesOriginalb5e767ad160784309dfcad41e788743b; ?>
<?php unset($__attributesOriginalb5e767ad160784309dfcad41e788743b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb5e767ad160784309dfcad41e788743b)): ?>
<?php $component = $__componentOriginalb5e767ad160784309dfcad41e788743b; ?>
<?php unset($__componentOriginalb5e767ad160784309dfcad41e788743b); ?>
<?php endif; ?>

        <div class="lqd-steps mb-11 flex flex-col gap-7">
            <div class="lqd-steps-steps flex items-center justify-between gap-3">
                <!--[if BLOCK]><![endif]--><?php for($i = 1; $i <= $this->totalStep(); $i++): ?>
                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'lqd-step group/step flex flex-col items-center gap-3 rounded p-2 text-center text-3xs font-semibold capitalize text-heading-foreground transition-colors disabled:pointer-events-none disabled:opacity-50 max-md:w-1/2 sm:flex-row sm:items-start sm:text-start lg:min-w-32',
                        'active' => $this->currentStep() >= $i,
                    ]); ?>">
                        <span
                            class="size-[21px] inline-grid place-items-center rounded-md bg-primary/10 text-primary transition-colors group-[&.active]/step:bg-primary group-[&.active]/step:text-primary-foreground dark:bg-heading-foreground/5 dark:text-heading-foreground"
                        >
                            <?php echo e($i); ?>

                        </span>
                        <?php echo app('translator')->get($this->stepTitle($i)); ?>
                    </div>
                <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="lqd-step-progress relative h-1.5 w-full overflow-hidden rounded-lg bg-heading-foreground/5">
                <div
                    class="lqd-step-progress-bar absolute start-0 top-0 h-full w-0 rounded-full bg-gradient-to-r from-gradient-from to-gradient-to transition-all"
                    style="width: <?php echo e($this->getPercent()); ?>%"
                ></div>
            </div>
        </div>

        <?php echo $__env->renderWhen($this->currentStepIs(1), 'panel.admin.finance.plan.includes.step-first', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
        <?php echo $__env->renderWhen($this->currentStepIs(2), 'panel.admin.finance.plan.includes.step-second', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
        <?php echo $__env->renderWhen($this->currentStepIs(3), 'panel.admin.finance.plan.includes.step-third', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
        <?php echo $__env->renderWhen($this->currentStepIs(4), 'panel.admin.finance.plan.includes.step-fourth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

        <?php echo $__env->make('panel.admin.finance.plan.includes.step-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if (isset($component)) { $__componentOriginal4612316de60a0f608b477802bec97c45 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4612316de60a0f608b477802bec97c45 = $attributes; } ?>
<?php $component = App\View\Components\ProductIdsList::resolve(['gatewayProducts' => $this->plan?->gatewayProducts] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product-ids-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ProductIdsList::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4612316de60a0f608b477802bec97c45)): ?>
<?php $attributes = $__attributesOriginal4612316de60a0f608b477802bec97c45; ?>
<?php unset($__attributesOriginal4612316de60a0f608b477802bec97c45); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4612316de60a0f608b477802bec97c45)): ?>
<?php $component = $__componentOriginal4612316de60a0f608b477802bec97c45; ?>
<?php unset($__componentOriginal4612316de60a0f608b477802bec97c45); ?>
<?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/livewire/admin/finance/plan/subscription-plan-create.blade.php ENDPATH**/ ?>