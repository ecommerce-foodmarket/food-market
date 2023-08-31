<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>usuario</h1>
    @foreach ($users as $user);
    <h4>{{$user['id']}}</h4>
    <p>{{$user['name']}}</p>
    <p>{{$user['email']}}</p>
    <p>{{$user['city']}}</p>
    @endforeach
</body>
</html>