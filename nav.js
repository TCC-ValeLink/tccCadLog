

const links = document.querySelectorAll('.nav-user a');
const span = document.querySelector('.nav-user span');

links.forEach(link => {
    link.addEventListener('click', function () {
        links.forEach(link => link.classList.remove('active'));

        this.classList.add('active');
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll('.nav-user a');
    const userUpdates = document.querySelectorAll('.pessoal-info, .pessoal-ende, .pessoal-outros-dados, .acessar-curriculo');


    const linkDivMapping = {
        'Informações Pessoais': 'pessoal-info',
        'Endereço': 'pessoal-ende',
        'Outros Dados': 'pessoal-outros-dados',
        'Currículo': 'acessar-curriculo',
    };


    userUpdates.forEach(div => div.style.display = 'none');


    const firstDivId = linkDivMapping['Informações Pessoais'];
    const firstDiv = document.getElementById(firstDivId);
    if (firstDiv) {
        firstDiv.style.display = 'block';
    }


    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();


            userUpdates.forEach(div => div.style.display = 'none');


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
