<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        include "./session.php";
    }
?>


<?php
$arquivos = array("./includes/DB/carros.txt", "./includes/DB/motos.txt");
$msg = " ";

if (isset($_GET['tipo'])){
    $tipo = $_GET['tipo'];

    if($tipo == 'motos') {
        $arquivos = array("./includes/DB/motos.txt");
        $msg = " com Moto";
    } elseif($tipo == 'carros') {
        $arquivos = array("./includes/DB/carros.txt");
        $msg = " com Carro";
    }
}

// Loop através de cada arquivo
$contador = 1;
foreach ($arquivos as $arquivo) {
    $handle = fopen($arquivo, "r");

    if ($handle) {
                while (!feof($handle)) {
                    $line = fgets($handle);
                    $dados = explode('|', $line); // Divide a linha em partes usando o caractere '|'
                    if (count($dados) == 5) {
                        
                        if ($dados[3] == "Null"){
                            $dados[3] = "Não Informado";
                        }
                        
                        echo "
                        <tr>
                            <th scope='row'>$contador</th>
                            <td>$dados[0]</td>
                            <td>$dados[1]</td>
                            <td>$dados[2]</td>
                            <td>$dados[3]</td>
                            <td>$dados[4]</td>
                        </tr>
                        ";
                        $contador++;
                    }
                }
        // Fecha o arquivo
        fclose($handle);
    }
}
?>