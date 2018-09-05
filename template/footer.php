 </main>


    <footer class="footer text-muted bg-dark" style="margin-top:50px; margin-bottom:-10">
      <div class="container">
        <p class="float-right">
          <a href="./Index.php">Voltar para o topo</a>
        </p>
        <p>Desenvolvido para o TCC do curso de Sistemas de Informação da Universidade Presbiteriana Mackenzie</p>
        <p>Este site é destinado apenas para fins educativos</p>        
      </div>
    </footer>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/holder.min.js"></script>
	
	<script>
		var size;
		function incfont(){
			var t = document.getElementById('fontsize').value;
			var x = document.getElementById('sizetext');
			x.style.fontSize = t+"px";
			size = t;
			document.getElementById('size').innerHTML = size;
		}
	</script>
  

    
  </body>
</html>