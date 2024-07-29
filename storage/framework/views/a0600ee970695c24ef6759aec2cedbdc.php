resources/views/posts/show.blade.php
<!DOCTYPE html>
<html>
<head>
    <title>Posts Pictures</title>
</head>
<body>
    <h1>Posts Pictures</h1>
    <ul>
            <li>
                <h2><?php echo e($post->content); ?></h2>
                <p><?php echo e($post->body); ?></p>
               
                <?php if($post->image_path): ?>
                  <!-- <img src="/img/img_1811_720.jpg" alt="" title=""/>  -->
                <!-- faire un migration/reseat sur BDD POST pour modifier image-path -->
                    <img src="<?php echo e(url($post->image_path)); ?>" alt="post image" title="">
                <?php endif; ?>
            </li>
        
    </ul>
  
</body>
</html> 
<?php /**PATH /app/resources/views/posts/show.blade.php ENDPATH**/ ?>