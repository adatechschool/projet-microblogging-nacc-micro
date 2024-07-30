<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
</head>
<body>
    <h1>Nos utilisateurs</h1>
    <ul>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <li><?php echo e($user->name); ?></li>

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH /workspaces/projet-microblogging-nacc-micro/resources/views/users/index.blade.php ENDPATH**/ ?>