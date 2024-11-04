<?php include("../model/connect.php");

if(!isset($_SESSION)){
    session_start();
}

// Verifique se todas as variáveis de sessão necessárias estão definidas
$required_sessions = [
    'nomeUsuario', 'RG', 'CPF', 'genero', 'CEP', 'rua', 'bairro',
    'cidade', 'numero', 'tipoRes', 'tempoRes', 'valorRes', 'referencia',
    'deficiencia', 'estadoCivil', 'especifique', 'telefone', 'Recado', 
    'CAD', 'email', 'senha', 'dataNasc'
];

foreach ($required_sessions as $session_var) {
    if (!isset($_SESSION[$session_var])) {
        echo "Variável de sessão '{$session_var}' não está definida.";
        exit; // Encerra a execução se alguma variável não estiver definida
    }
}
    

// Inserir no banco de dados
mysqli_query($connect, "INSERT INTO usuario (email_usuario,senha_usuario,nome_usuario,RG_usuario,CPF_usuario,telefone_contato_usuario,sexo_usuario,CEP_usuario,rua_usuario,bairro_usuario,cidade_usuario,numero_usuario,tipo_de_residencia_usuario,tempo_de_residencia_usuario,valor_de_residencia_usuario,CAD_usuario,ponto_referencia_usuario,deficiencia_usuario,estado_civil_usuario,especifique_usuario,data_nascimento_usuario,telefone_recado_usuario) 
VALUES ('". $_SESSION["email"] ."','". $_SESSION["senha"]  ."','". $_SESSION["nomeUsuario"] ."','". $_SESSION["RG"] ."','". $_SESSION["CPF"] ."','". $_SESSION["telefone"] ."','".$_SESSION["genero"]. "','". $_SESSION["CEP"]."','". $_SESSION["rua"]. "','". $_SESSION["bairro"]. "','". $_SESSION["cidade"]. "','". $_SESSION["numero"]. "','". $_SESSION["tipoRes"]. "','". $_SESSION["tempoRes"]. "','". $_SESSION["valorRes"]. "','". $_SESSION["CAD"] ."','". $_SESSION["referencia"] ."','". $_SESSION["deficiencia"] ."','". $_SESSION["estadoCivil"] ."','". $_SESSION['especifique']. "','". $_SESSION["dataNasc"] . "','" . $_SESSION["Recado"] ."')");

header("Location: ../view/login.php");
?>
