<?php Include("blades/top.php")?>
<?php Include("blades/src.php")?>
    <div class="body-feedback">
        <div class="aval">
            <p class="title">Feedback</p>
            <p class="sub-title">Alterar para agrado do usuario</p>
            <div class="img-feedback">
                <img src="../img/feedback_aval.png" class="img_aval">
            </div>
            <p class="feet">Por favor avalie sua experiência</p>
            <div class="header-feedback">    
                <div>
                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(0, 117, 92,0.9)" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(1, 229, 129  ,0.7)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(0, 193, 108, 0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(158, 255, 48,0.3)" />
                    </g>
                    </svg>  
                </div>
            </div>        
        </div>

        <div class="add_coment">
            <p class="title-coment">Adicione um comentário:</p>
            <textarea></textarea>
            <button class="btn_feedback">
                <p>Enviar</p> 
                <i class="bi bi-arrow-right"></i>
            </button>
        </div>
    </div>
    <?php Include("blades/menu.php")?>
<?php Include("blades/footercomp.php")?>