<!DOCTYPE html>
<?php
session_start();

$fracao = -1;

if(isset($_GET['fracao'])){
    $fracao = $_GET['fracao'];
}
$_SESSION['fracao'] =  $fracao;



if ($fracao == -1){
    session_destroy();
    session_start();
}

if(isset($_GET['acertoFracao'])){
    $acerto = $_GET['acertoFracao'];
    $_SESSION['acertoFracao'][$fracao] =  $acerto;
}

if(isset($_GET['questaoFracao'])){
    $acerto = $_GET['questaoFracao'];
    $_SESSION['questaoFracao'][$fracao] =  $acerto;
}

if (isset($_SESSION['acertoFracao'])) {
$qtAcertos = isset(array_count_values($_SESSION['acertoFracao'])[1]) ? array_count_values($_SESSION['acertoFracao'])[1] : 0;
} else{
    $qtAcertos = 0;
}


$cor = 0;
if (isset($_GET['cor'])){
    $cor = $_GET['cor'];
}


if ($cor == 1){
    $trocaCor = 0;
} else{
    $trocaCor = 1;
}



?>
<!-- saved from url=(0049)https://getbootstrap.com/docs/4.1/examples/album/ -->
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo.png">

    <title>Eduque Todos</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Css Modificado -->
    <link href="css/style.css" rel="stylesheet">


    <style>
        * {
            cursor: url(cursor.cur),default;
        }
    </style>
</head>
<?php
if ($cor == 1){
    echo '<body id ="corpo" class="" onload="trocar()">';
}
else{
    echo '<body id ="corpo" class="">';
}
    
     
    ?>


<header>
    <div id="menu" class="navbar navbar-dark bg-dark shadow-sm fixed-top px-0">
        <div class="navbar-nav">

            <a href="./Index.php" class="navbar-brand d-flex align-items-center">
                <img src="./img/logo.png" width="40" height="40" style="margin-right:5px;" />
                <strong>eDuque Todos</strong>
            </a>



        </div>

        <div class="col pr-0" id="acessibilidade2">
            <div class="row">
                <label for="fontsize" class="mt-3" id="slider_value" style="color: white;">18px</label>
                <input class="mx-0 mt-4" type="range" oninput="incfont();" id="fontsize" min="10" max="50" step="1" value="18">

            </div>


        </div>

        <div class="col ml-4">
            <div class="row">
                <a href="index.php" class="btn btn-outline-light" id="btnCursos">Página inicial</a>
            </div>
        </div>
        <div class="col">
        </div>
        <div class="col">
        </div>
        <div class="col">
        </div>
        <div class="col">
        </div>
        <div class="col ml-4">
            <div class="row">
                <?php
                    if (basename($_SERVER['PHP_SELF'],'.php') == "fracao"){
                        echo '<button data-toggle="modal" id="btnResultados" data-target="#modalRespostasFracao" class="btn btn-outline-light">Exercícios realizados</button>';
                    }
                    if (basename($_SERVER['PHP_SELF'],'.php') == "potenciacao"){
                        echo '<button data-toggle="modal" id="btnResultados" data-target="#modalRespostasPotenciacao" class="btn btn-outline-light">Exercícios realizados</button>';
                    }
                    else{
                        echo '<p id="btnResultados" class="texto"></p>';
                    }
                ?>

            </div>
        </div>

    </div>
</header>

<!-- Modal Fração -->

<div class="modal fade" id="modalRespostasFracao" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding-bottom: 0px;">

                <?php if (!isset($_SESSION['questaoFracao'])) {
                          echo "É necessário realizar as atividades para ver os acertos das respostas";
                      } else{
                    echo '<h5 class="modal-title" id="tituloModalRespostas" style="color:black;">Quantidade de questões '.count($_SESSION['questaoFracao']).'<br>
                    <b>
                        <p style="font-size: 16px;">Quantidade de acertos '. $qtAcertos .'
                </p>
                </b>
                </h5>';
                }
                ?>

            </div>
            <?php if (isset($_SESSION['questaoFracao'])) { ?>
            <div class="modal-body texto-alterado" style="padding-top: 0px; margin-top: 10px;">
                <h4>Contas: </h4>
                <?php
                      
                      if (!isset($_SESSION['questaoFracao'])) {
                          echo "É necessário realizar as atividades para ver os acertos das respostas";
                      } 
                      else{
                        for($i = 0; $i < count($_SESSION['questaoFracao']); $i++) {
                        
                            $img = $_SESSION['acertoFracao'][$i] == 1 ? '<img src="img/correct-symbol.png" width="6%">' : '<img src="img/delete.png" width="5%">';
                            echo "<h4>".$_SESSION['questaoFracao'][$i]." &nbsp; $img </h4>";
                        }
                      }
                      
                      ?>

            </div>
            <?php } ?>
            <div class="modal-footer">
                <button type="button" onClick="gototab();" class="btn btn-danger">Fechar</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Potenciacao -->
<div class="modal fade" id="modalRespostasPotenciacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="padding-bottom: 0px;">

                <?php if (!isset($_SESSION['questaoFracao'])) {
                          echo "É necessário realizar as atividades para ver os acertos das respostas";
                      } else{
                    echo '<h5 class="modal-title" id="tituloModalRespostas" style="color:black;">Quantidade de questões '.count($_SESSION['questaoFracao']).'<br>
                    <b>
                        <p style="font-size: 16px;">Quantidade de acertos '. $qtAcertos .'
                </p>
                </b>
                </h5>';
                }
                ?>

            </div>
            <?php if (isset($_SESSION['questaoFracao'])) { ?>
            <div class="modal-body texto-alterado" style="padding-top: 0px; margin-top: 10px;">
                <h4>Contas: </h4>
                <?php
                      
                      if (!isset($_SESSION['questaoFracao'])) {
                          echo "É necessário realizar as atividades para ver os acertos das respostas";
                      } 
                      else{
                        for($i = 0; $i < count($_SESSION['questaoFracao']); $i++) {
                        
                            $img = $_SESSION['acertoFracao'][$i] == 1 ? '<img src="img/correct-symbol.png" width="6%">' : '<img src="img/delete.png" width="5%">';
                            echo "<h4>".$_SESSION['questaoFracao'][$i]." &nbsp; $img </h4>";
                        }
                      }
                      
                      ?>

            </div>
            <?php } ?>
            <div class="modal-footer">
                <button type="button" onClick="gototab();" class="btn btn-danger">Fechar</button>
            </div>
        </div>
    </div>
</div>

<main role="main">
