window.onload = () => {
    let keys = [];
    const div = document.querySelector('footer div');
    document.addEventListener("keydown", (e) => {
        if (keys.length > 42) {
            keys.shift();
        }
        keys.push(e.key);
        div.innerHTML = keys.join('')
    })

}