<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "Bem-vindo, " . $_SESSION['username'] . "!";
} else {
    echo '<span><a href="login.html">Entre</a> ou <a href="cadastro.html">Cadastre-se</a></span>';
}
?>
