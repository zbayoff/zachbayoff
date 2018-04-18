(function () {

    const createGridBtn = document.getElementById('project-concentrateYo__createGrid-btn');
    const gridSizeInput = document.getElementById('project-concentrateYo__gridSizeInput');
    const gridContainer = document.querySelector('.project-concentrateYo__grid-container');
    const timerPara = document.getElementById("project-concentrateYo__timer");

    let prevTile;
    let clickDisabled = false;
    let firstClick = true;
    let numMatched = 0;
    let numTries = 0;
    let numImages = 0;
    let timerInterval;
    let elapsed = 0;
    let timerFired = false;
    let testComplete = false;

    createGridBtn.addEventListener('click', function () {
        // error input handling type number
        if (gridSizeInput.value) {
            createGrid(parseInt(gridSizeInput.value));
        }
    });

    function createGrid(gridSize) {
        firstClick = true;
        numMatched = 0;
        numImages = 0;
        numTries = 0;
        prevTile = undefined;

        if (gridSize) {

            let imgArray = [];
            imgArray = getImages(gridSize);

            let imgArrayShuffled = shuffle(imgArray);
            // Loop through shuffled image array and output to browser. 

            let gridMarkup = `
            ${
                imgArrayShuffled.map((item, index) => {
                    let tile = `<div><p class="imgTile closed" data-tileid="${index}"></p><img src="assets/img/concentrateYo/${item}.png"></div>`
                    return tile;
                }).join('')
            }`;

            let columnSize = '50px ';

            gridContainer.style.gridTemplateColumns = `repeat(${gridSize},${columnSize})`;
            gridContainer.style.gridTemplateColumns = `repeat(${gridSize},${columnSize})`;

            gridContainer.innerHTML = gridMarkup;

            resetTimer();
        }
    }

    function getImages(gridSize) {

        let imgSrc = [];
        let imageArray = [];

        for (let i = 0; i < (gridSize * gridSize) / 2; i += 1) {

            imageArray.push(`tileImg-${i}`);
        }

        numImages = imageArray.length;

        imageArray.push(...imageArray);

        return imageArray;
    }

    function shuffle(array) {

        var currentIndex = array.length,
            temporaryValue, randomIndex;

        // While there remain elements to shuffle...
        while (0 !== currentIndex) {

            // Pick a remaining element...
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            // And swap it with the current element.
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }

        return array;
    }

    gridContainer.addEventListener('click', checkTile);

    function checkTile(e) {

        if (clickDisabled === false) {

            if ((e.target).classList.contains('imgTile')) {

                if (firstClick === true) {
                    startTimer();
                    firstClick = false;
                }

                let currentTile = e.target;

                // if tile is closed, make it open
                if (currentTile.classList.contains('closed')) {
                    currentTile.classList.add('open');
                    currentTile.classList.remove('closed');
                }

                // check if only one tile has been clicked/uncovered
                if (prevTile !== undefined) {
                    // if two tiles are the same image but not the exact tile, they are done!
                    if (currentTile.nextSibling.getAttribute('src') === prevTile.nextSibling.getAttribute('src') && currentTile.getAttribute('data-tileid') !== prevTile.getAttribute('data-tileid')) {
                        // make both tiles classes 'done'
                        currentTile.classList.remove('open');
                        currentTile.classList.add('done');
                        currentTile.setAttribute('disabled', true);
                        prevTile.classList.remove('open');
                        prevTile.classList.add('done');
                        prevTile.setAttribute('disabled', true);
                        prevTile = undefined;
                        currentTile = undefined;

                        numMatched += 1;
                        numTries += 1;

                        // if all tiles are matched, output DONE.
                        if (numMatched === numImages) {
                            stopTimer();
                            return;
                        }

                    } else {
                        // tiles are unmatched, make both tiles classes 'closed'
                        clickDisabled = true;
                        setTimeout(function () {
                            currentTile.classList.remove('open');
                            currentTile.classList.add('closed');
                            prevTile.classList.remove('open');
                            prevTile.classList.add('closed');
                            prevTile = undefined;
                            currentTile = undefined;
                            clickDisabled = false;
                        }, 1000)
                        numTries += 1;
                        return;
                    }
                }
                prevTile = currentTile;
            }
            e.stopPropagation();
        }
    }

    function startTimer() {
        timerFired = true;
        let start = new Date().getTime();
        timerInterval = setInterval(function () {

            let timer = new Date().getTime() - start;
            let totalSecs = Math.floor((timer / 100) / 10);
            let hundredthsSecs = Math.floor((timer / 10)) % 100;

            let secs = totalSecs % 60;
            let mins = Math.floor(totalSecs / 60);

            // add leading zero
            function pad(time) {
                let timeString = time + "";
                if (timeString.length < 2) {
                    return "0" + timeString;
                } else {
                    return timeString;
                }
            }

            elapsed = totalSecs;

            timerPara.innerHTML = pad(mins) + ":" + pad(secs) + ":" + pad(hundredthsSecs);

        }, 10);

    }

    function stopTimer() {
        alert('Game Finished!');
        clearInterval(timerInterval);
        displayResult();
    }

    function displayResult() {

        // perfect result
        console.log(`Num tries is ${numTries}`);
        console.log(`Num images is ${numImages}`);
        let accuracy = Math.round((numImages / numTries)*100);
        console.log(`Your accuracy was: ${accuracy}%`);
       if (numTries === numImages) {

       }



        // if (wordsPerMinute < 20) {
        //     resultBlurb.innerHTML = "You didn't even try, did you...";
        // } else if (wordsPerMinute >= 20 && wordsPerMinute < 30) {
        //     resultBlurb.innerHTML = "That was OK.";
        // } else if (wordsPerMinute >= 30 && wordsPerMinute <= 60) {
        //     resultBlurb.innerHTML = "That was GOOD.";
        // } else if (wordsPerMinute > 60) {
        //     resultBlurb.innerHTML = "That was MOST EXCELLENT.";
        // }

    }

    function resetTimer() {
        clearInterval(timerInterval);
        timerFired = false;
        testComplete = false;
        timerPara.innerHTML = "00:00:00";
    }

    function clearFields() {

        firstClick = false;
        
        elapsed = 0;

        resetTimer();
    }

})();