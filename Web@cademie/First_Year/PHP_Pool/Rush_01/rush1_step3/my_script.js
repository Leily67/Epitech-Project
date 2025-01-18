document.querySelector("form").addEventListener("submit", function (e) {
    let isValid = true;

    // Réinitialiser les styles des champs
    document.querySelectorAll("input, select").forEach((field) => {
        field.style.backgroundColor = "";
    });

    // Vérification des champs requis (sauf radio/checkbox)
    document.querySelectorAll("input[required]:not([type='radio']):not([type='checkbox']), select[required]").forEach((field) => {
        if (!field.value.trim()) {
            field.style.backgroundColor = "red";
            isValid = false;
        }
    });

    // Vérification des champs radio
    const radioGroups = Array.from(new Set(
        Array.from(document.querySelectorAll("input[type='radio']")).map((radio) => radio.name)
    ));
    radioGroups.forEach((group) => {
        const radios = document.querySelectorAll(`input[name="${group}"]`);
        if (!Array.from(radios).some((radio) => radio.checked)) {
            radios.forEach((radio) => {
                radio.closest("label").style.color = "red";
            });
            isValid = false;
        }
    });

    // Vérification des champs checkbox
    const checkboxes = document.querySelectorAll("input[type='checkbox']");
    if (!Array.from(checkboxes).some((checkbox) => checkbox.checked)) {
        checkboxes.forEach((checkbox) => {
            checkbox.closest("label").style.color = "red";
        });
        isValid = false;
    }

    // Affichage des erreurs et empêchement de l'envoi
    if (!isValid) {
        alert("Veuillez remplir tous les champs correctement !");
        e.preventDefault();
    }
    if (!field.value.trim()) {
        field.classList.add("error");
    } else {
        field.classList.remove("error");
    }

});
