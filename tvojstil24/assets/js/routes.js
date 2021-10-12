app.config(function($routeProvider) {
  $routeProvider
  
    
  .when("/details_klienti", {
    templateUrl : "view/details_klienti.html",
	controller:"myCtrl"
  })
    
    .when("/details_naracki", {
    templateUrl : "view/details_naracki.html",
	controller:"myCtrl"
  })
  
	.when("/proizvodi", {
    templateUrl : "view/proizvodi.html",
	controller:"myCtrl"
  })
   
  .when("/vozila", {
    templateUrl : "view/vozila.html",
	controller:"myCtrl"
  })
  .when("/za_nas", {
    templateUrl : "view/za_nas.html",
	controller:"myCtrl"
  })
  .when("/kontakt", {
    templateUrl : "view/kontakt.html",
	controller:"myCtrl"
  })
  
});