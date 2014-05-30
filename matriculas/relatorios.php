<html>
	<head>
		<title>Relatório</title>
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
			<div class="titulo">LISTA DE ALUNOS DA TURMA 112</div>
			<div class="corpo">

			<table class='dados'>
              <tr>
                  <th width='20%'>TURMA</th>
                  <th width='60%'>ALUNOS</th>
                  <th width='20%'>EXERCICIO</th>
              </tr>
            <?php
            $sql_alunos="
            SELECT
	              turmas.turma, alunos.aluno, exercicios.exercicio
            FROM
	              seleciona_matriculas
            LEFT JOIN turmas ON turmas.codturma=seleciona_matriculas.codturma
            LEFT JOIN alunos ON alunos.codaluno=seleciona_matriculas.codaluno
            LEFT JOIN exercicios ON exercicios.codexercicio=seleciona_matriculas.codexercicio";
            $cons_alunos=pg_query($sql_alunos);
            while ($alunos=pg_fetch_object($cons_alunos))
            {
            ?>
              <tr>
                  <td><?php echo $alunos->turma; ?></td>
                  <td><?php echo $alunos->aluno; ?></td>
                  <td><?php echo $alunos->exercicio; ?></td>
              </tr>
            <?php
            }
            ?>
            </table></center><br>
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
			<center>Rodapé aqui</center>
		</div>
	</body>
</html>

