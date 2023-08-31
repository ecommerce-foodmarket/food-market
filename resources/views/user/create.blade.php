<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Añadir nuevo usuario</h1>
    <form action="{{route('storeuser')}}"method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="name">Nombre</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Contraseña</label>
        <input type="password" name="password">
        <label for="phone">Teléfono</label>
        <input type="text" name="phone">
        <label for="address">calle</label>
        <input type="text" name="address">
        <label for="house_n">Número</label>
        <input type="number" name="house_n">
        <label for="city">Ciudad</label>
        <input type="text" name="city">
        <label for="id_rol">Rol</label>
        <input type="number" name="id_rol">
        <label for="picture">Foto</label>
        <input type="file" name="picture" id="user_picture">
        <button type="Submit">Agregar usuario</button>

    </form>

    </form>
</body>
</html>