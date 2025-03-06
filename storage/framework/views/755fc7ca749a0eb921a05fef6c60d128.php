<?php $__env->startSection('content'); ?>
    <header class="absolute left-0 right-0 top-0 flex items-center px-8 pt-8 max-lg:px-1">
        <div class="flex-grow">
            <a
                class="navbar-brand"
                href="<?php echo e(route('index')); ?>"
            >
                <?php if(isset($setting->logo_dashboard)): ?>
                    <img
                        class="group-[.navbar-shrinked]/body:hidden dark:hidden"
                        src="<?php echo e(custom_theme_url($setting->logo_dashboard_path, true)); ?>"
                        <?php if(isset($setting->logo_dashboard_2x_path) && !empty($setting->logo_dashboard_2x_path)): ?> srcset="/<?php echo e($setting->logo_dashboard_2x_path); ?> 2x" <?php endif; ?>
                        alt="<?php echo e($setting->site_name); ?>"
                    >
                    <img
                        class="hidden group-[.navbar-shrinked]/body:hidden dark:block"
                        src="<?php echo e(custom_theme_url($setting->logo_dashboard_dark_path, true)); ?>"
                        <?php if(isset($setting->logo_dashboard_dark_2x_path) && !empty($setting->logo_dashboard_dark_2x_path)): ?> srcset="/<?php echo e($setting->logo_dashboard_dark_2x_path); ?> 2x" <?php endif; ?>
                        alt="<?php echo e($setting->site_name); ?>"
                    >
                <?php else: ?>
                    <img
                        class="group-[.navbar-shrinked]/body:hidden dark:hidden"
                        src="<?php echo e(custom_theme_url($setting->logo_path, true)); ?>"
                        <?php if(isset($setting->logo_2x_path) && !empty($setting->logo_2x_path)): ?> srcset="/<?php echo e($setting->logo_2x_path); ?> 2x" <?php endif; ?>
                        alt="<?php echo e($setting->site_name); ?>"
                    >
                    <img
                        class="hidden group-[.navbar-shrinked]/body:hidden dark:block"
                        src="<?php echo e(custom_theme_url($setting->logo_dark_path, true)); ?>"
                        <?php if(isset($setting->logo_dark_2x_path) && !empty($setting->logo_dark_2x_path)): ?> srcset="/<?php echo e($setting->logo_dark_2x_path); ?> 2x" <?php endif; ?>
                        alt="<?php echo e($setting->site_name); ?>"
                    >
                <?php endif; ?>
            </a>
        </div>
        <div class="flex-grow text-end">
            <a
                class="inline-flex items-center gap-1 text-heading-foreground no-underline hover:underline lg:text-white"
                href="<?php echo e(route('index')); ?>"
            >
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-chevron-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4']); ?>
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
                <?php echo e(__('Back to Home')); ?>

            </a>
        </div>
    </header>

    <div class="lqd-auth-content flex min-h-screen w-full flex-wrap items-stretch max-md:pb-20 max-md:pt-32">
        <div class="grow md:flex md:w-1/2 md:flex-col md:items-center md:justify-center md:py-20">
            <div class="w-full px-4 text-center text-2xs lg:w-1/2">
                <?php echo $__env->yieldContent('form'); ?>
            </div>
        </div>

        <?php if(
            $setting->auth_view_options != null &&
                $setting->auth_view_options != 'undefined' &&
                json_decode($setting->auth_view_options)?->login_enabled == true &&
                json_decode($setting->auth_view_options)?->login_image != null &&
                json_decode($setting->auth_view_options)?->login_image != ''): ?>
            <div
                class="hidden flex-col justify-center overflow-hidden bg-cover bg-center md:flex md:w-1/2"
                style="background-image: url(<?php echo e(json_decode($setting->auth_view_options)->login_image); ?>)"
            >
            <?php else: ?>
                <div
                    class="hidden flex-col justify-center overflow-hidden bg-cover bg-center md:flex md:w-1/2"
                    style="background-image: url(<?php echo e(custom_theme_url('/images/bg/bg-auth.jpg')); ?>)"
                >
                    <img
                        class="translate-x-[27%] rounded-[36px] shadow-[0_24px_88px_rgba(0,0,0,0.55)]"
                        src="<?php echo e(custom_theme_url('/images/bg/dash-mockup.jpg')); ?>"
                        alt="MirkazAI Dashboard Mockup"
                    >
                </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layout.app', ['layout_wide' => true, 'wide_layout_px' => 'px-0'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/authentication/layout/app.blade.php ENDPATH**/ ?>