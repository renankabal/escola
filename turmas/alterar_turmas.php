<form name=turmas action=turmas_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=alterar type=hidden>
      <tr>
          <td>
          <?
              echo " <input name=codturma value=$codturma type=hidden>";
              $sql_turmas="
                  SELECT
                    codturma, turma
                  FROM
                    turmas
                  WHERE
                    codturma=$codturma
              ";
              $cons_turmas=pg_query($sql_turmas);
              $turmas=pg_fetch_object($cons_turmas);
              echo" <input name=turma size=25% value='$turmas->turma'>";
          ?>
          </td>
      </tr>
      <tr>
          <td align=center>
            <a href=javascript:salvar()><img src=../imagens/salvar.png></a>
            <a href=<?php echo "turmas.php?acao=lista"; ?>><img src=../imagens/cancelar.png></a>
          </td>
      </tr>
</form>
</table>

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
