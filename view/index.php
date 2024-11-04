<?php include("blades/top.php") ?>

<div id="leftside">
   <img src="../img/icon.png" class="logo">
   <img src="../img/Foto_entrar.png" class="people">
</div>
<div class="container mt-3">
   <div class="container mt-1 bg-white rounded p-3">
      <p id="ttl">Bem Vindo!</p>
      <div id="linha"></div>
      <div class="triangulo"></div>
      <p id="subttl">Decida sua forma de cadastro</p>
      <form action="../controller/consult-login.php" method="POST">
         <button class="btn_emp"  name="login" value="empresa">
            <img src="../img/emp_icon.png" width="250rem" >
            Empresa
         </button>
      </form>

      <form action="../controller/consult-login.php" method="POST">
         <button class="btn_user" name="login" value="usuario">
            <img src="../img/user_icon.png" >
            Pessoal
         </button>
      </form>

   </div>
</div>
<script src="../script.js"></script>
<?php include("blades/footer5.php") ?>