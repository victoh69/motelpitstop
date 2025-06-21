function validateForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    if (name === "" || email === "" || message === "") {
        alert("Por favor, preencha todos os campos!");
        return false;
    }

    document.getElementById("formResponse").innerText = "Mensagem enviada com sucesso! Em breve entraremos em contato.";
    return false; // Para evitar envio real de formulário (apenas para demonstração)
}
