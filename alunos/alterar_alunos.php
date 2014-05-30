<form name=alunos action=alunos_sql.php>
<center><table border=1 width=10%>
      <input name=acao value=alterar type=hidden>
      <tr>
          <td>
          <?
              echo " <input name=codaluno value=$codaluno type=hidden>";
              $sql_alunos="
                  SELECT
                    codaluno, aluno
                  FROM
                    alunos
                  WHERE
                    codaluno=$codaluno
              ";
              $cons_alunos=pg_query($sql_alunos);
              $alunos=pg_fetch_object($cons_alunos);
              echo" <input name=aluno size=25% value='$alunos->aluno'>";
          ?>
          </td>
      </tr>
      <tr>
          <td align=center>
            <a href=javascript:salvar()><img src=../imagens/salvar.png></a>
            <a href=<?php echo "alunos.php?acao=lista"; ?>><img src=../imagens/cancelar.png></a>
          </td>
      </tr>
</form>
</table>

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
