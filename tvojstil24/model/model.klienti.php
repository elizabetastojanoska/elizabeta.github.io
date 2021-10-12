<?php

class ModelKlienti extends DB{
	
	private $klient_id=-1;
	private $klient_ime="";
	private $klient_prezime="";
	private $klient_grad="";
	private $klient_adresa="";
	private $klient_tel_br="";
	private $klient_email="";
	//private $klient_password="";
	private $table_name="klienti";
	private $columns_name="klient_id, klient_ime, klient_prezime, klient_grad, klient_adresa, klient_tel_br, klient_email";
	
	public function setKlientID($klient_id){
		$this->klient_id=$klient_id;
	}
	public function getKlientID(){
		return $this->klient_id;
	}
	public function setKlientIme($klient_ime){
		$this->klient_ime=$klient_ime;
	}
	public function getKlientIme(){
		return $this->klient_ime;
	}
	public function setKlientPrezime($klient_prezime){
		$this->klient_prezime=$klient_prezime;
	}
	public function getKlientPrezime(){
		return $this->klient_prezime;
	}
	public function setKlientGrad($klient_grad){
		$this->klient_grad=$klient_grad;
	}
	public function getKlientGrad(){
		return $this->klient_grad;
	}
	public function setKlientAdresa($klient_adresa){
		$this->klient_adresa=$klient_adresa;
	}
	public function getKlientAdresa(){
		return $this->klient_adresa;
	}
	public function setKlientTelBr($klient_tel_br){
		$this->klient_tel_br=$klient_tel_br;
	}
	public function getKlientTelBr(){
		return $this->klient_tel_br;
	}
	public function setKlientEmail($klient_email){
		$this->klient_email=$klient_email;
	}
	public function getKlientEmail(){
		return $this->klient_email;
	}
	/*public function setKlientPassword($klient_password){
		$this->klient_password=$klient_password;
	}
	public function getKlientPassword(){
		return $this->klient_password;
	}*/
	
	public function insertKlient(){
		$columns_value="$this->klient_id,'$this->klient_ime','$this->klient_prezime','$this->klient_grad','$this->klient_adresa','$this->klient_tel_br','$this->klient_email'";
		parent::insertRow($this->table_name,$this->columns_name, $columns_value);
	}
	
	public function deleteKlient(){
		parent::deleteRow($this->table_name,"klient_id",$this->klient_id);
	}
	
	public function selectKlient(){
		return parent::selectRow($this->table_name);
	}
	
	public function editKlient(){
		$columns = "klient_id=$this->klient_id,klient_ime='$this->klient_ime',klient_prezime='$this->klient_prezime',
		klient_grad='$this->klient_grad',klient_adresa='$this->klient_adresa',klient_tel_br='$this->klient_tel_br',
		klient_email='$this->klient_email'";
		$condition= "klient_id=$this->klient_id";
		parent::editRow($this->table_name,$columns,$condition);
	}
}
?>