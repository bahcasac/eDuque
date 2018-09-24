</main>

<hr style="margin-top:50px;">
<hr style="border-top: 1px solid white; display: block;">
<footer class="footer text-muted" style="margin-top:20px; margin-bottom:-10">
    <div class="container">
        <p class="float-right">
            <a class=”navbar-brand” onclick="levTop();" href="#">Voltar para o topo</a>
        </p>
        <p>Desenvolvido para o TCC do curso de Sistemas de Informação da Universidade Presbiteriana Mackenzie</p>
        <p>Este site é destinado apenas para fins educativos</p>
    </div>
</footer>


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')

</script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/holder.min.js"></script>

<script>
    function incfont() {
        var t = document.getElementById('fontsize').value;
        var x = document.getElementById('sizetext');
        var value = document.getElementById('slider_value');
        x.style.fontSize = t + "px";
        value.textContent = t + "px ";

    }

    function gototab() {
        window.location.hash = '#praticar';
        window.location.reload(true);
    }
    
    function hideModal() {
       //$('#modalAudio').modal('hide');
    }

    function trocar() {
        // altera todo documento
        var obj = document.getElementById('corpo');
        if (obj.className == '') {
            obj.className = 'fundo';
            document.getElementById('menu').className = "navbar navbar bg-white shadow-sm fixed-top px-0";

            document.getElementById('btnCursos').className = "btn btn-outline-dark";
            document.getElementById('btnResultados').className = "btn btn-outline-dark";
            document.getElementById('range').className = "range-slider range-slider-alterado";
            document.getElementById('jumbotron').className = "jumbotron text-center my-4 pb-4 px-0 jumbotron-alterado";
            document.getElementById('sub-jumbotron').className = "lead text-muted-alterado";
            document.getElementById('tituloModalVideo').className = "modal-title modal-title-alterado";
            document.getElementById('tituloModalAudio').className = "modal-title modal-title-alterado";
            document.getElementById('tituloModalErrado').className = "modal-title modal-title-alterado";
            document.getElementById('tituloModalCerto').className = "modal-title modal-title-alterado";
            document.getElementById('sizetext').className = "album fundo";
            document.getElementById('botao-cor').className = "btn btn-light";

        } else {
            obj.className = '';
            document.getElementById('menu').className = "navbar navbar-dark bg-dark shadow-sm fixed-top px-0";
            document.getElementById('btnCursos').className = "btn btn-outline-light";
            document.getElementById('btnResultados').className = "btn btn-outline-light";
            document.getElementById('range').className = "range-slider";
            document.getElementById('jumbotron').className = "jumbotron text-center my-4 pb-4 px-0";
            document.getElementById('sub-jumbotron').className = "lead text-muted";
            document.getElementById('tituloModalVideo').className = "modal-title";
            document.getElementById('tituloModalAudio').className = "modal-title";
            document.getElementById('tituloModalErrado').className = "modal-title";
            document.getElementById('tituloModalCerto').className = "modal-title";
            document.getElementById('sizetext').className = "album";
            document.getElementById('botao-cor').className = "btn btn-dark";

        }




        /* altera o video */
        var obj = document.getElementById('video');
        if (obj.className == 'card bg-light mb-3') {
            obj.className = 'card mb-3 card-alterado';
            document.getElementById('link-video').className = "link-card-alterado"
        } else {
            obj.className = 'card bg-light mb-3';
            document.getElementById('link-video').className = "link-card"
        }

        /* altera o audio */
        var obj = document.getElementById('audio');
        if (obj.className == 'card bg-light mb-3') {
            obj.className = 'card mb-3 card-alterado';
            document.getElementById('icone_audio').src = "img/audio_white.png"
            document.getElementById('link-audio').className = "link-card-alterado"
        } else {
            obj.className = 'card bg-light mb-3';
            document.getElementById('icone_audio').src = "img/audio_black.png"
            document.getElementById('link-audio').className = "link-card"
        }


    }

</script>
<script>
    // ------------------------- //

    //function updateDonut(percent, element){
    //element.parentNode.querySelector("span").innerHTML = percent + "px";
    //}

    function updateSlider(element) {
        if (element) {
            var parent = element.parentElement;
            var thumb = parent.querySelector('.range-slider__thumb'),
                bar = parent.querySelector('.range-slider__bar'),
                texto = document.getElementById('sizetext'),
                pct = element.value * 2.2 //element.value * ((parent.clientHeight - thumb.clientHeight) / parent.clientHeight);
            thumb.style.bottom = pct + '%';
            bar.style.height = 100; //'calc(' + pct + '% + ' + thumb.clientHeight / 5 + 'px)';
            thumb.textContent = element.value + 'px';
            texto.style.fontSize = element.value + 'px';

        }
        //updateDonut(element.value, element.parentNode);
    }
    (function initAndSetupTheSliders() {
        [].forEach.call(document.getElementsByClassName("container"), function(el) {
            var inputs = [].slice.call(el.querySelectorAll('.range-slider input'));
            inputs.forEach(function(input) {
                input.setAttribute('value', '18');
                updateSlider(input);
                input.addEventListener('input', function(element) {
                    updateSlider(input);
                });
                input.addEventListener('change', function(element) {
                    updateSlider(input);
                });
            });
        });
    }());

    // ------------

</script>
<script type="text/javascript">
    function topTop() {
        var totop = $(window).scrollTop() - 8;
        if (totop <= 0) {
            clearInterval(idInterval);
        } else {
            totop--;
            $(window).scrollTop(totop);
        }
    }

    function levTop() {
        idInterval = setInterval('topTop();', 1);
    }

</script>




</body>

</html>
