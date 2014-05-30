<?
  include('../inc/conecta.inc');
  include('../inc/cabecalho.php');


  switch($acao)
  {
               case lista:
                    include('cabecalho_grades.php');
                    include('lista_grades.php');
                    break;
                    
               case novo;
                    include('novo_grades.php');
                    break;
                    
               case alterar;
                    include('alterar_grades.php');
                    break;
  }

?>
