<?php
echo "Lista dos alunos: ";

require_once __DIR__ . '/../env.php';

// conexão com o banco de dados
$mongoUri = "mongodb://".DB_USER.":".DB_PASS."@".DB_HOST.":".DB_PORT."/".DB_NAME."?authSource=admin";
//echo $mongoUri;

$conn = new MongoDB\Driver\Manager($mongoUri);

$query = new MongoDB\Driver\Query([],['sort' => [ 'nome' => 1],'limit' => 5]);

$resultado = $conn->executeQuery('classedb.alunos', $query);

foreach ($resultado as $linha) {
    echo "<br>$linha->nome - $linha->turma - $linha->sexo";
}
?>
