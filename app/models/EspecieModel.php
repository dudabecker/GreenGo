<?php
class EspecieModel{
	private $idEspecie;
	private $nomePop;
	private $nomeCie;
	private $frutifera;
	private $toxidade;
	private $comestivel;
	private $raridade;
	private $medicinal;
	
	public function getIdEspecie(): int{
		return $this->idEspecie;
	}
	
	public function setIdEspecie(int $idEspecie){
		$this->idEspecie = $idEspecie;
	}	
	
	public function getNomePop(): string{
		return $this->nomePop;
	}
	
	public function setNomePop(string $np){
		$this->nomePop = $np;
	}

	public function getNomeCie(): string{
		return $this->nomeCie;
	}
	
	public function setNomeCie(string $nc){
		$this->nomeCie = $nc;
	}

	public function getFrutifera(): int{
		return $this->frutifera;
	}
	
	public function setFrutifera(int $fru){
		$this->frutifera = $fru;
	}

	public function getToxidade(): int{
		return $this->toxidade;
	}
	
	public function setToxidade(int $tox){
		$this->toxidade = $tox;
	}

	public function getComestivel(): int{
		return $this->comestivel;
	}
	
	public function setComestivel(int $com){
		$this->comestivel = $com;
	}

	public function getRaridade(): int{
		return $this->raridade;
	}
	
	public function setRaridade(int $rar){
		$this->raridade = $rar;
	}

	public function getMedicinal(): int{
		return $this->medicinal;
	}
	
	public function setMedicinal(int $med){
		$this->medicinal = $med;
	}
}