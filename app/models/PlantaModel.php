<?php
class PlantaModel{
	private $idPlanta;
	private $idZona;
	private $idEspecie;
	private $codNumerico;
	private $nomeSocial;
	private $historia;
	private $codQR;

	public function getIdZona(): int
	{
		return $this->idZona;
	}

	public function setIdZona(int $idZona)
	{
		$this->idZona = $idZona;

		return $this;
	}

	public function getIdEspecie(): int
	{
		return $this->idEspecie;
	}

	public function setIdEspecie(int $idEspecie)
	{
		$this->idEspecie = $idEspecie;

		return $this;
	}
	public function getCodQR(): string
	{
		return $this->codQR;
	}

	public function setCodQR(string $codQR)
	{
		$this->codQR = $codQR;

		return $this;
	}
 
	public function getCodNumerico(): int
	{
		return $this->codNumerico;
	}

	public function setCodNumerico(int $codNumerico)
	{
		$this->codNumerico = $codNumerico;

		return $this;
	}

	public function getNomeSocial(): string
	{
		return $this->nomeSocial;
	}

	public function setNomeSocial(string $nomeSocial)
	{
		$this->nomeSocial = $nomeSocial;

		return $this;
	}

	public function getHistoria(): string
	{
		return $this->historia;
	}

	public function setHistoria(string $historia)
	{
		$this->historia = $historia;

		return $this;
	}

	public function getIdPlanta(): int 
	{
		return $this->idPlanta;
	}

	public function setIdPlanta(int $idPlanta)
	{
		$this->idPlanta = $idPlanta;

		return $this;
	}
}