<title>Catsplosion</title>

<audio id="c1"><source src="assets/sound/coins1.mp3" type="audio/mpeg"></audio>
<audio id="c2"><source src="assets/sound/coins2.mp3" type="audio/mpeg"></audio>
<audio id="c3"><source src="assets/sound/coins3.mp3" type="audio/mpeg"></audio>
<audio id="w1"><source src="assets/sound/win1.mp3" type="audio/mpeg"></audio>
<audio id="w2"><source src="assets/sound/win2.mp3" type="audio/mpeg"></audio>
<audio id="w3"><source src="assets/sound/win3.mp3" type="audio/mpeg"></audio>
<audio id="f1"><source src="assets/sound/rise1.mp3" type="audio/mpeg"></audio>
<audio id="f2"><source src="assets/sound/rise2.mp3" type="audio/mpeg"></audio>
<audio id="f3"><source src="assets/sound/rise3.mp3" type="audio/mpeg"></audio>

<container id="container">
    <div onclick="lootbox()" data-toggle="modal" data-target="#newCat">
        <lootbox id="box" data-toggle="tooltip" data-placement="bottom" title="<b style='font-size:1.5em'>Click to Open!</b>" data-html="true">
            <div id="cat-icon"></div>
        </lootbox>
    </div>
</container>

<div class="modal fade" id="newCat" tabindex="-1" role="dialog" aria-labelledby="newCatTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content popcontainer">
            <div id="playing-card">
                <div id="receiver"></div>
                <h1 id="pogtext"></h1>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Credits</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Cat icon by <a target="_blank" href="https://icons8.com/">https://icons8.com/</a></p>

        <p class="mb-0">Coin sound effects by <a target="_blank" href="https://picturetosound.com">https://picturetosound.com</a></p>
        <p>Youtube: <a target="_blank" href="https://icons8.com/">https://www.youtube.com/c/picturetosound</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="fixed-bottom mx-2 mb-2 fadein">
  <button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-float text-white float-right my-1" type="button"><i class="material-icons">info</i></button>
</div>