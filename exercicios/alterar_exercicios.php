<form name=exercicios action=exercicios_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=alterar type=hidden>
      <tr>
          <td>
          <?
              echo " <input name=codexercicio value=$codexercicio type=hidden>";
              $sql_exercicios="
                  SELECT
                    codexercicio, exercicio
                  FROM
                    exercicios
                  WHERE
                    codexercicio=$codexercicio
              ";
              $cons_exercicios=pg_query($sql_exercicios);
              $exercicios=pg_fetch_object($cons_exercicios);
              echo" <input name=exercicio size=25% value='$exercicios->exercicio'>";
          ?>
          </td>
      </tr>
      <tr>
          <td align=center>
            <a href=javascript:salvar()><img src=../imagens/salvar.png></a>
            <a href=<?php echo "exercicios.php?acao=lista"; ?>><img src=../imagens/cancelar.png></a>
          </td>
      </tr>
</form>
</table>

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
