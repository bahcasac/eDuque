<?php
    include "template/header.php";
    ?>
<section id="jumbotron" class="jumbotron text-center my-4 pb-4 px-0">
    <div class="container">
        <h1 class="jumbotron-heading">Curso de Potenciação</h1>
        <p class="lead text-muted" id="sub-jumbotron">Vamos aprender um pouco mais sobre Potenciação.</p>
    </div>
</section>

<div class="row">
    <div class="col-md-1 fixed-top" id="acessibilidade1" style="margin-top: 300px;">
        <div class="row justify-content-md-center">
            <a id="botao-cor" class="btn btn-dark" href="<?php 
                                                     if ((!isset($_GET['cor']))){
                                                        echo basename($_SERVER['PHP_SELF'])." ?cor=1" ; } elseif($_GET['cor']==1){ echo basename($_SERVER['PHP_SELF'])."?cor=0" ; } else{ echo basename($_SERVER['PHP_SELF'])."?cor=1" ; } ?>">Alterar cor</a>
            <!--<input type="range" oninput="incfont();" id="fontsize" orient="vertical" min="10" max="60" value="20" />-->
            <div class="container ml-0 mt-3">
                <div class="donut-chart-block block">
                    <div class="donut-chart">
                        <div class="center" style="margin-left: 14px;">
                            <span><b>A</b></span>
                        </div>
                    </div>
                </div>

                <div id="range" class="range-slider">
                    <input type="range" oninput="incfont();" orient="vertical" min="0" max="40" value="18" />
                    <div class="range-slider__bar"></div>
                    <div class="range-slider__thumb"></div>
                </div>

                <div class="donut-chart-block block">
                    <div class="donut-chart">
                        <div class="center" style="margin-left: 15px;">
                            <span><b>a</b></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-1">
    </div>
    <div class="col-md-8">

        <div class="container" id="sizetext">

            <div class="row justify-content-md-center">
                <div class="col-sm-11">
                    <h3>Vamos estudar?</h3>
                    <p>
                        <b class="h1"></b>
                        <b></b>
                    </p>
                    <p>
                        <ul>
                            <li>Seja a multiplicação <b>2 . 2 . 2</b> onde todos os fatores são iguais. Podemos indicar este produto de modo abreviado dois elevado a três;</li>
                            Denominamos:
                            <li><b>Base:</b> o número que se repete.</li>
                            <li><b>Expoente:</b> o número de fatores iguais, isto é, a quantidade de vezes que a base é multiplicada.</li>
                            <li><b>Potência:</b> resultado da operação.</li>
                            <li>A operação efetuada é denominada <b>potenciação.</b></li>
                        </ul>
                    </p>

                    <p>
                        Exemplos:
                        <ul>
                            <li><b>5 elevado a quarta potência</b> é a mesma coisa que cinco vezes cinco, vezes cinco, vezes cinco igual a 625.</li>
                            <li><b>4 elevado ao cubo</b> é a mesma coisa que quatro, vezes quatro, vezes quatro igual a 64.</li>
                        </ul>

                    </p>


                    <p>Um número natural é um quadrado perfeito, por exemplo, um número qualquer elevado a dois, ou um número qualquer elevado ao quadrado ou seja, o numero vezes ele mesmo.</p>

                    <h4>Leitura</h4>
                    <p>
                        Exemplos:
                        <ul>
                            <li>3² (lê-se “três elevado ao quadrado ou o quadrado de três”)</li>
                            <li>2³ (lê-se “dois elevado ao cubo ou o cubo de dois”)</li>
                        </ul>
                    </p>
                    <p>
                        (lê-se “sete elevado à quarta potência ou a quarta potência de sete”) <br>
                        (lê-se “seis elevado à quinta potência ou a quinta potência de seis”)
                    </p>

                    <p>
                        <b>Em resumo: </b>um número ao quadrado perfeito é um número qualquer elevado a dois, ou, um número qualquer elevado ao quadrado.
                    </p>
                </div>
            </div>
            <hr>
            <hr style="border-top: 1px solid white; display: block;">
            <div class="row justify-content-md-center">
                <div class="col-sm-11" id="praticar">
                    <h3>Vamos praticar?</h3>
                    <?php
                $x = rand(1, 10);

                $a = rand(1, 10);
                $b = $a > 6 ? 2 : rand(2,3);

                $rand1 = rand(0,6);
                $rand2 = $rand1 == 0 ? rand(2,6) : rand(0,4);
                $rand3 = $rand1 == 0 || $rand2 == 0 ? rand(2,8) : rand(0,2);
                $rand4 = $rand1 == 0 || $rand2 == 0 || $rand3 == 0 ? rand(2,4) : 0;

                $q1 = pow($a,$b)+$rand1;
                $q2 = pow($a,$b)+$rand2;
                $q3 = pow($a,$b)+$rand3;
                $q4 = pow($a,$b)+$rand4;

                $modal1 = $q1 == (pow($a,$b)) ? "Certa" : "Errada";
                $modal2 = $q2 == (pow($a,$b)) ? "Certa" : "Errada";
                $modal3 = $q3 == (pow($a,$b)) ? "Certa" : "Errada";
                $modal4 = $q4 == (pow($a,$b)) ? "Certa" : "Errada";
                    
                $questao = strval($a)."<sup>".strval($b)."</sup> = ". strval(pow($a,$b));

                $res1 = '<button data-toggle="modal" data-target="#modalResposta'.$modal1.'" class="btn btn-outline-primary btn-lg col-5 mr-2 py-4"><h1>'.$q1.'</h1></button>';
                $res2 = '<button data-toggle="modal" data-target="#modalResposta'.$modal2.'" class="btn btn-outline-primary btn-lg col-5 mr-2 py-4"><h1>'.$q2.'</h1></button>';
                $res3 = '<button data-toggle="modal" data-target="#modalResposta'.$modal3.'" class="btn btn-outline-primary btn-lg col-5 mr-2 py-4"><h1>'.$q3.'</h1></button>';
                $res4 = '<button data-toggle="modal" data-target="#modalResposta'.$modal4.'" class="btn btn-outline-primary btn-lg col-5 mr-2 py-4"><h1>'.$q4.'</h1></button>';

                ?>
                    <center>
                        <h1>
                            <?=$a;?> <sup>
                                <?=$b;?></sup> = ?</h1>
                    </center>
                    <div class="row mb-2 justify-content-md-center">
                        <?= $res1; ?>
                        <?= $res2; ?>
                    </div>
                    <div class="row justify-content-md-center">
                        <?= $res3; ?>
                        <?= $res4; ?>
                    </div>
                    <br>
                    <div class="row justify-content-md-center">
                        <button data-toggle="modal" id="btnResultados" data-target="#modalRespostasPotenciacao" class="btn btn-lg btn-dark">Consultar exercícios realizados</button>
                    </div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="modalRespostaErrada" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="tituloModalErrado">Resposta Errada &nbsp; <img src="img/delete.png" width="7%"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body texto-alterado">
                            <h4>A resposta correta é: </h4>
                            <h4>
                                <?=$a;?><sup>
                                    <?=$b;?></sup> =
                                <?=pow($a,$b);?>
                            </h4>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-success" href="potenciacao.php?fracao=<?=$fracao+1;?>&acertoFracao=0&questaoFracao=<?=$questao;?>&cor=<?=$cor;?>#praticar">Praticar novamente</a>
                            <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            <button type="button" onClick="gototab();" class="btn btn-success">Praticar novamente</button>-->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalRespostaCerta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="tituloModalCerto">Resposta Correta &nbsp; <img src="img/correct-symbol.png" width="8%"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body texto-alterado">
                            <h2>
                                <?=$a;?> <sup>
                                    <?=$b;?></sup> =
                                <?=pow($a,$b);?>
                            </h2>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-success" href="potenciacao.php?fracao=<?=$fracao+1;?>&acertoFracao=1&questaoFracao=<?=$questao;?>&cor=<?=$cor;?>#praticar">Próxima questão</a>
                            <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            <button type="button" onClick="gototab();" class="btn btn-success">Praticar novamente</button>-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-2 fixed-top" style="margin-top: 230px; margin-left:80%;">
        <a id="link-video" class="link-card" href="#" data-toggle="modal" data-target="#modalVideo" style="text-decoration:none;">
            <div id="video" class="card bg-light mb-3" style="max-width: 18rem;">
                <p class="text-center h2">Vídeo</p>
                <div class="card-body text-secondary text-center">
                    <img src="img/youtube_social_icon_red.png">
                </div>
            </div>
        </a>
        <a id="link-audio" class="link-card" href="#" data-toggle="modal" data-target="#modalAudio" style="text-decoration:none;">
            <div id="audio" class="card bg-light mb-3" style="max-width: 18rem;">
                <p class="text-center h2">Áudio</p>
                <div class="card-body text-secondary text-center">
                    <img id="icone_audio" src="img/audio_black.png" width="70%">
                </div>
            </div>
        </a>



        
    </div>
    
    <!-- Modal -->
        <div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloModalVideo">Vídeo - Potência</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <video width="650" controls>
                            <source src="video/potenciacao.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalAudio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloModalAudio">Áudio - Potenciação</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <audio width="650" controls onplay="hideModal();">
                            <source src="audio/potenciacao.mp4" type="audio/mp4">
                            Your browser does not support the video tag.
                        </audio>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        
</div>


    <?php
    include "template/footer.php";
    ?>
