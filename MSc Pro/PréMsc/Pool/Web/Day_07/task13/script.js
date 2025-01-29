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

document.getElementById('searchButton').addEventListener('click', function() {
    const searchSelector = document.getElementById('searchSelector').value;
    
    if (searchSelector) {
        const listItems = document.querySelectorAll('#dynamicList li');
        
        listItems.forEach(item => {
            if (item.classList.contains(searchSelector)) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    } else {
        alert('Please select a type to search for.');
    }
});

document.getElementById('resetButton').addEventListener('click', function() {
    const listItems = document.querySelectorAll('#dynamicList li');
    
    listItems.forEach(item => {
        item.style.display = '';
    });

    document.getElementById('searchSelector').value = "";
});
