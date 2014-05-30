<style>
.botao
     {
        height:40;
        font-size:15px;
     }
</style>
<?
$sql_alunos="
             SELECT
                   codaluno, aluno
             FROM
                 alunos
             ORDER BY
                   codaluno  desc
                   LIMIT 10
";
$cons_alunos=pg_query($sql_alunos);
while ($alunos=pg_fetch_object($cons_alunos))
{
  # Zebrado
  if ($cor==$corzebrado) $cor=''; else $cor=$corzebrado;
?>
      <tr>
          <td><?php echo "$alunos->aluno"; ?></td>
          <td align=center>
              <a href=javascript:alterar(<?php echo "$alunos->codaluno"; ?>)><img src=../imagens/alterar.png title=Alterar></a>
              <a href=javascript:excluir(<?php echo "$alunos->codaluno"; ?>)><img src=../imagens/excluir.png title=Excluir></a></td>
      </tr>
<?php }

?>
</table>
<p><br></p>
<center><input type=button class=botao value='Emitir Relatório' onclick=javascript:relatorio()></center>
<script>
function excluir(codaluno)
{
   if (confirm('Deseja realmente excluir o registro?'+codaluno))
   {
      location.replace('alunos_sql.php?acao=excluir&codaluno='+codaluno);
   }
}
function alterar(codaluno)
{
   location.replace('alunos.php?acao=alterar&codaluno='+codaluno);
}
   function relatorio()
   {
      window.open('relatorios.php')
   }
</script>
