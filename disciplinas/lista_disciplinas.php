<style>
.botao
     {
        height:40;
        font-size:15px;
     }
</style>
<?
$sql_disciplinas="
             SELECT
                   coddisciplina, disciplina
             FROM
                 disciplinas
             ORDER BY
                   coddisciplina  desc
                   LIMIT 10
";
$cons_disciplinas=pg_query($sql_disciplinas);
while ($disciplinas=pg_fetch_object($cons_disciplinas))
{
  # Zebrado
  if ($cor==$corzebrado) $cor=''; else $cor=$corzebrado;
?>
      <tr>
          <td><?php echo "$disciplinas->disciplina"; ?></td>
          <td align=center>
              <a href=javascript:alterar(<?php echo "$disciplinas->coddisciplina"; ?>)><img src=../imagens/alterar.png title=Alterar></a>
              <a href=javascript:excluir(<?php echo "$disciplinas->coddisciplina"; ?>)><img src=../imagens/excluir.png title=Excluir></a></td>
      </tr>
<?php }

?>
</table>
<p><br></p>
<center><input type=button class=botao value='Emitir Relatório' onclick=javascript:relatorio()></center>
<script>
function excluir(coddisciplina)
{
   if (confirm('Deseja realmente excluir o registro?'+coddisciplina))
   {
      location.replace('disciplinas_sql.php?acao=excluir&coddisciplina='+coddisciplina);
   }
}
function alterar(coddisciplina)
{
   location.replace('disciplinas.php?acao=alterar&coddisciplina='+coddisciplina);
}
   function relatorio()
   {
      window.open('relatorios.php')
   }
</script>
