document.addEventListener("DOMContentLoaded", function () {
    const cepForm = document.getElementById("cepForm");
    const cepInput = document.getElementById("cep");
    const confirmarButton = document.getElementById("confirmar");
    const resultadoDiv = document.getElementById("resultado");
    const resultadoCep = document.getElementById("resultadoCep");
    const resultadoLogradouro = document.getElementById("resultadoLogradouro");
    const resultadoBairro = document.getElementById("resultadoBairro");
    const resultadoCidade = document.getElementById("resultadoCidade");
    const resultadoEstado = document.getElementById("resultadoEstado");
    const voltarButton = document.getElementById("voltar");

    confirmarButton.addEventListener("click", function () {
        const cepValue = cepInput.value.replace(/\D/g, "");
        
        if (cepValue.length === 8) {
            // Formate a URL para a consulta ao ViaCEP
            const url = `https://viacep.com.br/ws/${cepValue}/json/`;

            // Realiza a requisição Ajax para buscar os dados do CEP
            fetch(url)
                .then((response) => response.json())
                .then((data) => {
                    if (!data.erro) {
                        resultadoCep.textContent = data.cep;
                        resultadoLogradouro.textContent = data.logradouro;
                        resultadoBairro.textContent = data.bairro;
                        resultadoCidade.textContent = data.localidade;
                        resultadoEstado.textContent = data.uf;
                        resultadoDiv.style.display = "block";
                    } else {
                        resultadoDiv.style.display = "none";
                        alert("CEP não encontrado.");
                    }
                })
                .catch((error) => {
                    console.error("Erro na busca de CEP:", error);
                });
        } else {
            resultadoDiv.style.display = "none";
            alert("CEP inválido. Certifique-se de que são 8 dígitos numéricos.");
        }
    });

    voltarButton.addEventListener("click", function () {
        resultadoDiv.style.display = "none";
    });
});
