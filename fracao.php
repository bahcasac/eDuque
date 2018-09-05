<?php
	include "template/header.php";
?>

<section class="jumbotron text-center">
<div class="container" style="margin-top:3%; margin-bottom: -3%">
  <h1 class="jumbotron-heading">Curso de frações</h1>
  <p class="lead text-muted">Vamos aprender um pouco mais sobre frações.</p>
</div>
</section>

<div class="row">
	<div class="col-md-1 fixed-top" style="margin-top:18%;>
		<div class="row justify-content-md-center">
			<input type="range" onchange="incfont();" id="fontsize" orient="vertical" min="10" max="60" value="20" />
		</div>
	

	</div>
	
	<div class="col-md-11">

		<div class="container" id="sizetext">

			  <div class="row justify-content-md-center">	
				<div class="col-sm-11" >
				<h3>Vamos estudar?</h3>
					<p>
						O símbolo  significa <b>a:b</b>, sendo <b>a</b> e <b>b</b> números naturais e b diferente de zero.
					</p>
					<p>
						Chamamos:
						<ul>
							<li><b>a</b> de numerador;</li>
							<li><b>b</b> de denominador;</li>
						</ul>
					</p>
					
					<p>
						Se <b>a</b> é múltiplo de <b>b</b>, então  é um número natural. Veja um exemplo:
					</p>
					<p>
						A fração  é igual a 8:2. Neste caso, 8 é o numerador e 2 é o denominador. 
						<br>
						Efetuando a divisão de 8 por 2, obtemos o quociente 4. Assim,  é um número natural e 8 é múltiplo de 2.
					</p>
					
					Durante muito tempo, os números naturais foram os únicos conhecidos e usados pelos homens. 
					<br>
					Depois começaram a surgir questões que não poderiam ser resolvidas com números naturais. 
					<br>
					Então surgiu o conceito de número fracionário.
				</div>
			  </div>
		</div>
	</div>
</div>


      
<?php
	include "template/footer.php";
?>