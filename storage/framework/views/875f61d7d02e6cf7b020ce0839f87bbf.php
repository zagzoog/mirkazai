<?php use \App\Domains\Entity\Enums\EntityEnum; ?>

<?php $__env->startSection('title', __('Openai Settings')); ?>
<?php $__env->startSection('titlebar_actions', ''); ?>
<?php $__env->startSection('titlebar_subtitle', __('This API key is used for all AI-powered features, including AI Chat, Image Generation, and Content Writing')); ?>

<?php $__env->startSection('additional_css'); ?>
    <link
        href="<?php echo e(custom_theme_url('/assets/libs/select2/select2.min.css')); ?>"
        rel="stylesheet"
    />
    <style>

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('settings'); ?>
    <form
        id="settings_form"
        onsubmit="return openaiSettingsSave();"
        enctype="multipart/form-data"
    >
        <h3 class="mb-[25px] text-[20px]"><?php echo e(__('OpenAI Settings')); ?></h3>
        <div class="row">
            <?php if($app_is_demo): ?>
                <div class="col-md-12">
                    <div class="mb-3">
                        <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                            <label class="form-label"><?php echo e(__('OpenAI API Secret')); ?></label>
                            <input
                                class="form-control"
                                id="openai_api_secret"
                                type="text"
                                name="openai_api_secret"
                                value="*********************"
                            >
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
                    </div>
                </div>
            <?php else: ?>
                <div class="col-md-12">
                    <div class="mb-3">
                        <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                            <div
                                class="form-control mb-3 border-none p-0 [&_.select2-selection--multiple]:!rounded-[--tblr-border-radius] [&_.select2-selection--multiple]:!border-[--tblr-border-color] [&_.select2-selection--multiple]:!p-[1em_1.23em]">
                                <label class="form-label"><?php echo e(__('OpenAI API Secret')); ?></label>

                                <select
                                    class="form-control select2"
                                    id="openai_api_secret"
                                    name="openai_api_secret"
                                    multiple
                                >
                                    <?php $__currentLoopData = explode(',', $setting->openai_api_secret); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secret): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($secret); ?>"
                                            selected
                                        ><?php echo e($secret); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5e767ad160784309dfcad41e788743b = $attributes; } ?>
<?php $component = App\View\Components\Alert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2']); ?>
                                    <p class="text-justify">
                                        <?php echo e(__('You can enter as much API KEY as you want. Click "Enter" after each api key.')); ?>

                                    </p>
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
                                <?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5e767ad160784309dfcad41e788743b = $attributes; } ?>
