<?
  include('../inc/conecta.inc');


  switch ($acao)
  {
         case novo:
               $sql_exercicios="INSERT INTO exercicios (exercicio) VALUES ('$exercicio')";
               pg_query($sql_exercicios);
               break;
               
         case alterar:
               $sql_exercicios="UPDATE exercicios SET exercicio='$exercicio' WHERE codexercicio=$codexercicio";
               pg_query($sql_exercicios);
               break;
               
         case excluir:
               $sql_exercicios="DELETE FROM exercicios WHERE codexercicio=$codexercicio";
               pg_query($sql_exercicios);
               break;
  }
   header('location:exercicios.php?acao=lista');
?>
