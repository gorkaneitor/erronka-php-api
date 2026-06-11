<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albisteak</title>
</head>

<body>
    <h1>Albisteak</h1>
    <p><a href="."> Hasiera</a> &gt;</p>
    <h2><?php echo $albistea->getIzenburua() ?> </h2>
    <?php echo $albistea->getXehetasunak() ?>
</body>

</html>