<?php
    $text = "We've revamped the plan management system to give you full control over your pricing strategies. You may need to review and update your pricing plans.";
    $btn_text = "See What's New";
?>

<?php if(auth()->guard()->check()): ?>
    <?php if(auth()->user()->isAdmin()): ?>
        <?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5e767ad160784309dfcad41e788743b = $attributes; } ?>
<?php $component = App\View\Components\Alert::resolve(['variant' => 'warn-fill','icon' => 'tabler-info-circle','size' => 'xs'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'top-notice-bar top-notice-bar-visible items-center rounded-none py-1 text-xs shadow-none lg:h-[--top-notice-bar-height]','id' => 'top-notice-bar','x-data' => '{ noticeBarHidden: localStorage.getItem(\'lqdTopBarNotice\') === \'hidden\' }',':class' => '{ \'hidden\': noticeBarHidden, \'top-notice-bar-hidden\': noticeBarHidden, \'top-notice-bar-visible\': !noticeBarHidden }']); ?>
            <script>
                if (localStorage.getItem('lqdTopBarNotice') === 'hidden') {
                    document.getElementById('top-notice-bar').classList.add('top-notice-bar-hidden');
                    document.getElementById('top-notice-bar').classList.remove('top-notice-bar-visible');
                    document.getElementById('top-notice-bar').style.display = 'none';
                }
            </script>
            <div class="flex w-full grow items-center justify-between gap-2">
                <p
                    class="m-0 w-full lg:overflow-hidden lg:text-ellipsis lg:whitespace-nowrap"
                    title="<?php echo app('translator')->get($text); ?>"
                >
                    <?php echo app('translator')->get($text); ?>
                </p>
                <?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale67687e3e4e61f963b25a6bcf3983629 = $attributes; } ?>
<?php $component = App\View\Components\Button::resolve(['size' => 'sm','href' => ''.e(route('dashboard.admin.finance.plan.index')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'shrink-0 bg-background px-2.5 py-1 text-xs text-heading-foreground hover:bg-primary hover:text-primary-foreground','@click' => 'localStorage.setItem(\'lqdTopBarNotice\', \'hidden\'); noticeBarHidden = true;']); ?>
                    <?php echo app('translator')->get($btn_text); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale67687e3e4e61f963b25a6bcf3983629)): ?>
<?php $attributes = $__attributesOriginale67687e3e4e61f963b25a6bcf3983629; ?>
<?php unset($__attributesOriginale67687e3e4e61f963b25a6bcf3983629); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale67687e3e4e61f963b25a6bcf3983629)): ?>
<?php $component = $__componentOriginale67687e3e4e61f963b25a6bcf3983629; ?>
<?php unset($__componentOriginale67687e3e4e61f963b25a6bcf3983629); ?>
<?php endif; ?>
            </div>
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
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/layout/partials/top-notice-bar.blade.php ENDPATH**/ ?>