<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>albisteak</title>
</head>
<body>
    <h1>albisteak</h1>
    <dl>
        <?php 
            foreach($albisteak as $albistea){ ?>
                <dt><a href="./?id=<?php echo $albistea->getId() ?>"><?php echo $albistea->getIzenburua() ?></a></dt>
                <dd><?php echo $albistea->getLaburpena()?></dd>
        <?php } ?>
    </dl>
</body>
</html>