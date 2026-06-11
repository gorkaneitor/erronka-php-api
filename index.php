<?php

require('klaseak/com/leartik/daw24doca/albisteak/albistea.php');
require('klaseak/com/leartik/daw24doca/albisteak/albistea_db.php');
require('klaseak/com/leartik/daw24doca/albisteak/komentarioa.php');
require('klaseak/com/leartik/daw24doca/albisteak/komentarioa_db.php');
use com\leartik\daw24doca\albisteak\AlbisteaDB;
use com\leartik\daw24doca\albisteak\KomentarioaDB;



if(isset($_GET['id'])){
    $albistea = AlbisteaDB::selectAlbistea($_GET['id']);
    if(!$albistea){
        header('Location: id_baliogabea.php');
        exit();
    }
    $komentarioak = KomentarioaDB::selectKomentarioak($_GET['id']);

    include('albistea_erakutsi.php');
}else{
    $albisteak = AlbisteaDB::selectAlbisteak();
    include('albisteak_erakutsi.php');
}

?>
