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
                <h2>{{ $post->content }}</h2>
                <p>{{ $post->body }}</p>
               
                @if($post->image_path)
                  <!-- <img src="/img/img_1811_720.jpg" alt="" title=""/>  -->
                <!-- faire un migration/reseat sur BDD POST pour modifier image-path -->
                    <img src="{{ url($post->image_path) }}" alt="post image" title="">
                @endif
            </li>
        
    </ul>
  
</body>
</html> 
