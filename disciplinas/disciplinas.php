<?
  include('../inc/conecta.inc');
  include('../inc/cabecalho.php');


  switch($acao)
  {
               case lista:
                    include('cabecalho_disciplinas.php');
                    include('lista_disciplinas.php');
                    break;
                    
               case novo;
                    include('novo_disciplinas.php');
                    break;
                    
               case alterar;
                    include('alterar_disciplinas.php');
                    break;
  }

?>
