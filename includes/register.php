<?php
    if (!empty($_POST['fname']) && !empty($_POST['ra'])) {
        
        // Verifica se o campo está vazio e substitui por "Null"
        $plveiculo = (!empty($_POST['placa_veiculo'])) ? $_POST['placa_veiculo'] : "Null";
        $veiculo = $_POST['veiculo'];
        $dataCad = date("d/m/Y");
        $nome = $_POST['fname'];
        $ra = $_POST['ra'];
        
        $data = "$nome|$ra|$veiculo|$plveiculo|$dataCad";

        // Condição para salvar em arquivos diferentes os tipos de veiculos
        if ($veiculo == 'carro'){
            $filename = "./includes/DB/carros.txt";
        } else{
            $filename = "./includes/DB/motos.txt";
        }

        $handle = fopen($filename, "a+");
        fwrite($handle, $data . "\n");
        fclose($handle);
        
        $msgSucesso = "Cadastro Realizado com Sucesso";
    }
?>