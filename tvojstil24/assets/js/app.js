var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope, $http, $routeParams) {
 
 $scope.successAlert=false;
 $scope.dangerAlert=false;
 $scope.infoAlert=false;
 
 $scope.getId=0;
 $scope.checkUrl=$routeParams.id;
 
 function postJSON(dataObject){
$http(
{
	method:"post",//od kade
	url:'model/insert.php',//kade
	data:dataObject,//sto
	headers:{'Content-Type':
	'application/x-www-form-urlencoded'}
}
);
}

function postEditJSON(dataObject){
$http(
{
	method:"post",//od kade
	url:'model/edit.php',//kade
	data:dataObject,//sto
	headers:{'Content-Type':
	'application/x-www-form-urlencoded'}
}
);
}

function postJSONDelete(dataObject){
$http(
{
	method:"post",//od kade
	url:'model/delete.php',//kade
	data:dataObject,//sto
	headers:{'Content-Type':
	'application/x-www-form-urlencoded'}

});
window.location.reload();
}




/*JSON*/
 $scope.kategorii=[];
 $http.get("model/select.php?table_name=kategorii")
 .then(function(response) 
 {$scope.kategorii=response.data.records;});
 
 $scope.klienti=[];
 $http.get("model/select.php?table_name=klienti")
 .then(function(response) 
 {$scope.klienti=response.data.records;});
 
 
 
 $scope.naracki=[];
 $http.get("model/select.php?table_name=naracki")
 .then(function(response) 
 {$scope.naracki=response.data.records;});
 
 $scope.proizvodi=[];
 $http.get("model/select.php?table_name=proizvodi")
 .then(function(response) 
 {$scope.proizvodi=response.data.records;});
 
 $scope.vozila=[];
 $http.get("model/select.php?table_name=vozila")
 .then(function(response) 
 {$scope.vozila=response.data.records;});
 
 /*FUNCTIONS*/
 $scope.function_details_kategorii=function(kategorija_ime,pk_value,action){
	var kategoriiJson=[{"kategorija_ime":kategorija_ime,"pk_value":pk_value,"table_name":"kategorii","action":action}];
	console.log(kategoriiJson);
	if(action =='insert'){
		postJSON(kategoriiJson);
	}else {
		postEditJSON(kategoriiJson);
	}
	$scope.dangerAlert=false;
	$scope.successAlert=true;
}

$scope.function_details_klienti=function(klient_ime,klient_prezime,klient_grad,klient_adresa,klient_tel_br,
										klient_email,pk_value,action){
	var klientiJson=[{"klient_ime":klient_ime,"klient_prezime":klient_prezime,"klient_grad":klient_grad,
						"klient_adresa":klient_adresa,"klient_tel_br":klient_tel_br,
						"klient_email":klient_email,
						"pk_value":pk_value,"table_name":"klienti","action":action}];
	console.log(klientiJson);
	if(action =='insert'){
		postJSON(klientiJson);
	} else {
		postEditJSON(klientiJson);
	}
	$scope.dangerAlert=false;
	$scope.successAlert=true;
}

$scope.function_details_naracki=function(naracka_datum,naracka_plaka,vozilo_id,klient_id,proizvod_id,kolicina,pk_value,action){
	var narackiJson=[{"naracka_datum":naracka_datum,"naracka_plaka":naracka_plaka,
	"vozilo_id":vozilo_id,"klient_id":klient_id,"proizvod_id":proizvod_id,"kolicina":kolicina,"pk_value":pk_value,"table_name":"naracki","action":action}];
	console.log(narackiJson);
	if(action =='insert'){
		postJSON(narackiJson);
	} else {
		postEditJSON(narackiJson);
	}
	$scope.dangerAlert=false;
	$scope.successAlert=true;
}



$scope.function_details_proizvodi=function(proizvod_ime,proizvod_cena,proizvod_img,proizvod_opis,proizvod_popust,
											proizvod_zaliha,kategorija_id,pk_value,action){
	var proizvodiJson=[{"proizvod_ime":proizvod_ime,"proizvod_cena":proizvod_cena,
	"proizvod_img":proizvod_img,"proizvod_opis":proizvod_opis,"proizvod_popust":proizvod_popust,"proizvod_zaliha":proizvod_zaliha,
	"kategorija_id":kategorija_id,"pk_value":pk_value,"table_name":"proizvodi","action":action}];
	console.log(proizvodiJson);
	if(action =='insert'){
		postJSON(proizvodiJson);
	} else {
		postEditJSON(proizvodiJson);
	}
	$scope.dangerAlert=false;
	$scope.successAlert=true;
}

$scope.function_details_vozila=function(reg_tabli,marka,model,boja,vozac,pk_value,action){
	var vozilaJson=[{"reg_tabli":reg_tabli,"marka":marka,"model":model,"boja":boja,"vozac":vozac,
	"pk_value":pk_value,"table_name":"vozila","action":action}];
	console.log(vozilaJson);
	if(action =='insert'){
		postJSON(vozilaJson);
	} else {
		postEditJSON(vozilaJson);
	}
	$scope.dangerAlert=false;
	$scope.successAlert=true;
}






$scope.function_error=function(){
	$scope.successAlert=false;
	$scope.dangerAlert=true;
	$scope.infoAlert=false;
}

$scope.function_deleteRow=function(table_name,pk_value){
	var deleteJson=[{"table_name":table_name, "pk_value":pk_value}];
	console.log(deleteJson);
	postJSONDelete(deleteJson);
	
}
$scope.function_getId=function(pk_value){
	$scope.getId=pk_value;
	console.log("GET ID"+pk_value);
}

});
