window.onload = () => {
    const buttons = document.getElementsByTagName("button");
    const body = document.getElementsByTagName("body")[0];
    //taille de police de base à 15px
    let size = 15; 
    body.style.fontSize = size + "px";
    
    //Augmente la taille de police au click sur le bouton
    buttons[0].addEventListener("click", () => {
        size++;
        body.style.fontSize = size + "px";
    });
    //Diminue la taille de police au click sur le bouton
    buttons[1].addEventListener("click", () => {
        size--;
        body.style.fontSize = size + "px";
    });
    //Modifie la couleur du background de la page en fonction de la couleur selectionner
    document.querySelector('select').addEventListener('change', function() {
        body.style.backgroundColor = this.value;
    });
    
}