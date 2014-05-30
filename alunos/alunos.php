<?
  include('../inc/conecta.inc');
  include('../inc/cabecalho.php');


  switch($acao)
  {
               case lista:
                    include('cabecalho_alunos.php');
                    include('lista_alunos.php');
                    break;
                    
               case novo;
                    include('novo_alunos.php');
                    break;
                    
               case alterar;
                    include('alterar_alunos.php');
                    break;
  }

?>
