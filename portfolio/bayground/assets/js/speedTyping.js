// This application will provide a user with a sentence prompt and ask the user to type the sentence verbatum to see how fast the user can type the sentence correctly. The program will provide the user with different sentence prompts from a text file. Once the user has successfully type the sentence, the timer will stop and the user's word count per minute will be displayed with a message on the efficiency of the result (ex. "Wow, that was fast!" or "That was OK. You can do better!").

/*----Rules-----*/

/*

1. Timer starts on key down

2. Timer stops when the typed string matches the prompt string.
    Every key press, a function must be called to grab the value within the text area.
    Function checkString is then called on every keypress to check if string matches. 
    Once string matches, the stop timer function will be called. 




*/



let typingArea = document.getElementById("project-speedType__textarea");
let tryAgainBtn = document.getElementById("project-speedType__tryagain-btn");
let diffPromptBtn = document.getElementById("project-speedType__diffprompt-btn");

let timerFired = false;

typingArea.addEventListener("keyup", function () {
    if (timerFired === false) {
        startTimer();
    }
    checkString();
});

tryAgainBtn.addEventListener("click", function () {
    resetTimer();
    clearFields();
});

diffPromptBtn.addEventListener("click", function () {
    resetTimer();
    clearFields();
    loadNewPrompt();

});

let correctString = "You made my day.";

function checkString() {

    if (typingArea.value === correctString) {
        stopTimer();
    }
}


let timerInterval;
let timerPara = document.getElementById("project-speedType__timer");
let elapsed = 0;



function startTimer() {
    timerFired = true;
    console.log("timer started");
    let start = new Date().getTime();
    console.log("start is: " + start);
    timerInterval = setInterval(function () {
        
        let timer = new Date().getTime() - start;
        let totalSecs = Math.floor((timer / 100) / 10);
        let hundredthsSecs = Math.floor((timer / 10)) % 100;

        let secs = totalSecs % 60;
        let mins = Math.floor(totalSecs / 60);
        
        function pad (time) {
            let timeString = time + "";
            if (timeString.length < 2) {
                return "0" + timeString;
            } else {
                return timeString;
            }
        }
       
        elapsed = totalSecs;
//        console.log(mins);
        /*if (Math.round(elapsed) == elapsed) {
            elapsed += '.0';
        }*/
        
//        timer += 1;
        timerPara.innerHTML = pad(mins)+":"+pad(secs) + ":"+pad(hundredthsSecs);
        

    }, 10);
}

function stopTimer() {
    console.log("timer stopped");
    clearInterval(timerInterval);
    displayResult();
}

function resetTimer() {
    console.log("timer reset");
}

function clearFields() {
    console.log("fields cleared");
}

function displayResult() {
    let resultsDiv = document.getElementById("project-speedType__results");
    let resultWPM = document.getElementById("project-speedType__result-WPM");
    let resultBlurb = document.getElementById("project-speedType__result-blurb");

    console.log(elapsed);
    
    let wordsPerMinute = 4 / (elapsed / 60);

    resultWPM.innerHTML = "Results: " + wordsPerMinute + " Words Per Minute.";

    if (wordsPerMinute < 20) {
        resultBlurb.innerHTML = "You didn't even try, did you...";
    } else if (wordsPerMinute >= 20 && wordsPerMinute < 30) {
        resultBlurb.innerHTML = "That was OK.";
    } else if (wordsPerMinute >= 30 && wordsPerMinute <= 60) {
        resultBlurb.innerHTML = "That was GOOD.";
    } else if (wordsPerMinute > 60) {
        resultBlurb.innerHTML = "That was MOST EXCELLENT.";
    }


   
}

function displayPrompt() {

}

function loadNewPrompt() {
    console.log("new prompt loaded");
}

let speedtestSpanClose = document.getElementById("project-speedTest__span-close");
speedtestSpanClose.addEventListener("click", function () {
    clearFields();
})
