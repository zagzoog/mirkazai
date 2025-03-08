<?php
	use App\Enums\Plan\PlanType;
	use App\Enums\Plan\FrequencyEnum;
?>

<div class="w-full space-y-7">

	<div class="row gap-y-7">
		<div class="col-12">
			<?php if (isset($component)) { $__componentOriginal4112aa7b4e8fd49be7872da2b81ccc8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4112aa7b4e8fd49be7872da2b81ccc8b = $attributes; } ?>
<?php $component = App\View\Components\FormStep::resolve(['step' => '1','label' => ''.e(__('Global Settings')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-step'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormStep::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-0']); ?>
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
		</div>
		<div class="col-12 col-sm-6">
			<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['label' => ''.e(__('Plan Name')).'','tooltip' => ''.e(__('Plan name')).'','error' => 'plan.name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text','data' => ['wire:model' => 'plan.name','placeholder' => ''.e(__('Plan name')).'','required' => true,'maxlength' => '190','size' => 'lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'plan.name','placeholder' => ''.e(__('Plan name')).'','required' => true,'maxlength' => '190','size' => 'lg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2)): ?>
<?php $attributes = $__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2; ?>
<?php unset($__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2)): ?>
<?php $component = $__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2; ?>
<?php unset($__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2); ?>
<?php endif; ?>
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
		</div>

		<div class="col-12 col-sm-6">
			<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['label' => ''.e(__('Plan Description')).'','tooltip' => ''.e(__('Plan description')).'','error' => 'plan.description'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text','data' => ['class:container' => 'w-full mt-4','wire:model' => 'plan.description','placeholder' => ''.e(__('Plan description')).'','size' => 'lg','maxlength' => '15000','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'w-full mt-4','wire:model' => 'plan.description','placeholder' => ''.e(__('Plan description')).'','size' => 'lg','maxlength' => '15000','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2)): ?>
<?php $attributes = $__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2; ?>
<?php unset($__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2)): ?>
<?php $component = $__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2; ?>
<?php unset($__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2); ?>
<?php endif; ?>
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
		</div>

		<div class="col-12 col-sm-6">
			<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['label' => ''.e(__('Plan Features')).'','error' => 'plan.features'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginalcd97a59301ba78d56b3ed60dd41409ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd97a59301ba78d56b3ed60dd41409ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.textarea','data' => ['class:container' => 'w-full mt-4','wire:model' => 'plan.features','cols' => '30','rows' => '10','size' => 'lg','label' => ''.e(__('Plan Features')).'','placeholder' => ''.e(__('Separate with comma')).'','required' => true,'maxlength' => '15000']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'w-full mt-4','wire:model' => 'plan.features','cols' => '30','rows' => '10','size' => 'lg','label' => ''.e(__('Plan Features')).'','placeholder' => ''.e(__('Separate with comma')).'','required' => true,'maxlength' => '15000']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd97a59301ba78d56b3ed60dd41409ab)): ?>
<?php $attributes = $__attributesOriginalcd97a59301ba78d56b3ed60dd41409ab; ?>
<?php unset($__attributesOriginalcd97a59301ba78d56b3ed60dd41409ab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd97a59301ba78d56b3ed60dd41409ab)): ?>
<?php $component = $__componentOriginalcd97a59301ba78d56b3ed60dd41409ab; ?>
<?php unset($__componentOriginalcd97a59301ba78d56b3ed60dd41409ab); ?>
<?php endif; ?>
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
		</div>

		<div class="col-12 col-sm-6 space-y-3">
			<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['label' => ''.e(__('Default ai model')).'','error' => 'plan.default_ai_model'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.select','data' => ['class:container' => 'w-full mt-4','wire:model' => 'plan.default_ai_model','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'w-full mt-4','wire:model' => 'plan.default_ai_model','required' => true]); ?>
					<option value=""><?php echo e(__('Select Default AI Model')); ?></option>
					<!--[if BLOCK]><![endif]--><?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aiModel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($aiModel->key->value); ?>">
							<?php echo e($aiModel->key->value); ?>

						</option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $attributes = $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $component = $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
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

			<div>
				<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['label' => ''.e(__('Template Access')).'','tooltip' => ''.e(__('Template Access')).'','error' => 'plan.plan_type'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					<?php if (isset($component)) { $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.select','data' => ['wire:model' => 'plan.plan_type','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'plan.plan_type','required' => true]); ?>
						<option value=""><?php echo e(__('Select Plan Type')); ?></option>
						<!--[if BLOCK]><![endif]--><?php $__currentLoopData = PlanType::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($key->value); ?>"><?php echo e(__($key->label())); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
					 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $attributes = $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $component = $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
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
			</div>

			<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['noGroupLabel' => true,'error' => 'plan.is_featured'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginal43da204543437953b216481011f1ac88 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43da204543437953b216481011f1ac88 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.checkbox','data' => ['class:container' => 'w-full mt-4','wire:model' => 'plan.is_featured','label' => ''.e(__('Featured Plan')).'','tooltip' => ''.e(__('Featured Plan')).'','switcher' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'w-full mt-4','wire:model' => 'plan.is_featured','label' => ''.e(__('Featured Plan')).'','tooltip' => ''.e(__('Featured Plan')).'','switcher' => true]); ?>
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

			<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['noGroupLabel' => true,'error' => 'plan.active'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginal43da204543437953b216481011f1ac88 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43da204543437953b216481011f1ac88 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.checkbox','data' => ['class:container' => 'w-full mt-4','wire:model' => 'plan.active','label' => ''.e(__('Active')).'','tooltip' => ''.e(__('Plan status')).'','switcher' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'w-full mt-4','wire:model' => 'plan.active','label' => ''.e(__('Active')).'','tooltip' => ''.e(__('Plan status')).'','switcher' => true]); ?>
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
		</div>
	</div>

	<div class="row gap-y-7">
		<div class="col-12">
			<?php if (isset($component)) { $__componentOriginal4112aa7b4e8fd49be7872da2b81ccc8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4112aa7b4e8fd49be7872da2b81ccc8b = $attributes; } ?>
<?php $component = App\View\Components\FormStep::resolve(['step' => '2','label' => ''.e(__('Pricing')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-step'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormStep::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-0']); ?>
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
		</div>
		<div class="col-12 col-sm-6">
			<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['label' => ''.e(__('Price')).'','tooltip' => ''.e(__('Price')).'','error' => 'plan.price'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginal6996f935bbd415d62a56627050a53e38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6996f935bbd415d62a56627050a53e38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.stepper','data' => ['wire:model' => 'plan.price','type' => 'number','step' => '1','placeholder' => ''.e(__('Price')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.stepper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'plan.price','type' => 'number','step' => '1','placeholder' => ''.e(__('Price')).'']); ?>
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
				<?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5e767ad160784309dfcad41e788743b = $attributes; } ?>
<?php $component = App\View\Components\Alert::resolve(['variant' => 'danger'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-1']); ?>
					<p>
						<?php echo app('translator')->get('Price is a sensitive field. Changing the price will cancel the existing subscriptions. Please be careful.'); ?>
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
<?php if (isset($__attributesOriginal115fead9001cb250833bb983c7be3f11)): ?>
<?php $attributes = $__attributesOriginal115fead9001cb250833bb983c7be3f11; ?>
<?php unset($__attributesOriginal115fead9001cb250833bb983c7be3f11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal115fead9001cb250833bb983c7be3f11)): ?>
<?php $component = $__componentOriginal115fead9001cb250833bb983c7be3f11; ?>
<?php unset($__componentOriginal115fead9001cb250833bb983c7be3f11); ?>
<?php endif; ?>
		</div>
		<div class="col-12 col-sm-6">
			<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['label' => ''.e(__('Renewal Type')).'','tooltip' => ''.e(__('Renewal type of a plan, it could be monthly, yearly etc')).'','error' => 'plan.frequency'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.select','data' => ['class:container' => 'w-full ','class' => 'border-2 border-red-400','wire:model' => 'plan.frequency','required' => true,'size' => 'lg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'w-full ','class' => 'border-2 border-red-400','wire:model' => 'plan.frequency','required' => true,'size' => 'lg']); ?>
					<option value=""><?php echo e(__('Select Frequency')); ?></option>

					<!--[if BLOCK]><![endif]--><?php $__currentLoopData = FrequencyEnum::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($key->value); ?>"><?php echo e(__($key->label())); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
				 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $attributes = $__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__attributesOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36)): ?>
<?php $component = $__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36; ?>
<?php unset($__componentOriginal8cee41e4af1fe2df52d1d5acd06eed36); ?>
<?php endif; ?>
				<?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5e767ad160784309dfcad41e788743b = $attributes; } ?>
