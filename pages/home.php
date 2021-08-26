
<div class="col card-deckPers textcenter">
    <?php
foreach($produtos as $valor => $produto){ ?>

<!-- Card Narrower -->
<div class="card card-cascade narrower">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="<?= '/images/'.$produto['2'];?>"
      alt="Erro ao mostrar Imagem">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade">

    <!-- Label -->
    <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Culinaria</h5>
    <!-- Title -->
    <h4 class="font-weight-bold card-title"><?= $produto['0']; ?></h4>
    <!-- Text -->
    <p class="card-text"><?= $produto['3']; ?></p>
    <!-- Button -->
    <a href="<?= '/detalhes-do-produto/'.$valor; ?>" class="btn btn-unique">Saber mais...</a>

  </div>

</div>
<!-- Card Narrower -->
<?php } ?>

<!-- Card deck -->
</div>





