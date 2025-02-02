window.onload = function() {
    var mail = document.getElementById("mail");
    var password = document.getElementById("password");
    var submit_btn = document.getElementById("submit_btn");

    submit_btn.addEventListener("click", login_user);

    function login_user() {

    }
}



const button = document.getElementById('submit-btn');
button.addEventListener('click', event => {
    var myForm = document.getElementById('login_form');
    const formData = new FormData(myForm);

    console.log(formData);


});