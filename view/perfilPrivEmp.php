<?php include("blades/top.php") ?>
<?php include("blades/srcEmp.php") ?>
<div class="body-home">
    <?php Include("../controller/funcao-select-emp.php")?>
    <nav class="nav-emp">
        <a>Publicações</a>
        <a>Mapa</a>
        <span></span>
    </nav>
    
    
    <div class="posts-emppriv" id="posts-emppriv">
        <?php include("../controller/visual-post-emp.php") ?>
    </div>

    <div class="LocEmp" id="LocEmp">
        <gmp-map
        center="-24.49945549675142,-47.848329427504"
        zoom="15"
        map-id="DEMO_MAP_ID"
        style="height: 100%; width: 100%; border: 1px solid #000;"
        >
        <gmp-advanced-marker
            position="-24.49945549675142,-47.848329427504"
            title="Etec de Registro"
        ></gmp-advanced-marker>
        <gmp-advanced-marker
            position="47.648994,-122.3503845"
            title="Seattle, WA"
        ></gmp-advanced-marker>
        </gmp-map>
        <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZnbTIFfvqwB9EUvj9M_5A853CaxD3SqM&libraries=maps,marker&v=beta"
        defer
        ></script>
    </div>
</div>

<script>

const links = document.querySelectorAll('.nav-emp a');
const span = document.querySelector('.nav-emp span');

links.forEach(link => {
    link.addEventListener('click', function() {
        links.forEach(link => link.classList.remove('active'));
        
        this.classList.add('active');
    });
});


document.addEventListener("DOMContentLoaded", function() {
const links = document.querySelectorAll('.nav-emp a');
const userUpdates = document.querySelectorAll('.posts-emppriv, .LocEmp');

// Mapeamento dos links e suas divs correspondentes
const linkDivMapping = {
    'Publicações': 'posts-emppriv',
    'Mapa': 'LocEmp',
    'Outros Dados': 'outros-dados-info',
    'Currículo': 'curriculo-info',
    'Configurações': 'configuracoes-info'
};

// Ocultar todas as divs inicialmente
userUpdates.forEach(div => div.style.display = 'none');

// Exibir a primeira div "Informações Pessoais" automaticamente ao carregar a página
const firstDivId = linkDivMapping['Publicações'];
const firstDiv = document.getElementById(firstDivId);
if (firstDiv) {
    firstDiv.style.display = 'block';
}

// Adicionar o evento de clique aos links para navegação entre as seções
links.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();

        // Ocultar todas as divs
        userUpdates.forEach(div => div.style.display = 'none');

        // Exibir a div correspondente ao link clicado
        const targetId = linkDivMapping[link.textContent];
        if (targetId) {
            const targetDiv = document.getElementById(targetId);
            if (targetDiv) {
                targetDiv.style.display = 'block';
            }
        }
    });
});
});

;
</script>
<?php include("blades/menuEmp.php") ?>
<?php include("blades/footercomp.php") ?>