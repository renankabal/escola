<style>
.botao
     {
        height:40;
        font-size:15px;
     }
</style>
<?
$sql_turmas="
             SELECT
                   codturma, turma
             FROM
                 turmas
             ORDER BY
                   codturma  desc
                   LIMIT 10
";
$cons_turmas=pg_query($sql_turmas);
while ($turmas=pg_fetch_object($cons_turmas))
{
  # Zebrado
  if ($cor==$corzebrado) $cor=''; else $cor=$corzebrado;
?>
      <tr>
          <td><?php echo "$turmas->turma"; ?></td>
          <td align=center>
              <a href=javascript:alterar(<?php echo "$turmas->codturma"; ?>)><img src=../imagens/alterar.png title=Alterar></a>
              <a href=javascript:excluir(<?php echo "$turmas->codturma"; ?>)><img src=../imagens/excluir.png title=Excluir></a></td>
      </tr>
<?php }

?>
</table>
<p><br></p>
<center><input type=button class=botao value='Emitir Relatório' onclick=javascript:relatorio()></center>
<script>
function excluir(codturma)
{
   if (confirm('Deseja realmente excluir o registro?'+codturma))
   {
      location.replace('turmas_sql.php?acao=excluir&codturma='+codturma);
   }
}
function alterar(codturma)
{
   location.replace('turmas.php?acao=alterar&codturma='+codturma);
}
   function relatorio()
   {
      window.open('relatorios.php')
   }
</script>
