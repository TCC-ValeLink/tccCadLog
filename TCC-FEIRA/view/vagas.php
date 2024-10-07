<?php Include("blades/top.php")?>
<?php Include("blades/src.php")?>
    <div class="body-vagas">
        <div class="vagal">
            <p class="title">Vagas</p>
            <p class="sub-title">Adicione uma palavra referente a area de sua busca</p>
            <div class="img-feedback">
                <img src="../img/img_vagas.png" class="img_vagas">
            </div>
            <div class="header-vagas ">    
                <div>
                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352zz'" />
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
            
            <div class="input-vagas2">
                <input type="text" class="input-cidade" placeholder="Cidade">
                <div class="icon-input-vagas">
                    <i class="bi bi-compass"></i>
                </div>
                <div class="line-input-vagas"></div>
            </div>
            <div class="input-vagas1">
                <input type="text" class="input-key" placeholder="Palavra - Chave">
                <div class="icon-input-vagas">
                    <i class="bi bi-key-fill"></i>
                </div>
                <div class="line-input-vagas"></div>
            </div>

            <button class="btn_vagas">
                <p>Buscar</p> 
            </button>
      
        </div>
        
        <div class="fllw-vagas">
            <div class="topfllwvagas">
                <select class="cmbbxvagas" name="tipo">
                        <option value="">Tipo de Trabalho</option>
                        <option value="interno">Interno</option>
                        <option value="remoto">Remoto</option>
                        <option value="hibrido">Híbrido</option>
                </select>
                <select class="cmbbxvagas1" name="experiencia">
                        <option value="">Experiência</option>
                        <option value="Estagio">Estágio</option>
                        <option value="Nbasico">Nível Básico</option>
                        <option value="Junior">Júnior</option>
                        <option value="Nmedio">Nível Médio</option>
                        <option value="Senior">Sênior</option>
                        <option value="Lider">Líder</option>
                        <option value="Gerente">Gerente</option>
                        <option value="Executivo">Executivo</option>
                </select>
                <select class="cmbbxvagas3" name="onde">
                        <option value="">Tipo de</option>
                        <option value="PI">Período Integral</option>
                        <option value="CPI">Contrato de Período Integral</option>
                        <option value="MP">Meio Período</option>
                        <option value="CA">Contrato de Aluguel</option>
                </select>
            </div>

            <div class="cards">
                <div class="compfllw-vagas">
                    <img src="../img/imageemp.png" class="img-emp2-vagas">
                    <div id="follow-line-vagas"></div>
                    <p class="tipo-emp-vagas">Area Atuante</p>
                    <p class="nome-emp-vagas">Nome da Empresa</p>
                    <div id="follow-line-horizon-vagas"></div>
                </div>
                <div class="compfllw-vagas">
                    <img src="../img/imageemp.png" class="img-emp2-vagas">
                    <div id="follow-line-vagas"></div>
                    <p class="tipo-emp-vagas">Area Atuante</p>
                    <p class="nome-emp-vagas">Nome da Empresa</p>
                    <div id="follow-line-horizon-vagas"></div>
                </div>
                <div class="compfllw-vagas">
                    <img src="../img/imageemp.png" class="img-emp2-vagas">
                    <div id="follow-line-vagas"></div>
                    <p class="tipo-emp-vagas">Area Atuante</p>
                    <p class="nome-emp-vagas">Nome da Empresa</p>
                    <div id="follow-line-horizon-vagas"></div>
                </div>
                <div class="compfllw-vagas">
                    <img src="../img/imageemp.png" class="img-emp2-vagas">
                    <div id="follow-line-vagas"></div>
                    <p class="tipo-emp-vagas">Area Atuante</p>
                    <p class="nome-emp-vagas">Nome da Empresa</p>
                    <div id="follow-line-horizon-vagas"></div>
                </div>
                <div class="compfllw-vagas">
                    <img src="../img/imageemp.png" class="img-emp2-vagas">
                    <div id="follow-line-vagas"></div>
                    <p class="tipo-emp-vagas">Area Atuante</p>
                    <p class="nome-emp-vagas">Nome da Empresa</p>
                    <div id="follow-line-horizon-vagas"></div>
                </div>
                <div class="compfllw-vagas">
                    <img src="../img/imageemp.png" class="img-emp2-vagas">
                    <div id="follow-line-vagas"></div>
                    <p class="tipo-emp-vagas">Area Atuante</p>
                    <p class="nome-emp-vagas">Nome da Empresa</p>
                    <div id="follow-line-horizon-vagas"></div>
                </div>
            </div>
        </div>
    </div>
<?php Include("blades/menu.php")?>
<?php Include("blades/footercomp.php")?>