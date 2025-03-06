<?php
    $test_commands = ['Explain an Image', 'Summarize a book for research', 'Translate a book'];
    $disable_actions = $app_is_demo && (isset($category) && ($category->slug == 'ai_vision' || $category->slug == 'ai_pdf' || $category->slug == 'ai_chat_image'));
?>

<div
    class="conversation-area flex h-[inherit] grow flex-col justify-between overflow-y-auto rounded-b-[inherit] rounded-t-[inherit] max-md:max-h-full"
    id="chat_area_to_hide"
>

    <?php if(view()->hasSection('chat_head')): ?>
        <?php echo $__env->yieldContent('chat_head'); ?>
    <?php else: ?>
        <?php echo $__env->make('panel.user.openai_chat.components.chat_head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <div class="relative flex grow flex-col">
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'chats-container text-xs p-8 max-md:p-4 overflow-x-hidden',
            'md:mb-auto md:pb-6 relative z-10' => $category->slug == 'ai_vision',
            'h-full' => $category->slug != 'ai_vision',
        ]); ?>">

            <?php if(view()->hasSection('chat_area')): ?>
                <?php echo $__env->yieldContent('chat_area'); ?>
            <?php else: ?>
                <?php echo $__env->make('panel.user.openai_chat.components.chat_area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if($category->slug == 'ai_vision' && ((isset($lastThreeMessage) && $lastThreeMessage->count() == 0) || !isset($lastThreeMessage))): ?>
                <div
                    class="flex flex-col items-center justify-center gap-y-3"
                    id="sugg"
                >
                    <div class="flex flex-wrap items-center gap-2 text-2xs font-medium leading-relaxed text-heading-foreground">
                        <?php echo e(__('Upload an image and ask me anything')); ?>

                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-chevron-down'); ?>
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
                    </div>

                    <?php $__currentLoopData = $test_commands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $command): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale67687e3e4e61f963b25a6bcf3983629 = $attributes; } ?>
