<html>
    <head>
      <link rel="stylesheet" type="text/css" href="folha_estilo.css">
    	<title>Título da Página</title>
    </head>
    <body>
      <div class="classe01">
      	<form name="form1" method="post" action="exercicio7.php">
      	<legend>
          <span class="numero">2</span>
          Resposta
        </legend>
         <span class="enunciado">



              <hr>  
              <br>
              <br>
          </span>
      	<br> 
    <span class="resposta">
		<?php

        $numero1        = (int) $_POST['massa'];
        $numero2        = (double) $_POST['altura'];
        $imc           = $massa / ( $altura * $altura );
        echo "<b> Seu IMC é: </b>";
        echo $imc;
        echo "<br><br>";

		?>
    </span>
        <input name="botao" type="submit" value="< Voltar" />
		</form>
		</div>
    </body>
</html>
