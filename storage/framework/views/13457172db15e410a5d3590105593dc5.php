<div class="space-y-8">
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $enabledAiEngines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aiEngine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!--[if BLOCK]><![endif]--><?php if(isset($entities[$aiEngine->value])): ?>
            <?php if (isset($component)) { $__componentOriginal4112aa7b4e8fd49be7872da2b81ccc8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4112aa7b4e8fd49be7872da2b81ccc8b = $attributes; } ?>
<?php $component = App\View\Components\FormStep::resolve(['step' => ''.e($loop->iteration).'','label' => ''.e($aiEngine->label()).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-step'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormStep::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '-mb-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4112aa7b4e8fd49be7872da2b81ccc8b)): ?>
<?php $attributes = $__attributesOriginal4112aa7b4e8fd49be7872da2b81ccc8b; ?>
<?php unset($__attributesOriginal4112aa7b4e8fd49be7872da2b81ccc8b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4112aa7b4e8fd49be7872da2b81ccc8b)): ?>
<?php $component = $__componentOriginal4112aa7b4e8fd49be7872da2b81ccc8b; ?>
<?php unset($__componentOriginal4112aa7b4e8fd49be7872da2b81ccc8b); ?>
<?php endif; ?>

            <div class="w-full space-y-5">
                <?php
                    $defaultModels = $aiEngine->getDefaultModels($setting, $settings_two);
                    $modelsWithoutDefault = $aiEngine->getListableActiveModels($setting, $settings_two);
                ?>

                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $defaultModels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $defaultModel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['tooltip' => ''.e($defaultModel->label()).'','label' => ''.e($defaultModel->value).' ('.e($defaultModel->subLabel()).' Model)','error' => 'entities.' . $defaultModel->engine()->slug() . '.' . $defaultModel->slug() . '.credit'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:label' => 'w-2/3','class' => 'space-y-2']); ?>
                        <div class="absolute -top-0.5 end-0 !m-0 lg:top-0">
                            <?php if (isset($component)) { $__componentOriginal43da204543437953b216481011f1ac88 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43da204543437953b216481011f1ac88 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.checkbox','data' => ['class:input' => 'lg:!h-[18px] lg:!w-[34px] lg:![background-position:10%_50%] lg:![background-size:8px] lg:checked:![background-position:90%_50%]','position' => 'left','wire:model' => 'entities.'.e($defaultModel->engine()->slug()).'.'.e($defaultModel->slug()).'.isUnlimited','wire:change' => 'updateEntities(\'entities.'.e($defaultModel->engine()->slug()).'.'.e($defaultModel->slug()).'.isUnlimited\', $event.target.checked)','name' => 'entities['.e($defaultModel->engine()->slug()).']['.e($defaultModel->slug()).'][isUnlimited]','checked' => $entities[$defaultModel->engine()->slug()][$defaultModel->slug()]['isUnlimited'] ?? false,'label' => ''.e(__('Unlimited')).'','size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:input' => 'lg:!h-[18px] lg:!w-[34px] lg:![background-position:10%_50%] lg:![background-size:8px] lg:checked:![background-position:90%_50%]','position' => 'left','wire:model' => 'entities.'.e($defaultModel->engine()->slug()).'.'.e($defaultModel->slug()).'.isUnlimited','wire:change' => 'updateEntities(\'entities.'.e($defaultModel->engine()->slug()).'.'.e($defaultModel->slug()).'.isUnlimited\', $event.target.checked)','name' => 'entities['.e($defaultModel->engine()->slug()).']['.e($defaultModel->slug()).'][isUnlimited]','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($entities[$defaultModel->engine()->slug()][$defaultModel->slug()]['isUnlimited'] ?? false),'label' => ''.e(__('Unlimited')).'','size' => 'sm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43da204543437953b216481011f1ac88)): ?>
<?php $attributes = $__attributesOriginal43da204543437953b216481011f1ac88; ?>
<?php unset($__attributesOriginal43da204543437953b216481011f1ac88); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43da204543437953b216481011f1ac88)): ?>
<?php $component = $__componentOriginal43da204543437953b216481011f1ac88; ?>
<?php unset($__componentOriginal43da204543437953b216481011f1ac88); ?>
<?php endif; ?>
                        </div>

                        <div>
                            <?php if (isset($component)) { $__componentOriginal6996f935bbd415d62a56627050a53e38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6996f935bbd415d62a56627050a53e38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.stepper','data' => ['wire:model' => 'entities.'.e($defaultModel->engine()->slug()).'.'.e($defaultModel->slug()).'.credit','wire:input' => 'updateEntities(\'entities.'.e($defaultModel->engine()->slug()).'.'.e($defaultModel->slug()).'.credit\', $event.target.value)','series' => 'entities.'.e($defaultModel->engine()->slug()).'.'.e($defaultModel->slug()).'.credit','name' => 'entities['.e($defaultModel->engine()->slug()).']['.e($defaultModel->slug()).'][credit]','size' => 'lg','min' => '0','step' => '1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.stepper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'entities.'.e($defaultModel->engine()->slug()).'.'.e($defaultModel->slug()).'.credit','wire:input' => 'updateEntities(\'entities.'.e($defaultModel->engine()->slug()).'.'.e($defaultModel->slug()).'.credit\', $event.target.value)','series' => 'entities.'.e($defaultModel->engine()->slug()).'.'.e($defaultModel->slug()).'.credit','name' => 'entities['.e($defaultModel->engine()->slug()).']['.e($defaultModel->slug()).'][credit]','size' => 'lg','min' => '0','step' => '1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6996f935bbd415d62a56627050a53e38)): ?>
<?php $attributes = $__attributesOriginal6996f935bbd415d62a56627050a53e38; ?>
<?php unset($__attributesOriginal6996f935bbd415d62a56627050a53e38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6996f935bbd415d62a56627050a53e38)): ?>
<?php $component = $__componentOriginal6996f935bbd415d62a56627050a53e38; ?>
<?php unset($__componentOriginal6996f935bbd415d62a56627050a53e38); ?>
<?php endif; ?>
                            <small>
                                <?php echo e($defaultModel->tooltipHowToCalc()); ?>

                            </small>
                        </div>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal115fead9001cb250833bb983c7be3f11)): ?>
