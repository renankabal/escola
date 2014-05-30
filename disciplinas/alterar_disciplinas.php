<form name=disciplinas action=disciplinas_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=alterar type=hidden>
      <tr>
          <td>
          <?
              echo " <input name=coddisciplina value=$coddisciplina type=hidden>";
              $sql_disciplinas="
                  SELECT
                    coddisciplina, disciplina
                  FROM
                    disciplinas
                  WHERE
                    coddisciplina=$coddisciplina
              ";
              $cons_disciplinas=pg_query($sql_disciplinas);
              $disciplinas=pg_fetch_object($cons_disciplinas);
              echo" <input name=disciplina size=25% value='$disciplinas->disciplina'>";
          ?>
          </td>
      </tr>
      <tr>
          <td align=center>
            <a href=javascript:salvar()><img src=../imagens/salvar.png></a>
            <a href=<?php echo "disciplinas.php?acao=lista"; ?>><img src=../imagens/cancelar.png></a>
          </td>
      </tr>
</form>
</table>

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
