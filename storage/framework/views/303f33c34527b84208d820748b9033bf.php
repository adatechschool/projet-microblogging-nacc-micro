<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p>
    <?php echo e($post->content); ?>

</p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /workspaces/projet-microblogging-nacc-micro/resources/views/posts/index.blade.php ENDPATH**/ ?>