<?php

$data = json_decode(file_get_contents("php://input"));
var_dump ($data);

require_once "database.php";
$table_name=$data[0]->table_name;
switch($table_name){
	case "kategorii":
	require_once "model.kategorii.php";
	$objKategorii = new ModelKategorii();
	//$kategorija_id=$data[0]->kategorija_id;
	$kategorija_ime=$data[0]->kategorija_ime;
	//$objKategorii=setKategorijaID($kategorija_id);
	$objKategorii->setKategorijaIme($kategorija_ime);
	$objKategorii->insertKategorija();
	break;
	
	case "klienti":
	require_once "model.klienti.php";
	$objKlienti = new ModelKlienti();
	//$klient_id=$data[0]->klient_id;
	$klient_ime=$data[0]->klient_ime;
	$klient_prezime=$data[0]->klient_prezime;
	$klient_grad=$data[0]->klient_grad;
	$klient_adresa=$data[0]->klient_adresa;
	$klient_tel_br=$data[0]->klient_tel_br;
	$klient_email=$data[0]->klient_email;
	//$klient_password=$data[0]->klient_password;
	//$objKlienti=setKlientID($klient_id);
	$objKlienti->setKlientIme($klient_ime);
	$objKlienti->setKlientPrezime($klient_prezime);
	$objKlienti->setKlientGrad($klient_grad);
	$objKlienti->setKlientAdresa($klient_adresa);
	$objKlienti->setKlientTelBr($klient_tel_br);
	$objKlienti->setKlientEmail($klient_email);
	//$objKlienti->setKlientPassword($klient_password);
	$objKlienti->insertKlient();
	break;
	
	
	case "naracki":
	require_once "model.naracki.php";
	$objNaracki = new ModelNaracki();
	//$naracka_id=$data[0]->naracka_id;
	$naracka_datum=$data[0]->naracka_datum;
	$naracka_plaka=$data[0]->naracka_plaka;
	$vozilo_id=$data[0]->vozilo_id;
	$klient_id=$data[0]->klient_id;
	$proizvod_id=$data[0]->proizvod_id;
	$kolicina=$data[0]->kolicina;
	//$objNaracki=setNarackaID($naracka_id);
	$objNaracki->setNarackaDatum($naracka_datum);
	$objNaracki->setNarackaPlaka($naracka_plaka);
	$objNaracki->setVoziloID($vozilo_id);
	$objNaracki->setKlientID($klient_id);
	$objNaracki->setProizvodID($proizvod_id);
	$objNaracki->setKolicina($kolicina);
	$objNaracki->insertNaracka();
	break;
	
	case "proizvodi":
	require_once "model.proizvodi.php";
	$objProizvodi = new ModelProizvodi();
	//$proizvod_id=$data[0]->proizvod_id;
	$proizvod_ime=$data[0]->proizvod_ime;
	$proizvod_cena=$data[0]->proizvod_cena;
	$proizvod_img=$data[0]->proizvod_img;
	$proizvod_opis=$data[0]->proizvod_opis;
	$proizvod_popust=$data[0]->proizvod_popust;
	$proizvod_zaliha=$data[0]->proizvod_zaliha;
	//$web_prod=$data[0]->web_prod;
	$kategorija_id=$data[0]->kategorija_id;
	//$objProizvodi=setProizvodID($proizvod_id);
	$objProizvodi->setProizvodIme($proizvod_ime);
	$objProizvodi->setProizvodCena($proizvod_cena);
	$objProizvodi->setProizvodImg($proizvod_img);
	$objProizvodi->setProizvodOpis($proizvod_opis);
	$objProizvodi->setProizvodPopust($proizvod_popust);
	$objProizvodi->setProizvodZaliha($proizvod_zaliha);
	//$objProizvodi->setWebProd($web_prod);
	$objProizvodi->setKategorijaID($kategorija_id);
	$objProizvodi->insertProizvod();
	break;
	
	case "vozila":
	require_once "model.vozila.php";
	$objVozilo = new ModelVozila();
	$reg_tabli=$data[0]->reg_tabli;
	$marka=$data[0]->marka;
	$model=$data[0]->model;
	$boja=$data[0]->boja;
	$vozac=$data[0]->vozac;
	$objVozilo->setRegTabli($reg_tabli);
	$objVozilo->setMarka($marka);
	$objVozilo->setModel($model);
	$objVozilo->setBoja($boja);
	$objVozilo->setVozac($vozac);
	$objVozilo->insertVozilo();
	break;
}
?>