<?php $__env->startSection('title', __('Create New User')); ?>
<?php $__env->startSection('titlebar_actions', ''); ?>

<?php $__env->startSection('settings'); ?>
    <form
        <?php if($app_is_demo): ?> <?php else: ?> action="<?php echo e(route('dashboard.admin.users.store')); ?>" <?php endif; ?>
    method="POST"
        enctype="multipart/form-data"
    >
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label"><?php echo e(__('Name')); ?></label>
                            <input
                                class="form-control"
                                id="name"
                                type="text"
                                name="name"
                                value="<?php echo e(old('name')); ?>"
                                required
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label"><?php echo e(__('Surname')); ?></label>
                            <input
                                class="form-control"
                                id="surname"
                                type="text"
                                name="surname"
                                value="<?php echo e(old('surname')); ?>"
                                required
                            >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label"><?php echo e(__('Phone')); ?></label>
                            <input
                                class="form-control"
                                id="phone"
                                data-mask="+0000000000000"
                                data-mask-visible="true"
                                type="text"
                                name="phone"
                                placeholder="+000000000000"
                                autocomplete="off"
                                value="<?php echo e(old('phone')); ?>"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label"><?php echo e(__('Email')); ?></label>
                            <input
                                class="form-control"
                                id="email"
                                type="email"
                                name="email"
                                value="<?php echo e(old('email')); ?>"
                                required
                            >
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label"><?php echo e(__('Avatar')); ?></label>
                    <input
                        class="form-control"
                        id="avatar"
                        type="file"
                        name="avatar"
                    >
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">
                                <?php echo e(__('Password')); ?>

                            </label>
                            <div class="input-group">
                                <input
                                    class="form-control"
                                    id="password"
                                    type="password"
                                    name="password"
                                    placeholder="<?php echo e(__('Your password')); ?>"
                                    value="<?php echo e(old('password')); ?>"
                                    autocomplete="off"
                                    required
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">
                                <?php echo e(__('Re-Password')); ?>

                            </label>
                            <div class="input-group">
                                <input
                                    class="form-control"
                                    id="repassword"
                                    type="password"
                                    name="repassword"
                                    placeholder="<?php echo e(__('Repeat password')); ?>"
                                    value="<?php echo e(old('repassword')); ?>"
                                    autocomplete="off"
                                    required
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label"><?php echo e(__('Country')); ?></label>
                    <select
                        class="form-select"
                        id="country"
                        type="text"
                        name="country"
                    >
                        <?php echo $__env->make('panel.admin.users.countries', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="form-label"><?php echo e(__('Type')); ?></div>
                            <select
                                class="form-select"
                                id="type"
                                name="type"
                            >
                                <?php $__currentLoopData = \App\Enums\Roles::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($role->value); ?>">
                                        <?php echo e($role->label()); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="form-label"><?php echo e(__('Status')); ?></div>
                            <select
                                class="form-select"
                                id="status"
                                name="status"
                            >
                                <option value="1"><?php echo e(__('Active')); ?></option>
                                <option value="0"><?php echo e(__('Passive')); ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="accordion " id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button
                                    class="accordion-button form-control"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne"
                                    aria-expanded="true"
                                    aria-controls="collapseOne"
                                >
                                    <?php echo e(__('Credits')); ?>

                                </button>
                            </h2>
                            <div
                                id="collapseOne"
                                class="accordion-collapse collapse show"
                                aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('assign-view-credits', ['entities' => \App\Models\User::getFreshCredits()]);

$__html = app('livewire')->mount($__name, $__params, 'lw-526912909-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    class="btn btn-primary w-full"
                    <?php if($app_is_demo): ?> type="button" <?php else: ?> type="submit" <?php endif; ?>
                >
                    <?php echo e(__('Save')); ?>

                </button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('panel.layout.settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/admin/users/create.blade.php ENDPATH**/ ?>