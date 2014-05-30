<?
  include('../inc/conecta.inc');


  switch ($acao)
  {
         case novo:
               $sql_turmas="INSERT INTO turmas (turma) VALUES ('$turma')";
               pg_query($sql_turmas);
               break;
               
         case alterar:
               $sql_turmas="UPDATE turmas SET turma='$turma' WHERE codturma=$codturma";
               pg_query($sql_turmas);
               break;
               
         case excluir:
               $sql_turmas="DELETE FROM turmas WHERE codturma=$codturma";
               pg_query($sql_turmas);
               break;
  }
   header('location:turmas.php?acao=lista');
?>
