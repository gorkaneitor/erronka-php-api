<?php

namespace com\leartik\daw24gone\albisteak;

class Albistea
{
    private $id;
    private $izenburua;
    private $laburpena;
    private $xehetasunak;

    public function __construct() {}

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIzenburua($izenburua)
    {
        $this->izenburua = $izenburua;
    }

    public function getIzenburua()
    {
        return $this->izenburua;
    }

    public function setLaburpena($laburpena)
    {
        $this->laburpena = $laburpena;
    }

    public function getLaburpena()
    {
        return $this->laburpena;
    }

    public function setXehetasunak($xehetasunak)
    {
        $this->xehetasunak = $xehetasunak;
    }

    public function getXehetasunak()
    {
        return $this->xehetasunak;
    }
}
