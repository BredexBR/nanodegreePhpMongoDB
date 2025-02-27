<?php
echo "Lista dos alunos: ";

require_once __DIR__ . '/../env.php';

// conexão com o banco de dados
$mongoUri = "mongodb://".DB_USER.":".DB_PASS."@".DB_HOST.":".DB_PORT."/".DB_NAME."?authSource=admin";
//echo $mongoUri;

$conn = new MongoDB\Driver\Manager($mongoUri);

//try {
//    $conn->executeCommand("admin", new MongoDB\Driver\Command(["ping" => 1]));
//    echo "Conexão com o MongoDB bem-sucedida!";
//} catch (Exception $e) {
//    die("Erro de conexão: " . $e->getMessage());
//}

// MongoDB\Driver\Query()        <-  Função em PHP que constroe a query
//  [],                          <-  Filtros de busca, neste exemplo nenhum   
//  ['sort' => [ 'nome' => 1],   <-  Definimos a ordenação com o comando ‘sort’ utilizando o atríbuto ‘nome’ e a ordem crescente (1). 
//  'limit' => 5         		 <-  Limitação da quantidade dos resultados apresentado, no exemplo 5 
//  ]);                          <-  Fim da função  
$query = new MongoDB\Driver\Query([], ['sort' => [ 'nome' => 1],'limit' => 5]);

// A função executeQuery executa a consulta no banco de dados e coleção informados
$resultado = $conn->executeQuery('classedb.alunos', $query);

?>

<table border=1><tr>
   <td>Nome</td>
   <td>Turma</td>
   <td>Sexo</td>
   </tr>   

<?php

// Apresentação dos resultados da consulta
foreach ($resultado as $linha) {
	// Deve informar o nome da chave (atríbuto) com que o valor foi registrado no banco de dados
    // neste exemplo as chaves 'nome', 'turma' e 'sexo'	
    echo "<tr><td>$linha->nome</td><td>$linha->turma</td>
	<td>$linha->sexo</td></tr>";
}
?>

</table>
