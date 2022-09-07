<?php $__env->startSection('content'); ?>
<img style="width: 400px" src="/assets/new-stite.png">
  <p>
    <?php echo e($message); ?>

  </p>
  <h3>
    <a style="color:red" href="https://freeperfectmoney.com/faucets/bitcoin-faucet.php">
     Go to New Hourly Bitcoin Faucet
    </a>
  </h3>
  <h2>
    <a href="<?php echo e($url->to('forum')->base()); ?>">
      <?php echo e($translator->trans('core.views.error.not_found_return_link', ['forum' => $settings->get('forum_title')])); ?>

    </a>
  </h2>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('flarum.forum::layouts.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/freeper1/public_html/vendor/flarum/core/src/Forum/../../views/error/not_found.blade.php ENDPATH**/ ?>