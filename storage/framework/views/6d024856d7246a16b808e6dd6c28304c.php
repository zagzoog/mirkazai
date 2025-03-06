<script src="<?php echo e(custom_theme_url('/assets/libs/fslightbox/fslightbox.js')); ?>"></script>

<script>
    var chatid = <?php echo json_encode($list, 15, 512) ?>[0]?.id;
    $(`#chat_${chatid}`).addClass('active').siblings().removeClass('active');
    const guest_id = document.getElementById("guest_id")?.value;
    const guest_search = document.getElementById("guest_search")?.value;
    const guest_search_id = document.getElementById("guest_search_id")?.value;
    const guest_event_id = document.getElementById("guest_event_id")?.value;
    const guest_look_id = document.getElementById("guest_look_id")?.value;
    const guest_product_id = document.getElementById("guest_product_id")?.value;
    const stream_type = '<?php echo $settings_two->openai_default_stream_server; ?>';
    const category = <?php echo json_encode($category, 15, 512) ?>;
    const openai_model = '<?php echo $setting->openai_default_model; ?>';
    const prompt_prefix = document.getElementById("prompt_prefix")?.value;

    let messages = [];
    let training = [];

    <?php if($chat_completions != null): ?>
        training = <?php echo json_encode($chat_completions, 15, 512) ?>;
    <?php endif; ?>

    messages.push({
        role: "assistant",
        content: prompt_prefix
    });

    <?php if($lastThreeMessage != null): ?>
            <?php $__currentLoopData = $lastThreeMessage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        message = {
        role: "user",
        content: <?php echo json_encode($entry->input, 15, 512) ?>
    };
    messages.push(message);
    message = {
        role: "assistant",
        content: <?php echo json_encode($entry->output, 15, 512) ?>
    };
    messages.push(message);
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</script>
<script src="<?php echo e(custom_theme_url('/assets/js/panel/openai_chat.js?v=' . time())); ?>"></script>
<?php if(count($list) == 0 && $category->slug != 'ai_pdf'): ?>
    <script>
        window.addEventListener("load", (event) => {
            return startNewChat(<?php echo e($category->id); ?>, '<?php echo e(LaravelLocalization::getCurrentLocale()); ?>');
        });
    </script>
<?php endif; ?>

<script>
    function getProductByBrand(brand_id) {
        var brand_id = brand_id;
        var product_element = $('#brand_voice_prod');
        if (brand_id == '') {
            product_element.empty();
            product_element.append('<option value="">Select Product</option>');
        } else {
            $.ajax({
                url: '/dashboard/user/brand/get-products/' + brand_id,
                type: 'get',
                success: function (response) {
                    product_element.empty();
                    if (response.length == 0) {
                        product_element.append('<option value="">Select Product</option>');
                    } else {
                        $.each(response, function (index, value) {
                            product_element.append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                }
            });
        }
    }

    function setBrandVoice() {
        toastr.success('Brand voice selected');
        $('#brandVoiceModal').modal('hide');
    }
</script>

<?php echo $__env->first(['chat-share::share-script-include', 'panel.user.openai_chat.includes.share-script-include', 'vendor.empty'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/user/openai_chat/components/chat_js.blade.php ENDPATH**/ ?>