window.onload = function() {
    var first_name = document.getElementById("first_name");
    var last_name = document.getElementById("last_name");
    var birthday = document.getElementById("birthday");
    var gender_radio = document.getElementById("gender_radio");
    var city = document.getElementById("city");
    var mail = document.getElementById("mail");
    var password = document.getElementById("password");
    var hobby_red_vine = document.getElementById("hobby_red_vine");
    var hobby_white_vine = document.getElementById("hobby_white_vine");
    var hobby_pink_vine = document.getElementById("hobby_pink_vine");
    var hobby_beer = document.getElementById("hobby_beer");
    var hobby_meat = document.getElementById("hobby_meat");
    var hobby_vegan = document.getElementById("hobby_vegan");
    var hobby_red_meat = document.getElementById("hobby_red_meat");
    var hobby_white_meat = document.getElementById("hobby_white_meat");
    var hobby_fish = document.getElementById("hobby_fish");
    var submit_btn = document.getElementById("submit_btn");

    submit_btn.addEventListener("click", register_user);

    function register_user() {
        const form_data = {
            "first_name": first_name.value,
            "last_name": last_name.value,
            "birthday": birthday.value,
            "gender_radio": gender_radio.value,
            "city": city.value,
            "mail": mail.value,
            "password": password.value,
            "hobby_red_vine": hobby_red_vine.checked,
            "hobby_white_vine": hobby_white_vine.checked,
            "hobby_pink_vine": hobby_pink_vine.checked,
            "hobby_beer": hobby_beer.checked,
            "hobby_meat": hobby_meat.checked,
            "hobby_vegan": hobby_vegan.checked,
            "hobby_red_meat": hobby_red_meat.checked,
            "hobby_white_meat": hobby_white_meat.checked,
            "hobby_fish": hobby_fish.checked
        };
        console.log(form_data);
        const user_birthdate = new Date(birthday.value);
        const today = new Date();
        console.log(user_birthdate.getFullYear(), today.getFullYear());

        if (today.getFullYear() - user_birthdate.getFullYear() > 18) {
            alert("let's gooooo !!")
            $.post("/controller/users.php", form_data, function(data) {
                console.log("le controller renvoie:", JSON.parse(data)); //mettre un window.alert(prompt)
            });
        } else {
            alert("J'vai te bolosser !!!")
        }


    }
}