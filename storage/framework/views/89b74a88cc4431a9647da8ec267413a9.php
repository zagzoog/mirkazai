<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'site_name' => isset($site_name) ? $site_name : 'MirkazAI',
    'return_url' => isset($return_url) ? $return_url :  url('/'). '/activate?callback=true',
    'target' => isset($target) ? $target : '_blank',
    'text' => isset($text) ? $text : 'Activate',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'site_name' => isset($site_name) ? $site_name : 'MirkazAI',
    'return_url' => isset($return_url) ? $return_url :  url('/'). '/activate?callback=true',
    'target' => isset($target) ? $target : '_blank',
    'text' => isset($text) ? $text : 'Activate',
]); ?>
<?php foreach (array_filter(([
    'site_name' => isset($site_name) ? $site_name : 'MirkazAI',
    'return_url' => isset($return_url) ? $return_url :  url('/'). '/activate?callback=true',
    'target' => isset($target) ? $target : '_blank',
    'text' => isset($text) ? $text : 'Activate',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve(['variant' => 'shadow'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center shadow-xl shadow-black/5']); ?>
    <svg
            class="mx-auto"
            width="265"
            height="265"
            viewBox="0 0 265 265"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
    >
        <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M111.3 132.5L50.3496 193.45V214.65H71.5496L76.8496 209.35V201.4H84.7996L98.0496 188.15V180.2H106L132.5 153.7L134.023 155.224C136.077 157.277 139.456 157.277 141.51 155.224L144.822 151.911L139.522 146.611L120.972 128.061L113.022 120.111L109.71 123.424C107.656 125.477 107.656 128.856 109.71 130.91L111.233 132.434L111.3 132.5Z"
                stroke="url(#paint0_linear_393_362)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
        />
        <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M159 50.35C156.018 50.35 153.368 51.5425 151.447 53.53L106.53 98.4475C104.608 100.369 103.35 103.019 103.35 106C103.35 108.981 104.542 111.631 106.53 113.552L151.447 158.47C153.368 160.391 156.018 161.65 159 161.65C161.981 161.65 164.631 160.457 166.552 158.47L211.47 113.552C213.457 111.631 214.65 108.915 214.65 106C214.65 103.085 213.457 100.369 211.47 98.4475L166.552 53.53C164.631 51.6087 161.981 50.35 159 50.35Z"
                stroke="url(#paint1_linear_393_362)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
        />
        <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M172.251 100.7C176.623 100.7 180.201 97.1225 180.201 92.75C180.201 88.3775 176.623 84.8 172.251 84.8C167.878 84.8 164.301 88.3775 164.301 92.75C164.301 97.1225 167.878 100.7 172.251 100.7Z"
                stroke="url(#paint2_linear_393_362)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
        />
        <path
                d="M111.299 148.4L60.9492 198.75"
                stroke="url(#paint3_linear_393_362)"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
        />
        <path
                d="M132.5 50.35C87.1184 50.35 50.3496 87.1187 50.3496 132.5C50.3496 145.882 53.5296 158.47 59.2271 169.6M95.3996 205.772C106.53 211.404 119.183 214.65 132.5 214.65C177.881 214.65 214.65 177.881 214.65 132.5C214.65 130.181 214.583 127.929 214.385 125.676M139.323 50.6812C137.071 50.4825 134.818 50.4162 132.5 50.4162"
                stroke="#EDF3F8"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
        />
        <path
                d="M126.073 63.9313C91.0271 67.1775 63.5996 96.6588 63.5996 132.5C63.5996 142.173 65.5871 151.315 69.1646 159.663M105.337 195.835C113.685 199.413 122.827 201.4 132.5 201.4C168.407 201.4 197.822 173.973 201.068 138.926"
                stroke="#EDF3F8"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
        />
        <defs>
            <linearGradient
                    id="paint0_linear_393_362"
                    x1="97.5859"
                    y1="120.111"
                    x2="97.5859"
                    y2="214.65"
                    gradientUnits="userSpaceOnUse"
            >
                <stop stop-color="#69C79D" />
                <stop
                        offset="1"
                        stop-color="#7976E8"
                />
            </linearGradient>
            <linearGradient
                    id="paint1_linear_393_362"
                    x1="159"
                    y1="50.35"
                    x2="159"
                    y2="161.65"
                    gradientUnits="userSpaceOnUse"
            >
                <stop stop-color="#69C79D" />
                <stop
                        offset="1"
                        stop-color="#7976E8"
                />
            </linearGradient>
            <linearGradient
                    id="paint2_linear_393_362"
                    x1="172.251"
                    y1="84.8"
                    x2="172.251"
                    y2="100.7"
                    gradientUnits="userSpaceOnUse"
            >
                <stop stop-color="#69C79D" />
                <stop
                        offset="1"
                        stop-color="#7976E8"
                />
            </linearGradient>
            <linearGradient
                    id="paint3_linear_393_362"
                    x1="86.1242"
                    y1="148.4"
                    x2="86.1242"
                    y2="198.75"
                    gradientUnits="userSpaceOnUse"
            >
                <stop stop-color="#69C79D" />
                <stop
                        offset="1"
                        stop-color="#7976E8"
                />
            </linearGradient>
        </defs>
    </svg>
    <form
            class="mb-6"
            action="https://portal.liquid-themes.maz/license/activate"
            method="GET"
            target="<?php echo e($target); ?>"
    >
        <h2 class="mb-9 text-[36px] font-bold tracking-[-0.015em]"><?php echo e(__($text . ' your license')); ?> </h2>
        <p class="mb-4 text-[15px] leading-[1.53em] text-heading-foreground lg:mx-auto lg:w-2/3">
            <?php echo e(__('Thanks for purchashing')); ?> <?php echo e($site_name); ?>! <?php echo e(__('Please connect to')); ?> <a
                    class="underline"
                    href="https://portal.liquid-themes.maz"
            ><strong>Liquid Portal</strong></a> <?php echo e(__('to verify your purchase.')); ?>

        </p>
        <input
                type="hidden"
                name="envato_item_id"
                value="45408109"
        />
        <input
                type="hidden"
                name="theme"
                value="magicai"
        />
        <input
                type="hidden"
                name="domain"
                value="<?php echo e(url('/')); ?>"
        />
        <input
                type="hidden"
                name="return_url"
                value="<?php echo e($return_url); ?>"
        />
        <div class="mb-4 text-heading-foreground">
            <p class="mb-[0.65rem] text-[15px] font-bold"><?php echo e(__('Choose your enviroment:')); ?></p>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <div class="flex items-center justify-center gap-1 font-semibold">
                    <input
                            id="development"
                            type="radio"
                            name="register_env"
                            value="development"
                            checked
                    >
                    <label
                            class="cursor-pointer"
                            for="development"
                    ><?php echo e(__('Development')); ?></label>
                </div>
                <div class="flex items-center justify-center gap-1 font-semibold">
                    <input
                            class="cursor-pointer"
                            id="production"
                            type="radio"
                            name="register_env"
                            value="production"
                    >
                    <label
                            class="cursor-pointer"
                            for="production"
                    ><?php echo e(__('Production')); ?></label>
                </div>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale67687e3e4e61f963b25a6bcf3983629 = $attributes; } ?>
<?php $component = App\View\Components\Button::resolve(['size' => 'lg','type' => 'submit'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full '.e(isset($button) ? $button : '').'']); ?>
            <?php echo e(__('Connect to Liquid Portal')); ?>

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
    </form>
    <p class="text-center"><?php echo e(__('Having trouble?')); ?> <a
                class="font-medium underline"
                target="_blank"
                href="https://magicaidocs.liquid-themes.com/activation/"
        ><?php echo e(__('Check documentations')); ?></a></p>
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
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/vendor/installer/magicai_c4st_Act.blade.php ENDPATH**/ ?>