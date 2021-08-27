<?php
$item =  $url_atual[2];
if (((int)$qtd < (int)$item) or ((int)$item <= 0)) {
    include('pages/erro.php');

    //echo 'item'.$item;//usado para teste
    exit;
}
?>

<!--Grid column-->
<div class="col-md-8 mb-4 center">

    <!--Card-->
    <div class="card card-cascade narrower">

        <!--Card image-->
        <div class="view view-cascade gradient-card-header btn-unique">
            <h5 class="mb-0">Detalhes do Produto</h5>
        </div>
        <!--/Card image-->

        <!--Card content-->
        <div class="card-body card-body-cascade text-center">



            <!-- Card -->
            <div class="card">

                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="<?= '/images/' . $produtos[$item]['2']; ?>" alt="Erro ao exibir imagem">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title"><?= $produtos[$item]['0']; ?></h4>
                    <!-- Text -->
                    <p class="card-text"><?= $produtos[$item]['3']; ?></p>

                    <!-- Valor -->
                    <h4 class="card-title"><?= 'R$'.$produtos[$item]['1']; ?></h4>

                    
                    <!-- Button -->
                    <a href="https://api.whatsapp.com/send?phone=5566920001259&text=Eu%20quero..." class="btn btn-unique">Pedir via WhatsApp</a>

                </div>

            </div>
            <!-- Card -->






        </div>
        <!--/.Card content-->

    </div>
    <!--/.Card-->

</div>
<!--Grid column-->