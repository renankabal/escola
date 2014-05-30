<?
  include('../inc/conecta.inc');
  include('../inc/cabecalho.php');


  switch($acao)
  {
               case lista:
                    include('cabecalho_exercicios.php');
                    include('lista_exercicios.php');
                    break;
                    
               case novo;
                    include('novo_exercicios.php');
                    break;
                    
               case alterar;
                    include('alterar_exercicios.php');
                    break;
  }

?>
