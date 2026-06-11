<?php 

namespace com\leartik\daw24doca\albisteak;

class Komentarioa{
    private $id;
    private $id_albistea;
    private $izena;
    private $komentarioaren_testua;

    public function __construct()
    {
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setIdAlbistea($id_albistea){
        $this->id_albistea = $id_albistea;
    }
    public function getIdAlbistea(){
        return $this->id_albistea;
    }

    public function setIzena($izena){
        $this->izena = $izena;
    }
    public function getIzena(){
        return $this->izena;
    }

    public function setKomentarioenTestua($komentarioaren_testua){
        $this->komentarioaren_testua = $komentarioaren_testua;
    }
    public function getKomentarioenTestua(){
        return $this->komentarioaren_testua;
    }
}
?>