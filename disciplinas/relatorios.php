<html>
	<head>
		<title>Relat�rio</title>
		<link rel="stylesheet" type="text/css" href="../inc/relatorio.css">

		<style>
		.dados td{
			text-align: center;
		}
		</style>
	</head>
	<body>
		<div class='container'>
			<div class="cabecalho">
            <?php
					require_once "../inc/conecta.inc";
					require_once "../inc/cabecalho_agenda.inc";
			?>
			</div>
			<div class="titulo">T�TULO DO RELAT�RIO AQUI</div>
			<div class="corpo">
			<?php
			echo "<table class='dados'>";
			echo "<th width='60%'>COLUNA 1</th>";
			echo "<th width='40%'>COLUNA 2</th>";
			echo "</table>";
            ?>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
            <p><br></p>
			</div>
			<center>Rodap� aqui</center>
		</div>
	</body>
</html>

