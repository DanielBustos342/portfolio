<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
</head>
<body>
    <form method="post" class="contact-form">
        <div class="input-control i-c-2">
            <input type="text" required placeholder="NOMBRE Y APELLIDO">
            <input type="email" required placeholder="CORREO ELECTRONICO">
        </div>
        <div class="input-control">
            <input type="text" required placeholder="ASUNTO">
        </div>
        <div class="input-control">
            <textarea name="" id="" cols="15" rows="8" placeholder="MENSAJE"></textarea>
        </div>
        <div class="submit-btn">
            <input type="submit" name="Enviar info">
        </div>
    </form>
    <?php
    include("registrar.php");
    ?>
</body>
</html>