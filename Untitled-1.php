<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    // Número específico para o qual você deseja enviar a mensagem
    $whatsapp_numero = "5551985109343";

    // Mensagem que será enviada
    $mensagem = "Sua mensagem personalizada aqui.";

    // Cria o link do WhatsApp
    $link_whatsapp = "https://wa.me/{$whatsapp_numero}?text=" . rawurlencode($mensagem);

    // Redireciona para o link do WhatsApp
    header("Location: $link_whatsapp");
    exit();
}
?>
