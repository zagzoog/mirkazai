<?php $__env->startSection('title', __('User Activity')); ?>

<?php $__env->startSection('content'); ?>
    <div class="py-10">
        <?php if (isset($component)) { $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f = $attributes; } ?>
<?php $component = App\View\Components\Table::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Table::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('head', null, []); ?> 
                <tr>
                    <th>
                        <button
                                class="table-sort"
                                data-sort="sort-name"
                        >
                            <?php echo e(__('Email')); ?>

                        </button>
                    </th>
                    <th>
                        <button
                                class="table-sort"
                                data-sort="sort-group"
                        >
                            <?php echo e(__('User Type')); ?>

                        </button>
                    </th>
                    <th>
                        <button
                                class="table-sort"
                                data-sort="sort-remaining-words"
                        >
                            <?php echo e(__('IP Address')); ?>

                        </button>
                    </th>
                    <th>
                        <button
                                class="table-sort"
                                data-sort="sort-remaining-images"
                        >
                            <?php echo e(__('Connection')); ?>

                        </button>
                    </th>
                    <th>
                        <button
                                class="table-sort"
                                data-sort="sort-country"
                        >
                            <?php echo e(__('Last Activity')); ?>

                        </button>
                    </th>
                </tr>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('body', null, ['class' => 'text-xs','id' => 'users-list']); ?> 
                <?php if($app_is_not_demo): ?>
                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="sort-name">
                                <?php echo e($user->email); ?>

                            </td>
                            <td class="sort-group">
                                <?php echo e($user->type); ?>

                            </td>
                            <td class="sort-remaining-words">
                                <?php echo e($user->ip); ?>

                            </td>
                            <td class="sort-remaining-images">
                                <?php echo e($user->connection); ?>

                            </td>
                            <td
                                    class="sort-date"
                                    data-date="<?php echo e(strtotime($user->created_at)); ?>"
                            >
                                <p class="m-0">
                                    <?php echo e(\Carbon\Carbon::parse($user->created_at)->diffForHumans()); ?>

                                </p>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td
                                    class="text-center"
                                    colspan="8"
                            >
                                <?php echo e(__('No users found.')); ?>

                            </td>
                        </tr>
                    <?php endif; ?>
                <?php else: ?>
                    <tr>
                        <td class="sort-name">
                            admin@admin.com
                        </td>
                        <td class="sort-group">
                            Admin
                        </td>
                        <td class="sort-remaining-words">
                            192.168.2.1
                        </td>
                        <td class="sort-remaining-images">
                            Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko)
                            Chrome/124.0.0.0 Safari/537.36
                        </td>
                        <td
                                class="sort-date"
                                data-date="19-12-2022"
                        >
                            <p class="m-0">
                                19-12-2022
                            </p>
                            <p class="opacity-50">
                                19-12-2022
                            </p>
                        </td>
                    </tr>
                <?php endif; ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f)): ?>
<?php $attributes = $__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f; ?>
<?php unset($__attributesOriginal7d9f6e0b9001f5841f72577781b2d17f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7d9f6e0b9001f5841f72577781b2d17f)): ?>
<?php $component = $__componentOriginal7d9f6e0b9001f5841f72577781b2d17f; ?>
<?php unset($__componentOriginal7d9f6e0b9001f5841f72577781b2d17f); ?>
<?php endif; ?>


        <?php if($app_is_not_demo): ?>
            <div class="mt-1 flex items-center justify-end border-t pt-4">
                <div class="m-0 ms-auto p-0"><?php echo e($users->links()); ?></div>
            </div>
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layout.app', ['disable_tblr' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/admin/users/activity.blade.php ENDPATH**/ ?>