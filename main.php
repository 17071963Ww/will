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

    $headers = apache_request_headers();
    $ApacheHeaders = '';
    foreach ($headers as $header => $value) {
        $ApacheHeaders .= "$header: $value <br />\n";
    }
    echo $ApacheHeaders;

    echo "metodo: <br>";

    echo $_SERVER['REQUEST_METHOD'];

}
?>
