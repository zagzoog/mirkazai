<div
    class="grid grid-cols-1 gap-4 md:grid-cols-2"
    id="lqd-prompt-list"
>
    <?php $__empty_1 = true; $__currentLoopData = $promptData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prompt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div
            class="relative w-full cursor-pointer rounded-2xl p-4 shadow-[0_2px_5px_rgba(29,39,59,0.05)] transition-all duration-300 hover:-translate-y-1 hover:shadow-lg dark:bg-foreground/[1%] lg:py-6 lg:ps-6"
            data-title="<?php echo e(str()->lower($prompt->title)); ?>"
            data-prompt="<?php echo e(str()->lower($prompt->prompt)); ?>"
            data-favorite="<?php echo e($favData->pluck('item_id')->contains($prompt->id) ? 'true' : 'false'); ?>"
            x-init
            x-show="(searchPromptStr === '' && promptFilter === 'all') || ($el.getAttribute('data-title').includes(searchPromptStr) || $el.getAttribute('data-prompt').includes(searchPromptStr)) && ( promptFilter === 'all' || (promptFilter === 'favorite' &&  $el.getAttribute('data-favorite') === 'true') )"
        >
            <div class="w-full md:pe-14">
                <h4 class="mb-3 text-lg font-semibold">
                    <?php echo e($prompt->title); ?>

                </h4>
                <p class="text-2xs font-normal">
                    <?php echo e($prompt->prompt); ?>

                </p>
            </div>
            <a
                class="absolute inset-0 rounded-2xl"
                href="#"
                @click.prevent="setPrompt($el.parentElement.getAttribute('data-prompt')); promptLibraryShow = false; focusOnPrompt()"
            >
                <span class="sr-only"><?php echo e(__('Add the template')); ?></span>
            </a>
            <?php if (isset($component)) { $__componentOriginal922563da9543e5e61c91039c444c4ae8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922563da9543e5e61c91039c444c4ae8 = $attributes; } ?>
<?php $component = App\View\Components\FavoriteButton::resolve(['id' => ''.e($prompt->id).'','isFavorite' => ''.e($favData->pluck('item_id')->contains($prompt->id)).'','updateUrl' => '/dashboard/user/openai/chat/update-prompt'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('favorite-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FavoriteButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'absolute end-4 top-3','@click' => '$el.parentElement.setAttribute(\'data-favorite\',  $el.parentElement.getAttribute(\'data-favorite\') === \'true\' ? \'false\' : \'true\')']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922563da9543e5e61c91039c444c4ae8)): ?>
<?php $attributes = $__attributesOriginal922563da9543e5e61c91039c444c4ae8; ?>
<?php unset($__attributesOriginal922563da9543e5e61c91039c444c4ae8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922563da9543e5e61c91039c444c4ae8)): ?>
<?php $component = $__componentOriginal922563da9543e5e61c91039c444c4ae8; ?>
<?php unset($__componentOriginal922563da9543e5e61c91039c444c4ae8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalf82227d2f93f8786bb359568a91aacb6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf82227d2f93f8786bb359568a91aacb6 = $attributes; } ?>
<?php $component = App\View\Components\TrashButton::resolve(['id' => ''.e($prompt->id).'','deleteUrl' => '/dashboard/user/openai/chat/delete-prompt'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('trash-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\TrashButton::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'absolute end-16 top-3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf82227d2f93f8786bb359568a91aacb6)): ?>
<?php $attributes = $__attributesOriginalf82227d2f93f8786bb359568a91aacb6; ?>
<?php unset($__attributesOriginalf82227d2f93f8786bb359568a91aacb6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf82227d2f93f8786bb359568a91aacb6)): ?>
<?php $component = $__componentOriginalf82227d2f93f8786bb359568a91aacb6; ?>
<?php unset($__componentOriginalf82227d2f93f8786bb359568a91aacb6); ?>
<?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h4><?php echo e(__('No Prompts, Please input new one')); ?></h4>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/user/openai_chat/components/prompt_library_list.blade.php ENDPATH**/ ?>