<?php
    $disable_actions = $app_is_demo && (isset($category) && ($category->slug == 'ai_vision' || $category->slug == 'ai_pdf' || $category->slug == 'ai_chat_image'));
?>

<ul class="chat-list-ul h-full overflow-y-auto text-xs">
    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li
            id="chat_<?php echo e($entry->id); ?>"
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'chat-list-item group relative border-b overflow-hidden [word-break:break-word] [&.active]:before:absolute [&.active]:before:left-0 [&.active]:before:top-[25%] [&.active]:before:h-[50%] [&.active]:before:w-[3px] [&.active]:before:bg-gradient-to-b [&.active]:before:from-primary [&.active]:before:to-transparent',
                'active' => isset($chat) && $chat->id == $entry->id,
            ]); ?>"
        >
            <div
                class="chat-list-item-trigger flex cursor-pointer gap-3 p-5 text-start text-heading-foreground hover:text-primary group-[&.edit-mode]:pointer-events-none dark:hover:text-heading-foreground"
                onclick="return openChatAreaContainer(<?php echo e($entry->id); ?>);"
                @click="mobileSidebarShow = false"
            >
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-6 shrink-0','stroke-width' => '1.5']); ?>
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
                <span class="flex flex-col">
                    <span class="chat-item-title text-xs font-medium group-[&.edit-mode]:pointer-events-auto">
                        <?php echo e(__($entry->title)); ?>

                    </span>
                    <span class="chat-item-date text-3xs opacity-40"><?php echo e($entry->updated_at->diffForHumans()); ?></span>
                    <?php if($entry->reference_url != ''): ?>
                        <a
                            class="flex underline opacity-90"
                            target="_blank"
                            title="<?php echo e($entry->reference_url); ?>"
                            onclick="event.stopPropagation();"
                            href="<?php echo e($entry->reference_url); ?>"
                        >
                            <?php echo e(__($entry->doc_name)); ?>

                        </a>
                    <?php endif; ?>
                    <?php if($entry->website_url != ''): ?>
                        <a
                            class="flex underline opacity-90"
                            target="_blank"
                            title="<?php echo e($entry->website_url); ?>"
                            onclick="event.stopPropagation();"
                            href="<?php echo e($entry->website_url); ?>"
                        >
                            <?php echo e(__($entry->website_url)); ?>

                        </a>
                    <?php endif; ?>
                </span>
            </div>
            <span
                class="chat-list-item-actions absolute end-4 top-1/2 flex -translate-y-1/2 gap-1 opacity-0 transition-opacity before:pointer-events-none before:absolute before:-inset-9 before:z-0 before:bg-[radial-gradient(closest-side,hsl(var(--background))_50%,transparent)] before:opacity-0 before:transition-all focus-within:opacity-100 group-hover:opacity-100 group-hover:before:opacity-90 group-[&.edit-mode]:opacity-100 max-md:opacity-100"
            >
                <button
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'chat-item-update-title' => !$disable_actions,
                        'flex size-7 items-center relative z-1 justify-center rounded-full border bg-background transition-all dark:bg-primary dark:text-primary-foreground dark:border-primary hover:scale-110 group-[&.edit-mode]:bg-emerald-500 group-[&.edit-mode]:border-emerald-500 group-[&.edit-mode]:text-white',
                    ]); ?>"
                    <?php if($disable_actions): ?> onclick="return toastr.info(<?php echo e(__('This feature is disabled in Demo version.')); ?>)" <?php endif; ?>
                >
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-pencil'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 group-[&.edit-mode]:hidden']); ?>
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
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 hidden group-[&.edit-mode]:block']); ?>
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
                </button>
                <button
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'chat-item-delete' => !$disable_actions,
                        'flex size-7 items-center relative z-1 justify-center rounded-full border border-red-600 bg-red-600 text-white transition-all hover:scale-110 group-[&.edit-mode]:hidden',
                    ]); ?>"
                    <?php if($disable_actions): ?> onclick="return toastr.info(<?php echo e(__('This feature is disabled in Demo version.')); ?>)" <?php endif; ?>
                >
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-x'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4']); ?>
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
                </button>
            </span>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/user/openai_chat/components/chat_sidebar_list.blade.php ENDPATH**/ ?>