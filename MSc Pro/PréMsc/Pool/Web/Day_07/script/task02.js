window.onload = () => {
    const div = document.querySelector('footer div');

    //Gestion d'évènement au click (ouvre une popup) et demande à l'utilisateur un nom
    div.addEventListener("click", function () {
        var person = "";
        while (person == "") {
            person = window.prompt();
        }
        //Demande à l'utilisateur de confirmer le nom qu'il à fourni
        //Si annuler, la popup se ferme, sinon ajoute un message de bienvenue
        if (confirm('Are you sure that ' + person + " your name ?") == true) {
            div.innerHTML = "Hello " + person + " !";
            window.alert("Hello " + person + " !");
        }

    });


};