<?
  include('../inc/conecta.inc');
  include('../inc/cabecalho.php');


  switch($acao)
  {
               case lista:
                    include('cabecalho_matriculas.php');
                    include('lista_matriculas.php');
                    break;
                    
               case novo;
                    include('novo_matriculas.php');
                    break;
                    
               case alterar;
                    include('alterar_matriculas.php');
                    break;
  }

?>
