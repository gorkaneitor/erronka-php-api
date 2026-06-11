<?php
require('../../klaseak/com/leartik/daw24doca/albisteak/albistea.php');
require('../../klaseak/com/leartik/daw24doca/albisteak/albistea_db.php');

use com\leartik\daw24doca\albisteak\Albistea;
use com\leartik\daw24doca\albisteak\AlbisteaDB;

if (isset($_COOKIE['erabiltzailea']) && $_COOKIE['erabiltzailea'] == "admin") {
    $admin = true;
} else {
    $admin = false;
}

if ($admin == true) {
    if (isset($_POST['gorde'])) {
        $id = $_POST['id'];
        $izenburua = $_POST['izenburua'];
        $laburpena = $_POST['laburpena'];
        $xehetasunak = $_POST['xehetasunak'];

        if (is_nan($xehetasunak)) {
            $mezua = "Zenbakia izan behar da";
            include('albistea_aldatu.php');
        } elseif (strlen($izenburua) > 0 && strlen($laburpena) > 0 && strlen($xehetasunak) > 0) {
            $albistea = new Albistea();
            $albistea->setId($id);
            $albistea->setIzenburua($izenburua);
            $albistea->setLaburpena($laburpena);
            $albistea->setXehetasunak($xehetasunak);

            if (AlbisteaDB::aldatuAlbistea($albistea) > 0) {
                include('albistea_gorde_da.php');
            } else {
                include('albistea_ez_da_gorde.php');
            }
        } else {
            $mezua = "Eremu guztiak bete behar dira";
            include('albistea_aldatu.php');
        }
    } else if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $albistea = AlbisteaDB::selectAlbistea($id);
        
        if(!$albistea){
        header('Location: id_baliogabea.php');
        exit();
    }
        if ($albistea != null) {
            $izenburua = $albistea->getIzenburua();
            $laburpena = $albistea->getLaburpena();
            $xehetasunak = $albistea->getXehetasunak();
            $mezua = "";
            include('albistea_aldatu.php');
        } else {
            header("location: ../index.php");
        }
    } else {
        header("location: ../index.php");
    }
} else {
    header("location: ../index.php");
}