<?php $component = App\View\Components\Alert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2']); ?>
                                    <p class="text-justify">
                                        <?php echo e(__('Please ensure that your OpenAI API key is fully functional and billing defined on your OpenAI account.')); ?>

                                    </p>
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
                                <a
                                    class="btn btn-primary mb-2 mt-2 w-full"
                                    href="<?php echo e(route('dashboard.admin.settings.openai.test')); ?>"
                                    target="_blank"
                                >
                                    <?php echo e(__('After Saving Setting, Click Here to Test Your Api Keys')); ?>

                                </a>
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
                    </div>
                </div>
            <?php endif; ?>
			<?php if ($__env->exists('openai-realtime-chat::setting')) echo $__env->make('openai-realtime-chat::setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <div class="col-md-12">
                <div class="mb-3">
                    <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'dalle_hidden','type' => 'checkbox','name' => 'dalle_hidden','label' => ''.e(__('Hide Dall-E from AI Image')).'','switcher' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'mb-2','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('dalle_hidden') == 1)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                            </div>
                        </div>
						<?php
							$openaiImageDrivers = \App\Domains\Entity\EntityStats::image()
								->filterByEngine(\App\Domains\Engine\Enums\EngineEnum::OPEN_AI)
								->list();
							$current_dall_e_model = EntityEnum::fromSlug($settings_two->dalle ?? EntityEnum::DALL_E_2->slug())->slug();
						?>
						<?php if (isset($component)) { $__componentOriginal0b52e49ec80893bef9418d4370c1802c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b52e49ec80893bef9418d4370c1802c = $attributes; } ?>
<?php $component = App\View\Components\ModelSelectListWithChangeAlert::resolve(['listLabel' => 'OpenAI Default Dall-E Model','listId' => 'dalle_default_model','currentModel' => ''.e($current_dall_e_model).'','drivers' => $openaiImageDrivers] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('model-select-list-with-change-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ModelSelectListWithChangeAlert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0b52e49ec80893bef9418d4370c1802c)): ?>
<?php $attributes = $__attributesOriginal0b52e49ec80893bef9418d4370c1802c; ?>
<?php unset($__attributesOriginal0b52e49ec80893bef9418d4370c1802c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b52e49ec80893bef9418d4370c1802c)): ?>
<?php $component = $__componentOriginal0b52e49ec80893bef9418d4370c1802c; ?>
<?php unset($__componentOriginal0b52e49ec80893bef9418d4370c1802c); ?>
<?php endif; ?>
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
                </div>
            </div>
            <div class="col-md-12">
                <?php
					$openaiWordDrivers = \App\Domains\Entity\EntityStats::word()
						->filterByEngine(\App\Domains\Engine\Enums\EngineEnum::OPEN_AI)
						->list();

					$current_model = EntityEnum::fromSlug($setting->openai_default_model ?? EntityEnum::GPT_4_O->slug())->slug();
                ?>
				<?php if (isset($component)) { $__componentOriginal0b52e49ec80893bef9418d4370c1802c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b52e49ec80893bef9418d4370c1802c = $attributes; } ?>
<?php $component = App\View\Components\ModelSelectListWithChangeAlert::resolve(['listLabel' => 'OpenAI Default Word Model','listId' => 'openai_default_model','currentModel' => ''.e($current_model).'','fineModelOptions' => true,'drivers' => $openaiWordDrivers] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('model-select-list-with-change-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ModelSelectListWithChangeAlert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0b52e49ec80893bef9418d4370c1802c)): ?>
<?php $attributes = $__attributesOriginal0b52e49ec80893bef9418d4370c1802c; ?>
<?php unset($__attributesOriginal0b52e49ec80893bef9418d4370c1802c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b52e49ec80893bef9418d4370c1802c)): ?>
<?php $component = $__componentOriginal0b52e49ec80893bef9418d4370c1802c; ?>
<?php unset($__componentOriginal0b52e49ec80893bef9418d4370c1802c); ?>
<?php endif; ?>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                        <label class="form-label"><?php echo e(__('Default Stream Server')); ?></label>
                        <select
                            class="form-select"
                            id="openai_default_stream_server"
                            type="text"
                            name="openai_default_stream_server"
                            required
                        >
                            <option
                                value="backend"
                                <?php echo e($settings_two->openai_default_stream_server == 'backend' ? 'selected' : ''); ?>

                            >
                                <?php echo e(__('Backend')); ?></option>
                            <option
                                value="frontend"
                                <?php echo e($settings_two->openai_default_stream_server == 'frontend' ? 'selected' : ''); ?>

                            >
                                <?php echo e(__('Frontend')); ?></option>
                        </select>
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
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                        <label class="form-label"><?php echo e(__('Default Openai Language')); ?></label>
                        <select
                            class="form-select"
                            id="openai_default_language"
                            name="openai_default_language"
                        >
                            <?php echo $__env->make('panel.admin.settings.languages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </select>
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
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                        <label class="form-label"><?php echo e(__('Default Tone of Voice')); ?></label>
                        <select
                            class="form-select"
                            id="openai_default_tone_of_voice"
                            name="openai_default_tone_of_voice"
                        >
                            <option
                                value="Professional"
                                <?php echo e($setting->openai_default_tone_of_voice == 'Professional' ? 'selected' : null); ?>

                            >
                                <?php echo e(__('Professional')); ?></option>
                            <option
                                value="Funny"
                                <?php echo e($setting->openai_default_tone_of_voice == 'Funny' ? 'selected' : null); ?>

                            >
                                <?php echo e(__('Funny')); ?></option>
                            <option
                                value="Casual"
                                <?php echo e($setting->openai_default_tone_of_voice == 'Casual' ? 'selected' : null); ?>

                            >
                                <?php echo e(__('Casual')); ?></option>
                            <option
                                value="Excited"
                                <?php echo e($setting->openai_default_tone_of_voice == 'Excited' ? 'selected' : null); ?>

                            >
                                <?php echo e(__('Excited')); ?></option>
                            <option
                                value="Witty"
                                <?php echo e($setting->openai_default_tone_of_voice == 'Witty' ? 'selected' : null); ?>

                            >
                                <?php echo e(__('Witty')); ?></option>
                            <option
                                value="Sarcastic"
                                <?php echo e($setting->openai_default_tone_of_voice == 'Sarcastic' ? 'selected' : null); ?>

                            >
                                <?php echo e(__('Sarcastic')); ?></option>
                            <option
                                value="Feminine"
                                <?php echo e($setting->openai_default_tone_of_voice == 'Feminine' ? 'selected' : null); ?>

                            >
                                <?php echo e(__('Feminine')); ?></option>
                            <option
                                value="Masculine"
                                <?php echo e($setting->openai_default_tone_of_voice == 'Masculine' ? 'selected' : null); ?>

                            >
                                <?php echo e(__('Masculine')); ?></option>
                            <option
                                value="Bold"
                                <?php echo e($setting->openai_default_tone_of_voice == 'Bold' ? 'selected' : null); ?>

                            >
                                <?php echo e(__('Bold')); ?></option>
                            <option
                                value="Dramatic"
                                <?php echo e($setting->openai_default_tone_of_voice == 'Dramatic' ? 'selected' : null); ?>

                            >
                                <?php echo e(__('Dramatic')); ?></option>
                            <option
                                value="Grumpy"
                                <?php echo e($setting->openai_default_tone_of_voice == 'Grumpy' ? 'selected' : null); ?>

                            >
                                <?php echo e(__('Grumpy')); ?></option>
                            <option
                                value="Secretive"
                                <?php echo e($setting->openai_default_tone_of_voice == 'Secretive' ? 'selected' : null); ?>

                            >
                                <?php echo e(__('Secretive')); ?></option>
                        </select>

                        <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'hide_tone_of_voice_option','type' => 'checkbox','switcher' => true,'label' => ''.e(__('Hide Tone of Voice Option')).'','tooltip' => ''.e(__('If this is enabled users will not see the tone of voice option in generator options.')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'mt-5','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('hide_tone_of_voice_option') == 1)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
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
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                        <label class="form-label"><?php echo e(__('Default Creativity')); ?></label>
                        <select
                            class="form-select"
                            id="openai_default_creativity"
                            type="text"
                            name="openai_default_creativity"
                            required
                        >
                            <option
                                value="0.25"
                                <?php echo e($setting->openai_default_creativity == 0.25 ? 'selected' : ''); ?>

                            >
                                <?php echo e(__('Economic')); ?></option>
                            <option
                                value="0.5"
                                <?php echo e($setting->openai_default_creativity == 0.5 ? 'selected' : ''); ?>

                            >
                                <?php echo e(__('Average')); ?></option>
                            <option
                                value="0.75"
                                <?php echo e($setting->openai_default_creativity == 0.75 ? 'selected' : ''); ?>

                            >
                                <?php echo e(__('Good')); ?></option>
                            <option
                                value="1"
                                <?php echo e($setting->openai_default_creativity == 1 ? 'selected' : ''); ?>

                            >
                                <?php echo e(__('Premium')); ?></option>
                        </select>
                        <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'hide_creativity_option','type' => 'checkbox','switcher' => true,'label' => ''.e(__('Hide Creativity Option')).'','tooltip' => ''.e(__('If this is enabled users will not see the creativity option in generator options.')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'mt-5','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('hide_creativity_option') == 1)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
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
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                        <label class="form-label"><?php echo e(__('Maximum Output Length')); ?></label>
                        <input
                            class="form-control"
                            id="openai_max_output_length"
                            type="number"
                            name="openai_max_output_length"
                            min="0"
                            value="<?php echo e($setting->openai_max_output_length); ?>"
                            required
                        >
                        <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'hide_output_length_option','type' => 'checkbox','switcher' => true,'label' => ''.e(__('Hide Output Length Option')).'','tooltip' => ''.e(__('If this is enabled users will not see the output length option in generator options.')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'mt-5 mb-3','checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(setting('hide_output_length_option') == 1)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $attributes = $__attributesOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__attributesOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala97611b31e90fc7dc431a34465dcc851)): ?>
<?php $component = $__componentOriginala97611b31e90fc7dc431a34465dcc851; ?>
<?php unset($__componentOriginala97611b31e90fc7dc431a34465dcc851); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5e767ad160784309dfcad41e788743b = $attributes; } ?>
<?php $component = App\View\Components\Alert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2']); ?>
                            <p class="text-justify">
                                <?php echo e(__('In Words. OpenAI has a hard limit based on Token limits for each model. Refer to OpenAI documentation to learn more. As a recommended by OpenAI, max result length is capped at 2000 tokens')); ?>

                            </p>
                            <p class="text-justify">
                                <?php echo e(__('The maximum output length refers to the point at which the AI-generated response will stop. It can occur when the response reaches 4096 bytes or when the generated content is considered sufficient for the given context.')); ?>

                            </p>
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
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['size' => 'sm'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full']); ?>
                        <label class="form-label"><?php echo e(__('Maximum Input Length')); ?></label>
                        <input
                            class="form-control"
                            id="openai_max_input_length"
                            type="number"
                            name="openai_max_input_length"
                            min="10"
                            max="2000"
                            value="<?php echo e($setting->openai_max_input_length); ?>"
                            required
                        >
                        <?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5e767ad160784309dfcad41e788743b = $attributes; } ?>
<?php $component = App\View\Components\Alert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2']); ?>
                            <p class="text-justify">
                                <?php echo e(__('In Characters')); ?>

                            </p>
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
                </div>
            </div>
        </div>

        <h3 class="mb-[25px] mt-5 text-[20px]"><?php echo e(__('Fine Tune')); ?></h3>
        <div class="row">
            <div class="mb-4">
                <button
                    class="btn btn-default"
                    data-bs-toggle="modal"
                    data-bs-target="#addFineTuneModel"
                    type="button"
                >
                    <svg
                        class="mr-2"
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path
                            stroke="none"
                            d="M0 0h24v24H0z"
                            fill="none"
                        ></path>
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                    </svg>
                    <?php echo e(__('Add Fine Tune')); ?>

                </button>

            </div>
            <div class="table-responsive fine-tune-table">
                <table class="table-vcenter table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('Custom Name')); ?></th>
                            <th><?php echo e(__('File ID')); ?></th>
                            <th><?php echo e(__('Bytes')); ?></th>
                            <th><?php echo e(__('Base Model')); ?></th>
                            <th><?php echo e(__('Fine Tuned Model')); ?></th>
                            <th><?php echo e(__('Status')); ?></th>
                            <th><?php echo e(__('Actions')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php App\Http\Controllers\AIFineTuneController::getFineTuneTableRow(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <button
            class="btn btn-primary w-full"
            id="settings_button"
            form="settings_form"
            onclick="checkMaxOutputLength()"
        >
            <?php echo e(__('Save')); ?>

        </button>
    </form>

    <div
        class="modal"
        id="addFineTuneModel"
        tabindex="-1"
    >
        <div
            class="modal-dialog modal-lg"
            role="document"
        >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('Add Fine Tune')); ?></h5>
                    <button
                        class="btn-close"
                        data-bs-dismiss="modal"
                        type="button"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3">
                            <label
                                class="form-label"
                                for="fine_tune_name"
                            >
                                <?php echo e(__('Name')); ?>

                            </label>
                            <input
                                class="form-control"
                                id="fine_tune_name"
                                type="text"
                                name="fine_tune_name"
                                placeholder="<?php echo e(__('Enter name')); ?>"
                                required
                            >
                        </div>
                        <div class="mb-3">
                            <label
                                class="form-label"
                                for="fine_tune_model"
                            >
                                <?php echo e(__('Model')); ?>

                            </label>
                            <select
                                class="form-select"
                                id="fine_tune_model"
                                name="fine_tune_model"
                            >
                                <option value="gpt-3.5-turbo-1106">gpt-3.5-turbo-1106</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label
                                class="form-label"
                                for="fine_tune_purpose"
                            >
                                <?php echo e(__('Purpose')); ?>

                            </label>
                            <select
                                class="form-select"
                                id="fine_tune_purpose"
                                name="fine_tune_purpose"
                            >
                                <option value="fine-tune"><?php echo e(__('Fine Tune')); ?></option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label
                                class="form-label"
                                for="fine_tune_file"
                            >
                                <?php echo e(__('Select File (JSON)')); ?>

                            </label>
                            <input
                                class="form-control"
                                id="fine_tune_file"
                                type="file"
                                name="fine_tune_file"
                                accept=".jsonl"
                                required
                            >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-primary add-fine-tune"
                        data-bs-dismiss="modal"
                        type="button"
                    >
                        <?php echo e(__('Add')); ?>

                    </button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        function checkMaxOutputLength() {
            var maxOutputLength = document.getElementById("openai_max_output_length").value;
            var msg = "<?php echo e(__('The maximum output length is set above 2000. Are you sure you want to continue?')); ?>";
            if (maxOutputLength > 2000) {
                var confirmation = confirm(msg);
                if (!confirmation) {
                    event.preventDefault();
                }
            }
        }
    </script>
    <script>
        $(document).on("click", ".add-fine-tune", function(e) {
            "use strict";

            var formData = new FormData();
            formData.append('title', $('#fine_tune_name').val());
            formData.append('model', $('#fine_tune_model').val());
            formData.append('purpose', $('#fine_tune_purpose').val());

            if ($('#file').val() != 'undefined') {
                formData.append('file', $('#fine_tune_file').prop('files')[0]);
            }

            $.ajax({
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>",
                },
                url: "/dashboard/user/openai/add-fine-tune",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    // $('.fetch-rss svg').addClass('animate-spin');
                },
                success: function(data) {
                    // $('.fetch-rss svg').removeClass('animate-spin');
                    if (data.output) {
                        $('.fine-tune-table tbody').prepend(data.output);
                        toastr.success(<?php echo json_encode(__('Fine Tune Created!'), 15, 512) ?>);
                        $('#fine_tune_name').val('');
                        $('#fine_tune_model').val('');
                        $('#fine_tune_purpose').val('');
                        $('#fine_tune_file').val('');
                    }
                },
                error: function(data) {
                    // $('.fetch-rss svg').removeClass('animate-spin');
                    toastr.error(data.responseJSON);
                }
            });

        });
    </script>
    <script>
        $(document).on("click", ".delete-fine-tune", function(e) {
            "use strict";

            let button = $(this);
            let file_id = button.attr('data-file');
            let model = button.attr('data-model');
            let row = button.closest('tr');

            if (!confirm(<?php echo json_encode(__('Are you sure?'), 15, 512) ?>)) {
                return false;
            }

            var formData = new FormData();
            formData.append('file_id', file_id);
            formData.append('model', model);

            if (!file_id || !model) {
                toastr.error(<?php echo json_encode(__('Model under on process. Reload the page before delete!'), 15, 512) ?>);
                return false;
            }

            $.ajax({
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>",
                },
                url: "/dashboard/user/openai/delete-fine-tune",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    // $('.fetch-rss svg').addClass('animate-spin');
                },
                success: function(data) {
                    row.remove();
                    toastr.success(<?php echo json_encode(__('Fine Tune Deleted!'), 15, 512) ?>);
                },
                error: function(data) {
                    toastr.error(data.responseJSON);
                }
            });

        });
    </script>
    <script src="<?php echo e(custom_theme_url('/assets/js/panel/settings.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('/assets/libs/select2/select2.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('panel.layout.settings', ['layout' => 'wide'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/admin/settings/openai.blade.php ENDPATH**/ ?>