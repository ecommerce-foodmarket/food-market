<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Listado de usuarios</h1>
    @foreach($users as $user)
       
        <h3>
            {{ $user->name }}
            
        </h3>
        <h3>
            {{ $user->email }}
            
        </h3>
        <h3>
            {{ $user->city }}
            
        </h3>


   @endforeach
   
</body>
</html>

