<?php 
include_once('conexao.php');
?>
<!Doctype HTML>
<html>
<head></head>
<body>
<table>
<tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Sexo</th>
    <th>Atualizar</th>
    <th>Deletar</th>
</tr>
<tr>
<?php
    $sql = 'SELECT id, nome, sexo FROM tb_pessoa';
    foreach ($conn->query($sql) as $row) {
        echo "<tr>";
        echo "<td>".$row['id'] . "</td>";
        echo "<td>".$row['nome'] . "</td>";
        echo "<td>".$row['sexo'] . "</td>";
        echo "<td><a href='#?id=" .$row['id']. "'"."> Atualizar</a></td>";
        echo "<td><a href='#?id=".$row['id']."'"."> Deletar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
$conn = null;
?>
<input type="button" value = "cadastrar" onclick="window.location.href='formulario.html';">
</body>
</html>