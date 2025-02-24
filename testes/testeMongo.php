<?php

require_once __DIR__ . '/../config.php';

echo "Testando a conexão entre o PHP e o MongoDB: \n";

// função que conecta o PHP com o MongoDB
// parametros: mongodb://<nome-usuário>:<senha-usuário>@<IP-hospedagem-MongoDB>:<porta-acesso>/<nome-banco-de-dados-mongodb>
$mongoUri = "mongodb://".DB_USER.":".DB_PASS."@".DB_HOST.":".DB_PORT."/".DB_NAME;

//echo $mongoUri."\n";

$conn = new MongoDB\Driver\Manager($mongoUri);

// a função var_dumb 
// a função getServers() retorna informações sobre 
//o servidor. Mostrando que conseguiu se conectar 
//ao banco de dados.

var_dump($conn->getServers());

?>
