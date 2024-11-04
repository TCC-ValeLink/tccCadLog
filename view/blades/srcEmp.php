<?php Include("top.php")?>

<div class="srcdiv">
    <div class="buscar-box">
        <div class="lupa-buscar">
            <i class="bi bi-search"></i>
        </div>

        <div class="input-buscar">
            <input type="text" placeholder="Pesquisa" class="srcbar" tabindex="1rem" id="src">
        </div>
    </div>
    
    <ul id="toma-toma">
        <li class="item-src">
            <spam class="iconsrc">
                <i class="bi bi-bell-fill"></i>
            </spam> 
        </li>

        <li class="item-src">
            <spam class="iconsrc" id="btn-config" onclick="funcaoConfig()">
                <i class="bi bi-gear-fill"></i>
            </spam>
        </li>

        <li class="item-src">
            <a href="perfilPrivEmp.php">
                <spam class="iconsrc">
                    <i class="bi bi-person"></i>
                </spam>
            </a>    
        </li>
    </ul>
</div>

<div id="container-config" class="container-config">
    <div class="titleconfig">Configurações</div>
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
    estado = !estado; // Inverte o valor de estado
    };
</script>
<?php Include("footercomp.php")?>