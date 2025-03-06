<?php
    $nav_links = [
        'Home' => '#premium-support',
        'All Access' => '#premium-support-access',
        'Premium Support' => '#premium-support-support',
        'Free Customization' => '#premium-support-customization',
    ];
?>

<header
    class="absolute inset-x-0 top-0 z-10"
    x-data="{ mobileMenuVisible: false }"
>
    <div
        class="grid grid-flow-col items-center px-10 py-8 max-xl:grid-cols-2 max-xl:py-5 max-sm:px-5 xl:[grid-template-columns:20%_minmax(580px,100%)_20%]">
        <a href="#">
            <?php if(isset($setting->logo_dashboard)): ?>
                <img
                    class="h-auto group-[.navbar-shrinked]/body:hidden dark:hidden"
                    src="<?php echo e(custom_theme_url($setting->logo_dashboard_path, true)); ?>"
                    <?php if(isset($setting->logo_dashboard_2x_path) && !empty($setting->logo_dashboard_2x_path)): ?> srcset="/<?php echo e($setting->logo_dashboard_2x_path); ?> 2x"
                    <?php endif; ?>
                    alt="<?php echo e($setting->site_name); ?>"
                >
                <img
                    class="hidden h-auto group-[.navbar-shrinked]/body:hidden dark:block"
                    src="<?php echo e(custom_theme_url($setting->logo_dashboard_dark_path, true)); ?>"
                    <?php if(isset($setting->logo_dashboard_dark_2x_path) && !empty($setting->logo_dashboard_dark_2x_path)): ?> srcset="/<?php echo e($setting->logo_dashboard_dark_2x_path); ?> 2x"
                    <?php endif; ?>
                    alt="<?php echo e($setting->site_name); ?>"
                >
            <?php else: ?>
                <img
                    class="h-auto group-[.navbar-shrinked]/body:hidden dark:hidden"
                    src="<?php echo e(custom_theme_url($setting->logo_path, true)); ?>"
                    <?php if(isset($setting->logo_2x_path) && !empty($setting->logo_2x_path)): ?> srcset="/<?php echo e($setting->logo_2x_path); ?> 2x" <?php endif; ?>
                    alt="<?php echo e($setting->site_name); ?>"
                >
                <img
                    class="hidden h-auto group-[.navbar-shrinked]/body:hidden dark:block"
                    src="<?php echo e(custom_theme_url($setting->logo_dark_path, true)); ?>"
                    <?php if(isset($setting->logo_dark_2x_path) && !empty($setting->logo_dark_2x_path)): ?> srcset="/<?php echo e($setting->logo_dark_2x_path); ?> 2x"
                    <?php endif; ?>
                    alt="<?php echo e($setting->site_name); ?>"
                >
            <?php endif; ?>
        </a>

        <nav
            class="flex w-full justify-center whitespace-nowrap transition-all max-xl:invisible max-xl:absolute max-xl:inset-x-10 max-xl:top-full max-xl:w-auto max-xl:origin-top max-xl:scale-95 max-xl:opacity-0 max-sm:inset-x-5 max-xl:[&.lqd-is-active]:visible max-xl:[&.lqd-is-active]:scale-100 max-xl:[&.lqd-is-active]:opacity-100"
            :class="{ 'lqd-is-active': mobileMenuVisible }"
        >
            <ul
                class="flex gap-2 rounded-full border border-white/15 bg-black/15 px-4 py-3 leading-tight text-white/90 backdrop-blur-md max-xl:w-full max-xl:flex-col max-xl:items-center max-xl:gap-y-5 max-xl:rounded-xl max-xl:text-center">
                <?php $__currentLoopData = $nav_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $href): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a
                            class="px-6 py-1"
                            href="<?php echo e($href); ?>"
                        >
                            <?php echo app('translator')->get($label); ?>
                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </nav>

        <div class="flex justify-end">
            <a
                class="flex items-center gap-2 rounded-full border border-white/15 bg-black/15 px-7 py-3 leading-tight text-white/90 backdrop-blur-md transition-all hover:scale-110 hover:bg-white hover:text-black max-xl:hidden"
                href="<?php echo e(app(\App\Domains\Marketplace\Repositories\ExtensionRepository::class)->subscriptionPayment()); ?>"
                target="_blank"
            >
                <?php echo app('translator')->get('Subscribe Now'); ?>
            </a>
            <button
                class="size-12 group inline-flex items-center justify-center rounded-full border border-white/15 bg-black/15 text-white xl:hidden"
                @click.prvent="mobileMenuVisible = !mobileMenuVisible"
                :class="{ 'lqd-is-active': mobileMenuVisible }"
            >
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-x'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 hidden group-[&.lqd-is-active]:block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-menu-deep'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 group-[&.lqd-is-active]:hidden']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            </button>
        </div>
    </div>
</header>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/premium-support/components/header.blade.php ENDPATH**/ ?>