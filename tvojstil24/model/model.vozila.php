<?php

class ModelVozila extends DB {
	private $vozilo_id=-1;
	private $reg_tabli="";
	private $marka="";
	private $model="";
	private $boja="";
	private $vozac="";
	private $table_name="vozila";
	private $columns_name="vozilo_id,reg_tabli,marka,model,boja,vozac";
	
	public function setVoziloID($vozilo_id){
		$this->vozilo_id=$vozilo_id;
	}
	public function getVoziloID(){
		return $this->vozilo_id;
	}
	
	public function setRegTabli($reg_tabli){
		$this->reg_tabli=$reg_tabli;
	}
	public function getRegTabli(){
		return $this->reg_tabli;
	}
	public function setMarka($marka){
		$this->marka=$marka;
	}
	public function getMarka(){
		return $this->marka;
	}
	public function setModel($model){
		$this->model=$model;
	}
	public function getModel(){
		return $this->model;
	}
	public function setBoja($boja){
		$this->boja=$boja;
	}
	public function getBoja(){
		return $this->boja;
	}
	public function setVozac($vozac){
		$this->vozac=$vozac;
	}
	public function getVozac(){
		return $this->vozac;
	}
	
	public function insertVozilo(){
		$columns_value="$this->vozilo_id,'$this->reg_tabli','$this->marka','$this->model','$this->boja','$this->vozac'";
		parent::insertRow($this->table_name,$this->columns_name, $columns_value);
	}
	
	public function deleteVozilo(){
		parent::deleteRow($this->table_name,"vozilo_id",$this->reg_tabli);
	}
	
	public function selectVozilo(){
		return parent::selectRow($this->table_name);
	}
	
	public function editVozilo(){
		$columns = "vozilo_id=$this->vozilo_id,reg_tabli='$this->reg_tabli', marka='$this->marka',model='$this->model',boja='$this->boja',vozac='$this->vozac'";
		$condition= "vozilo_id='$this->vozilo_id'";
		parent::editRow($this->table_name,$columns,$condition);
	}
}
?>