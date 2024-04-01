<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if ($_POST['username'] == 'portaria' and $_POST['password'] == 'FatecAraras') {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Fatec ZoneParking';
        header("location: ./welcome.php");
    } else {
        $error_message = "Credenciais Inválidas! <br/> Por favor, tente novamente.";
    }
}
