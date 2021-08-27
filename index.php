<?php
include("function/restringe_caracteres.php"); //Tratamento de caracteres
include("dados/empresa.php"); //array com os dados da empresa
include("dados/produtos.php"); //array com os dados dos produtos
$url_atual[] = ''; //garante que o ARRAY esteja vazio
$url_atual = explode('/', "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); //pega a url digitada e distribui em uma array
$pagina = $url_atual[1] ?? 'home'; //define nome da página
if ($pagina == '' or $pagina == null) { //redundancia se falhar linha acima - define home
    $pagina = 'home';
}
$tituloPag = 'Doces Delicia - ' . trataTituloPag($pagina); //realiza um tratamento no titulo
//var_dump($pagina); usado para teste
//echo $pagina; //usado para teste
?>
<!DOCTYPE html>
<html>

<head>
    <title><?= $tituloPag; ?></title>
    <!-- LINK REL padrão do MDBOOTSTREP -->
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/mdb-pro.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body style="background-color: whitesmoke">



    <?php
    include("includes/header.php"); //inclui o topo
    include("includes/menu.php"); //inclui o menu
    ?>
    <main class="padingbottom">
        <?php
        $pagina = limitaTipoCaracteres($pagina); //permite apenas letras e numeros

        if (file_exists("pages/{$pagina}.php")) { //Verifica se a página existe 

            require_once "pages/{$pagina}.php"; //include da página quando existente

        } else {
            require_once "pages/erro.php"; //include em caso de página enexistente
        }
        ?>
    </main>

    <?php include("includes/footer.php"); //inclui o rodape 
    ?>
    <!-- JAVASCRIPT padrão do MDBOOTSTREP -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/mdb.min.js"></script>
    <script type="text/javascript" src="/js/myTables.js"></script>
    <script type="text/javascript" src="/js/datatables.js"></script>
</body>

</html>