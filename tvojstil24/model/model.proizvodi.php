<?php

class ModelProizvodi extends DB {
	private $proizvod_id=-1;
	private $proizvod_ime="";
	private $proizvod_cena=-1;
	private $proizvod_img="";
	private $proizvod_opis="";
	private $proizvod_popust=-1;
	private $proizvod_zaliha=-1;
	//private $web_prod="";
	private $kategorija_id=-1;
	private $table_name="proizvodi";
	private $columns_name="proizvod_id,proizvod_ime,proizvod_cena,proizvod_img,proizvod_opis,
	proizvod_popust,proizvod_zaliha,kategorija_id";
	
	public function setProizvodID($proizvod_id){
		$this->proizvod_id=$proizvod_id;
	}
	public function getProizvodID(){
		return $this->proizvod_id;
	}
	public function setProizvodIme($proizvod_ime){
		$this->proizvod_ime=$proizvod_ime;
	}
	public function getProizvodIme(){
		return $this->proizvod_ime;
	}
	public function setProizvodCena($proizvod_cena){
		$this->proizvod_cena=$proizvod_cena;
	}
	public function getProizvodCena(){
		return $this->proizvod_cena;
	}
	public function setProizvodImg($proizvod_img){
		$this->proizvod_img=$proizvod_img;
	}
	public function getProizvodImg(){
		return $this->proizvod_img;
	}
	public function setProizvodOpis($proizvod_opis){
		$this->proizvod_opis=$proizvod_opis;
	}
	public function getProizvodOpis(){
		return $this->proizvod_opis;
	}
	public function setProizvodPopust($proizvod_popust){
		$this->proizvod_popust=$proizvod_popust;
	}
	public function getProizvodPopust(){
		return $this->proizvod_popust;
	}
	public function setProizvodZaliha($proizvod_zaliha){
		$this->proizvod_zaliha=$proizvod_zaliha;
	}
	public function getProizvodZaliha(){
		return $this->proizvod_zaliha;
	}
	/*public function setWebProd($web_prod){
		$this->web_prod=$web_prod;
	}
	public function getWebProd(){
		return $this->web_prod;
	}*/
	public function setKategorijaID($kategorija_id){
		$this->kategorija_id=$kategorija_id;
	}
	public function getKategorijaID(){
		return $this->kategorija_id;
	}
	
	public function insertProizvod(){
		$columns_value="$this->proizvod_id,'$this->proizvod_ime',$this->proizvod_cena,'$this->proizvod_img','$this->proizvod_opis',
		$this->proizvod_popust,$this->proizvod_zaliha,$this->kategorija_id";
		parent::insertRow($this->table_name,$this->columns_name, $columns_value);
	}
	
	public function deleteProizvod(){
		parent::deleteRow($this->table_name,"proizvod_id",$this->proizvod_id);
	}
	
	public function selectProizvod(){
		return parent::selectRow($this->table_name);
	}
	
	public function editProizvod(){
		$columns = "proizvod_id=$this->proizvod_id, proizvod_ime='$this->proizvod_ime',proizvod_cena=$this->proizvod_cena,
		proizvod_img='$this->proizvod_img',proizvod_opis='$this->proizvod_opis',proizvod_popust=$this->proizvod_popust,
		proizvod_zaliha=$this->proizvod_zaliha,kategorija_id=$this->kategorija_id";
		$condition= "proizvod_id=$this->proizvod_id";
		parent::editRow($this->table_name,$columns,$condition);
	}
}

?>