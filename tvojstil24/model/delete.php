<?php

require_once "database.php";
$data = json_decode(file_get_contents("php://input"));
var_dump($data);
$table_name=$data[0]->table_name;
$pk_value=$data[0]->pk_value;
switch($table_name)
{
	case "kategorii":
	require_once "model.kategorii.php";
	$objKategorii = new ModelKategorii();
	$objKategorii->setKategorijaID($pk_value);
	$objKategorii->deleteKategorija();
	break;
	
	case "klienti":
	require_once "model.klienti.php";
	$objKlienti = new ModelKlienti();
	$objKlienti->setKlientID($pk_value);
	$objKlienti->deleteKlient();
	break;
	
	
	case "naracki":
	require_once "model.naracki.php";
	$objNaracki = new ModelNaracki();
	$objNaracki->setNarackaID($pk_value);
	$objNaracki->deleteNaracka();
	break;
	
	case "proizvodi":
	require_once "model.proizvodi.php";
	$objProizvodi = new ModelProizvodi();
	$objProizvodi->setProizvodID($pk_value);
	$objProizvodi->deleteProizvod();
	break;
	
	case "vozila":
	require_once "model.vozila.php";
	$objVozila = new ModelVozila();
	$objVozila->setVoziloID($pk_value);
	$objVozila->deleteVozilo();
	break;
}
?>