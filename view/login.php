<?php Include("blades/top.php")?>
<?php Include("../controller/consult-login.php")?>

<div id="leftside">
   <img src="../img/icon.png" class="logo">
   <img src="../img/Foto_entrar.png" class="people">
</div>
<div class="container mt-5"> 
   <div class="container mt-3 bg-white rounded p-3">
      <p id="ttl">Login</p>
       <div id="linha"></div>
         <div class="triangulo"></div>
         <p id="subttl">Entrar em sua conta</p>
            <form action="" method="POST">
               <p id="lbl1">Email</p>
               <input type="text" class="inputemail" name="campo_email">
               <br>
               <br>
               <p id="lbl2">Senha</p>
               <input type="password" class="inputsenha" id="password" name="campo_senha">
               <div id="icon2" onclick="showHide()"></div>
               <br>
               <br>
               <p class="txt_bx">Pulou uma etapa?<a href="index.php" class="hl">Voltar</a></p>
               <button id="showsweetalert" type="submit" class="btnL">Entrar</button>
            </form>
            
   </div>
</div>
<script src="../script.js"></script>
<?php Include("blades/footer.php")?>