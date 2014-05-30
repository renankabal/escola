<form name=turmas action=turmas_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=novo type=hidden>
      <tr>
          <td>Nome do turma: <input name=turma size=25%></td>
      </tr>
      <tr>
        <td align=center>
            <a href=javascript:salvar()><img src=../imagens/salvar.png></a>
            <a href=<?php echo "turmas.php?acao=lista"; ?>><img src=../imagens/cancelar.png></a>
        </td>
      </tr>
</table>
</form>
</center>
<script>
function salvar()
{
   if (turmas.turma.value == "")
   {
      alert("Por favor preencha o nome do turma !!!");
      turmas.turma.focus();
      exit;
   }
   document.turmas.submit();
}
</script>
