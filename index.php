<?php

require('klaseak/com/leartik/daw24gone/albisteak/albistea.php');
require('klaseak/com/leartik/daw24gone/albisteak/albistea_db.php');

use com\leartik\daw24gone\albisteak\AlbisteaDB;



if (isset($_GET['id'])) {
    $albistea = AlbisteaDB::selectAlbistea($_GET['id']);
    if (!$albistea) {
        header('Location: id_baliogabea.php');
        exit();
    }

    include('albistea_erakutsi.php');
} else {
    $albisteak = AlbisteaDB::selectAlbisteak();
    include('albisteak_erakutsi.php');
}
