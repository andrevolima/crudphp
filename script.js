function validarFormulario() {
    // Obtém os valores dos campos
    var nome = document.forms[0]["nome"].value;
    var email = document.forms[0]["email"].value;
    var senha = document.forms[0]["senha"].value;
    var dtNascimento = document.forms[0]["dt_nascimento"].value;

    // Verifica se algum campo está vazio
    if (nome === "" || email === "" || senha === "" || dtNascimento === "") {
        alert("Por favor, preencha todos os campos.");
        return false; // Impede o envio do formulário
    }

    return true; // Permite o envio do formulário
}
document.getElementById('enviar_btn').addEventListener('click', validarFormulario);
