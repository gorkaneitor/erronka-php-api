<?php
require('../../klaseak/com/leartik/daw24gone/albisteak/albistea.php');
require('../../klaseak/com/leartik/daw24gone/albisteak/albistea_db.php');

use com\leartik\daw24gone\albisteak\Albistea;
use com\leartik\daw24gone\albisteak\AlbisteaDB;

if (isset($_COOKIE['erabiltzailea']) && $_COOKIE['erabiltzailea'] == "admin") {
    $admin = true;
} else {
    $admin = false;
}

if ($admin == true) {
    if (isset($_POST['gorde'])) {
        $izenburua = $_POST['izenburua'];
        $laburpena = $_POST['laburpena'];
        $xehetasunak = $_POST['xehetasunak'];

        if (strlen($izenburua) > 0 && strlen($laburpena) > 0 && strlen($xehetasunak) > 0) {
            $albistea = new Albistea();
            $albistea->setIzenburua($izenburua);
            $albistea->setLaburpena($laburpena);
            $albistea->setXehetasunak($xehetasunak);

            if (AlbisteaDB::insertAlbistea($albistea) > 0) {
                include('albistea_gorde_da.php');
            } else {
                include('albistea_ez_da_gorde.php');
            }
        } else {
            $mezua = "Eremu guztiak bete behar dira";
            include('albiste_berria.php');
        }
    } else {
        $izenburua = "";
        $laburpena = "";
        $xehetasunak = "";
        $mezua = "";
        include('albiste_berria.php');
    }
} else {
    $mezua = "Eremu honetan sartzeko saioa hasi behar duzu.";
    include('../login.php');
}
