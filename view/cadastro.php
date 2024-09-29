<?php Include("blades/top.php")?>
<?php 

if(!isset($_SESSION)){
   session_start();
}

if(isset($_POST['btnCadastro'])){

   $_SESSION['nomeUsuario'] = $_POST['nome'];
   $_SESSION['dataNasc'] = $_POST['data'];
   $_SESSION['RG'] = $_POST['RG'];
   $_SESSION['CPF'] = $_POST['CPF'];
   $_SESSION['estadoCivil'] = $_POST['Estado_civil'];
   $_SESSION['deficiencia'] = $_POST['def'];
   $_SESSION['especifique'] = $_POST['espec'];
   $_SESSION['genero'] = $_POST['sex'];
   header("Location: ../view/cadastro2.php");
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
         <p id="subttl">Informações Pessoais</p>
            <form action="" method="POST">
               <p id="lblcd1">Nome Completo</p>
               <input type="text" class="inputname" name="nome">
               <p id="lblcd2">Data de Nascimento</p>
               <input type="date" class="inputdata" name="data">


               <p id="lblcd3">RG</p>
               <input type="text" class="inputrg" name="RG">
               <p id="lblcd4">CPF</p>
               <input type="text" class="inputcpf" name="CPF">
               <p id="lblcd5">Estado Cívil</p>
               <select class="cmbbxcd1" name="Estado_civil">
                    <option value="S">Solteiro</option>
                    <option value="C">Casado</option>
                    <option value="V">Viúvo</option>
                    <option value="SP">Separado</option>
                    <option value="D">Divorciado</option>
                </select>

               <p id="lblcd6">Possui algum tipo de deficiência?</p>
               <select class="cmbbxcd2" name="def">
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
               </select>
               <p id="lblcd7">Especifique</p>
               <input type="text" class="inputespec" name="espec">

               <p id="lblcd8">Sexo</p>
               <input type="radio" name="sex" id="Mas" value="Masculino" class="radio">
               <label for="Mas" class="txt_rd">Masculino</label>  
               <input type="radio" name="sex" id="Fem" value="Feminino" class="radio2">
               <label for="Fem" class="txt_rd2">Feminino</label>
               <input type="radio" name="sex" id="Out" value="Outro" class="radio3">
               <label for="Out" class="txt_rd3">Outro</label>
               <input type="radio" name="sex" id="Pre" value="Prefiro não dizer" class="radio4">
               <label for="Pre" class="txt_rd4">Prefiro não dizer</label><br>

               <p class="txt_bx2">Você já tem uma conta?<a href="login.php" class="hl">Logar</a></p>


               <button type="submit" name="btnCadastro" class="btncd" style="    
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

<?php Include("blades/footer2.php")?>
