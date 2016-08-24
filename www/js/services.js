
angular.module('starter.services', [])

.service('BibleService', function($http) {
    this.getAllBooks = function(){
        return  $http.get("en_kjv.json")
    };
  
});
