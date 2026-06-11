<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Albisteen administrazio gunea</title>
</head>

<body>
    <h1>Albisteen administrazio gunea</h1>
    <p><a href="..">Hasiera</a> &gt;</p>
    <h2>Albistea ezabatu</h2>
    <p>Albiste hau ezabatu nahi duzu?</p>
    <table cellspacing="5" cellpadding="5" border="1">
        <tr>
            <td align="right">Izenburua:</td>
            <td><?php echo $izenburua ?></td>
        </tr>
        <tr>
            <td align="right">Laburpena:</td>
            <td><?php echo $laburpena ?></td>
        </tr>
        <tr>
            <td align="right">Xehetasunak:</td>
            <td><?php echo $xehetasunak ?></td>
        </tr>
    </table>
    <form action="index.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <p>
            <input type="submit" name="ezabatu" value="Ezabatu">
        </p>
    </form>
</body>

</html>