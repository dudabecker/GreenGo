<?php
class PlantaModel{
	private $idPlanta;
	private $idZona;
	private $idEspecie;
	private $codNumerico;
	private $codQR;
	

	public function getIdZona()
	{
		return $this->idZona;
	}

	public function setIdZona($idZona)
	{
		$this->idZona = $idZona;

		return $this;
	}

	public function getIdEspecie()
	{
		return $this->idEspecie;
	}

	public function setIdEspecie($idEspecie)
	{
		$this->idEspecie = $idEspecie;

		return $this;
	}
	public function getCodQR()
	{
		return $this->codQR;
	}

	public function setCodQR($codQR)
	{
		$this->codQR = $codQR;

		return $this;
	}
 
	public function getCodNumerico()
	{
		return $this->codNumerico;
	}

	public function setCodNumerico($codNumerico)
	{
		$this->codNumerico = $codNumerico;

		return $this;
	}

	public function getIdPlanta()
	{
		return $this->idPlanta;
	}

	public function setIdPlanta($idPlanta)
	{
		$this->idPlanta = $idPlanta;

		return $this;
	}
}