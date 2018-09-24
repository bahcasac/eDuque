<?php
	include "template/header.php";
?>

<section id="jumbotron" class="jumbotron text-center my-4 pb-4 px-0">
    <div class="container">
        <h1 class="jumbotron-heading">Curso de frações</h1>
        <p class="lead text-muted" id="sub-jumbotron">Vamos aprender um pouco mais sobre frações.</p>
    </div>
</section>

<div class="row">
    <div class="col-md-1 fixed-top" id="acessibilidade1" style="margin-top: 300px;">
        <div class="row justify-content-md-center">
            <a id="botao-cor" class="btn btn-dark" href="
            <?php echo basename($_SERVER['PHP_SELF'])."?cor=".$trocaCor."&fracao=".$fracao."#praticar" ; 
            ?>
            ">Alterar cor</a>
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
                        <b class="h1">&frac34;</b> - O símbolo significa <b>3&divide;4</b>, sendo <b>a</b> e <b>b</b> números naturais e b diferente de zero.
                    </p>
                    <p class="cursor">Chamamos:</p>
                    <ul>
                        <li><b>a</b> de numerador;</li>
                        <li><b>b</b> de denominador;</li>
                    </ul>



                    <p>
                        Se <b>a</b> é múltiplo de <b>b</b>, então é um número natural. Veja um exemplo:
                    </p>
                    <p>
                        <b class="h1">&frac12;</b> A fração é igual a 1&divide;2. Neste caso, 1 é o numerador e 2 é o denominador.
                        <br>
                        Efetuando a divisão de 1 por 2, o resultado (quociente) é 0,5.
                    </p>

                    Durante muito tempo, os números naturais foram os únicos conhecidos e usados pelos homens.
                    <br>
                    Depois começaram a surgir questões que não poderiam ser resolvidas com números naturais.
                    <br>
                    Então surgiu o conceito de número fracionário.
                </div>
            </div>
            <hr>
            <hr style="border-top: 1px solid white; display: block;">
            <div class="row justify-content-md-center">
                <div class="col-sm-11" id="praticar">
                    <h3>Vamos praticar?</h3>
                    <?php
                    
					$x = rand(1, 171);
					
					$array = [
"1/1",
"1/2",
"1/4",
"1/5",
"1/10",
"1/20",
"2/1",
"2/2",
"2/4",
"2/5",
"2/8",
"2/10",
"2/20",
"3/1",
"3/2",
"3/3",
"3/4",
"3/5",
"3/6",
"3/10",
"3/12",
"3/15",
"3/20",
"4/1",
"4/2",
"4/4",
"4/5",
"4/8",
"4/10",
"4/16",
"4/20",
"5/1",
"5/2",
"5/4",
"5/5",
"5/10",
"5/20",
"6/1",
"6/2",
"6/3",
"6/4",
"6/5",
"6/6",
"6/8",
"6/10",
"6/12",
"6/15",
"6/20",
"7/1",
"7/2",
"7/4",
"7/5",
"7/7",
"7/10",
"7/14",
"7/20",
"8/1",
"8/2",
"8/4",
"8/5",
"8/8",
"8/10",
"8/16",
"8/20",
"9/1",
"9/2",
"9/3",
"9/4",
"9/5",
"9/6",
"9/9",
"9/10",
"9/12",
"9/15",
"9/18",
"9/20",
"10/1",
"10/2",
"10/4",
"10/5",
"10/8",
"10/10",
"10/20",
"11/1",
"11/2",
"11/4",
"11/5",
"11/10",
"11/11",
"11/20",
"12/1",
"12/2",
"12/3",
"12/4",
"12/5",
"12/6",
"12/8",
"12/10",
"12/12",
"12/15",
"12/16",
"12/20",
"13/1",
"13/2",
"13/4",
"13/5",
"13/10",
"13/13",
"13/20",
"14/1",
"14/2",
"14/4",
"14/5",
"14/7",
"14/8",
"14/10",
"14/14",
"14/20",
"15/1",
"15/2",
"15/3",
"15/4",
"15/5",
"15/6",
"15/10",
"15/12",
"15/15",
"15/20",
"16/1",
"16/2",
"16/4",
"16/5",
"16/8",
"16/10",
"16/16",
"16/20",
"17/1",
"17/2",
"17/4",
"17/5",
"17/10",
"17/17",
"17/20",
"18/1",
"18/2",
"18/3",
"18/4",
"18/5",
"18/6",
"18/8",
"18/9",
"18/10",
"18/12",
"18/15",
"18/18",
"18/20",
"19/1",
"19/2",
"19/4",
"19/5",
"19/10",
"19/19",
"19/20",
"20/1",
"20/2",
"20/4",
"20/5",
"20/8",
"20/10",
"20/16",
"20/20"];

					
					$a = str_ireplace("/","",substr($array[$x],0,2));
					$b = str_ireplace("/","",substr($array[$x],2,4));
					
					$rand1 = rand(0,6);
					$rand2 = $rand1 == 0 ? rand(2,6) : rand(0,4);
					$rand3 = $rand1 == 0 || $rand2 == 0 ? rand(2,8) : rand(0,2);
					$rand4 = $rand1 == 0 || $rand2 == 0 || $rand3 == 0 ? rand(2,4) : 0;
					
					$q1 = $a/$b+$rand1;
					$q2 = $a/$b+$rand2;
					$q3 = $a/$b+$rand3;
					$q4 = $a/$b+$rand4;
					
					$modal1 = $q1 == ($a/$b) ? "Certa" : "Errada";
					$modal2 = $q2 == ($a/$b) ? "Certa" : "Errada";
					$modal3 = $q3 == ($a/$b) ? "Certa" : "Errada";
					$modal4 = $q4 == ($a/$b) ? "Certa" : "Errada";
                    
                    $questao = strval($a)."&divide;".strval($b)." = ". strval($a/$b);
                    
					
					$res1 = '<button data-toggle="modal" data-target="#modalResposta'.$modal1.'" class="btn btn-outline-primary btn-lg col-5 mr-2 py-4"><h1>'.$q1.'</h1></button>';
					$res2 = '<button data-toggle="modal" data-target="#modalResposta'.$modal2.'" class="btn btn-outline-primary btn-lg col-5 mr-2 py-4"><h1>'.$q2.'</h1></button>';
					$res3 = '<button data-toggle="modal" data-target="#modalResposta'.$modal3.'" class="btn btn-outline-primary btn-lg col-5 mr-2 py-4"><h1>'.$q3.'</h1></button>';
					$res4 = '<button data-toggle="modal" data-target="#modalResposta'.$modal4.'" class="btn btn-outline-primary btn-lg col-5 mr-2 py-4"><h1>'.$q4.'</h1></button>';
					
					?>
                    <center>
                        <h1>
                            <?=$a;?> &divide;
                            <?=$b;?> = ?</h1>
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
                            <button data-toggle="modal" id="btnResultados" data-target="#modalRespostasFracao" class="btn btn-lg btn-dark">Consultar exercícios realizados</button>
                       </div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="modalRespostaErrada" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="tituloModalErrado">Resposta Errada &nbsp; <img src="img/delete.png" width="7%"></h4>
                        </div>
                        <div class="modal-body texto-alterado">
                            <h4>A resposta correta é: </h4>
                            <h4>
                                <?=$a;?> &divide;
                                <?=$b;?> =
                                <?=$a/$b;?>
                            </h4>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-success" href="fracao.php?fracao=<?=$fracao+1;?>&acertoFracao=0&questaoFracao=<?=$questao;?>&cor=<?=$cor;?>#praticar">Praticar novamente</a>
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
                            <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button> -->
                        </div>
                        <div class="modal-body texto-alterado">
                            <h2>
                                <?=$a;?> &divide;
                                <?=$b;?> =
                                <?=$a/$b;?>
                            </h2>
                        </div>
                        <div class="modal-footer">
                            <!--<button type="button" onClick="gototab();" class="btn btn-success">Fechar</button>-->
                            <a class="btn btn-success" href="fracao.php?fracao=<?=$fracao+1;?>&acertoFracao=1&questaoFracao=<?=$questao;?>&cor=<?=$cor;?>#praticar">Próxima questão</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-2 fixed-top" style="margin-top: 230px; margin-left:80%;">
        <a id="link-video" class="link-card" href="#" data-toggle="modal" data-target="#modalVideo" style="text-decoration:none;">
            <div id="video" class="card bg-light mb-3" style="max-width: 18rem;">
                <p class="text-center h2">Ver Vídeo</p>
                <div class="card-body text-secondary text-center">
                    <img src="img/youtube_social_icon_red.png">
                </div>
            </div>
        </a>
        <a id="link-audio" class="link-card" href="#" data-toggle="modal" data-target="#modalAudio" style="text-decoration:none;">
            <div id="audio" class="card bg-light mb-3" style="max-width: 18rem;">
                <p class="text-center h2">Ouvir Áudio</p>
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
                        <h5 class="modal-title" id="tituloModalVideo">Vídeo - Fração</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <video width="650" controls>
                            <source src="video/fracao1.mp4" type="video/mp4">
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
                        <h5 class="modal-title" id="tituloModalAudio">Áudio - Fração</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <audio width="650" controls onplay="hideModal();">
                            <source src="audio/fracao.mp4" type="audio/mp4">
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
