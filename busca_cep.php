<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cep = $_POST["cep"];
    
    // Formate a URL para a consulta ao ViaCEP
    $url = "https://viacep.com.br/ws/{$cep}/json/";

    // Inicialize a cURL
    $ch = curl_init($url);

    // Configura as opções da cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Faz a requisição GET ao ViaCEP
    $response = curl_exec($ch);

    // Fecha a sessão da cURL
    curl_close($ch);

    // Decodifica a resposta JSON
    $data = json_decode($response, true);

    // Verifica se os dados foram encontrados
    if (!$data || isset($data["erro"])) {
        $response = [
            "error" => "CEP não encontrado.",
        ];
    } else {
        $logradouro = $data["logradouro"];
        $bairro = $data["bairro"];
        $cidade = $data["localidade"];
        $estado = $data["uf"];

        $response = [
            "logradouro" => $logradouro,
            "bairro" => $bairro,
            "cidade" => $cidade,
            "estado" => $estado,
        ];
    }

    echo json_encode($response);
}
?>
