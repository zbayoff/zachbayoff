var modal = document.getElementById('modal-container__project-prime');

// Get the button that opens the modal
var btn = document.getElementById("modal-btn__project-prime");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

var whatILearnedBody = document.getElementsByClassName("what-i-learned__body")[0];
var whatILearnedLink = document.getElementsByClassName("what-i-learned__link")[0];

whatILearnedLink.onclick = function () {
    if (whatILearnedBody.style.display == "flex"){
        whatILearnedBody.style.display = "none";
    } else {
        whatILearnedBody.style.display = "flex";
    }
    
}

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
/*window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/