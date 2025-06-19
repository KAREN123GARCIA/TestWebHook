<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "¡Hola Mundo desde WebHook!";
} else {
    echo "Usa una petición POST.";
}
?>
