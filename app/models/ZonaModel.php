<?php

class ZonaModel
{

    private $idZona;
    private $idPlanta;
    private $nomeZona;
    private int $pontoZona;

    public function setIdZona(int $idZona)
    {
        $this->idZona = $idZona;
    }

    public function getIdZona(): int
    {
        return $this->idZona;
    }

    public function setIdPlanta($idPlanta)
    {
        $this->idPlanta = $idPlanta;

        return $this;
    }
    public function getIdPlanta()
    {
        return $this->idPlanta;
    }
   
    public function setNomeZona(string $nomeZona)
    {
        $this->nomeZona = $nomeZona;
    }

    public function getNomeZona()
    {
        return $this->nomeZona;
    }

    public function setPontoZona(string $pontoZona)
    {
        $this->pontoZona = $pontoZona;
    }

    public function getPontoZona()
    {
        return $this->pontoZona;
    }
    
   
}
