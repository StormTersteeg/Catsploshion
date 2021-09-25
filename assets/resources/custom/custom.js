const coins = [document.getElementById("c1"), document.getElementById("c2"), document.getElementById("c3")];
const fireworks = [document.getElementById("f1"), document.getElementById("f2"), document.getElementById("f3")];
const wins = [document.getElementById("w1"), document.getElementById("w2"), document.getElementById("w3")];
const texts = ['<span class="badge badge-warning">Legendary</span>', '<span class="badge badge-primary">Epic</span>', '<span class="badge badge-info">Rare</span>', '<span class="badge badge-secondary">Uncommon</span>', '<span class="badge badge-light">Common</span>'];

function getRandomInt(max) {
  return Math.floor(Math.random() * max)
}

function lootbox() {
  $('#box').tooltip('hide')
  document.getElementById("receiver").style.background = ""
  document.getElementById("pogtext").innerHTML = ""

  coins[getRandomInt(3)].play()

  document.getElementById("container").classList.add("flash")
  setTimeout(function() {
    fireworks[getRandomInt(3)].play()
    document.getElementById("container").classList.remove("flash")
  }, 1000);

  re = $.get("https://api.thecatapi.com/v1/images/search?mime_types=jpg", {api_key: "99991dbb-635d-49b7-8519-418af2679b08"}, function (result) {
    var img = new Image();
    img.src = result[0]['url'];

    setTimeout(function(){
      wins[getRandomInt(3)].play()
      document.getElementById("receiver").style.backgroundImage = "url(" + result[0]['url'] + ")"
      document.getElementById("pogtext").innerHTML = texts[getRandomInt(4)]
    }, 3000);
  })
}