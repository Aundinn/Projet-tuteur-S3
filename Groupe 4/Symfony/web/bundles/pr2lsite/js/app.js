<<<<<<< HEAD
var app = angular.module('CMS', []);

app.controller('CMSController', function($scope, $http) {
  $http.get('json/data.json')
  .success(function (data) {
       $scope.articles = data;
   })
   .error(function (data) {
      alert("Problème lors du chargement des données");
   });

   /*$scope.save = function() {
   $http({
        method: 'POST',
        url: 'json/data.json',        
        data: $scope.articles   
    }).success(function(response) {
        alert("c'est bon !" + $scope.articles );
    }).error(function(response){
        alert("c'est pas bon !");
    });
  };*/
});

  app.controller("ArticleController", function(){
=======
var app = angular.module('CMS', []).config(['$interpolateProvider', function ($interpolateProvider) {
    $interpolateProvider.startSymbol('{[{');
    $interpolateProvider.endSymbol('}]}');
  }]);

app.controller('CMSController', function(){
    this.articles = [{}];
  });


app.controller("ArticleController", function(){
>>>>>>> 8fcfdeeb252dd53c476b4684aa9832185163c398

    this.article = {elements:[{}]};

    this.addArticle = function(articles){
<<<<<<< HEAD
      articles.push(this.article);
      this.article = {elements:[{}]};
=======
        articles.push(this.article);
        this.article = {elements:[{}]};
>>>>>>> 8fcfdeeb252dd53c476b4684aa9832185163c398
    };


  });


<<<<<<< HEAD
 app.controller('TabController', function(){
=======
app.controller('TabController', function(){
>>>>>>> 8fcfdeeb252dd53c476b4684aa9832185163c398
    this.tab = 1;

    this.setTab = function(newValue){
      this.tab = newValue;
    };

    this.isSet = function(tabName){
      return this.tab === tabName;
    };
  });

