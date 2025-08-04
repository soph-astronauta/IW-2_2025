<?php
require 'conexao.php';
$sql = "SELECT * FROM produtos";
$stmt = $pdo->query($sql);
while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "ID: " . $produto['id'] . "<br>";
echo "Nome: " . $produto['nome'] . "<br>";
echo "Preço: R$" . $produto['preco'] . "<br>";
echo "Estoque: " . $produto['estoque'] . "<br><br>";
}
?>