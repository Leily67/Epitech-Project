import { createDisplay } from './createDisplay.js';

let type;

function isEmpty(param) {
    let empty = false;
    $(param).each(function() {
        if ($(this).val() == "") {
            empty = true;
        }
    });
    return empty;
}

// function checkSesh() {
//     const body = {
//         page: "verifySession"
//     };
//     $.post("../controller/controller.php", body, (response) => {
//         console.log("RESPONSE:", JSON.parse(response));
//         // createDisplay(type, response);
//     });
// }

window.onload = () => {

    // checkSesh();


    $.get("../controller/controller.php",
        function(data) {
            if (data == "connectionPage") {
                // console.log('go to connection page !');
                type = "connectionPage";
                // console.log("connection prout");
                createDisplay(type);
            } else {
                // $.each(JSON.parse(data)[0], function(indexInArray, valueOfElement) {
                //     console.log(indexInArray + " " + valueOfElement);
                // });
                // console.log("Data ? :" + JSON.parse(data)[0]['username']);
                type = "connectionUser";
                createDisplay(type, JSON.parse(data));
            }
        }
    );

    // $("#connexion").css("background-color", "red");
    // $("body").load("../../index.html", function() {

    //     $("#coLink").on("click", "#coLink", function(event) {
    //         event.preventDefault();
    //         // console.lot($(this));
    //         console.log("prout");
    //     })
    // });
    $("#container_template").on("click", "#coLink", function(event) {
        event.preventDefault();
        type = "registerPage";
        createDisplay(type);
    });

    $("#container_template").on("click", "#register_btn", function(event) {
        // console.log('click register');
        // $("#register_btn").css('background-color', 'red');
        event.preventDefault();
        type = "connectionPage";
        const body = {
            username: $("#pseudo").val(),
            pass1: $("#password1").val(),
            pass2: $("#password2").val(),
            mail1: $("#mail1").val(),
            mail2: $("#mail2").val(),
            dob: $("#birthday").val(),
            firstname: $("#firstname").val(),
            lastname: $("#lastname").val(),
            page: "registerUser"
        };
        $.post("../controller/controller.php", body, (response) => {
            // console.log("RESPONSE:", JSON.parse(response));
            createDisplay(type, response);
        });
    });

    $("#container_template").on("click", "#connexion_btn", function(event) {
        event.preventDefault();
        type = "connectionUser";
        if (!isEmpty("#login_form input")) {

            const body = {
                pass: $("#pwd").val(),
                mail: $("#mail").val(),
                page: "connectionUser"
            };
            $.post("../controller/controller.php", body, (response) => {
                // console.log("RESPONSE:", response);
                createDisplay(type, JSON.parse(response));
            });

            $.get("../controller/controller.php?session", (response) => {
                console.log(JSON.parse(response));
                sessionStorage.setItem("username", JSON.parse(response)[0]);
                sessionStorage.setItem("profile_pic", JSON.parse(response)[1]);
                sessionStorage.setItem("id", JSON.parse(response)[2]);
                // save response as sessionStorage
            });

        } else {
            alert("Tous les champs doivent être remplis");
        }
    });

    $("body").on("click", "#deco", function(event) {
        sessionStorage.removeItem("username");
        sessionStorage.removeItem("profile_pic");
        $.get("../controller/controller.php?page=deco", (response) => {
            console.log("deconected");
            // type = "connectionPage";
            // createDisplay(type);
            location.reload();
        });
    });
    $("body").on("click", ".btnsearch", function(event) {
        type = "searchUser";
        const body = {
            search: $("#input-left").val(),
            page: "searchUser"
        };
        $.post("../controller/controller.php", body, (response) => {
            // console.log(JSON.parse(response));
            createDisplay(type, JSON.parse(response));
        });
    });

    $("body").on("click", "#icone1", function(event) {
        // type = "searchUser";
        const body = {
            uid: sessionStorage.getItem("id"),
            to_user: $('.uname').text(),
            page: "newFollow"
        };
        $.post("../controller/controller.php", body, (response) => {
            // console.log(JSON.parse(response));
        });
    });
}