<?php $__env->startSection('title', __($openai->title)); ?>
<?php $__env->startSection('titlebar_subtitle', __($openai->description)); ?>

<?php $__env->startSection('content'); ?>
	<?php

		$view = match (true) {
			$openai->type === 'image' => 'panel.user.openai.components.generator_image',
			$openai->type === 'video' => 'panel.user.openai.components.generator_video',
			$openai->type === 'voiceover' => 'panel.user.openai.components.generator_voiceover',
			$openai->type === \App\Domains\Entity\Enums\EntityEnum::ISOLATOR->value => 'ai-voice-isolator::generator_voice_isolator',
			($openai->type === 'video-to-video' && \App\Helpers\Classes\MarketplaceHelper::isRegistered('ai-video-to-video')) => 'ai-video-to-video::component',
			default => 'panel.user.openai.components.generator_others',
		};

	?>
    <div class="py-10">
		<?php if ($__env->exists($view)) echo $__env->make($view, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        var sayAs = '';
    </script>
    <script src="<?php echo e(custom_theme_url('/assets/js/panel/openai_generator.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('/assets/libs/fslightbox/fslightbox.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('/assets/libs/wavesurfer/wavesurfer.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('/assets/libs/tinymce/tinymce.min.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('/assets/js/panel/tinymce-theme-handler.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('/assets/js/panel/voiceover.js')); ?>"></script>


    <?php echo $__env->renderWhen(($openai->type === 'voiceover' || $openai->type === \App\Domains\Entity\Enums\EntityEnum::ISOLATOR->value), 'panel.user.openai.scripts.voiceover-isolator', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

	<?php echo $__env->renderWhen(($openai->type === 'code'), 'panel.user.openai.scripts.code', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

	<?php echo $__env->renderWhen($openai->type !== 'video-to-video', 'panel.user.openai.scripts.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('panel.layout.app', ['disable_tblr' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/user/openai/generator.blade.php ENDPATH**/ ?>