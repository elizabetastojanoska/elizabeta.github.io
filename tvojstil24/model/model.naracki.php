<?php

class ModelNaracki extends DB{
	
	private $naracka_id=-1;
	private $naracka_datum="";
	private $naracka_plaka="";
	private $vozilo_id=-1;
	private $klient_id=-1;
	private $proizvod_id=-1;
	private $kolicina=-1;
	private $table_name="naracki";
	private $columns_name="naracka_id,naracka_datum,naracka_plaka,vozilo_id,klient_id,proizvod_id,kolicina";
	
	public function setNarackaID($naracka_id){
		$this->naracka_id=$naracka_id;
	}
	public function getNarackaID(){
		return $this->naracka_id;
	}
	public function setNarackaDatum($naracka_datum){
		$this->naracka_datum=$naracka_datum;
	}
	public function getNarackaDatum(){
		return $this->naracka_datum;
	}
	public function setNarackaPlaka($naracka_plaka){
		$this->naracka_plaka=$naracka_plaka;
	}
	public function getNarackaPlaka(){
		return $this->naracka_plaka;
	}
	public function setVoziloID($vozilo_id){
		$this->vozilo_id=$vozilo_id;
	}
	public function getVoziloID(){
		return $this->vozilo_id;
	}
	public function setKlientID($klient_id){
		$this->klient_id=$klient_id;
	}
	public function getKlientID(){
		return $this->klient_id;
	}
	public function setProizvodID($proizvod_id){
		$this->proizvod_id=$proizvod_id;
	}
	public function getProizvodID(){
		return $this->proizvod_id;
	}
	public function setKolicina($kolicina){
		$this->kolicina=$kolicina;
	}
	public function getKolicina(){
		return $this->kolicina;
	}
	
	public function insertNaracka(){
		$columns_value="$this->naracka_id,'$this->naracka_datum','$this->naracka_plaka',$this->vozilo_id,$this->klient_id,$this->proizvod_id,$this->kolicina";
		parent::insertRow($this->table_name,$this->columns_name, $columns_value);
	}
	
	public function deleteNaracka(){
		parent::deleteRow($this->table_name,"naracka_id",$this->naracka_id);
	}
	
	public function selectNaracka(){
		return parent::selectRow($this->table_name);
	}
	
	public function editNaracka(){
		$columns = "naracka_id=$this->naracka_id, naracka_datum='$this->naracka_datum',naracka_plaka='$this->naracka_plaka',vozilo_id=$this->vozilo_id,klient_id=$this->klient_id,proizvod_id=$this->proizvod_id,kolicina=$this->kolicina";
		$condition= "naracka_id=$this->naracka_id";
		parent::editRow($this->table_name,$columns,$condition);
	}
}
?>