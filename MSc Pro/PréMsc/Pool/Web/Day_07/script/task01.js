window.onload = () => {
    const div = document.querySelector('footer div');
    //compteur à 1
    var counter = 1;
    div.addEventListener("click", function() {
        //modifie le contennue de la div et ajoute +1
        div.innerHTML = counter;
        counter ++;
        
    });

};