<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_REQUEST['nome'];
    $telefone = $_REQUEST['numero'];
    $email = $_REQUEST['email'];
    $mensagem = $_REQUEST['mensagem'];
  
    echo "<p>Nome: $nome</p>";
    echo "<p>Telefone: $telefone</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Mensagem: $mensagem</p>";
}
?>
