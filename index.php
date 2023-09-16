<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de CEP</title>
    <link rel="stylesheet" href="src/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Lato:ital,wght@1,300;1,400&family=Poppins&family=Roboto:ital,wght@0,400;1,100;1,300&family=Rubik:ital,wght@0,400;1,300&family=Signika+Negative:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="espacamento">
    <div class="container">
        <h1>Pesquisa de CEP</h1>
        <form id="cepForm">
            <input type="text" id="cep" name="cep" placeholder="CEP:" required>
            <button type="button" id="confirmar">Confirmar</button>
        </form>
            <form id="cepForm">
                <div id="resultado" class="container2" style="display: none;">
                    <h2>Resultado da Pesquisa</h2>
                    <p><strong>CEP:</strong> <span id="resultadoCep"></span></p>
                    <p><strong>Logradouro:</strong> <span id="resultadoLogradouro"></span></p>
                    <p><strong>Bairro:</strong> <span id="resultadoBairro"></span></p>
                    <p><strong>Cidade:</strong> <span id="resultadoCidade"></span></p>
                    <p><strong>Estado:</strong> <span id="resultadoEstado"></span></p>
                    <button type="button" id="voltar" style="margin-top: 10px;">Voltar</button>
                </div>
            </form>
    </div>
    </div>
    <script src="script/script.js"></script>
</body>
</html>
