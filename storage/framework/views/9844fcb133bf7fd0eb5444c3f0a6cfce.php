<?php
    use App\Domains\Entity\Enums\EntityEnum;
    $dalle_select_options = [
        'size' => [
            '256x256' => '256 x 256',
            '512x512' => '512 x 512',
            '1024x1024' => '1024 x 1024',
        ],
        'image_style' => [
            '' => 'None',
            '3d_render' => '3D Render',
            'anime' => 'Anime',
            'ballpoint_pen' => 'Ballpoint Pen Drawing',
            'bauhaus' => 'Bauhaus',
            'cartoon' => 'Cartoon',
            'clay' => 'Clay',
            'contemporary' => 'Contemporary',
            'cubism' => 'Cubism',
            'cyberpunk' => 'Cyberpunk',
            'glitchcore' => 'Glitchcore',
            'impressionism' => 'Impressionism',
            'isometric' => 'Isometric',
            'line' => 'Line Art',
            'low_poly' => 'Low Poly',
            'minimalism' => 'Minimalism',
            'modern' => 'Modern',
            'origami' => 'Origami',
            'pencil' => 'Pencil Drawing',
            'pixel' => 'Pixel',
            'pointillism' => 'Pointillism',
            'pop' => 'Pop',
            'realistic' => 'Realistic',
            'renaissance' => 'Renaissance',
            'retro' => 'Retro',
            'steampunk' => 'Steampunk',
            'sticker' => 'Sticker',
            'ukiyo' => 'Ukiyo',
            'vaporwave' => 'Vaporwave',
            'vector' => 'Vector',
            'watercolor' => 'Watercolor',
        ],
        'image_lighting' => [
            '' => 'None',
            'ambient' => 'Ambient',
            'backlight' => 'Backlight',
            'blue_hour' => 'Blue Hour',
            'cinematic' => 'Cinematic',
            'cold' => 'Cold',
            'dramatic' => 'Dramatic',
            'foggy' => 'Foggy',
            'golden_hour' => 'Golden Hour',
            'hard' => 'Hard',
            'natural' => 'Natural',
            'neon' => 'Neon',
            'studio' => 'Studio',
            'warm' => 'Warm',
        ],
        'image_mood' => [
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
        'image_number_of_images' => [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ],
        'image_quality' => [
            'standard' => 'Standard',
            'hd' => 'HD',
        ],
    ];
    if ($settings_two->dalle === EntityEnum::DALL_E_3->value) {
        $dalle_select_options['size'] = [
            '1024x1024' => '1024 x 1024',
            '1024x1792' => '1024 x 1792',
            '1792x1024' => '1792 x 1024',
        ];
        $dalle_select_options['image_number_of_images'] = [
            '1' => '1',
        ];
    }
?>

<?php if (isset($component)) { $__componentOriginala97611b31e90fc7dc431a34465dcc851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala97611b31e90fc7dc431a34465dcc851 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'size','containerClass' => 'grow','label' => ''.e(__('Image resolution')).'','type' => 'select','name' => 'size','size' => 'lg'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:label' => 'text-heading-foreground font-medium','class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
            'bg-background focus:ring-foreground/10',
            EntityEnum::DALL_E_2->value => $settings_two->dalle === EntityEnum::DALL_E_2->value,
            EntityEnum::DALL_E_3->value => $settings_two->dalle === EntityEnum::DALL_E_3->value,
        ])),'@change' => 'if ( $app_is_demo && '.e($settings_two->dalle === EntityEnum::DALL_E_3 ? 1 : 0).' && $event.target.value !== \'1024x1024\' ) {
				toastr.info(\''.e(__('This feature is disabled in Demo version.')).'\')
				return $event.target.value = \'1024x1024\';
			}']); ?>
    <?php $__currentLoopData = $dalle_select_options['size']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'image_style','label' => ''.e(__('Art Style')).'','name' => 'image_style','containerClass' => 'grow','size' => 'lg','type' => 'select'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-background focus:ring-foreground/10','class:label' => 'text-heading-foreground font-medium']); ?>
    <?php $__currentLoopData = $dalle_select_options['image_style']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'image_lighting','label' => ''.e(__('Lightning Style')).'','name' => 'image_lighting','containerClass' => 'grow','size' => 'lg','type' => 'select'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-background focus:ring-foreground/10','class:label' => 'text-heading-foreground font-medium']); ?>
    <?php $__currentLoopData = $dalle_select_options['image_lighting']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'image_mood','label' => ''.e(__('Mood')).'','name' => 'image_mood','containerClass' => 'grow','size' => 'lg','type' => 'select'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-background focus:ring-foreground/10','class:label' => 'text-heading-foreground font-medium']); ?>
    <?php $__currentLoopData = $dalle_select_options['image_mood']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'image_number_of_images','label' => ''.e(__('Number of Images')).'','name' => 'image_number_of_images','containerClass' => 'grow','size' => 'lg','type' => 'select'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:label' => 'text-heading-foreground font-medium','class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses([
            'bg-background focus:ring-foreground/10',
            EntityEnum::DALL_E_2->value => $settings_two->dalle === EntityEnum::DALL_E_2->value,
            EntityEnum::DALL_E_3->value => $settings_two->dalle === EntityEnum::DALL_E_3->value,
        ]))]); ?>
    <?php $__currentLoopData = $dalle_select_options['image_number_of_images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php $component = App\View\Components\Forms\Input::resolve(['id' => 'image_quality','label' => ''.e(__('Quality of Images')).'','name' => 'image_quality','containerClass' => 'grow','size' => 'lg','type' => 'select'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class:label' => 'text-heading-foreground font-medium','class' => 'dall-e-2 bg-background focus:ring-foreground/10']); ?>
    <?php $__currentLoopData = $dalle_select_options['image_quality']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/user/openai/components/generator_image_dalle_options.blade.php ENDPATH**/ ?>