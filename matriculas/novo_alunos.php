<form name=alunos action=alunos_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=novo type=hidden>
      <tr>
          <td>Nome do aluno: <input name=aluno size=25%></td>
      </tr>
      <tr>
        <td align=center>
            <a href=javascript:salvar()><img src=../imagens/salvar.png></a>
            <a href=<?php echo "alunos.php?acao=lista"; ?>><img src=../imagens/cancelar.png></a>
        </td>
      </tr>
</table>
</form>
</center>
<script>
function salvar()
{
   if (alunos.aluno.value == "")
   {
      alert("Por favor preencha o nome do aluno !!!");
      alunos.aluno.focus();
      exit;
   }
   document.alunos.submit();
}
</script>
