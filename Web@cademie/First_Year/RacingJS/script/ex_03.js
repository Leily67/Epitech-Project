window.onload = () => {
    const div = document.querySelector('footer div');

    div.addEventListener("click", function () {
        var person = "";
        while (person == "") {
            person = window.prompt();
        }
        if (confirm('Êtes vous sûr que ' + person + " est votre nom ?") == true) {
            div.innerHTML = "Bonjour " + person + " !";
            window.alert("Bonjour " + person + " !");
        }

    });


};