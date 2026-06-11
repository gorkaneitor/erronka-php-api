<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Albisteen administrazio gunea</title>
</head>

<body>
    <h1>Albisteen administrazio gunea</h1>
    <p>Albisteak</p>
    <?php
    for ($i = 0; $i < count($albisteak); $i++) { ?>
        <ul>
            <li>
                <?php echo $albisteak[$i]->getIzenburua() ?>
                [<a href="albistea_aldatu/?id=<?php echo $albisteak[$i]->getId() ?>">Aldatu</a>]
                [<a href="albistea_ezabatu/?id=<?php echo $albisteak[$i]->getId() ?>">ezabatu</a>]
            </li>
        </ul>
    <?php } ?>

    <form action="albiste_berria" method="post">
        <p><input type="submit" value="Albiste Berria"></p>
    </form>
    <p><a href="irten.php">Sesiotik irten</a></p>
</body>

</html>