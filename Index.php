<?php
	include "template/header.php";
?>


<section id="jumbotron" class="jumbotron text-center my-4 pb-4 px-0">
    <div class="container">
        <h1 class="jumbotron-heading">eDuque Todos</h1>
        <p class="lead text-muted" id="sub-jumbotron">Cursos educativos acessíveis para crianças.</p>
    </div>
</section>


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
                <input type="range" oninput="incfont();" orient="vertical" min="0" max="50" value="18" />
                <div class="range-slider__bar"></div>
                <div class="range-slider__thumb"></div>
            </div>

            <div class="donut-chart-block block">
                <div class="donut-chart">
                    <div class="center" style="margin-left: 14px;">
                        <span><b>a</b></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="album py-5" id="sizetext" style="margin-top:-2.5%;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <a href="fracao.php">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Fração" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_165a734f38b%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_165a734f38b%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.7265625%22%20y%3D%22120.3%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    </a>
                    <div class="card-body">
                        <p class="card-text" style="color:black;">Curso de frações - Matemática</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-md btn-outline-primary" href="fracao.php">Fazer o curso</a>
                            </div>
                            <small class="text-muted">Duração - 10 min</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <a href="potenciacao.php">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Potenciação" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_165a734f38b%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_165a734f38b%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.7265625%22%20y%3D%22120.3%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                    </a>
                    <div class="card-body">
                        <p class="card-text" style="color:black;">Curso de potenciação - Matemática</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-md btn-outline-primary" href="potenciacao.php">Fazer o curso</a>
                            </div>
                            <small class="text-muted">Duração - 10 min</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	include "template/footer.php";
?>
