<?php echo $translator->trans('flarum-suspend.email.suspended.body', [
'{recipient_display_name}' => $user->display_name,
'{suspension_message}' => $blueprint->user->suspend_message ?? $translator->trans('flarum-suspend.email.no_reason_given'),
]); ?>

<?php /**PATH /home/freeper1/public_html/vendor/flarum/suspend/views/emails/suspended.blade.php ENDPATH**/ ?>