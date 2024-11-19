<?php Include("top.php")?>

<div class="srcdiv">
<div class="header-src">    
                <div>
                    <svg id="waves-src" class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352zz'" />
                    </defs>
                    <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(0, 117, 92,0.9)" />
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(1, 229, 129  ,0.7)" />
                    <use xlink:href="#gentle-wave" x="48" y="2" fill="rgba(0, 193, 108, 0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="4" fill="rgba(158, 255, 48,0.3)" />
                    </g>
                    </svg>  
                </div>
            </div> 
    
    <ul id="toma-toma">
        <li class="item-src">
            <spam class="iconsrc" onclick="funcaoNotify()">
                <i class="bi bi-bell-fill"></i>
            </spam> 
        </li>

        <li class="item-src">
            <spam class="iconsrc" id="btn-config" onclick="funcaoConfig()">
                <i class="bi bi-gear-fill"></i>
            </spam>
        </li>

        <li class="item-src">
            <a href="perfil.php">
                <spam class="iconsrc">
                    <i class="bi bi-person"></i>
                </spam>
            </a>    
        </li>
    </ul>
</div>



<div id="container-notificação" class="container-notificação">
    <div class="titlenotif"><p>Notificações</p><i class="bi bi-bell-fill"></i></div>
    <?php Include("../controller/notificacoes.php");?>
</div>

<div id="container-config" class="container-config">
    <div class="titleconfig"><p>Configurações</p><i class="bi bi-gear-fill"></i></div>
        <div class="subtitle1">Acessibilidade</div>
            <div class="itensconfig">
                <p class="pConfig">Fonte</p>
                <select class="cmbbxcf" name="Fonte">
                        <option value="P">Pequena</option>
                        <option value="M">Média</option>
                        <option value="G">Grande</option>
                </select>
            </div>        

            <div class="itensconfig">
                <p class="pConfig">Ajuste de Cor</p>
                <select class="cmbbxcf" name="Cor">
                        <option value="A">Auto > </option>
                        <option value="#">#</option>
                        <option value="#">#</option>
                </select>    
            </div>

        <div class="subtitle1">Geral</div>
            <div class="itensconfig">
                <p class="pConfig">Tema</p>
                <select class="cmbbxcf" name="Cor">
                        <option value="A">Auto > </option>
                        <option value="E">Escuro</option>
                        <option value="C">Claro</option>
                </select>    
            </div>

            <div class="itensconfig">
                <p class="pConfig">Idioma</p>
                <select class="cmbbxcf" name="Cor">
                        <option value="Portugues">Pt-Br</option>
                        <option value="Ingles">En</option>
                        <option value="Espanhol">Es</option>
                </select>    
            </div>

        <a href="../controller/logout.php" class="subtitle1">Sair</a>


</div>

<script>
    let estado = false;
     function funcaoConfig() {
    if (!estado) { 
        document.getElementById("container-config").style.display = "block";
    } else { 
        document.getElementById("container-config").style.display = "none";
    }
    estado = !estado; 
    };

    let estado2 = false;
     function funcaoNotify() {
    if (!estado) { 
        document.getElementById("container-notificação").style.display = "block";
    } else { 
        document.getElementById("container-notificação").style.display = "none";
    }
    estado = !estado; 
    };
</script>

<?php Include("footercomp.php")?>