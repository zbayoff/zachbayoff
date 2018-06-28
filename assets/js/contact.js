// Use AJAX to asynchronously let users send a message to email.

const contactForm = document.getElementById("contact-form");
const contactFormBtn = document.getElementById("contact-send-btn");

contactForm.addEventListener("submit", function (e) {

    e.preventDefault();

    var xhr = new XMLHttpRequest;
    xhr.open("POST", "assets/contactProcess.php");

    xhr.onreadystatechange = function () {
        var DONE = 4;
        var OK = 200;
        if (xhr.readyState === DONE) {
            if (xhr.status === OK) {

                let errors = JSON.parse(xhr.responseText);

                for (element of errors) {
                    if (element.status === "error") {
                        document.getElementById(element.field).style.border = "2px solid red";
                    } else {
                        clearInputs();
                        successMsg();
                    }
                }

            } else {
                console.log("Error: " + xhr.status);
            }
        }
    }

    var formData = new FormData(contactForm);

    xhr.send(formData);

});

function successMsg () {
    const msgHeader = document.querySelector('.success-msg-header');
    msgHeader.classList.remove('hide');
    msgHeader.classList.add('show');
    setTimeout(() => {
        msgHeader.classList.remove('show');
        msgHeader.classList.add('hide');
    }, 3000);
    
}

function clearInputs() {
    let inputs = document.querySelectorAll("input");
    let textAreas = document.querySelectorAll("textarea");
    
    for (element of inputs) {
        element.value = "";
        element.style.border = "1px solid #ced4da";
    }
    for (element of textAreas) {
        element.value = "";
        element.style.border = "1px solid #ced4da";
    } 
}

const nameInput = document.getElementById("name");
nameInput.addEventListener("focus", function () {
   this.style.border = "1px solid #ced4da";
});

const emailInput = document.getElementById("email");
emailInput.addEventListener("focus", function () {
   this.style.border = "1px solid #ced4da";
});

const messageInput = document.getElementById("message");
messageInput.addEventListener("focus", function () {
   this.style.border = "1px solid #ced4da";
});



