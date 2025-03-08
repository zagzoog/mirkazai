<?php
    $filters = ['All', 'Frontend', 'Dashboard'];
?>


<?php $__env->startSection('title', __('Themes and skins')); ?>
<?php $__env->startSection('titlebar_actions', ''); ?>

<?php $__env->startSection('settings'); ?>
    <div x-data="{ 'activeFilter': 'All' }">
        <h2 class="mb-4">
            <?php echo app('translator')->get('Available Themes'); ?>
        </h2>
        <p class="mb-8">
            <?php echo app('translator')->get('Customize the visual appearence of MirkazAI with a single click and complement the design principles of your brand identity. '); ?>
        </p>
        <?php if (isset($component)) { $__componentOriginal6fd87389866b561798308ec9c12ededd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6fd87389866b561798308ec9c12ededd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alerts.payment-status','data' => ['paymentStatus' => $paymentStatus]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alerts.payment-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['payment-status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($paymentStatus)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6fd87389866b561798308ec9c12ededd)): ?>
<?php $attributes = $__attributesOriginal6fd87389866b561798308ec9c12ededd; ?>
<?php unset($__attributesOriginal6fd87389866b561798308ec9c12ededd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6fd87389866b561798308ec9c12ededd)): ?>
<?php $component = $__componentOriginal6fd87389866b561798308ec9c12ededd; ?>
<?php unset($__componentOriginal6fd87389866b561798308ec9c12ededd); ?>
<?php endif; ?>
        <div class="flex flex-col gap-16">
            <ul class="flex w-full justify-between gap-3 rounded-full bg-foreground/10 p-1 text-xs font-medium">
                <?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <button
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                'px-6 py-3 leading-tight rounded-full transition-all hover:bg-background/80 [&.lqd-is-active]:bg-background [&.lqd-is-active]:shadow-[0_2px_12px_hsl(0_0%_0%/10%)]',
                                'lqd-is-active' => $loop->first,
                            ]); ?>"
                            @click="activeFilter = '<?php echo e($filter); ?>'"
                            :class="{ 'lqd-is-active': activeFilter == '<?php echo e($filter); ?>' }"
                        >
                            <?php echo app('translator')->get($filter); ?>
                        </button>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            
            <?php $__currentLoopData = $items ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['size' => 'none','variant' => 'shadow'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'group mt-4','data-cat' => ''.e($theme['theme_type'] == 'All' ? 'Frontend, Dashboard' : $theme['theme_type']).'',':class' => '{ \'hidden\': !$el.getAttribute(\'data-cat\')?.includes(activeFilter) && activeFilter !== \'All\' }']); ?>
                    <figure class="mb-30 relative overflow-hidden">
                        <?php if($theme['version'] != $theme['db_version'] && $theme['slug'] != 'default' && $theme['installed']): ?>
                            <p
                                class="absolute end-5 top-5 m-0 rounded bg-purple-50 px-2 py-1 text-4xs font-semibold uppercase leading-tight tracking-widest text-purple-700 ring-1 ring-inset ring-purple-700/10">
                                <a href="<?php echo e(route('dashboard.admin.themes.activate', ['slug' => $theme['slug']])); ?>">Update Available</a>
                            </p>
                        <?php endif; ?>

                        <img
                            class="h-auto w-full"
                            src="<?php echo e($theme['icon']); ?>"
                            alt="<?php echo e($theme['name']); ?>"
                            width="490"
                            height="320"
                        >
                        <a
                            class="absolute inset-0 flex scale-110 items-center justify-center bg-foreground/40 text-background opacity-0 backdrop-blur-sm transition-all group-hover:scale-100 group-hover:opacity-100"
                            href="https://<?php echo e($theme['slug'] == 'default' ? 'magicai.liquid-themes.com' : $theme['slug'] . '.projecthub.ai'); ?>"
                            target="_blank"
                        >
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-zoom-in'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-10']); ?>
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
                            <span>
                                <?php echo app('translator')->get('Live Preview'); ?>
                            </span>
                        </a>
                    </figure>
                    <div class="p-8">
                        <p class="mb-3 flex items-center gap-1.5">
                            <?php if($theme['price'] > 0): ?>
                                <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                    'size-2 inline-block rounded-full',
                                    'bg-green-600' => false, // Free themes
                                    'bg-primary' => true, // Premium themes
                                ]); ?>"></span>
                                <?php echo app('translator')->get('Premium Theme'); ?>
                            <?php else: ?>
                                <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                    'size-2 inline-block rounded-full',
                                    'bg-green-600' => true, // Free themes
                                    'bg-primary' => false, // Premium themes
                                ]); ?>"></span>
                                <?php echo app('translator')->get('Free Theme'); ?>
                            <?php endif; ?>
                        </p>
                        <h3 class="mb-3">
                            <?php echo app('translator')->get($theme['name']); ?>
                        </h3>
                        <p class="mb-5">
                            <?php echo app('translator')->get($theme['description']); ?>
                        </p>

                        <?php
                            if ($theme['slug'] == 'default') {
                                $is_active = setting('front_theme') == 'default' && setting('dash_theme') == 'default';
                            } else {
                                $is_active = setting('front_theme') == $theme['slug'] || setting('dash_theme') == $theme['slug'];
                            }

                            $link = !$theme['licensed']
                                ? route('dashboard.admin.themes.buyTheme', ['slug' => $theme['slug']])
                                : route('dashboard.admin.themes.activate', ['slug' => $theme['slug']]);

                            if ($is_active) {
                                if ($theme['version'] != $theme['db_version'] && $theme['slug'] != 'default') {
                                    $is_active = false;

                                    $text = trans('Update');
                                } else {
                                    $text = trans('Activated');
                                }
                            } else {
                                if ($theme['licensed']) {
                                    $text = trans('Activate');
                                } else {
                                    $text = trans('Buy now');
                                }
                            }

                        ?>

                        <?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale67687e3e4e61f963b25a6bcf3983629 = $attributes; } ?>
<?php $component = App\View\Components\Button::resolve(['variant' => ''.e($theme['price'] == 0 ? 'success' : 'primary').'','size' => 'lg','href' => ''.e($link).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full','data-theme' => ''.e($theme['slug']).'','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($is_active)]); ?>
                            <?php echo e($text); ?>

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
<?php if (isset($__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64)): ?>
<?php $attributes = $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64; ?>
<?php unset($__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64)): ?>
<?php $component = $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64; ?>
<?php unset($__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(custom_theme_url('/assets/js/panel/themes.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('panel.layout.settings', ['disable_tblr' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/admin/themes/index.blade.php ENDPATH**/ ?>