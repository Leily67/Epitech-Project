
window.onload = () => {
    const div = document.querySelector('footer div');
    var counter = 1;
    div.addEventListener("click", function() {
        div.innerHTML = counter;
        counter ++;
        
    });

};