<?php 
    
    namespace com\leartik\daw24doca\albisteak;

    use PDO;
    use Exception;

    class AlbisteaDB{
        public static function selectAlbisteak(){
            try{
                $db = new PDO("sqlite:C:\\xampp\\htdocs\\zerbitzari-04-02\\albisteak.db");
                $erregistroak = $db->query("SELECT * FROM albisteak");
                $albisteak = array();
                while($erregistroa = $erregistroak->fetch()){
                    $albistea = new Albistea();
                    $albistea ->setId($erregistroa['id']);
                    $albistea ->setIzenburua($erregistroa['izenburua']);
                    $albistea ->setLaburpena($erregistroa['laburpena']);
                    $albistea ->setXehetasunak($erregistroa['xehetasunak']);
                    $albisteak[] = $albistea;
                }
                return $albisteak;
            }catch(Exception $e){
                echo "<p>Salbuespenak: " . $e->getMessage() . "</p>\n";
                return null;
            }
        }
        
        public static function selectAlbistea($id){
            try{
                $db = new PDO("sqlite:C:\\xampp\\htdocs\\zerbitzari-02-03\\albisteak.db");
                $erregistroak = $db->query("SELECT * FROM albisteak WHERE id =". $id);
                $albistea = null;
                while($erregistroa = $erregistroak->fetch()){
                    $albistea = new Albistea();
                    $albistea ->setId($erregistroa['id']);
                    $albistea ->setIzenburua($erregistroa['izenburua']);
                    $albistea ->setLaburpena($erregistroa['laburpena']);
                    $albistea ->setXehetasunak($erregistroa['xehetasunak']);
                }
                return $albistea;

            }catch(Exception $e){
                echo "<p>Salbuespenak: " . $e->getMessage() . "</p>\n";
                return null;
            }
        }

        public static function insertAlbistea($albistea){
            try{
                $db = new PDO("sqlite:C:\\xampp\\htdocs\\zerbitzari-02-03\\albisteak.db");
                $sql = "insert into albisteak(izenburua,laburpena,xehetasunak) values";
                $sql = $sql . "('". $albistea->getIzenburua() . "'";
                $sql = $sql . ",'". $albistea->getLaburpena() . "'";
                $sql = $sql . ",'". $albistea->getXehetasunak() . "')";
                $emaitza = $db-> exec($sql);
                return $emaitza;
            }catch(Exception $e){
                echo "<p>Salbuespenak: " . $e->getMessage() . "</p>\n";
                return 0;
            }
        }
        
        public static function aldatuAlbistea($albistea) {
        try{
        $db = new PDO("sqlite:C:\\xampp\\htdocs\\zerbitzari-02-03\\albisteak.db");
        $sql = "UPDATE albisteak 
            SET izenburua = '" . $albistea->getIzenburua() . "', 
                laburpena = '" . $albistea->getLaburpena() . "', 
                xehetasunak = '" . $albistea->getXehetasunak() . "' 
                WHERE id = " . $albistea->getId();
            $emaitza = $db->exec($sql);
            return $emaitza;
            }catch(Exception $e){
                echo "<p>Salbuespenak: " . $e->getMessage() . "</p>\n";
                return 0;
        }
    }
        
            public static function ezabatuAlbistea($albistea){
            try{
            $db = new PDO("sqlite:C:\\xampp\\htdocs\\zerbitzari-02-03\\albisteak.db");
            $sql = "DELETE FROM albisteak WHERE id = '" . $albistea->getId() . "'";
            $emaitza = $db->exec($sql);
            return $emaitza;  
            }catch(Exception $e){
                echo "<p>Salbuespenak: " . $e->getMessage() . "</p>\n";
                return 0;
            }
    }
}
    ?> 
