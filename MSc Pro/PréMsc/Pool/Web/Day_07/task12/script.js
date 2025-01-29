document.getElementById('dynamicForm').addEventListener('submit', function(e) {
    e.preventDefault(); 
    
    const textInput = document.getElementById('textInput');
    const styleSelector = document.getElementById('styleSelector');
    const dynamicList = document.getElementById('dynamicList');
    
    if (textInput.value.trim() !== "") {
        const listItem = document.createElement('li');
        listItem.innerText = textInput.value;
        listItem.classList.add(styleSelector.value);
        dynamicList.appendChild(listItem);
        
        
        textInput.value = "";
    } else {
        alert('Please enter some text!');
    }
});
