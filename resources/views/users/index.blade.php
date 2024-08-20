<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Nos utilisateurs</h1>
    <ul>
        @foreach($users as $user)
           <li>{{$user->name}}</li>

         @endforeach
    </ul>
</body>
</html>