var app = angular.module('CMS', []).config(['$interpolateProvider', function ($interpolateProvider) {
    $interpolateProvider.startSymbol('{[{');
    $interpolateProvider.endSymbol('}]}');
  }]);

app.controller('CMSController', function(){
    this.articles = [{}];
  });


app.controller("ArticleController", function(){

    this.article = {elements:[{}]};

    this.addArticle = function(articles){
      articles.push(this.article);
      this.article = {elements:[{}]};
    };


  });


app.controller('TabController', function(){
    this.tab = 1;

    this.setTab = function(newValue){
      this.tab = newValue;
    };

    this.isSet = function(tabName){
      return this.tab === tabName;
    };
  });

