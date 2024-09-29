
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

mysqli_query($connect, "INSERT INTO empresa (email, senha, CNPJ, nome, area_de_atuacao, telefone, CEP, cidade, rua, bairro, numero, data_de_criacao) VALUES ('". $_SESSION["emailEmp"] . "','" . $_SESSION["senhaEmp"] . "','" . $_SESSION["CNPJ"] . "','" . $_SESSION["nomeEmp"] . "','" . $_SESSION["AreaA"] . "','" . $_SESSION["telefone"] . "','" . $_SESSION["CEP"] . "','" . $_SESSION["cidadeEmp"] . "','" . $_SESSION["ruaEmp"] . "','" . $_SESSION["bairro"] ."','". $_SESSION["numero"] . "','" . $_SESSION["dataEmp"] ."')");

header("Location: ../view/login.php");

?>



