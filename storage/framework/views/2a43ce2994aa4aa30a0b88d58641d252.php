<!-- AJAX CALLS -->
<script src="<?php echo e(custom_theme_url('/assets/libs/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(custom_theme_url('/assets/libs/toastr/toastr.min.js')); ?>"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<?php if(in_array($settings_two->chatbot_status, ['dashboard', 'both']) &&
        !activeRoute('dashboard.user.openai.chat.chat') &&
        !(route('dashboard.user.openai.generator.workbook', 'ai_vision') == url()->current()) &&
        !(route('dashboard.user.openai.generator.workbook', 'ai_chat_image') == url()->current()) &&
        !(route('dashboard.user.openai.generator.workbook', 'ai_pdf') == url()->current())): ?>
    <?php if(
        !Route::has('dashboard.user.openai.webchat.workbook') ||
            (Route::has('dashboard.user.openai.webchat.workbook') && route('dashboard.user.openai.webchat.workbook') !== url()->current())): ?>
        <script src="<?php echo e(custom_theme_url('/assets/js/panel/openai_chatbot.js')); ?>"></script>
    <?php endif; ?>
<?php endif; ?>

<script>
    var magicai_localize = {
        <?php $__currentLoopData = json_decode(file_get_contents(base_path('lang/en.json')), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $safeKey = preg_replace('/[^a-zA-Z0-9_]/', '_', strtolower($key));
                if (is_numeric(substr($safeKey, 0, 1))) {
                    $safeKey = '_' . $safeKey;
                }
            ?>
            <?php echo e($safeKey); ?>: <?php echo json_encode($value, 15, 512) ?>,
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    };
    var magicai_localize_second_part = {
        signup: <?php echo json_encode(__('Sign Up'), 15, 512) ?>,
        please_wait: <?php echo json_encode(__('Please Wait...'), 15, 512) ?>,
        sign_in: <?php echo json_encode(__('Sign In'), 15, 512) ?>,
        login_redirect: <?php echo json_encode(__('Login Successful, Redirecting...'), 512) ?>,
        register_redirect: <?php echo json_encode(__('Registration is complete. Redirecting...'), 15, 512) ?>,
        password_reset_link: <?php echo json_encode(__('Password reset link sent succesfully. Please also check your spam folder.'), 15, 512) ?>,
        password_reset_done: <?php echo json_encode(__('Password succesfully changed.'), 15, 512) ?>,
        password_reset: <?php echo json_encode(__('Reset Password'), 15, 512) ?>,
        missing_email: <?php echo json_encode(__('Please enter your email address.'), 15, 512) ?>,
        missing_password: <?php echo json_encode(__('Please enter your password.'), 15, 512) ?>,
        content_copied_to_clipboard: <?php echo json_encode(__('Content copied to clipboard.'), 15, 512) ?>,
        text_content_copied_to_clipboard: <?php echo json_encode(__('Plain text content copied to clipboard.'), 15, 512) ?>,
        md_content_copied_to_clipboard: <?php echo json_encode(__('Markdown content copied to clipboard.'), 15, 512) ?>,
        html_content_copied_to_clipboard: <?php echo json_encode(__('HTML content copied to clipboard.'), 15, 512) ?>,
        new_chat_conversation_successfully: <?php echo json_encode(__('New conversation created successfully.'), 15, 512) ?>,
        conversation_deleted_successfully: <?php echo json_encode(__('Conversation deleted successfully.'), 15, 512) ?>,
        analyze_file_begin: <?php echo json_encode(__('Analyzing uploaded file.'), 15, 512) ?>,
        analyze_file_finish: <?php echo json_encode(__('Analyzing file is done. You can start the conversation.'), 15, 512) ?>,
        please_active_magicai: <?php echo json_encode(__('Please Active The MirkazAI'), 15, 512) ?>,
        please_enter_url: <?php echo json_encode(__('Please enter the URL'), 15, 512) ?>,
        you_cannot_withdrawal: <?php echo json_encode(__('You cannot withdrawal with this amount. Please check'), 15, 512) ?>,
        error_while_sending: <?php echo json_encode(__('Error while sending information. Please contact us.'), 15, 512) ?>,
        please_fill_message: <?php echo json_encode(__('Please fill the message field'), 15, 512) ?>,
        api_connection_error: <?php echo json_encode(__('Api Connection Error. You hit the rate limites of openai requests. Please check your Openai API Key'), 15, 512) ?>,
        api_connection_error_admin: <?php echo json_encode(__('Api Connection Error. Please contact system administrator via Support Ticket. Error is: API Connection failed due to API keys'), 15, 512) ?>,
        file_size_exceed: <?php echo json_encode(__('This file exceed the limit of file upload'), 15, 512) ?>,
        something_wrong: <?php echo json_encode(__('Something went wrong. Please reload the page and try it again'), 15, 512) ?>,
        fill_all_fields: <?php echo json_encode(__('Please fill all fields in User Group Input areas'), 15, 512) ?>,
        workbook_error: <?php echo json_encode(__('Workbook Error'), 15, 512) ?>,
        settings_saved: <?php echo json_encode(__('Settings saved successfully. Redirecting...'), 15, 512) ?>,
        request_sent: <?php echo json_encode(__('Request Sent Succesfully'), 15, 512) ?>,
        invitation_sent: <?php echo json_encode(__('Invitation Sent Succesfully!'), 15, 512) ?>,
        page_saved: <?php echo json_encode(__('Page Saved Succesfully'), 15, 512) ?>,
        template_saved: <?php echo json_encode(__('Template Saved Succesfully'), 15, 512) ?>,
        saved: <?php echo json_encode(__('Saved Succesfully'), 15, 512) ?>,
        client_saved: <?php echo json_encode(__('Client Saved Succesfully. Redirecting...'), 15, 512) ?>,
        plan_saved: <?php echo json_encode(__('Plan Saved Succesfully. Redirecting...'), 15, 512) ?>,
        how_it_works_step_saved: <?php echo json_encode(__('How it Works Step Saved Succesfully. Redirecting...'), 15, 512) ?>,
        how_it_works_bottom_line_saved: <?php echo json_encode(__('How it Works Bottom Line updated successfully. Redirecting...'), 15, 512) ?>,
        addon_installed: <?php echo json_encode(__('Add-on installed succesfully.'), 15, 512) ?>,
        addon_uninstalled: <?php echo json_encode(__('Add-on uninstalled succesfully.'), 15, 512) ?>,
        status_changed: <?php echo json_encode(__('Status changed succesfully'), 15, 512) ?>,
        chat_template_saved: <?php echo json_encode(__('Chat Template Saved Succesfully'), 15, 512) ?>,
        settings_saved: <?php echo json_encode(__('Settings saved succesfully'), 15, 512) ?>,
        settings_saved_redirecting: <?php echo json_encode(__('Settings saved succesfully. Redirecting...'), 15, 512) ?>,
        faq_saved: <?php echo json_encode(__('Faq saved succesfully. Redirecting'), 15, 512) ?>,
        item_saved: <?php echo json_encode(__('Item saved succesfully. Redirecting'), 15, 512) ?>,
        support_ticket_created: <?php echo json_encode(__('Support Ticket Created Succesfully. Redirecting...'), 15, 512) ?>,
        message_sent: <?php echo json_encode(__('Message sent succesfully. Please Wait'), 15, 512) ?>,
        testimonial_saved: <?php echo json_encode(__('Testimonial Saved Succesfully. Redirecting...'), 15, 512) ?>,
        user_saved: <?php echo json_encode(__('User saved succesfully'), 15, 512) ?>,
        workbook_saved: <?php echo json_encode(__('Workbook saved succesfully'), 15, 512) ?>,
        code_copied: <?php echo json_encode(__('Code copied to clipboard'), 15, 512) ?>,
        content_copied: <?php echo json_encode(__('Content copied to clipboard'), 15, 512) ?>,
        search: <?php echo json_encode(__('Search...'), 15, 512) ?>,
        what_would_you_like_to_do: <?php echo json_encode(__('What would you like to do?'), 15, 512) ?>,
        rewrite: <?php echo json_encode(__('Rewrite'), 15, 512) ?>,
        summarize: <?php echo json_encode(__('Summarize'), 15, 512) ?>,
        make_it_longer: <?php echo json_encode(__('Make it Longer'), 15, 512) ?>,
        make_it_shorter: <?php echo json_encode(__('Make it Shorter'), 15, 512) ?>,
        improve_writing: <?php echo json_encode(__('Improve Writing'), 15, 512) ?>,
        translate_to: <?php echo json_encode(__('Translate to'), 15, 512) ?>,
        search: <?php echo json_encode(__('Search'), 15, 512) ?>,
        simplify: <?php echo json_encode(__('Simplify'), 15, 512) ?>,
        change_style_to: <?php echo json_encode(__('Change Style to'), 15, 512) ?>,
        change_tone_to: <?php echo json_encode(__('Change Tone to'), 15, 512) ?>,
        fix_grammatical_mistakes: <?php echo json_encode(__('Fix Grammatical Mistakes'), 15, 512) ?>,
    }
    Object.assign(magicai_localize, magicai_localize_second_part);
</script>

<!-- PAGES JS-->
<?php if(auth()->guard()->guest()): ?>
    <script src="<?php echo e(custom_theme_url('/assets/js/panel/login_register.js')); ?>"></script>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <script src="<?php echo e(custom_theme_url('/assets/js/tabler.min.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('/assets/js/panel/search.js')); ?>"></script>
    <script src="<?php echo e(custom_theme_url('/assets/libs/list.js/dist/list.js')); ?>"></script>
<?php endif; ?>
<?php /**PATH C:\Users\zagzo\Downloads\UniServerZ\www\resources\views/default/panel/layout/scripts.blade.php ENDPATH**/ ?>