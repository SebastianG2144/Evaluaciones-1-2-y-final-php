<?php
$usuarios = [
    ["id" => 1, "nombre" => "Carlos", "correo" => "carlos@gmail.com"],
    ["id" => 2, "nombre" => "Diego",  "correo" => "diego@gmail.com"],
    ["id" => 3, "nombre" => "Jose",   "correo" => "jose@gmail.com"],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Usuarios</title>

    <style>
        /* ===== RESET ===== */
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background:#f5f5f5;
        }

        /* ===== CONTENEDOR ===== */
        .container{
            width:900px;
            margin:40px auto;
            background:#fff;
            padding:30px;
            border-radius:6px;
            box-shadow:0 0 10px rgba(0,0,0,.1);
        }

        /* ===== TITULOS ===== */
        h1{
            text-align:center;
            margin-bottom:30px;
        }

        h2{
            text-align:center;
            margin:40px 0 20px;
        }

        /* ===== FORMULARIO ===== */
        .form-user{
            display:flex;
            justify-content:center;
            gap:15px;
        }

        .form-user input{
            width:250px;
            padding:10px;
            border:1px solid #ccc;
            border-radius:4px;
            font-size:14px;
        }

        .form-user button{
            background:#5cb85c;
            color:#fff;
            border:none;
            padding:10px 18px;
            border-radius:4px;
            cursor:pointer;
            font-size:14px;
        }

        .form-user button:hover{
            background:#4cae4c;
        }

        /* ===== TABLA ===== */
        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        thead{
            background:#f0f0f0;
        }

        th, td{
            border:1px solid #ddd;
            padding:12px;
            text-align:center;
            font-size:14px;
        }

        /* ===== ACCIONES ===== */
        .acciones a{
            color:#0d6efd;
            text-decoration:none;
            margin:0 5px;
            font-weight:500;
        }

        .acciones a:hover{
            text-decoration:underline;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Gestión de Usuarios</h1>

    <form class="form-user" method="POST">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="email" name="correo" placeholder="Correo">
        <button type="submit">Agregar Usuario</button>
    </form>

    <h2>Lista de Usuarios</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
            <tr>
                <td><?= $u["id"] ?></td>
                <td><?= $u["nombre"] ?></td>
                <td><?= $u["correo"] ?></td>
                <td class="acciones">
                    <a href="#">Editar</a>
                    <a href="#">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

</body>
</html>