<?php $attributes = $__attributesOriginal115fead9001cb250833bb983c7be3f11; ?>
<?php unset($__attributesOriginal115fead9001cb250833bb983c7be3f11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal115fead9001cb250833bb983c7be3f11)): ?>
<?php $component = $__componentOriginal115fead9001cb250833bb983c7be3f11; ?>
<?php unset($__componentOriginal115fead9001cb250833bb983c7be3f11); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--><?php if($modelsWithoutDefault->count() > 0): ?>
                    <div x-data="{ showContent: false }">
                        <?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale67687e3e4e61f963b25a6bcf3983629 = $attributes; } ?>
<?php $component = App\View\Components\Button::resolve(['type' => 'button','variant' => 'link'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex w-full items-center justify-between gap-7 py-3 text-2xs','@click' => 'showContent = !showContent']); ?>
                            <span class="h-px grow bg-current opacity-10"></span>
                            <span class="flex items-center gap-3">
                                <?php echo e(__('View All')); ?>

                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-chevron-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 rotate-180 transition',':class' => '{ \'rotate-0\': showContent, \'rotate-180\': !showContent }']); ?>
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
                            <span class="h-px grow bg-current opacity-10"></span>
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
                        <div
                            class="hidden"
                            :class="{ 'hidden': !showContent }"
                        >
                            <div class="space-y-5 pt-5">
								<?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5e767ad160784309dfcad41e788743b = $attributes; } ?>
<?php $component = App\View\Components\Alert::resolve(['variant' => 'danger'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
									<?php echo app('translator')->get('These model credits listed below will not be visible to the user and cannot be used until the model is set as the default in the related settings page.'); ?>
								 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb5e767ad160784309dfcad41e788743b)): ?>
