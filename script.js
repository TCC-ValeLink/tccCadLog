const password = document.getElementById('password');
const icon = document.getElementById('icon2');

function showHide()
{
    if(password.type === 'password')
    {
        password.setAttribute('type', 'text');
        icon.classList.add('hide')
    }

    else
    {
        password.setAttribute('type', 'password')
        icon.classList.remove('hide')
    }
}

document.getElementById("confirmar-senha").addEventListener("submit", function(event) {
    var password = document.getElementById("senha").value;
    var confirmPassword = document.getElementById("conSenha").value;

    if (password !== confirmPassword) {
        document.getElementById("message").innerHTML = "<div id='error_confirmarsenha' class='erro_confirmarsenha'><p>Senha Incorreta</p></div>";

        event.preventDefault();  // Impede o envio do formulário
    } else {
        message.textContent = ""; // Limpa a mensagem de erro
    }
});

