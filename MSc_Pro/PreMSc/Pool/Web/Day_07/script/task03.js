window.onload = () => {
    let keys = [];
    const div = document.querySelector('footer div');

    document.addEventListener("keydown", (e) => {
        // Liste des touches à ignorer
        const ignoredKeys = ["Shift", "Backspace", "Control", "Alt", "Enter", "Tab", "Escape", "ArrowRight", "ArrowLeft", "ArrowUp", "ArrowDown", "Meta", "CapsLock", "ContextMenu", "PageUp", "PageDown", "End", "Home", "Insert", "Delete", "NumLock", "ScrollLock", "Pause", "Break"];

        if (ignoredKeys.includes(e.key)) {
            return; // Ignore la touche si elle est dans la liste
        }

        if (keys.length >= 42) {
            keys.shift(); // Retire le premier élément si la taille dépasse 42
        }
        
        keys.push(e.key);
        div.innerHTML = keys.join('')
    });
}
