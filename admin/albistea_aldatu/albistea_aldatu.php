<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Albisteak</title>
</head>

<body>
    <h1>Albisteen administrazio gunea</h1>
    <p><a href="..">Hasiera</a> &gt;</p>
    <h2>Albistea aldatu</h2>
    <p><?php echo $mezua ?></p>
    <form action="index.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <p>
            <label for="izenburua">Izenburua</label>
            <input type="text" id="izenburua" name="izenburua" size="50" maxlength="255" value="<?php echo $izenburua ?>">
        </p>
        <p>
            <label for="laburpena">Laburpena</label>
            <textarea id="laburpena" name="laburpena"><?php echo $laburpena ?></textarea>
        </p>
        <p>
            <label for="xehetasunak">Xehetasunak</label>
            <textarea id="xehetasunak" name="xehetasunak"><?php echo $xehetasunak ?></textarea>
        </p>
        <p>
            <input type="submit" name="gorde" value="Gorde">
        </p>
    </form>
</body>

</html>