<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>albisteak</title>
</head>
<body>
    <h1>albisteak</h1>
    <p><a href="."> Hasiera</a> &gt;</p>
    <h2><?php echo $albistea ->getIzenburua() ?> </h2>
    <?php echo $albistea ->getXehetasunak() ?>

    <hr>
    <h1>Komentarioak</h1>
    <dl>
        <?php 
            foreach($komentarioak as $komentarioa){ ?>
                <dt><a href="./?id=<?php echo $komentarioa->getIdAlbistea() ?>"><?php echo $komentarioa->getIzena() ?></a></dt>
                <dd><?php echo $komentarioa->getKomentarioenTestua()?></dd>
        <?php } ?>
    </dl>
    <p>
        <a href="komentario_berria/index.php?id_albistea=<?php echo $albistea->getId(); ?>">
            Komentario Berria
        </a>
    </p>
</body>
</html>