<?php
if (isset($_POST['assunto'])){ ?>

<H1 class="textcenter">Ebaaaa...</H1>
<article class="article center">

  <h2 class="article__title">Sua mensagem foi enviada</h2>
  <div class="article__date">Hora de envio: <?= date("H:i:s"); ?></div>
  <div class="article__content">Obrigado por entrar em contato conosco! Em breve responderemos.
  </div>
</article>





<?php
}else{
  ?>

  <!--Content-->
  <div class="largura center">

<!--Header-->
<div class="modal-header btn-unique white-text">
    <h1 class="title">
        <i class="fa fa-pencil-alt"></i> Formulário de Contato
    </h1>
</div>


<!--Body-->
<div class="modal-body">
    <form action="/contato" method="POST">
        <!-- Material input name -->
        <div class="md-form form-sm">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" name="nome" required id="materialFormNameModalEx1" class="form-control form-control-sm">
            <label for="materialFormNameModalEx1">Seu Nome</label>
        </div>

        <!-- Material input email -->
        <div class="md-form form-sm">
            <i class="fa fa-lock prefix"></i>
            <input type="email" name="email" required id="materialFormEmailModalEx1" class="form-control form-control-sm">
            <label for="materialFormEmailModalEx1">Seu E-mail</label>
        </div>

        <!-- Material input subject -->
        <div class="md-form form-sm">
            <i class="fa fa-tag prefix"></i>
            <input type="text" name="assunto" required id="materialFormSubjectModalEx1" class="form-control form-control-sm">
            <label for="materialFormSubjectModalEx1">Assunto</label>
        </div>

        <!-- Material textarea message -->
        <div class="md-form form-sm">
            <i class="fa fa-pencil-alt prefix"></i>
            <textarea type="text" name="mensagem" required id="materialFormMessageModalEx1" class="md-textarea form-control"></textarea>
            <label for="materialFormMessageModalEx1">Sua Mensagem</label>
        </div>

        <div class="text-center mt-4 mb-2">
            <button type="submit" class="btn btn-unique">Enviar
                <i class="fa fa-send ml-2"></i>
            </button>
        </div>
    </form>
</div>
</div>
<!--/.Content-->

<?php } ?>