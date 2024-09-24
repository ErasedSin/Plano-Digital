<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cores = $_POST['cores'];
    $ideias = $_POST['ideias'];

    $to = "lonelysin12@gmail.com"; // Seu e-mail
    $subject = "Novo formulário de contato";
    $message = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nCores preferidas: $cores\nIdeias: $ideias";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
}
?>
