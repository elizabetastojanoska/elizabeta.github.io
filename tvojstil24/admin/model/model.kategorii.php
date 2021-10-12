<?php

class ModelKategorii extends DB {
	private $kategorija_id=-1;
	private $kategorija_ime="";
	private $table_name="kategorii";
	private $columns_name="kategorija_id,kategorija_ime";
	
	public function setKategorijaID($kategorija_id){
		$this->kategorija_id=$kategorija_id;
	}
	public function getKategorijaID(){
		return $this->kategorija_id;
	}
	public function setKategorijaIme($kategorija_ime){
		$this->kategorija_ime=$kategorija_ime;
	}
	public function getKategorijaIme(){
		return $this->kategorija_ime;
	}
	
	public function insertKategorija(){
		$columns_value="$this->kategorija_id,'$this->kategorija_ime'";
		parent::insertRow($this->table_name,$this->columns_name, $columns_value);
	}
	
	public function deleteKategorija(){
		parent::deleteRow($this->table_name,"kategorija_id",$this->kategorija_id);
	}
	
	public function selectKategorija(){
		return parent::selectRow($this->table_name);
	}
	
	public function editKategorija(){
		$columns = "kategorija_id=$this->kategorija_id, kategorija_ime='$this->kategorija_ime'";
		$condition= "kategorija_id=$this->kategorija_id";
		parent::editRow($this->table_name,$columns,$condition);
	}
}
?>