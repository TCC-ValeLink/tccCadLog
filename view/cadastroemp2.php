<?php Include("blades/top.php")?>
<?php 

if(!isset($_SESSION))
{
   session_start();
}

if(isset($_POST['btnCadastroEmp2'])){

$_SESSION['cidadeEmp'] = $_POST['CID'];
$_SESSION['ruaEmp'] = $_POST['RUA'];
$_SESSION['paisEmp'] = $_POST['PAI'];
$_SESSION['Estados'] = $_POST['estados'];
$_SESSION['numeroEmp'] = $_POST['NUM'];
$_SESSION['bairroEmp'] = $_POST['BAI'];
$_SESSION['CEP'] = $_POST['CEP'];
$_SESSION['telefoneEmp'] = $_POST['TEL'];
header("Location: ../controller/funcao-create-emp.php");
}


?>

<div id="leftside">
   <img src="../img/icon.png" class="logo">
   <img src="../img/Foto_entrar.png" class="people">
</div>
<div class="container mt-5"> 
   <div class="container mt-3 bg-white rounded p-3">
      <p id="ttl">Cadastro</p>
       <div id="linhacd2"></div>
         <div class="triangulo"></div>
         <p id="subttl">Endereço</p>
            <form action="" method="POST">
               <p id="lblemp21">Cidade</p>
               <input type="text" class="inputcidemp" name="CID">
               <p id="lblemp22">Rua</p>
               <input type="text" class="inputruaemp" name="RUA">

               <p id="lblemp23">País</p>
               <input type="text" class="inputpais" name="PAI">
               <p id="lblemp24">Estado</p>
               <select name="estados" class="cmbbxemp" name="estados">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goias</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
               <p id="lblemp25">Número</p>
               <input type="text" class="inputnumemp" name="NUM">

               <p id="lblemp28">Telefone</p>
               <input type="text" class="inputtelemp" name="TEL">

               <p id="lblemp26">Bairro</p>
               <input type="text" class="inputbaiemp" name="BAI">
               <p id="lblemp27">CEP</p>   
               <input type="text" class="inputcepemp" name="CEP">

               <button type="submit" name="btnCadastroEmp2" class="btncd2" style="    
               background-color:#01E581; 
               color: #fff; 
               border-radius:20px; 
               font-size: 2.4rem; 
               align-items: center; 
               text-align: center;"
               >Finalizar</button>
            </form>
   </div>
</div>
<script src="../script.js"></script>

<?php Include("blades/footeremp2.php")?>
