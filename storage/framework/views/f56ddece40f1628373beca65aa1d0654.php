<?php
    use App\Domains\Entity\Enums\EntityEnum;
    $stablediffusion_select_options = [
        'style_preset' => [
            '' => 'None',
            '3d-model' => '3D Model',
            'analog-film' => 'Analog Film',
            'anime' => 'Anime',
            'cinematic' => 'Cinematic',
            'comic-book' => 'Comic Book',
            'digital-art' => 'Digital Art',
            'enhance' => 'Enhance',
            'fantasy-art' => 'Fantasy Art',
            'isometric' => 'Isometric',
            'line-art' => 'Line Art',
            'low-poly' => 'Low Poly',
            'modeling-compound' => 'Modeling Compound',
            'neon-punk' => 'Neon Punk',
            'origami' => 'Origami',
            'photographic' => 'Photographic',
            'pixel-art' => 'Pixel Art',
            'tile-texture' => 'Tile Texture',
        ],
        'image_mood_stable' => [
            '' => 'None',
            'aggressive' => 'Aggressive',
            'angry' => 'Angry',
            'boring' => 'Boring',
            'bright' => 'Bright',
            'calm' => 'Calm',
            'cheerful' => 'Cheerful',
            'chilling' => 'Chilling',
            'colorful' => 'Colorful',
            'dark' => 'Dark',
            'neutral' => 'Neutral',
        ],
        'sampler' => [
            '' => 'None',
            'DDIM' => 'DDIM',
            'DDPM' => 'DDPM',
            'K_DPMPP_2M' => 'K_DPMPP_2M',
            'K_DPM_2' => 'K_DPM_2',
            'K_DPM_2_ANCESTRAL' => 'K_DPM_2_ANCESTRAL',
            'K_EULER' => 'K_EULER',
            'K_EULER_ANCESTRAL' => 'K_EULER_ANCESTRAL',
            'K_HEUN' => 'K_HEUN',
            'K_LMS' => 'K_LMS',
        ],
        'clip_guidance_preset' => [
            '' => 'None',
            'FAST_BLUE' => 'FAST BLUE',
            'FAST_GREEN' => 'FAST GREEN',
            'SIMPLE' => 'SIMPLE',
            'SLOW' => 'SLOW',
            'SLOWER' => 'SLOWER',
            'SLOWEST' => 'SLOWEST',
        ],
        'image_resolution' => [
            '1x1'  => '1:1',
            '16x9' => '16:9',
            '21x9' => '21:9',
            '2x3'  => '2:3',
            '3x2'  => '3:2',
            '4x5'  => '4:5',
            '5x4'  => '5:4',
            '9x16' => '9:16',
            '9x21' => '9:21',
        ],
        'image_number_of_images_stable' => [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
    ];
	$engine = $settings_two->stablediffusion_default_model;
    $isV2BetaModels = EntityEnum::fromSlug($engine)->isV2BetaSdEntity();

	if ($engine == EntityEnum::STABLE_DIFFUSION_XL_1024_V_1_0->value){
		 $stablediffusion_select_options['image_resolution'] = [
			 '640x1536' => '640 x 1536',
			'768x1344' => '768 x 1344',
			'832x1216' => '832 x 1216',
			'896x1152' => '896 x 1152',
			'1024x1024' => '1024 x 1024',
			'1152x896' => '1152 x 896',
			'1216x832' => '1216 x 832',
			'1344x768' => '1344 x 768',
			'1536x640' => '1536 x 640',
        ];
	} else if (!$isV2BetaModels) {
        $stablediffusion_select_options['image_resolution'] = [
            '896x512' => '896 x 512',
            '768x512' => '768 x 512',
            '512x512' => '512 x 512',
            '512x768' => '512 x 768',
            '512x896' => '512 x 896',
        ];
    }


?>

<div class="lqd-input-group mt-4 flex flex-wrap justify-between gap-4">
    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'style_preset','label' => ''.e(__('Image Style')).'','name' => 'style_preset','containerClass' => 'grow','size' => 'lg','type' => 'select'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-background focus:ring-foreground/10','class:label' => 'text-heading-foreground font-medium']); ?>
        <?php $__currentLoopData = $stablediffusion_select_options['style_preset']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                value="<?php echo e($value); ?>"
                <?php if($loop->first): echo 'selected'; endif; ?>
            >
                <?php echo e(__($label)); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'image_mood_stable','label' => ''.e(__('Mood')).'','name' => 'image_mood_stable','containerClass' => 'grow','size' => 'lg','type' => 'select'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-background focus:ring-foreground/10','class:label' => 'text-heading-foreground font-medium']); ?>
        <?php $__currentLoopData = $stablediffusion_select_options['image_mood_stable']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                value="<?php echo e($value); ?>"
                <?php if($loop->first): echo 'selected'; endif; ?>
            >
                <?php echo e(__($label)); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'sampler','label' => ''.e(__('Image Diffusion Samples')).'','name' => 'sampler','containerClass' => 'grow','size' => 'lg','type' => 'select'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-background focus:ring-foreground/10','class:label' => 'text-heading-foreground font-medium']); ?>
        <?php $__currentLoopData = $stablediffusion_select_options['sampler']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                value="<?php echo e($value); ?>"
                <?php if($loop->first): echo 'selected'; endif; ?>
            >
                <?php echo e(__($label)); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'clip_guidance_preset','label' => ''.e(__('Clip Guidance Preset')).'','name' => 'clip_guidance_preset','containerClass' => 'grow','size' => 'lg','type' => 'select'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-background focus:ring-foreground/10','class:label' => 'text-heading-foreground font-medium']); ?>
        <?php $__currentLoopData = $stablediffusion_select_options['clip_guidance_preset']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                value="<?php echo e($value); ?>"
                <?php if($loop->first): echo 'selected'; endif; ?>
            >
                <?php echo e(__($label)); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<div class="lqd-input-group flex flex-wrap justify-between gap-3">
    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'image_resolution','label' => ''.e(__('Image Resolution')).'','name' => 'image_resolution','containerClass' => 'grow','size' => 'lg','type' => 'select'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-background focus:ring-foreground/10','class:label' => 'text-heading-foreground font-medium']); ?>
        <?php $__currentLoopData = $stablediffusion_select_options['image_resolution']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                value="<?php echo e($value); ?>"
                <?php if($loop->first): echo 'selected'; endif; ?>
            >
                <?php echo e(__($label)); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'image_number_of_images_stable','label' => ''.e(__('Number of Images')).'','name' => 'image_number_of_images_stable','containerClass' => 'grow','size' => 'lg','type' => 'select'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-background focus:ring-foreground/10','class:label' => 'text-heading-foreground font-medium','disabled' => true]); ?>
        <?php $__currentLoopData = $stablediffusion_select_options['image_number_of_images_stable']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                value="<?php echo e($value); ?>"
                <?php if($loop->first): echo 'selected'; endif; ?>
            >
                <?php echo e(__($label)); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    <?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'negative_prompt','size' => 'lg','containerClass' => 'basis-full sm:basis-1/2','label' => ''.e(__('Negative Prompts')).'','name' => 'negative_prompt'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-background focus:ring-foreground/10','class:label' => 'text-heading-foreground font-medium']); ?>
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
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/user/openai/components/generator_image_stablediffusion_options.blade.php ENDPATH**/ ?>