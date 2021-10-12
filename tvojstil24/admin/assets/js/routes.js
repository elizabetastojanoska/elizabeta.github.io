app.config(function($routeProvider) {
  $routeProvider
  
   .when("/kategorii", {
    templateUrl : "view/kategorii.html",
	controller:"myCtrl"
  })
  .when("/details_kategorija", {
    templateUrl : "view/details_kategorija.html",
	controller:"myCtrl"
  })
  .when("/details_kategorija/:id", {
    templateUrl : "view/details_kategorija.html",
	controller:"myCtrl"
  })
  .when("/klienti", {
    templateUrl : "view/klienti.html",
	controller:"myCtrl"
  })
  .when("/details_klienti", {
    templateUrl : "view/details_klienti.html",
	controller:"myCtrl"
  })
  .when("/details_klienti/:id", {
    templateUrl : "view/details_klienti.html",
	controller:"myCtrl"
  })
  
   .when("/naracki", {
    templateUrl : "view/naracki.html",
	controller:"myCtrl"
  })
   .when("/details_naracki", {
    templateUrl : "view/details_naracki.html",
	controller:"myCtrl"
  })
  .when("/details_naracki/:id", {
    templateUrl : "view/details_naracki.html",
	controller:"myCtrl"
  })
   .when("/proizvodi", {
    templateUrl : "view/proizvodi.html",
	controller:"myCtrl"
  })
   .when("/details_proizvodi", {
    templateUrl : "view/details_proizvodi.html",
	controller:"myCtrl"
  })
  .when("/details_proizvodi/:id", {
    templateUrl : "view/details_proizvodi.html",
	controller:"myCtrl"
  })
  .when("/vozila", {
    templateUrl : "view/vozila.html",
	controller:"myCtrl"
  })
  .when("/details_vozila", {
    templateUrl : "view/details_vozila.html",
	controller:"myCtrl"
  })
  .when("/details_vozila/:id", {
    templateUrl : "view/details_vozila.html",
	controller:"myCtrl"
  })
});