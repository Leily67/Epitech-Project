function appendToDiv() {
    const inputValue = document.getElementById('listItem').value;
    
    if (inputValue.trim() !== "") {
        const newDiv = document.createElement('div');
        newDiv.innerText = inputValue;
        document.body.appendChild(newDiv);
    } else {
        alert("Please enter some text in the input field.");
    }
}
