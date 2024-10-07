<?php Include("blades/top.php")?>
<?php 

if(!isset($_SESSION))
{
   session_start();
}

if(isset($_POST['btnCadastroEmp'])){

$_SESSION['nomeEmp'] = $_POST['nomeemp'];
$_SESSION['dataEmp'] = $_POST['dataemp'];
$_SESSION['AreaA'] = $_POST['AA'];
$_SESSION['CNPJ'] = $_POST['CNPJ'];
$_SESSION['emailEmp'] = $_POST['EMAILemp'];
$_SESSION['senhaEmp'] = $_POST['SENemp'];
header("Location: cadastroemp2.php");
}


?>


<div id="leftside">
   <img src="../img/icon.png" class="logo">
   <img src="../img/Foto_entrar.png" class="people">
</div>
<div class="container mt-5"> 
   <div class="container mt-3 bg-white rounded p-3">
      <p id="ttl">Cadastro</p>
       <div id="linhacd1"></div>
         <div class="triangulo"></div>
         <p id="subttl">Informações da Empresa</p>
            <form action="" method="POST">
               <p id="lblemp1">Nome da Empresa</p>
               <input type="text" class="inputnameemp" name="nomeemp">
               <p id="lblemp2">Data de Criação</p>
               <input type="date" class="inputdataemp" name="dataemp">

               <p id="lblemp3">Área de atuação</p>
               <input type="text" class="inputarea" name="AA">
               <p id="lblemp4">CNPJ</p>
               <input type="text" class="inputcnpj" name="CNPJ">

               <p id="lblemp5">Senha:</p>   
               <input type="text" class="inputsenemp" name="SENemp">
               <p id="lblemp6">Confirmar senha:</p>
               <input type="text" class="inputcsenemp" name="SEN2">


               <p id="lblemp7">Email</p>
               <input type="text" class="inputemailemp" name="EMAILemp">

               <p class="txt_bxemp2">Você já tem uma conta?<a href="login.php" class="hl">Logar</a></p>


               <button type="submit" name="btnCadastroEmp" class="btncdemp" style="    
               background-color:#01E581; 
               color: #fff; 
               border-radius:20px; 
               font-size: 2.4rem; 
               align-items: center; 
               text-align: center;"
               >Próximo Passo</button>

            
            </form>
   </div>
</div>
<script src="../script.js"></script>

<?php Include("blades/footeremp1.php")?>
