<?php $__env->startSection('content'); ?>
    <div
        class="lqd-generator-v2 group/generator [--editor-bb-h:40px] [--editor-tb-h:50px] [--sidebar-w:min(440px,90vw)]"
        :class="{ 'lqd-generator-sidebar-collapsed': sideNavCollapsed }"
        x-data="generatorV2"
    >
        <?php echo $__env->make('panel.user.generator.components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('panel.user.generator.components.editor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layout.app', [
    'disable_header' => true,
    'disable_titlebar' => true,
    'disable_navbar' => true,
    'disable_footer' => true,
    'disable_floating_menu' => true,
    'disable_mobile_bottom_menu' => true,
    'disable_tblr' => true,
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/user/generator/index.blade.php ENDPATH**/ ?>