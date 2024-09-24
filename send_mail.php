<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cores = $_POST['cores'];
    $ideias = $_POST['ideias'];

    $to = "teu-email@exemplo.com"; // Substitua pelo email onde deseja receber os dados
    $subject = "Novo contato do oPlano Digital";
    $message = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nCores preferidas: $cores\nIdeias: $ideias";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar e-mail.";
    }
} else {
    echo "Método inválido.";
}
?>
