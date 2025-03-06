<?php
    $domain = request()->getHost();
?>

<article
    class="theme-dark relative mx-4 rounded-xl bg-[#0A131F] text-base text-white/50 shadow-2xl shadow-black/10 md:mx-8"
    id="premium-support"
    style="background-image: url(<?php echo e(custom_theme_url('/assets/img/bg/grid-bg.svg')); ?>)"
>
    <?php echo $__env->make('premium-support.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('premium-support.components.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('premium-support.components.feature-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('premium-support.components.feature-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('premium-support.components.feature-3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('premium-support.components.faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('premium-support.components.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('premium-support.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</article>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/premium-support/index.blade.php ENDPATH**/ ?>