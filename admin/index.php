<?php 

require('../klaseak/com/leartik/daw24doca/albisteak/albistea.php');
require('../klaseak/com/leartik/daw24doca/albisteak/albistea_db.php');
use com\leartik\daw24doca\albisteak\Albistea;
use com\leartik\daw24doca\albisteak\AlbisteaDB;




$admin = false;
if(isset($_POST['sartu'])){
    if($_POST['erabiltzailea'] == 'admin' && $_POST['pasahitza'] == 'admin'){
        $admin = true;
        setcookie("erabiltzailea", "admin", time() + 86400);
}
}elseif(isset($_COOKIE['erabiltzailea']) && $_COOKIE['erabiltzailea'] == 'admin'){
    $admin = true;
}

if($admin == true){
    $albisteak = AlbisteaDB::selectAlbisteak();
    include('albisteak_erakutsi.php');
}else{
    if(isset($_POST['sartu'])){
        $mezua = "Datuak ez dira zuzenak";
    }else{
        $mezua ="";
    }
    include('login.php');
}

?>