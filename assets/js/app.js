lazyload();




$('#league').on('change', function () {
    var url = $(this).val(); 
    if (url) { 
        window.open(url,'_self');
     }
     return false;
   });
//    $(".img-player").mouseout(function(){
//     var pai = this.parentElement;
//     var button = pai.querySelector(".view-player-details");
//     button.style.display = "none"
//   })
// $(".img-player").mouseover(function(){
//     var pai = this.parentElement;
//     var button = pai.querySelector(".view-player-details");
//     button.style.display = "block"
// })
