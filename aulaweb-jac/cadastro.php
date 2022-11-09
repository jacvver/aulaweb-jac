<?php
include_once('conexao.php');
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];

try{
    $stm = $conn->prepare("INSERT INTO tb_pessoa (nome, sexo) VALUES (:nome , :sexo)");
    $stm->bindParam(':nome',$nome);
    $stm-> bindParam(':sexo',$sexo);
    $stm->execute();   
    $conn=null;
    Header("Location: listacadastro.php");

}catch(Exception $e){
    echo "Erro " . $e->getMessage();
}