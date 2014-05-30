<?
  include('../inc/conecta.inc');


  switch ($acao)
  {
         case novo:
               $sql_alunos="INSERT INTO alunos (aluno) VALUES ('$aluno')";
               pg_query($sql_alunos);
               break;
               
         case alterar:
               $sql_alunos="UPDATE alunos SET aluno='$aluno' WHERE codaluno=$codaluno";
               pg_query($sql_alunos);
               break;
               
         case excluir:
               $sql_alunos="DELETE FROM alunos WHERE codaluno=$codaluno";
               pg_query($sql_alunos);
               break;
  }
   header('location:alunos.php?acao=lista');
?>
