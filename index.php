<?php
$errores = [];

$nombre = "";
$correo = "";
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nombre"])) {
        $errores[] = "Por favor ingresa un nombre.";
    } else {
        $nombre = htmlspecialchars($_POST["nombre"]);
    }

    if (empty($_POST["correo"])) {
        $errores[] = "Por favor ingresa un correo.";
    } else {
        $correo = htmlspecialchars($_POST["correo"]);
    }

    if (empty($_POST["mensaje"])) {
        $errores[] = "Por favor ingresa el mensaje.";
    } else {
        $mensaje = htmlspecialchars($_POST["mensaje"]);
    }

    if (empty($errores)) {
        // Aquí iría el envío de correo (mail)
        // mail($correo, "Mensaje de contacto", $mensaje);
        echo "<script>alert('Formulario enviado correctamente');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de contacto</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f2f2f2;
        }
        .contenedor{
            width:400px;
            margin:60px auto;
            background:#fff;
            padding:25px;
            border-radius:5px;
            box-shadow:0 0 10px rgba(0,0,0,.1);
        }
        input, textarea{
            width:100%;
            padding:12px;
            margin-bottom:15px;
            border:1px solid #6c8cff;
            border-radius:4px;
            font-size:14px;
        }
        textarea{
            height:120px;
            resize:vertical;
        }
        .errores{
            background:#f8d7da;
            color:#842029;
            padding:10px;
            margin-bottom:15px;
            border-radius:4px;
            border:1px solid #f5c2c7;
        }
        button{
            background:#ff6a2a;
            color:#fff;
            border:none;
            padding:12px 18px;
            cursor:pointer;
            border-radius:4px;
            float:right;
        }
        button:hover{
            background:#e85a1f;
        }
    </style>
</head>
<body>

<div class="contenedor">

    <form method="POST">

        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>">

        <input type="email" name="correo" placeholder="Correo" value="<?php echo $correo; ?>">

        <textarea name="mensaje" placeholder="Mensaje"><?php echo $mensaje; ?></textarea>

        <?php if (!empty($errores)): ?>
            <div class="errores">
                <?php foreach ($errores as $error): ?>
                    <?php echo $error . "<br>"; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <button type="submit">Enviar Correo</button>

        <div style="clear:both;"></div>
    </form>

</div>

</body>
</html>
