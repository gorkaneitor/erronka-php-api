<?php
require('../klaseak/com/leartik/daw24doca/albisteak/komentarioa.php');
require('../klaseak/com/leartik/daw24doca/albisteak/komentarioa_db.php');
use com\leartik\daw24doca\albisteak\Komentarioa;
use com\leartik\daw24doca\albisteak\KomentarioaDB;


if (isset($_POST['id']) && isset($_POST['izena']) && isset($_POST['komentarioaren_testua'])) {
    
    $id = $_POST['id'];
    $izena = $_POST['izena'];
    $komentarioaren_testua = $_POST['komentarioaren_testua'];

    $komentarioa = new Komentarioa();
    $komentarioa->setIdAlbistea($id);
    $komentarioa->setIzena($izena);
    $komentarioa->setKomentarioenTestua($komentarioaren_testua);

    if (KomentarioaDB::insertKomentarioa($komentarioa) > 0) {
        
        include('komentarioa_gorde_da.php');

    } else {

        include('komentarioa_ez_da_gorde.php');

    }

} else {

    $id = $_GET['id_albistea'];
    include('komentario_berria.php');

}
?>