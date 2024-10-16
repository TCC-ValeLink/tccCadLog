
<?php include("../model/connect.php");

if(!isset($_SESSION)){
    session_start();
 }

if (isset($_SESSION['emailemp'], $_SESSION['senhaEmp'], $_SESSION['CNPJ'], $_SESSION['nomeEmp'], 
            $_SESSION["AreaA"], $_SESSION["telefoneEmp"], $_SESSION["CEP"], $_SESSION["cidadeEmp"], 
            $_SESSION["ruaEmp"], $_SESSION["bairroEmp"], $_SESSION["numeroEmp"], 
            $_SESSION["dataEmp"])) {

    // Cria um array com os dados que você quer exibir
    $dados = [
        $_SESSION['emailEmp'],
        $_SESSION['senhaEmp'],
        $_SESSION['CNPJ'],
        $_SESSION['nomeEmp'],
        $_SESSION["AreaA"],
        $_SESSION["telefoneEmp"],
        $_SESSION["CEP"],
        $_SESSION["cidadeEmp"],
        $_SESSION["ruaEmp"],
        $_SESSION["bairroEmp"],
        $_SESSION["numeroEmp"],
        $_SESSION["dataEmp"],

    ];

    // Faz um echo para cada valor no array
    foreach ($dados as $dado) {
        echo "'" . htmlspecialchars($dado, ENT_QUOTES) . "', ";
    }
} else {
    echo "Algumas variáveis de sessão não estão definidas.";
}

mysqli_query($connect, "INSERT INTO empresa (email_empresa, senha_empresa, CNPJ_empresa, nome_empresa, area_de_atuacao_empresa, telefone_empresa, CEP_empresa, cidade_empresa, rua_empresa, bairro_empresa, numero_empresa, data_de_criacao_empresa) VALUES ('". $_SESSION["emailEmp"] . "','" . $_SESSION["senhaEmp"] . "','" . $_SESSION["CNPJ"] . "','" . $_SESSION["nomeEmp"] . "','" . $_SESSION["AreaA"] . "','" . $_SESSION["telefone"] . "','" . $_SESSION["CEP"] . "','" . $_SESSION["cidadeEmp"] . "','" . $_SESSION["ruaEmp"] . "','" . $_SESSION["bairro"] ."','". $_SESSION["numero"] . "','" . $_SESSION["dataEmp"] ."')");

$resultado = mysqli_query($connect, query: "SELECT cod_empresa FROM empresa ORDER BY cod_empresa desc LIMIT 0,1 ;");

// Verifica se a consulta foi bem-sucedida
if (mysqli_num_rows($resultado) > 0) {
    // Exibe os dados de cada linha
    while ($row = mysqli_fetch_assoc(result: $resultado)) {
        $_SESSION["idEmpresa"] = $row['cod_empresa'];
    }
} else {
    echo "Nenhum usuário encontrado.";
}
mysqli_free_result($resultado);
header("Location: ../view/login.php");

?>



