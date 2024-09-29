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

// Coleta de dados das checkboxes
if (isset($_POST['bene']) && is_array($_POST['bene'])) {
    $_SESSION['bene'] = $_POST['bene']; // Mantém como array
} else {
    $_SESSION['bene'] = []; // Inicializa como array vazio se não houver seleção
}

// Converte o array de benefícios em uma string
$_SESSION['bene'] = implode(", ", $_SESSION['bene']);

// Para debugging: Verifique se os dados estão corretos
echo "Benefícios: " . htmlspecialchars($_SESSION["bene"], ENT_QUOTES);

// Inserir no banco de dados
mysqli_query($connect, "INSERT INTO usuario (email,senha,nome,RG,CPF,telefone_contato,sexo,CEP,rua,bairro,cidade,numero,tipo_de_residencia,tempo_de_residencia,valor_de_residencia,CAD,referencia,deficiencia,estado_civil,especifique,data_nascimento,telefone_recado,beneficios) 
VALUES ('". $_SESSION["email"] ."','". $_SESSION["senha"]  ."','". $_SESSION["nomeUsuario"] ."','". $_SESSION["RG"] ."','". $_SESSION["CPF"] ."','". $_SESSION["telefone"] ."','".$_SESSION["genero"]. "','". $_SESSION["CEP"]."','". $_SESSION["rua"]. "','". $_SESSION["bairro"]. "','". $_SESSION["cidade"]. "','". $_SESSION["numero"]. "','". $_SESSION["tipoRes"]. "','". $_SESSION["tempoRes"]. "','". $_SESSION["valorRes"]. "','". $_SESSION["CAD"] ."','". $_SESSION["referencia"] ."','". $_SESSION["deficiencia"] ."','". $_SESSION["estadoCivil"] ."','". $_SESSION['especifique']. "','". $_SESSION["dataNasc"] . "','" . $_SESSION["Recado"] . "','". $_SESSION["bene"]."')");

header("Location: ../view/login.php");
?>