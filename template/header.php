<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/4.1/examples/album/ -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="img/logo.png">

	<title>Eduque Todos</title>

	<!-- Bootstrap core CSS -->
	<link href="./css/bootstrap.min.css" rel="stylesheet">

	
	<style>

		/*  slider */
.range-slider {
  display: inline-block;
  width: 40px;
  position: relative;
  text-align: center;
  height: 200px;

}
.range-slider__thumb {
  position: absolute;
  left: 5px;
  width: 30px;
  height: 30px;
  line-height: 30px;
  background: #e6323e;
  color: #fff;
  font-size: 60%;
  border-radius: 50%;
  pointer-events: none;
}
.range-slider__bar {
  left: 16px;
  bottom: -200px;
  position: absolute;
  pointer-events: none;
  width: 8px;
  border-radius: 10px;
}
.range-slider input[type=range][orient=vertical] {
  position: relative;
  margin: 0;
  height: 100%;
  width: 100%;
  display: inline-block;
  position: relative;
  writing-mode: bt-lr;
  -webkit-appearance: slider-vertical;
}
.range-slider input[type=range][orient=vertical]::-webkit-slider-runnable-track, .range-slider input[type=range][orient=vertical]::-webkit-slider-thumb {
  -webkit-appearance: none;
}
.range-slider input[type=range][orient=vertical]::-webkit-slider-runnable-track {
  border: none;
  background: #343440;
  width: 8px;
  border-color: #343440;
  border-radius: 10px;
}
.range-slider input[type=range][orient=vertical]::-moz-range-track {
  border: none;
  background: #343440;
  width: 8px;
  border-color: #343440;
  border-radius: 10px;
}
.range-slider input[type=range][orient=vertical]::-ms-track {
  border: none;
  background: #343440;
  width: 8px;
  border-color: #343440;
  border-radius: 10px;
  color: transparent;
  height: 100%;
}
.range-slider input[type=range][orient=vertical]::-ms-fill-lower, .range-slider input[type=range][orient=vertical]::-ms-fill-upper, .range-slider input[type=range][orient=vertical]::-ms-tooltip {
  display: none;
}
.range-slider input[type=range][orient=vertical]::-webkit-slider-thumb {
  width: 30px;
  height: 30px;
  opacity: 0;
}
.range-slider input[type=range][orient=vertical]::-moz-range-thumb {
  width: 30px;
  height: 30px;
  opacity: 0;
}

/* ---- range alterado ----*/
.range-slider-alterado input[type=range][orient=vertical]::-webkit-slider-runnable-track {
  border: none;
  background: #fff;
  width: 8px;
  border-color: #fff;
  border-radius: 10px;
}
.range-slider-alterado input[type=range][orient=vertical]::-moz-range-track {
  border: none;
  background: #fff;
  width: 8px;
  border-color: #fff;
  border-radius: 10px;
}
.range-slider-alterado input[type=range][orient=vertical]::-ms-track {
  border: none;
  background: #fff;
  width: 8px;
  border-color: #fff;
  border-radius: 10px;
  color: transparent;
  height: 100%;
}



/**/


/* ---------------------- */

@import url(https://fonts.googleapis.com/css?family=Dosis:700);
body {
  font-family: "Dosis", Helvetica, Arial, sans-serif; 
}

input[type="range"] {
  display: block;
  -webkit-appearance: none;
  background-color: #bdc3c7; 
  width: 70%;
  height: 5px;
  border-radius: 5px;
  outline: 0;
}
input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  background-color: #e74c3c;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  border: 2px solid white;
  cursor: pointer;
  transition: .3s ease-in-out;
}​
  input[type="range"]::-webkit-slider-thumb:hover {
	background-color: white;
	border: 2px solid #e74c3c;
  }
  input[type="range"]::-webkit-slider-thumb:active {
	transform: scale(1.3	);
  }
		
@media only screen and (max-width: 420px) {
	#acessibilidade1{ display: none !important; }
	}
@media only screen and (min-width: 420px) {
	#acessibilidade1{ display: inline !important; }
	}
	
	@media only screen and (max-width: 420px) {
	#acessibilidade2{ display: inline !important; }
	}
@media only screen and (min-width: 420px) {
	#acessibilidade2{ display: none !important; }
	}
	
	
	/* ---------- fundo -----------*/
	.fundo{
		background-color:#151515;
		color: white;
	}
	.jumbotron-alterado{
		background-color:#2E2E2E;
	}
	.text-muted-alterado{
		color:#DCDCDC;
	}
	.card-alterado{
		background-color:#2E2E2E;
	}
	
	.link-card{
		text-decoration:none;
		color: #000;
	}
	
	.link-card-alterado{
		text-decoration:none;
		color: #fff;
	}
	
	</style>

	<!-- Custom styles for this template -->
  </head>

  <body id ="corpo" class="">

	<header>
		<div id="menu" class="navbar navbar-dark bg-dark shadow-sm fixed-top px-0">
			<div class="navbar-nav">
	
				<a href="./Index.php" class="navbar-brand d-flex align-items-center">
					<img src="./img/logo.png" width="40" height="40" style="margin-right:5px;"/>
					<strong>eDuque Todos</strong>
				</a>  
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				

				
			</div>

			<div class="col pr-0" id="acessibilidade2">
				<div class="row">
					<label for="fontsize" class="mt-3" id="slider_value" style="color: white;">18px</label>
					  <input class="mx-0 mt-4" type="range" oninput="incfont();" id="fontsize" min="10" max="50" step="1" value="18">

				</div>
				
				
			</div>

		</div>
	</header>

	<main role="main">