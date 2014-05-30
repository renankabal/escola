<style>
.botao
     {
        height:40;
        font-size:15px;
     }
</style>
<?
$sql_matriculas="
             SELECT
                   codmatricula, turmas.turma, alunos.aluno, exercicios.exercicio
             FROM
                 matriculas
                 LEFT JOIN turmas ON turmas.codturma=matriculas.codturma
                 LEFT JOIN alunos ON alunos.codaluno=matriculas.codaluno
                 LEFT JOIN exercicios ON exercicios.codexercicio=matriculas.codexercicio
             ORDER BY
                   codmatricula  desc
                   LIMIT 10
";
$cons_matriculas=pg_query($sql_matriculas);
while ($matriculas=pg_fetch_object($cons_matriculas))
{
  # Zebrado
  if ($cor==$corzebrado) $cor=''; else $cor=$corzebrado;
?>
      <tr>
          <td><?php echo "$matriculas->turma"; ?></td>
          <td><?php echo "$matriculas->aluno"; ?></td>
          <td><?php echo "$matriculas->exercicio"; ?></td>
          <td align=center>
              <a href=javascript:alterar(<?php echo "$matriculas->codmatricula"; ?>)><img src=../imagens/alterar.png title=Alterar></a>
              <a href=javascript:excluir(<?php echo "$matriculas->codmatricula"; ?>)><img src=../imagens/excluir.png title=Excluir></a></td>
      </tr>
<?php }

?>
</table>
<p><br></p>
<center><input type=button class=botao value='Emitir Relatório' onclick=javascript:relatorio()></center>
<script>
function excluir(codmatricula)
{
   if (confirm('Deseja realmente excluir o registro?'+codmatricula))
   {
      location.replace('matriculas_sql.php?acao=excluir&codmatricula='+codmatricula);
   }
}
function alterar(codmatricula)
{
   location.replace('matriculas.php?acao=alterar&codmatricula='+codmatricula);
}
   function relatorio()
   {
      window.open('relatorios.php')
   }
</script>
