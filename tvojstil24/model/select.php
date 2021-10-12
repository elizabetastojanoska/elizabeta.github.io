<?php
require_once "database.php";
$table_name=$_GET["table_name"];
$data=array();
switch($table_name){
	case "kategorii":
	
	require_once "model.kategorii.php";
	$objKategorii = new ModelKategorii();
	$results=$objKategorii->selectKategorija();
	//var_dump($results);
	foreach($results as $row){
		$data["records"][]=array("kategorija_id"=>$row["kategorija_id"], 
								"kategorija_ime"=>$row["kategorija_ime"]);
								
	}
	break;
	
	case "klienti":
	
	require_once "model.klienti.php";
	$objKlienti = new ModelKlienti();
	$results=$objKlienti->selectKlient();
	//var_dump($results);
	foreach($results as $row){
		$data["records"][]=array("klient_id"=>$row["klient_id"], 
								"klient_ime"=>$row["klient_ime"],
								"klient_prezime"=>$row["klient_prezime"],
								"klient_grad"=>$row["klient_grad"],
								"klient_adresa"=>$row["klient_adresa"],
								"klient_tel_br"=>$row["klient_tel_br"],
								"klient_email"=>$row["klient_email"]);
								
	}
	break;
	
	
	case "naracki":
	
	require_once "model.naracki.php";
	$objNaracki = new ModelNaracki();
	$results=$objNaracki->selectNaracka();
	//var_dump($results);
	foreach($results as $row){
		$data["records"][]=array("naracka_id"=>$row["naracka_id"], 
								"naracka_datum"=>$row["naracka_datum"],
								"naracka_plaka"=>$row["naracka_plaka"],
								"vozilo_id"=>$row["vozilo_id"],
								"klient_id"=>$row["klient_id"],
								"proizvod_id"=>$row["proizvod_id"],
								"kolicina"=>$row["kolicina"]);
								
	}
	break;
	
	case "proizvodi":
	
	require_once "model.proizvodi.php";
	$objProizvodi = new ModelProizvodi();
	$results=$objProizvodi->selectProizvod();
	//var_dump($results);
	foreach($results as $row){
		$data["records"][]=array("proizvod_id"=>$row["proizvod_id"], 
								"proizvod_ime"=>$row["proizvod_ime"],
								"proizvod_cena"=>$row["proizvod_cena"],
								"proizvod_img"=>$row["proizvod_img"],
								"proizvod_opis"=>$row["proizvod_opis"],
								"proizvod_popust"=>$row["proizvod_popust"],
								"proizvod_zaliha"=>$row["proizvod_zaliha"],
								"kategorija_id"=>$row["kategorija_id"]);
								
	}
	break;
	
	case "vozila":
	
	require_once "model.vozila.php";
	$objVozila = new ModelVozila();
	$results=$objVozila->selectVozilo();
	//var_dump($results);
	foreach($results as $row){
		$data["records"][]=array("vozilo_id"=>$row["vozilo_id"],
								"reg_tabli"=>$row["reg_tabli"], 
								"marka"=>$row["marka"],
								"model"=>$row["model"],
								"boja"=>$row["boja"],
								"vozac"=>$row["vozac"]);
								
	}
	break;
}	
	echo json_encode($data);

?>