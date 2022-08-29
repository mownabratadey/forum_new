<div style="text-align: center;">
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="kqYspU2a"></script>
    <div class="fb-like" data-href="https://freeperfectmoney.com" data-width="320" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
</div>
<div id="flarum-loading" style="display: none">
    <?php echo e($translator->trans('core.views.content.loading_text')); ?>

</div>

<noscript>
    <div class="Alert">
        <div class="container">
            <?php echo e($translator->trans('core.views.content.javascript_disabled_message')); ?>

        </div>
    </div>
</noscript>

<div id="flarum-loading-error" style="display: none">
    <div class="Alert">
        <div class="container">
            <?php echo e($translator->trans('core.views.content.load_error_message')); ?>

        </div>
    </div>
</div>

<noscript id="flarum-content">
    <?php echo $content; ?>

</noscript>
<?php /**PATH D:\xampp7\htdocs\forum1\forum_new\vendor\flarum\core\src\Frontend/../../views/frontend/content.blade.php ENDPATH**/ ?>