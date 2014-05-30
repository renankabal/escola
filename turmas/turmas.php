<?
  include('../inc/conecta.inc');
  include('../inc/cabecalho.php');


  switch($acao)
  {
               case lista:
                    include('cabecalho_turmas.php');
                    include('lista_turmas.php');
                    break;
                    
               case novo;
                    include('novo_turmas.php');
                    break;
                    
               case alterar;
                    include('alterar_turmas.php');
                    break;
  }

?>
