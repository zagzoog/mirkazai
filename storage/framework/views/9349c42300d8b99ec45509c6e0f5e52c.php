<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('titlebar_actions', ''); ?>


<?php $__env->startSection('content'); ?>
    <?php if($subscription): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.finance.plan.subscription-plan-create', ['plan' => $item]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1429306549-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php else: ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('admin.finance.plan.token-pack-plan-create', ['plan' => $item]);

$__html = app('livewire')->mount($__name, $__params, 'lw-1429306549-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/admin/finance/plan/form.blade.php ENDPATH**/ ?>