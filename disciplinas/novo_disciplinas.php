<form name=disciplinas action=disciplinas_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=novo type=hidden>
      <tr>
          <td>Nome do disciplina: <input name=disciplina size=25%></td>
      </tr>
      <tr>
        <td align=center>
            <a href=javascript:salvar()><img src=../imagens/salvar.png></a>
            <a href=<?php echo "disciplinas.php?acao=lista"; ?>><img src=../imagens/cancelar.png></a>
        </td>
      </tr>
</table>
</form>
</center>
<script>
function salvar()
{
   if (disciplinas.disciplina.value == "")
   {
      alert("Por favor preencha o nome do disciplina !!!");
      disciplinas.disciplina.focus();
      exit;
   }
   document.disciplinas.submit();
}
</script>
