lazyload()

function isEmpty(obj) {

  // null é "empty"
  if (obj == null) return true;
  if (obj.length > 0)    return false;
  if (obj.length === 0)  return true;
  for (var key in obj) {
      if (hasOwnProperty.call(obj, key)) return false;
  }

  return true;
}
  


$('#league').on('change', function () {
  var url = $(this).val();
  if (url) {
    window.open(url, '_self');
  }
  return false;
});

const URL_BASE = "//https://futebol.herokuapp.com"

$("#searchForm").on("submit", function (e) {
  e.preventDefault();
  var strPlayer = $("#searchInput").val();
  document.querySelector(".res").style.display = "none"

  $.ajax({
    url: "https://www.thesportsdb.com/api/v1/json/2/searchplayers.php?p=" + strPlayer,
    type: "GET",
    success: function (response) {

      var player = response["player"];
  
      var div = document.querySelector("#countriesContainer")
      var div2 = document.querySelector("#countriesContainer2")
      div.style.display = "none";
      div2.innerHTML = "";
      if(isEmpty(player) == false){
      
    
        player.map((el => {
  
          div2.innerHTML += `
        
          
          <article class="countries-container__card none">
          <img width="264" height="220" src="${el.strThumb ? el.strThumb: URL_BASE + "/assets/img/player-default.png"}" alt="Mauritania" loading="lazy">
    
          <div class="countries-container__card-info">
            <h1 class="countries-container__card-title">${el.strPlayer}</h1>
            <a class="link" href="${URL_BASE}/player/${el.idPlayer}" >View player</a>
          </div>
        </article>
    
          
          `;
  
        }))
      }else {
        document.querySelector(".res").style.display = "block";

      document.querySelector(".res").innerHTML = ("Não conseguimos encontrar nenhum jogador com o nome: " + strPlayer)
      }
  



    },
    error:function(response){
      console.log(response)
    }

  })

})

