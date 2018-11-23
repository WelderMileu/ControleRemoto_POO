<!DOCTYPE html>
<html leng="pt-br">
<header>
	<meta charset="utf-8">
	<title>Controle Remoto - </title>
</header>
	<body>
		<pre>
			Se o Controle estiver desligado, os comandos nao serao executados
			<?php
				require_once "controle_remoto.php";
				
				
				$c1 = new Controle();
				$c1->ligar(); 
				//$c1->desligar();
				$c1->aumentarVolume();
				$c1->aumentarVolume();
				$c1->aumentarVolume();
				$c1->aumentarVolume();
				$c1->aumentarVolume();
				$c1->aumentarVolume();
				$c1->aumentarVolume();
				$c1->aumentarVolume();
				$c1->diminuirVolume();
				$c1->diminuirVolume();
				$c1->pausar();
				$c1->play();
				$c1->abrirMenu();
				
			?>
		</pre>
	</body>
</html>