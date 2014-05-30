<style>
       table
       {
        border-collapse:collapse;
       }
</style>
<title>ESCOLA</title>
<center><table border=1 width=70%>
       <tr>
           <th width=50% align=center>TURMA</th>
           <th width=50% align=center>DISCIPLINA</th>
           <th width=10% align=center>COMANDOS<br>
               <a href=javascript:novo()><img src=../imagens/novo.png title="Cadastrar uma nova Grade">
           </th>
       </tr>
       
<script>
function novo()
{
  location.replace('grades.php?acao=novo')
}
</script>


