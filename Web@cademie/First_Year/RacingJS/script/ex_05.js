window.onload = () => {
    const buttons = document.getElementsByTagName("button");
    const body = document.getElementsByTagName("body")[0];
    let size = 15; 
    body.style.fontSize = size + "px";
    
    buttons[0].addEventListener("click", () => {
        size++;
        body.style.fontSize = size + "px";
    });
    buttons[1].addEventListener("click", () => {
        size--;
        body.style.fontSize = size + "px";
    });
    document.querySelector('select').addEventListener('change', function() {
        body.style.backgroundColor = this.value;
    });
    
}