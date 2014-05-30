<style>
.botao
     {
        height:40;
        font-size:15px;
     }
</style>
<?
$sql_grades="
             SELECT
                   codgrade, turmas.turma, disciplinas.disciplina
             FROM
                 grades
             LEFT JOIN turmas ON turmas.codturma=grades.codturma
             LEFT JOIN disciplinas ON disciplinas.coddisciplina=grades.coddisciplina
             ORDER BY
                   codgrade  desc
                   LIMIT 10
";
$cons_grades=pg_query($sql_grades);
while ($grades=pg_fetch_object($cons_grades))
{
  # Zebrado
  if ($cor==$corzebrado) $cor=''; else $cor=$corzebrado;
?>
      <tr>
          <td><?php echo "$grades->turma"; ?></td>
          <td><?php echo "$grades->disciplina"; ?></td>
          <td align=center>
              <a href=javascript:alterar(<?php echo "$grades->codgrade"; ?>)><img src=../imagens/alterar.png title=Alterar></a>
              <a href=javascript:excluir(<?php echo "$grades->codgrade"; ?>)><img src=../imagens/excluir.png title=Excluir></a></td>
      </tr>
<?php }

?>
</table>
<p><br></p>
<center><input type=button class=botao value='Emitir Relatório' onclick=javascript:relatorio()></center>
<script>
function excluir(codgrade)
{
   if (confirm('Deseja realmente excluir o registro?'+codgrade))
   {
      location.replace('grades_sql.php?acao=excluir&codgrade='+codgrade);
   }
}
function alterar(codgrade)
{
   location.replace('grades.php?acao=alterar&codgrade='+codgrade);
}
   function relatorio()
   {
      window.open('relatorios.php')
   }
</script>
