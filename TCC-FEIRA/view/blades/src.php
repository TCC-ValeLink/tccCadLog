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
            <spam class="iconsrc" id="btn-config">
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
<?php Include("footercomp.php")?>