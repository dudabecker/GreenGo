<?php
class EspecieModel{
	private $idEspecie;
	private $imagem;
	private $descricao;
	private $pontoEsp;
	private $nomePop;
	private $nomeCie;
	private $frutifera;
	private $toxidade;
	private $exotica;
	private $raridade;
	private $medicinal;
	private $comestivel;
	
	public function getIdEspecie(): int{
		return $this->idEspecie;
	}
	
	public function setIdEspecie(int $idEspecie){
		$this->idEspecie = $idEspecie;
	}	
	
	public function getImagem(): string{
		return $this->imagem;
	}
	
	public function setImagem(string $img){
		$this->imagem = $img;
	}

	public function getDescricao(): string{
		return $this->descricao;
	}
	
	public function setDescricao(string $des){
		$this->descricao = $des;
	}

	public function getPontoEsp(): int{
		return $this->pontoEsp;
	}
	
	public function setPontoEsp(int $pe){
		$this->pontoEsp = $pe;
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

	public function getExotica(): int{
		return $this->exotica;
	}
	
	public function setExotica(int $exo){
		$this->exotica = $exo;
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

	public function getComestivel(): int{
		return $this->comestivel;
	}
	
	public function setComestivel(int $com){
		$this->comestivel = $com;
	}
}