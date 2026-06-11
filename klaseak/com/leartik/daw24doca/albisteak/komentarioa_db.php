<?php 

namespace com\leartik\daw24doca\albisteak;

use PDO;
use Exception;

class KomentarioaDB{
    public static function selectKomentarioak($id_albistea){
        try{
                $db = new PDO("sqlite:C:\\xampp\\htdocs\\zerbitzari-05-01\\albisteak.db");
                $erregistroak = $db->query("SELECT * FROM komentarioak WHERE id_albistea =". $id_albistea);
                $komentarioak = [];
                while($erregistroa = $erregistroak->fetch()){
                    $komentarioa = new Komentarioa();
                    $komentarioa ->setId($erregistroa['id']);
                    $komentarioa ->setIdAlbistea($erregistroa['id_albistea']);
                    $komentarioa ->setIzena($erregistroa['izena']);
                    $komentarioa ->setKomentarioenTestua($erregistroa['komentarioaren_testua']);

                    $komentarioak[] = $komentarioa;
                }
                return $komentarioak;

            }catch(Exception $e){
                echo "<p>Salbuespenak: " . $e->getMessage() . "</p>\n";
                return [];
            }
        }

    public static function insertKomentarioa($komentarioa){
        try{
            $db = new PDO("sqlite:C:\\xampp\\htdocs\\zerbitzari-05-01\\albisteak.db");

            $sql = "INSERT INTO komentarioak (id_albistea, izena, komentarioaren_testua) VALUES (";
            $sql .= $komentarioa->getIdAlbistea() . ", ";
            $sql .= "'" . $komentarioa->getIzena() . "', ";
            $sql .= "'" . $komentarioa->getKomentarioenTestua() . "')";
            $emaitza = $db->exec($sql);
            return $emaitza;
        } catch(Exception $e) {
            echo "<p>Salbuespenak: " . $e->getMessage() . "</p>\n";
            return 0;
        }
}
}

?>