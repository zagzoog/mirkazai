<?php
    $faqs = [
        [
            'q' => 'Do I get all the upcoming extensions for free?',
            'a' => 'Yes, you get access to all the upcoming extensions for free as long as you have an active premium membership.',
        ],
        [
            'q' => 'How does it compare to the regular support?',
            'a' => 'The regular support is limited to bug fixes and general questions. Premium support includes customization, priority support, and more.',
        ],
        [
            'q' => 'Do you offer customization?',
            'a' => 'Yes, we offer customization services to help you tailor MirkazAI to your exact needs.',
        ],
        [
            'q' => 'How can I join this program?',
            'a' => 'You can join the premium support program by purchasing a premium membership.',
        ],
        [
            'q' => 'Can I cancel my subscription anytime?',
            'a' => 'Yes, you can cancel your subscription anytime. Your premium membership will remain active until the end of the billing cycle.',
        ],
    ];
?>

<section
    class="relative pb-20 pt-32 max-md:pt-24"
    id="premium-support-faq"
>
    <!-- Glow 1 -->
    <div class="size-[500px] absolute start-0 top-full inline-block bg-[#9B84FB] opacity-50 blur-[150px]"></div>
    <!-- Glow 2 -->
    <div class="size-[360px] absolute end-0 top-full inline-block translate-y-full bg-[#8DECD7] opacity-50 blur-[150px]"></div>

    <div class="container relative">
        <div class="mx-auto mb-16 w-full text-center lg:w-1/2">
            <h2 class="mb-5 text-[52px] leading-[0.94em]">
                <?php echo app('translator')->get('Have a question?'); ?>
            </h2>
            <p class="text-[19px] leading-[1.42em]">
                <?php echo app('translator')->get("Starting your premium membership is simple. If you have any questions, we're here to assist you."); ?>
            </p>
        </div>

        <div
            class="mx-auto w-full space-y-8 lg:w-4/5"
            x-data="{ openedIndex: -1 }"
        >
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="lqd-accordion-item group"
                    :class="{ 'lqd-is-active': openedIndex === <?php echo e($loop->index); ?> }"
                >
                    <button
                        class="lqd-accordion-trigger flex w-full items-center justify-between gap-3 rounded-full border border-white/5 py-2.5 pe-2.5 ps-10 text-start text-[19px] font-semibold text-white/70 [&.lqd-is-active]:bg-white/[2%] [&.lqd-is-active]:text-white"
                        @click="openedIndex = openedIndex === <?php echo e($loop->index); ?> ? -1 : <?php echo e($loop->index); ?>"
                        :class="{ 'lqd-is-active': openedIndex === <?php echo e($loop->index); ?> }"
                    >
                        <?php echo e($faq['q']); ?>


                        <span class="size-12 inline-flex shrink-0 items-center justify-center rounded-full bg-white/5">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-plus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4',':class' => '{ hidden: openedIndex === '.e($loop->index).' }']); ?>
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
<?php $component->withName('tabler-minus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 hidden',':class' => '{ hidden: openedIndex !== '.e($loop->index).' }']); ?>
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
                        </span>
                    </button>
                    <div
                        class="lqd-accordion-content hidden px-10 py-5 text-lg text-white/70"
                        :class="{ hidden: openedIndex !== <?php echo e($loop->index); ?>, 'lqd-is-active': openedIndex === <?php echo e($loop->index); ?> }"
                    >
                        <p>
                            <?php echo e($faq['a']); ?>

                        </p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/premium-support/components/faq.blade.php ENDPATH**/ ?>