<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil utilisateur</title>
</head>
<body>
<h1>Ton profil</h1>
    <ul>
            
    <li><h3><?php echo e($user->name); ?></h3></li>
    <li><h3><?php echo e($user->email); ?></h3> </li>
           
    </ul>
    <h2>À propos de toi</h2>
    <p><?php echo e($user->biography); ?></p>
</body>
</html><?php /**PATH /workspaces/projet-microblogging-nacc-micro/resources/views/users/show.blade.php ENDPATH**/ ?>