<?php $attributes = $__attributesOriginalb5e767ad160784309dfcad41e788743b; ?>
<?php unset($__attributesOriginalb5e767ad160784309dfcad41e788743b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb5e767ad160784309dfcad41e788743b)): ?>
<?php $component = $__componentOriginalb5e767ad160784309dfcad41e788743b; ?>
<?php unset($__componentOriginalb5e767ad160784309dfcad41e788743b); ?>
<?php endif; ?>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $modelsWithoutDefault; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['tooltip' => ''.e($entity->key->label()).'','label' => ''.e($entity->key->value).' ('.e($entity->key->subLabel()).' Model)','error' => 'entities.' . $entity->engine->slug() . '.' . $entity->key->slug() . '.credit'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <div class="absolute -top-0.5 end-0 !m-0 lg:top-0">
                                            <?php if (isset($component)) { $__componentOriginal43da204543437953b216481011f1ac88 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43da204543437953b216481011f1ac88 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.checkbox','data' => ['class:input' => 'lg:!h-[18px] lg:!w-[34px] lg:![background-position:10%_50%] lg:![background-size:8px] lg:checked:![background-position:90%_50%]','position' => 'left','wire:model' => 'entities.'.e($entity->engine->slug()).'.'.e($entity->key->slug()).'.isUnlimited','wire:change' => 'updateEntities(\'entities.'.e($entity->engine->slug()).'.'.e($entity->key->slug()).'.isUnlimited\', $event.target.checked)','name' => 'entities['.e($entity->engine->slug()).']['.e($entity->key->slug()).'][isUnlimited]','checked' => $entities[$entity->engine->slug()][$entity->key->slug()]['isUnlimited'] ?? false,'label' => ''.e(__('Unlimited')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:input' => 'lg:!h-[18px] lg:!w-[34px] lg:![background-position:10%_50%] lg:![background-size:8px] lg:checked:![background-position:90%_50%]','position' => 'left','wire:model' => 'entities.'.e($entity->engine->slug()).'.'.e($entity->key->slug()).'.isUnlimited','wire:change' => 'updateEntities(\'entities.'.e($entity->engine->slug()).'.'.e($entity->key->slug()).'.isUnlimited\', $event.target.checked)','name' => 'entities['.e($entity->engine->slug()).']['.e($entity->key->slug()).'][isUnlimited]','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($entities[$entity->engine->slug()][$entity->key->slug()]['isUnlimited'] ?? false),'label' => ''.e(__('Unlimited')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43da204543437953b216481011f1ac88)): ?>
<?php $attributes = $__attributesOriginal43da204543437953b216481011f1ac88; ?>
<?php unset($__attributesOriginal43da204543437953b216481011f1ac88); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43da204543437953b216481011f1ac88)): ?>
<?php $component = $__componentOriginal43da204543437953b216481011f1ac88; ?>
<?php unset($__componentOriginal43da204543437953b216481011f1ac88); ?>
<?php endif; ?>
                                        </div>

                                        <div>
                                            <?php if (isset($component)) { $__componentOriginal6996f935bbd415d62a56627050a53e38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6996f935bbd415d62a56627050a53e38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.stepper','data' => ['wire:model' => 'entities.'.e($entity->engine->slug()).'.'.e($entity->key->slug()).'.credit','wire:input' => 'updateEntities(\'entities.'.e($entity->engine->slug()).'.'.e($entity->key->slug()).'.credit\', $event.target.value)','name' => 'entities['.e($entity->engine->slug()).']['.e($entity->key->slug()).'][credit]','size' => 'lg','min' => '0','step' => '1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.stepper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'entities.'.e($entity->engine->slug()).'.'.e($entity->key->slug()).'.credit','wire:input' => 'updateEntities(\'entities.'.e($entity->engine->slug()).'.'.e($entity->key->slug()).'.credit\', $event.target.value)','name' => 'entities['.e($entity->engine->slug()).']['.e($entity->key->slug()).'][credit]','size' => 'lg','min' => '0','step' => '1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6996f935bbd415d62a56627050a53e38)): ?>
<?php $attributes = $__attributesOriginal6996f935bbd415d62a56627050a53e38; ?>
<?php unset($__attributesOriginal6996f935bbd415d62a56627050a53e38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6996f935bbd415d62a56627050a53e38)): ?>
<?php $component = $__componentOriginal6996f935bbd415d62a56627050a53e38; ?>
<?php unset($__componentOriginal6996f935bbd415d62a56627050a53e38); ?>
<?php endif; ?>
                                            <small>
                                                <?php echo e($entity->key->tooltipHowToCalc()); ?>

                                            </small>
                                        </div>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal115fead9001cb250833bb983c7be3f11)): ?>
<?php $attributes = $__attributesOriginal115fead9001cb250833bb983c7be3f11; ?>
<?php unset($__attributesOriginal115fead9001cb250833bb983c7be3f11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal115fead9001cb250833bb983c7be3f11)): ?>
<?php $component = $__componentOriginal115fead9001cb250833bb983c7be3f11; ?>
<?php unset($__componentOriginal115fead9001cb250833bb983c7be3f11); ?>
<?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </div>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/livewire/assign-view-credits.blade.php ENDPATH**/ ?>