document.addEventListener('DOMContentLoaded', function() {
    const footerDiv = document.querySelector('footer div');
    const okLink = document.querySelector('footer div a');
    const wrapper = document.querySelector('.wrapper');

    // Vérifie si le cookie 'acceptsCookies' est défini et si sa valeur est 'true'
    if (getCookie('acceptsCookies') === 'true') {
        footerDiv.style.display = 'none';
        afficherBoiteSuppression();
    }

    // Lors du clic sur le lien OK, définis le cookie 'acceptsCookies' à 'true', cache le premier message et affiche la seconde boîte blanche
    okLink.addEventListener('click', function(e) {
        e.preventDefault();
        setCookie('acceptsCookies', 'true', 1);
        footerDiv.style.display = 'none';
        afficherBoiteSuppression();
    });

    function afficherBoiteSuppression() {
        const deleteBox = document.createElement('div');
        deleteBox.innerHTML = '<button>Supprimer le cookie</button>';
        deleteBox.style.backgroundColor = 'white';
        deleteBox.style.padding = '10px';
        wrapper.appendChild(deleteBox);

        const deleteButton = deleteBox.querySelector('button');
        deleteButton.addEventListener('click', function() {
            supprimerCookie('acceptsCookies');
            deleteBox.style.display = 'none';
            footerDiv.style.display = 'block';
        });
    }

    function setCookie(name, value, days) {
        let expires = '';
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 26 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }
        document.cookie = name + '=' + value + expires + '; path=/';
    }

    function getCookie(name) {
        let value = '; ' + document.cookie;
        let parts = value.split('; ' + name + '=');
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    function supprimerCookie(name) {
        setCookie(name, '', -1);
    }
});
