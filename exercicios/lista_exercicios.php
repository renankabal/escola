<style>
.botao
     {
        height:40;
        font-size:15px;
     }
</style>
<?
$sql_exercicios="
             SELECT
                   codexercicio, exercicio
             FROM
                 exercicios
             ORDER BY
                   codexercicio  desc
                   LIMIT 10
";
$cons_exercicios=pg_query($sql_exercicios);
while ($exercicios=pg_fetch_object($cons_exercicios))
{
  # Zebrado
  if ($cor==$corzebrado) $cor=''; else $cor=$corzebrado;
?>
      <tr>
          <td><?php echo "$exercicios->exercicio"; ?></td>
          <td align=center>
              <a href=javascript:alterar(<?php echo "$exercicios->codexercicio"; ?>)><img src=../imagens/alterar.png title=Alterar></a>
              <a href=javascript:excluir(<?php echo "$exercicios->codexercicio"; ?>)><img src=../imagens/excluir.png title=Excluir></a></td>
      </tr>
<?php }

?>
</table>
<p><br></p>
<center><input type=button class=botao value='Emitir Relatório' onclick=javascript:relatorio()></center>
<script>
function excluir(codexercicio)
{
   if (confirm('Deseja realmente excluir o registro?'+codexercicio))
   {
      location.replace('exercicios_sql.php?acao=excluir&codexercicio='+codexercicio);
   }
}
function alterar(codexercicio)
{
   location.replace('exercicios.php?acao=alterar&codexercicio='+codexercicio);
}
   function relatorio()
   {
      window.open('relatorios.php')
   }
</script>
