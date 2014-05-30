<form name=exercicios action=exercicios_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=novo type=hidden>
      <tr>
          <td>Nome do exercicio: <input name=exercicio size=25%></td>
      </tr>
      <tr>
        <td align=center>
            <a href=javascript:salvar()><img src=../imagens/salvar.png></a>
            <a href=<?php echo "exercicios.php?acao=lista"; ?>><img src=../imagens/cancelar.png></a>
        </td>
      </tr>
</table>
</form>
</center>
<script>
function salvar()
{
   if (exercicios.exercicio.value == "")
   {
      alert("Por favor preencha o nome do exercicio !!!");
      exercicios.exercicio.focus();
      exit;
   }
   document.exercicios.submit();
}
</script>
