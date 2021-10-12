<?php

class DB {
	private $conn = null;
	private $db_server ="localhost";
	private $db_username ="root";
	private $db_password ="";
	private $db_name ="tvojstil24";
	
	public function __construct(){
		try {  
	 $this->conn = new PDO("mysql:host=$this->db_server;dbname=$this->db_name", 
	 $this->db_username, $this->db_password);  
	 // set the PDO error mode to exception  
	 $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
	 /*echo "Connected successfully";*/}
	 catch(PDOException $e) 
	 {  echo "Connection failed: " . $e->getMessage();}
	 
}
	public function insertRow($table_name, $columns_name, $columns_value){
		$query = "INSERT INTO $table_name($columns_name)
		VALUES($columns_value)";
		//use exec() because no results are returned
		$this->conn->exec($query);
	}
	public function selectRow($table_name){
	$query="SELECT * FROM $table_name";
	$stmt=$this->conn->prepare($query);
	$stmt->execute();
	
	return $stmt->fetchAll();
}
	public function deleteRow($table_name,$pk_name,$pk_value){
		$query="DELETE FROM $table_name WHERE $pk_name = $pk_value";
		$this->conn->exec($query);
	}
	
	/*public function deleteRowStr($table_name,$pk_name,$pk_value){
		$query="DELETE FROM $table_name WHERE $pk_name LIKE $pk_value";
		$this->conn->exec($query);
	}*/
	
	public function editRow($table_name,$columns,$condition){
	$query="UPDATE $table_name SET $columns WHERE $condition";
	$this->conn->exec($query);
}
		

	
}//end of class
?>