<?php
    use App\Domains\Entity\Enums\EntityEnum;
?>


<?php $__env->startSection('title', __(\App\Domains\Engine\Enums\EngineEnum::ANTHROPIC->label().' Settings')); ?>
<?php $__env->startSection('titlebar_actions', ''); ?>
<?php $__env->startSection('titlebar_subtitle', __('This API key is used for all AI-powered features and Content Writing')); ?>

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
		onsubmit="return anthropicSettingsSave();"
		enctype="multipart/form-data"
>
	<h3 class="mb-[25px] text-[20px]"><?php echo e(__('Anthropic Settings')); ?></h3>
	<div class="row">
		<!-- TODO OPENAI API KEY -->
		<?php if($app_is_demo): ?>
			<div class="col-md-12">
				<div class="mb-3">
					<label class="form-label"><?php echo e(__('Anthropic API Secret')); ?></label>
					<input
							class="form-control"
							id="anthropic_api_secret"
							type="text"
							name="anthropic_api_secret"
							value="*********************"
					>
				</div>
			</div>
		<?php else: ?>
			<div class="col-md-12">
				<div
						class="form-control mb-3 border-none p-0 [&_.select2-selection--multiple]:!rounded-[--tblr-border-radius] [&_.select2-selection--multiple]:!border-[--tblr-border-color] [&_.select2-selection--multiple]:!p-[1em_1.23em]">
					<label class="form-label"><?php echo e(__('Anthropic API Secret')); ?></label>

					<select
							class="form-control select2"
							id="anthropic_api_secret"
							name="anthropic_api_secret"
							multiple
					>
						<?php $__currentLoopData = explode(',', setting('anthropic_api_secret')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secret): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
						<p>
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
						<p>
							<?php echo e(__('Please ensure that your Anthropic API key is fully functional and billing defined on your Anthropic account.')); ?>

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
							href="<?php echo e(route('dashboard.admin.settings.anthropic.test')); ?>"
							target="_blank"
					>
						<?php echo e(__('After Saving Setting, Click Here to Test Your Api Keys')); ?>

					</a>
				</div>
			</div>
		<?php endif; ?>

		<div class="col-md-12">
			<div class="mb-3">
				<?php
					$anthropicDrivers = \App\Domains\Entity\EntityStats::word()
						->filterByEngine(\App\Domains\Engine\Enums\EngineEnum::ANTHROPIC)
						->list();
					$current_anthropic_model = EntityEnum::fromSlug(setting('anthropic_default_model', EntityEnum::CLAUDE_2_0->slug()))->slug();
				?>
				<?php if (isset($component)) { $__componentOriginal0b52e49ec80893bef9418d4370c1802c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b52e49ec80893bef9418d4370c1802c = $attributes; } ?>
