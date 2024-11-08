<?php 
//Constantes para armazenamento das variáveis de conexão.
define('HOST', '127.0.0.1');
define('DBNAME', 'moletom');
define('USER', 'root');
define('PASSWORD', '0102');

//Conectando com o Servidor
try {$conn = mysqli_connect(HOST, USER, PASSWORD, DBNAME);
} catch(Exception) {
    die("não.");
}

//Realizando uma consulta no BD
$instrucaoSQL = "Select Username, Password From login";
$stmt = mysqli_prepare($conn, $instrucaoSQL);
mysqli_stmt_bind_result($stmt, $User, $pass);
mysqli_stmt_execute($stmt);

while (mysqli_stmt_fetch($stmt)) {
	echo $User . "\t";
	echo $pass . "\t";
}

//Encerrando a conexão
mysqli_close($conn);

?>