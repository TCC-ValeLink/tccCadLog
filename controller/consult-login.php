<?php include("../model/connect.php"); ?>
<?php
if (!isset($_SESSION)) {
   session_start();
}

if (isset($_POST['login'])) {
   if ($_POST['login'] === 'usuario') {
      $_SESSION['Usuario'] = '0';
      header("Location: ../view/cadastro.php");
   } elseif ($_POST['login'] === 'empresa') {
      $_SESSION['Usuario'] = '1';
      header("Location: ../view/cadastroemp.php");
   }
}

if (isset($_POST['campo_email']) || isset($_POST['campo_senha'])) {
   if (strlen($_POST['campo_email']) == 0) {
      echo "<div id='error_email' class='erro_email'>Preencha seu email</div>";
   } else if (strlen($_POST['campo_senha']) == 0) {
      echo "<div id='error_senha' class='erro_senha'>Preencha sua senha</div>";
   } else {

      $email = mysqli_real_escape_string($connect, trim($_POST['campo_email']));
      $senha = mysqli_real_escape_string($connect, trim($_POST['campo_senha']));

      $tabela = ($_SESSION['Usuario'] == '0') ? 'usuario' : 'empresa';

      $sql_code = "SELECT email_$tabela, senha_$tabela, cod_{$tabela} FROM $tabela WHERE email_$tabela = '$email' AND senha_$tabela = '$senha';";

      $sql_query = $connect->query($sql_code);

      if ($sql_query) {
         $qtd = $sql_query->num_rows;

         if ($qtd == 1) {
            $user = $sql_query->fetch_assoc();
            if ($tabela == 'usuario') {
               $_SESSION["idUsuario"] = $user['cod_usuario'];
               header("Location: home.php");
            } else if ($tabela == 'empresa') {
               $_SESSION["idEmpresa"] = $user['cod_empresa'];
               header("Location: perfilPrivEmp.php");
            }
         } else {
            echo "<div id='error_login' class='erro_login'><p>Falha ao logar</p></div>";
         }
      } else {
         echo "<div id='error_login' class='erro_login'><p>Erro na consulta: " . $connect->error . "</p></div>";
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