<?php $component = App\View\Components\Button::resolve(['tag' => 'button','variant' => 'secondary'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'font-normal','onclick' => 'addText(\''.e(__($command)).'\');']); ?>
                            <?php echo e(__($command)); ?>

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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if($category->slug == 'ai_vision' && ((isset($lastThreeMessage) && $lastThreeMessage->count() == 0) || !isset($lastThreeMessage))): ?>
            <div
                class="relative z-10 mt-auto flex items-center justify-center px-4 pb-5 md:px-8"
                id="mainupscale_src"
                ondrop="dropHandler(event, 'upscale_src');"
                ondragover="dragOverHandler(event);"
            >
                <label
                    class="flex w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-foreground/10 bg-background px-4 py-8 transition-colors hover:bg-foreground/10"
                    for="upscale_src"
                >
                    <div class="flex flex-col items-center justify-center">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-cloud-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4 size-11','stroke-width' => '1.5']); ?>
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

                        <span class="mb-1 block text-sm font-semibold">
                            <?php echo e(__('Drop your image here or browse')); ?>

                        </span>

                        <span class="file-name mb-0 block text-2xs">
                            <?php if($category->slug != 'ai_vision' && $category->slug != 'ai_pdf'): ?>
                                <?php echo e(__('(Only jpg, png, webp will be accepted)')); ?>

                            <?php else: ?>
                                <?php echo e(__('(Only jpg, png and webp will be accepted)')); ?>

                            <?php endif; ?>
                        </span>
                    </div>
                    <input
                        class="hidden"
                        id="upscale_src"
                        type="file"
                        accept="<?php if($category->slug == 'ai_vision' || $category->slug == 'ai_pdf'): ?> .png, .jpg, .jpeg, .pdf <?php else: ?> .png, .jpg, .jpeg <?php endif; ?>"
                        onchange="handleFileSelect('upscale_src')"
                    />
                </label>
            </div>
        <?php endif; ?>
    </div>

    <?php if($category->slug == 'ai_realtime_voice_chat'): ?>
        <?php if ($__env->exists('openai-realtime-chat::chat-button', ['compact' => false, 'category_slug' => $category->slug, 'messages' => $chat->messages])) echo $__env->make('openai-realtime-chat::chat-button', ['compact' => false, 'category_slug' => $category->slug, 'messages' => $chat->messages], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(setting('realtime_voice_chat', 0)): ?>
        <div
            class="lqd-audio-vis-wrap group/audio-vis pointer-events-none invisible absolute start-0 top-0 flex h-full w-full flex-col items-center justify-between gap-y-5 overflow-hidden bg-background/10 px-5 py-28 opacity-0 backdrop-blur-lg transition-all [&.active]:visible [&.active]:opacity-100"
            data-state="idle"
        >
            <div></div>
            <div
                class="invisible relative grid w-full scale-110 place-content-center place-items-center opacity-0 blur-lg transition-all duration-300 group-[&.active]/audio-vis:visible group-[&.active]/audio-vis:scale-100 group-[&.active]/audio-vis:opacity-100 group-[&.active]/audio-vis:blur-0">
                <div class="lqd-audio-vis-circ absolute left-1/2 top-1/2 col-start-1 col-end-1 row-start-1 row-end-1 -translate-x-1/2 -translate-y-1/2">
                    <div
                        class="inline-flex size-40 animate-spin rounded-full bg-gradient-to-b from-[#C13CFF] to-[#00BFFF] opacity-50 blur-3xl [animation-duration:2s] lg:size-[200px]">
                    </div>
                </div>
                <div
                    class="lqd-audio-vis-bars col-start-1 col-end-1 row-start-1 row-end-1 flex h-8 scale-75 items-center gap-[3px] text-heading-foreground opacity-0 transition-all group-[&[data-state=playing]]/audio-vis:scale-100 group-[&[data-state=playing]]/audio-vis:opacity-100">
                    <div class="lqd-audio-vis-bar inline-flex min-h-[7px] w-[7px] origin-center rounded-full bg-current"></div>
                    <div class="lqd-audio-vis-bar inline-flex min-h-[7px] w-[7px] origin-center rounded-full bg-current"></div>
                    <div class="lqd-audio-vis-bar inline-flex min-h-[7px] w-[7px] origin-center rounded-full bg-current"></div>
                    <div class="lqd-audio-vis-bar inline-flex min-h-[7px] w-[7px] origin-center rounded-full bg-current"></div>
                    <div class="lqd-audio-vis-bar inline-flex min-h-[7px] w-[7px] origin-center rounded-full bg-current"></div>
                </div>
                <div
                    class="lqd-audio-vis-dot-wrap col-start-1 col-end-1 row-start-1 row-end-1 flex scale-75 animate-bounce items-center gap-[3px] text-heading-foreground opacity-0 transition-all group-[&[data-state=idle]]/audio-vis:scale-100 group-[&[data-state=recording]]/audio-vis:scale-100 group-[&[data-state=idle]]/audio-vis:opacity-100 group-[&[data-state=recording]]/audio-vis:opacity-100 group-[&[data-state=recording]]/audio-vis:[animation-play-state:paused]">
                    <div class="lqd-audio-vis-dot inline-flex size-4 origin-center rounded-full bg-current">
                    </div>
                </div>
                <div
                    class="lqd-audio-vis-loader active col-start-1 col-end-1 row-start-1 row-end-1 flex scale-75 items-center text-heading-foreground opacity-0 transition-all group-[&[data-state=waiting]]/audio-vis:scale-100 group-[&[data-state=waiting]]/audio-vis:opacity-100">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tabler-loader-2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-4 animate-spin']); ?>
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
                </div>
            </div>
            <?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale67687e3e4e61f963b25a6bcf3983629 = $attributes; } ?>
<?php $component = App\View\Components\Button::resolve(['variant' => 'ghost-shadow','size' => 'none'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'pointer-events-auto size-[50px] shrink-0 border border-heading-foreground/5 bg-transparent backdrop-blur-md backdrop-contrast-125 hover:bg-red-500 hover:text-white','@click.prevent' => '$dispatch(\'audio-vis\', { action: \'stop\' })','x-data' => '{}']); ?>
                <span class="sr-only">
                    <?php echo e(__('Stop')); ?>

                </span>
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
        </div>
    <?php endif; ?>

    <?php if(view()->hasSection('chat_form')): ?>
        <?php echo $__env->yieldContent('chat_form'); ?>
    <?php else: ?>
        <?php echo $__env->make('panel.user.openai_chat.components.chat_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/user/openai_chat/components/chat_area_container.blade.php ENDPATH**/ ?>