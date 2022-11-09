<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";

try {
  $conn = new PDO("mysql:host=$servidor;dbname=bd_jacv", $usuario, $senha);
  $conn->exec("set names utf8mb4");
} catch(PDOException $e) {
  echo "Falha na conexão: " . $e->getMessage();
}catch(Exception $e){
    echo "Erro" . $e->getMessage();
}
?>