<?php $component = App\View\Components\ModelSelectListWithChangeAlert::resolve(['bedrockOptions' => true,'listLabel' => 'Default Anthropic Word Model','listId' => 'anthropic_default_model','currentModel' => ''.e($current_anthropic_model).'','drivers' => $anthropicDrivers] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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

		<div class="col-md-12" id="anthropic_bedrock" style="display: none;">
			<div class="mb-3">
				<label class="form-label"><?php echo e(__('Default AWS Bedrock Model')); ?>

					<?php if (isset($component)) { $__componentOriginal9acd6c99af8d8c9491f2759be41ef2c4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9acd6c99af8d8c9491f2759be41ef2c4 = $attributes; } ?>
<?php $component = App\View\Components\InfoTooltip::resolve(['text' => ''.e(__('To use Bedrock, you must first configure your AWS settings.')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\InfoTooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9acd6c99af8d8c9491f2759be41ef2c4)): ?>
<?php $attributes = $__attributesOriginal9acd6c99af8d8c9491f2759be41ef2c4; ?>
<?php unset($__attributesOriginal9acd6c99af8d8c9491f2759be41ef2c4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9acd6c99af8d8c9491f2759be41ef2c4)): ?>
<?php $component = $__componentOriginal9acd6c99af8d8c9491f2759be41ef2c4; ?>
<?php unset($__componentOriginal9acd6c99af8d8c9491f2759be41ef2c4); ?>
<?php endif; ?>
				</label>
				<select
						class="form-select"
						id="anthropic_bedrock_model"
						name="anthropic_bedrock_model"
				>
					<option
							value="<?php echo e(\App\Enums\BedrockEngine::CLAUDE_1->value); ?>"
							<?php echo e(setting('anthropic_bedrock_model', \App\Enums\BedrockEngine::CLAUDE_1->value) == \App\Enums\BedrockEngine::CLAUDE_1->value ? 'selected' : null); ?>

					>
						<?php echo e(\App\Enums\BedrockEngine::CLAUDE_1->label()); ?>

					</option>
					<option
							value="<?php echo e(\App\Enums\BedrockEngine::CLAUDE_2->value); ?>"
							<?php echo e(setting('anthropic_bedrock_model', \App\Enums\BedrockEngine::CLAUDE_2->value) == \App\Enums\BedrockEngine::CLAUDE_2->value ? 'selected' : null); ?>

					>
						<?php echo e(\App\Enums\BedrockEngine::CLAUDE_2->label()); ?>

					</option>
					<option
							value="<?php echo e(\App\Enums\BedrockEngine::CLAUDE_21->value); ?>"
							<?php echo e(setting('anthropic_bedrock_model', \App\Enums\BedrockEngine::CLAUDE_21->value) == \App\Enums\BedrockEngine::CLAUDE_21->value ? 'selected' : null); ?>

					>
						<?php echo e(\App\Enums\BedrockEngine::CLAUDE_21->label()); ?>

					</option>
					<option
							value="<?php echo e(\App\Enums\BedrockEngine::CLAUDE_3_HAIKU->value); ?>"
							<?php echo e(setting('anthropic_bedrock_model', \App\Enums\BedrockEngine::CLAUDE_3_HAIKU->value) == \App\Enums\BedrockEngine::CLAUDE_3_HAIKU->value ? 'selected' : null); ?>

					>
						<?php echo e(\App\Enums\BedrockEngine::CLAUDE_3_HAIKU->label()); ?>

					</option>
					<option
							value="<?php echo e(\App\Enums\BedrockEngine::CLAUDE_3_SONNET->value); ?>"
							<?php echo e(setting('anthropic_bedrock_model', \App\Enums\BedrockEngine::CLAUDE_3_SONNET->value) == \App\Enums\BedrockEngine::CLAUDE_3_SONNET->value ? 'selected' : null); ?>

					>
						<?php echo e(\App\Enums\BedrockEngine::CLAUDE_3_SONNET->label()); ?>

					</option>
				</select>
			</div>
		</div>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		<div class="col-md-12">
			<div class="mb-3">
				<label class="form-label"><?php echo e(__('Maximum Output Length')); ?></label>
				<input
						class="form-control"
						id="anthropic_max_output_length"
						type="number"
						name="anthropic_max_output_length"
						min="0"
						value="<?php echo e(setting('anthropic_max_output_length', 200)); ?>"
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
					<p>
						<?php echo e(__('In Words. OpenAI has a hard limit based on Token limits for each model. Refer to OpenAI documentation to learn more. As a recommended by OpenAI, max result length is capped at 2000 tokens')); ?>

					</p>
					<p>
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
			</div>
		</div>

	</div>

		<button
				class="btn btn-primary w-full"
				id="settings_button"
				form="settings_form"
				
		>
			<?php echo e(__('Save')); ?>

		</button>
	</div>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        function checkMaxOutputLength() {
            var maxOutputLength = document.getElementById("anthropic_max_output_length").value;
            var msg = "<?php echo e(__('The maximum output length is set above 2000. Are you sure you want to continue?')); ?>";
            if (maxOutputLength > 2000) {
                var confirmation = confirm(msg);
                if (!confirmation) {
                    event.preventDefault();
                }
            }
        }
    </script>

    <script src="<?php echo e(custom_theme_url('/assets/js/panel/settings.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('/assets/libs/select2/select2.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('panel.layout.settings', ['layout' => 'wide'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/admin/settings/anthropic.blade.php ENDPATH**/ ?>