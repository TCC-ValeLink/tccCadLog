<?php
session_start();
include("../model/connect.php");
 
if (isset($_POST['login'])) {
    if ($_POST['login'] === 'usuario') {
        $_SESSION['Usuario'] = '0';
        header("Location: ../view/cadastro.php");
        exit;
    } elseif ($_POST['login'] === 'empresa') {
        $_SESSION['Usuario'] = '1';
        header("Location: ../view/cadastroemp.php");
        exit;
    }
}
 
if (isset($_POST['campo_email']) || isset($_POST['campo_senha'])) {
    if (strlen($_POST['campo_email']) == 0) {
        echo "<div id='error_email' class='erro_email'>Preencha seu email</div>";
    } elseif (strlen($_POST['campo_senha']) == 0) {
        echo "<div id='error_senha' class='erro_senha'>Preencha sua senha</div>";
    } else {
        $email = mysqli_real_escape_string($connect, trim($_POST['campo_email']));
        $senha = mysqli_real_escape_string($connect, trim($_POST['campo_senha']));
 
        $tabela = (isset($_SESSION['Usuario']) && $_SESSION['Usuario'] == '0') ? 'usuario' : 'empresa';
 
        // Usar prepared statements
        $stmt = $connect->prepare("SELECT email_$tabela, senha_$tabela FROM $tabela WHERE email_$tabela = ? AND senha_$tabela = ?");
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $sql_query = $stmt->get_result();
 
        if ($sql_query && $sql_query->num_rows == 1) {
            $user = $sql_query->fetch_assoc();
 
            if ($tabela == 'usuario') {
                $userIdResult = mysqli_query($connect, "SELECT cod_usuario FROM usuario WHERE email_usuario = '$email';");
                if (mysqli_num_rows($userIdResult) > 0) {
                    $row = mysqli_fetch_assoc($userIdResult);
                    $_SESSION["idUsuario"] = $row['cod_usuario'];
                    // Definindo o cookie
                    setcookie('idUsuario', $row['cod_usuario'], time() + 3600, '/'); // Dura 1 hora
                    header("Location: home.php");
                    exit;
                }
            } elseif ($tabela == 'empresa') {
                $userIdResult = mysqli_query($connect, "SELECT cod_empresa FROM empresa WHERE email_empresa = '$email';");
                if (mysqli_num_rows($userIdResult) > 0) {
                    $row = mysqli_fetch_assoc($userIdResult);
                    $_SESSION["idEmpresa"] = $row['cod_empresa'];
                    // Definindo o cookie
                    setcookie('idEmpresa', $row['cod_empresa'], time() + 3600, '/'); // Dura 1 hora
                    header("Location: perfilPrivEmp.php");
                    exit;
                }
            }
        } else {
            echo "<div id='error_login' class='erro_login'><p>Falha ao logar</p></div>";
        }
    }
}
?>
<script>
function hideErrorMessages(event) {
    const errorEmail = document.getElementById('error_email');
    const errorPassword = document.getElementById('error_senha');
    const errorLogin = document.getElementById('error_login');
 
    if (errorEmail && !errorEmail.contains(event.target)) {
        errorEmail.style.display = 'none';
    }
    if (errorPassword && !errorPassword.contains(event.target)) {
        errorPassword.style.display = 'none';
    }
    if (errorLogin && !errorLogin.contains(event.target)) {
        errorLogin.style.display = 'none';
    }
}
 
document.addEventListener('click', hideErrorMessages);
</script>