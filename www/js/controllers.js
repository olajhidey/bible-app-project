var bibleCtrl = angular.module('starter.controllers', []);

bibleCtrl.controller('DashCtrl', function ($scope, $http, $state, $rootScope, BibleService, $stateParams) {
    $scope.getData = function () {
        BibleService.getAllBooks().then(function (res) {
            $scope.books = res.data;
        }), function (err) {
            alert(err);
        };
    };
    
    $scope.getData();


    $scope.goToChapter = function (bk) {
        $rootScope.chapters = bk.chapters;
        console.log(bk.chapters);

    };

    $scope.goVerse = function (chapter, chapNum)
    {
        //$state.go('tab.verse', {"chapter": chapter});
        $rootScope.verses = chapter[chapNum];
        console.log($rootScope.verses);
    };
    
});

bibleCtrl.controller('ChatsCtrl', function ($scope, Chats) {

    $scope.chats = Chats.all();
    $scope.remove = function (chat) {
        Chats.remove(chat);
    };
})

bibleCtrl.controller('ChatDetailCtrl', function ($scope, $stateParams, Chats) {
    $scope.chat = Chats.get($stateParams.chatId);
    $scope.find = function () {
        alert("finding verses");
    }
})

bibleCtrl.controller('VerseCtrl', function ($scope, $stateParams) {
    alert($stateParams.chapter);
});