<?php $component = App\View\Components\Alert::resolve(['variant' => 'danger'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-1']); ?>
					<p>
						<?php echo app('translator')->get('Renewal Type is a sensitive field. Changing the Renewal Type will cancel the existing subscriptions. Please be careful.'); ?>
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
<?php if (isset($__attributesOriginal115fead9001cb250833bb983c7be3f11)): ?>
<?php $attributes = $__attributesOriginal115fead9001cb250833bb983c7be3f11; ?>
<?php unset($__attributesOriginal115fead9001cb250833bb983c7be3f11); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal115fead9001cb250833bb983c7be3f11)): ?>
<?php $component = $__componentOriginal115fead9001cb250833bb983c7be3f11; ?>
<?php unset($__componentOriginal115fead9001cb250833bb983c7be3f11); ?>
<?php endif; ?>
		</div>

		<div
			class="col-12 col-sm-6 space-y-5"
			x-data="{ isTeamPlan: <?php echo e($plan?->is_team_plan ? 'true' : 'false'); ?> }"
		>
			<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['noGroupLabel' => true,'error' => 'plan.is_team_plan'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginal43da204543437953b216481011f1ac88 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43da204543437953b216481011f1ac88 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.checkbox','data' => ['class:container' => 'mb-4','wire:model' => 'plan.is_team_plan','label' => ''.e(__('Enable Team Plan')).'','tooltip' => ''.e(__('Enable Team Plan')).'','size' => 'lg','xModel' => 'isTeamPlan','switcher' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'mb-4','wire:model' => 'plan.is_team_plan','label' => ''.e(__('Enable Team Plan')).'','tooltip' => ''.e(__('Enable Team Plan')).'','size' => 'lg','x-model' => 'isTeamPlan','switcher' => true]); ?>
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

			<div
				x-show="isTeamPlan"
				x-cloak
			>
				<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['label' => ''.e(__('Number of Seats')).'','tooltip' => ''.e(__('Number of Seats')).'','error' => 'plan.plan_allow_seat'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					<?php if (isset($component)) { $__componentOriginal6996f935bbd415d62a56627050a53e38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6996f935bbd415d62a56627050a53e38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.stepper','data' => ['wire:model' => 'plan.plan_allow_seat','step' => '1','required' => true,'min' => '0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.stepper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'plan.plan_allow_seat','step' => '1','required' => true,'min' => '0']); ?>
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

			</div>
		</div>
		<div
			class="col-12 col-sm-6 space-y-5"
			x-data="{ isTrial: <?php echo e((int) $plan?->trial_days > 0 ? 'true' : 'false'); ?> }"
		>
			<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['noGroupLabel' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginal43da204543437953b216481011f1ac88 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43da204543437953b216481011f1ac88 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.checkbox','data' => ['class:container' => 'mb-4','label' => ''.e(__('Trial')).'','switcher' => true,'xModel' => 'isTrial','checked' => ''.e((int) $plan?->trial_days > 0).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'mb-4','label' => ''.e(__('Trial')).'','switcher' => true,'x-model' => 'isTrial','checked' => ''.e((int) $plan?->trial_days > 0).'']); ?>
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
			<div
				id="countField"
				x-show="isTrial"
				x-cloak
			>
				<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['label' => ''.e(__('Trial days')).'','tooltip' => ''.e(__('Trial days')).'','error' => 'plan.trial_days'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
					<?php if (isset($component)) { $__componentOriginal6996f935bbd415d62a56627050a53e38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6996f935bbd415d62a56627050a53e38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.stepper','data' => ['wire:model' => 'plan.trial_days','step' => '1','size' => 'lg','min' => '0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.stepper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'plan.trial_days','step' => '1','size' => 'lg','min' => '0']); ?>
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

            </div>
        </div>

		<div class="col-12 col-sm-6 space-y-5">
			<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['noGroupLabel' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginal43da204543437953b216481011f1ac88 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43da204543437953b216481011f1ac88 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.checkbox','data' => ['class:container' => 'mb-4','wire:model' => 'plan.reset_credits_on_renewal','label' => ''.e(__('Reset Credits on Renewal')).'','tooltip' => ''.e(__('When enabled, the user credits will be reset to the plan credits on renewal. If disabled, the user credits will be carried over to the next renewal.')).'','switcher' => true,'checked' => ''.e($plan?->reset_credits_on_renewal).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'mb-4','wire:model' => 'plan.reset_credits_on_renewal','label' => ''.e(__('Reset Credits on Renewal')).'','tooltip' => ''.e(__('When enabled, the user credits will be reset to the plan credits on renewal. If disabled, the user credits will be carried over to the next renewal.')).'','switcher' => true,'checked' => ''.e($plan?->reset_credits_on_renewal).'']); ?>
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
		</div>
    </div>

	<div class="row gap-y-7">
		<div class="col-12">
			<?php if (isset($component)) { $__componentOriginal4112aa7b4e8fd49be7872da2b81ccc8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4112aa7b4e8fd49be7872da2b81ccc8b = $attributes; } ?>
<?php $component = App\View\Components\FormStep::resolve(['step' => '3','label' => ''.e(__('Users API Key Option')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-step'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormStep::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-0']); ?>
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
			<div class="form-label mt-5">
				<?php echo e(__('Enabling this feature in a plan will require users to provide their own API keys instead of using the admin API key for continued functionality.')); ?>

			</div>
			<div
				class="col-12 col-sm-6 space-y-5"
			>
				<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['noGroupLabel' => true,'error' => 'plan.user_api'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'mb-4']); ?>
					<?php if (isset($component)) { $__componentOriginal43da204543437953b216481011f1ac88 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43da204543437953b216481011f1ac88 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.checkbox','data' => ['class:container' => 'w-full mt-4','wire:model' => 'plan.user_api','label' => ''.e(__('User API Key')).'','tooltip' => ''.e(__('User API Key')).'','switcher' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'w-full mt-4','wire:model' => 'plan.user_api','label' => ''.e(__('User API Key')).'','tooltip' => ''.e(__('User API Key')).'','switcher' => true]); ?>
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
			</div>
		</div>
	</div>

	<!-- Hidden Plan-->

	<div class="row gap-y-7">
		<div class="col-12">
			<?php if (isset($component)) { $__componentOriginal4112aa7b4e8fd49be7872da2b81ccc8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4112aa7b4e8fd49be7872da2b81ccc8b = $attributes; } ?>
<?php $component = App\View\Components\FormStep::resolve(['step' => '3','label' => ''.e(__('Private Configuration')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-step'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormStep::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-0']); ?>
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
		</div>
		<div
			class="col-12 col-sm-12 space-y-5"
			x-data="{ isHiddenPlan: <?php echo e($plan?->hidden ? 'true' : 'false'); ?> }"
		>
			<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['noGroupLabel' => true,'error' => 'plan.hidden'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
				<?php if (isset($component)) { $__componentOriginal43da204543437953b216481011f1ac88 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43da204543437953b216481011f1ac88 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.checkbox','data' => ['class:container' => 'mb-4','wire:model' => 'plan.hidden','label' => ''.e(__('Private Plan')).'','tooltip' => ''.e(__('Private Plan')).'','size' => 'lg','xModel' => 'isHiddenPlan','switcher' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'mb-4','wire:model' => 'plan.hidden','label' => ''.e(__('Private Plan')).'','tooltip' => ''.e(__('Private Plan')).'','size' => 'lg','x-model' => 'isHiddenPlan','switcher' => true]); ?>
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

			<div
				x-show="isHiddenPlan"
				x-cloak
			>
				<div class="row">
					<div class="col-12 col-sm-6">
						<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['label' => ''.e(__('Max Subscriber')).'','tooltip' => ''.e(__('Maximum number of subscribers for the plan. If you want it to be unlimited, select -1.')).'','error' => 'plan.max_subscribe'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
							<?php if (isset($component)) { $__componentOriginal6996f935bbd415d62a56627050a53e38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6996f935bbd415d62a56627050a53e38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.stepper','data' => ['wire:model' => 'plan.max_subscribe','type' => 'number','step' => '1','min' => '-1','placeholder' => ''.e(__('Max Subscriber')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.stepper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'plan.max_subscribe','type' => 'number','step' => '1','min' => '-1','placeholder' => ''.e(__('Max Subscriber')).'']); ?>
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
					</div>
					<div class="col-12 col-sm-6">
						<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['label' => ''.e(__('End Date')).'','tooltip' => ''.e(__('Please enter an end date. If you want it to be unlimited, leave the date field empty.')).'','error' => 'plan.last_date'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
							<?php if (isset($component)) { $__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text','data' => ['class:container' => 'w-full mt-4','wire:model' => 'plan.last_date','size' => 'lg','type' => 'date','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'w-full mt-4','wire:model' => 'plan.last_date','size' => 'lg','type' => 'date','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2)): ?>
<?php $attributes = $__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2; ?>
<?php unset($__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2)): ?>
<?php $component = $__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2; ?>
<?php unset($__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2); ?>
<?php endif; ?>
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
					</div>
				</div>

				<div x-data="{ value: <?php if ((object) ('plan.hidden_url') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('plan.hidden_url'->value()); ?>')<?php echo e('plan.hidden_url'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('plan.hidden_url'); ?>')<?php endif; ?>, copied: false }" class="mt-4">
					<?php if (isset($component)) { $__componentOriginal115fead9001cb250833bb983c7be3f11 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal115fead9001cb250833bb983c7be3f11 = $attributes; } ?>
<?php $component = App\View\Components\Form\Group::resolve(['label' => ''.e(__('Hidden Url')).'','tooltip' => ''.e(__('A URL will be generated here after the plan is saved.')).'','error' => 'plan.hidden_url'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'relative']); ?>
						<div class="flex items-center">
							<?php if (isset($component)) { $__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text','data' => ['class:container' => 'w-full','wire:model' => 'plan.hidden_url','size' => 'lg','type' => 'text','disabled' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:container' => 'w-full','wire:model' => 'plan.hidden_url','size' => 'lg','type' => 'text','disabled' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2)): ?>
<?php $attributes = $__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2; ?>
<?php unset($__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2)): ?>
<?php $component = $__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2; ?>
<?php unset($__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2); ?>
<?php endif; ?>

							<!-- Copy Icon -->
							<button
								@click="navigator.clipboard.writeText(value).then(() => { copied = true; setTimeout(() => copied = false, 2000); })"
								class="ml-2 p-2 text-gray-500 hover:text-gray-700 focus:outline-none"
								title="Copy to clipboard"
							>
								<!-- Copy Icon (SVG) -->
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8M8 12h8M8 8h8M4 4v16c0 1.104.896 2 2 2h12a2 2 0 002-2V8l-6-6H6a2 2 0 00-2 2z"/>
								</svg>
							</button>
						</div>

						<!-- Copied Notification -->
						<span x-show="copied" x-transition class="text-green-500 text-sm mt-1 block">
            <?php echo e(__('Copied!')); ?>

        </span>
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
				</div>


			</div>
		</div>
	</div>
</div>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/admin/finance/plan/includes/step-first.blade.php ENDPATH**/ ?>