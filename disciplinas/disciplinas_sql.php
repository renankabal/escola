<?
  include('../inc/conecta.inc');


  switch ($acao)
  {
         case novo:
               $sql_disciplinas="INSERT INTO disciplinas (disciplina) VALUES ('$disciplina')";
               //echo "$sql_disciplinas";
               pg_query($sql_disciplinas);
               break;
               
         case alterar:
               $sql_disciplinas="UPDATE disciplinas SET disciplina='$disciplina' WHERE coddisciplina=$coddisciplina";
               pg_query($sql_disciplinas);
               break;
               
         case excluir:
               $sql_disciplinas="DELETE FROM disciplinas WHERE coddisciplina=$coddisciplina";
               pg_query($sql_disciplinas);
               break;
  }
   header('location:disciplinas.php?acao=lista');
?>
