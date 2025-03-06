<!DOCTYPE html>
<html
    class="max-sm:overflow-x-hidden"
    lang="<?php echo e(LaravelLocalization::getCurrentLocale()); ?>"
    dir="<?php echo e(LaravelLocalization::getCurrentLocaleDirection()); ?>"
>

<head>
    <meta charset="UTF-8" />
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <meta
        name="description"
        content="<?php echo e(getMetaDesc($setting, $settings_two)); ?>"
    >
    <?php if(isset($setting->meta_keywords)): ?>
        <meta
            name="keywords"
            content="<?php echo e($setting->meta_keywords); ?>"
        >
    <?php endif; ?>
    <link
        rel="icon"
        href="<?php echo e(custom_theme_url($setting->favicon_path ?? 'assets/favicon.ico')); ?>"
    >
    <title><?php echo e(getMetaTitle($setting, $settings_two)); ?></title>

    <?php if(filled($google_fonts_string = \App\Helpers\Classes\ThemeHelper::googleFontsString())): ?>
        <link
            rel="preconnect"
            href="https://fonts.googleapis.com"
        >
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin
        >
        <link
            href="https://fonts.googleapis.com/css2?<?php echo e($google_fonts_string); ?>&display=swap"
            rel="stylesheet"
        >
    <?php endif; ?>

    <link
        rel="stylesheet"
        href="<?php echo e(custom_theme_url('assets/css/frontend/flickity.min.css')); ?>"
    >
    <link
        href="<?php echo e(custom_theme_url('assets/libs/toastr/toastr.min.css')); ?>"
        rel="stylesheet"
    />

    <?php
        $link = 'resources/views/' . get_theme() . '/scss/landing-page.scss';
    ?>
    <?php echo app('Illuminate\Foundation\Vite')($link); ?>

    <?php if($setting->frontend_custom_css != null): ?>
        <link
            rel="stylesheet"
            href="<?php echo e($setting->frontend_custom_css); ?>"
        />
    <?php endif; ?>

    <?php if($setting->frontend_code_before_head != null): ?>
        <?php echo $setting->frontend_code_before_head; ?>

    <?php endif; ?>

    <script>
        window.liquid = {
            isLandingPage: true
        };
    </script>

    <style>
        .google-ads-728 {
            width: 100%;
            max-width: 728px;
            height: auto;
        }
    </style>

    <!--Google AdSense-->
    <?php echo adsense_header(); ?>

    <!--Google AdSense End-->

    
    
    
    

    <?php echo app('Illuminate\Foundation\Vite')(\App\Helpers\Classes\ThemeHelper::appJsPath()); ?>

    <?php echo $__env->yieldPushContent('css'); ?>

    <?php if(setting('additional_custom_css') != null): ?>
        <?php echo setting('additional_custom_css'); ?>

    <?php endif; ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>

<body class="group/body bg-background font-body text-foreground">
    <div
        class="pointer-events-none invisible fixed left-0 right-0 top-0 z-[99] opacity-0 transition-opacity"
        id="app-loading-indicator"
        x-data
        :class="{ 'opacity-0': !$store.appLoadingIndicator.showing, 'invisible': !$store.appLoadingIndicator.showing }"
    >
        <div class="lqd-progress relative h-[3px] w-full bg-foreground/10">
            <div class="lqd-progress-bar lqd-progress-bar-indeterminate lqd-app-loading-indicator-progress-bar absolute inset-0 bg-primary dark:bg-heading-foreground">
            </div>
        </div>
    </div>

    <?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($setting->frontend_custom_js != null): ?>
        <script src="<?php echo e($setting->frontend_custom_js); ?>"></script>
    <?php endif; ?>

    <?php if($setting->frontend_code_before_body != null): ?>
        <?php echo $setting->frontend_code_before_body; ?>

    <?php endif; ?>

    <script src="<?php echo e(custom_theme_url('assets/libs/jquery/jquery.min.js')); ?>"></script>

    <?php if(in_array($settings_two->chatbot_status, ['frontend', 'both'])): ?>
        <script src="<?php echo e(custom_theme_url('assets/js/panel/openai_chatbot.js')); ?>"></script>
    <?php endif; ?>

    <script src="<?php echo e(custom_theme_url('assets/libs/vanillajs-scrollspy.min.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('assets/libs/flickity.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('assets/js/frontend.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('assets/js/frontend/frontend-animations.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('assets/libs/vanillajs-scrollspy.min.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('assets/libs/flickity.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('assets/js/frontend/frontend-animations.js')); ?>"></script>

    <?php if($setting->gdpr_status == 1): ?>
        <script src="<?php echo e(custom_theme_url('assets/js/gdpr.js')); ?>"></script>
    <?php endif; ?>

    <script src="<?php echo e(custom_theme_url('assets/libs/fslightbox/fslightbox.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('assets/libs/toastr/toastr.min.js')); ?>"></script>

    <?php if(\Session::has('message')): ?>
        <script>
            toastr.<?php echo e(\Session::get('type')); ?>('<?php echo e(\Session::get('message')); ?>')
        </script>
    <?php endif; ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scriptConfig(); ?>


    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/layout/app.blade.php ENDPATH**/ ?>