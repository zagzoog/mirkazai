<?php echo adsense_faq_728x90(); ?>

<section
    class="site-section py-10 transition-all duration-700 md:translate-y-8 md:opacity-0 [&.lqd-is-in-view]:translate-y-0 [&.lqd-is-in-view]:opacity-100"
    id="faq"
>
    <div class="container">
        <div class="relative rounded-[50px] border p-11 pb-16 max-sm:px-5">
            <?php if (isset($component)) { $__componentOriginal044312fc7e45484e118b3e1951e4e85f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal044312fc7e45484e118b3e1951e4e85f = $attributes; } ?>
<?php $component = App\View\Components\SectionHeader::resolve(['mb' => '9','width' => 'w-1/2','title' => ''.__($fSectSettings->faq_title).'','subtitle' => ''.__($fSectSettings->faq_subtitle).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('section-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SectionHeader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <h6 class="mb-6 inline-block rounded-md bg-[#60027C] bg-opacity-15 px-3 py-1 text-[13px] font-medium text-[#60027C]">
                    <?php echo __($fSectSettings->faq_text_one); ?>

                    <span class="dot"></span>
                    <span class="opacity-50"><?php echo __($fSectSettings->faq_text_two); ?></span>
                </h6>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal044312fc7e45484e118b3e1951e4e85f)): ?>
<?php $attributes = $__attributesOriginal044312fc7e45484e118b3e1951e4e85f; ?>
<?php unset($__attributesOriginal044312fc7e45484e118b3e1951e4e85f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal044312fc7e45484e118b3e1951e4e85f)): ?>
<?php $component = $__componentOriginal044312fc7e45484e118b3e1951e4e85f; ?>
<?php unset($__componentOriginal044312fc7e45484e118b3e1951e4e85f); ?>
<?php endif; ?>
            <div class="lqd-accordion mx-auto w-5/6 max-lg:w-full">
                <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('landing-page.faq.item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/landing-page/faq/section.blade.php ENDPATH**/ ?>