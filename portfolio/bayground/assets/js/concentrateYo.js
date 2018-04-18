(function () {

    const createGridBtn = document.getElementById('project-concentrateYo__createGrid-btn');
    const gridSizeInput = document.getElementById('project-concentrateYo__gridSizeInput');

    createGridBtn.addEventListener('click', function () {

        // error input handling type number
        if (gridSizeInput.value) {
            createGrid(parseInt(gridSizeInput.value));
        }
    });

    const gridContainer = document.querySelector('.project-concentrateYo__grid-container');

    gridContainer.addEventListener('click', checkTile);
    
    function createGrid(gridSize) {

        if (gridSize) {

            let imgArray = [];
            imgArray = getImages(gridSize);

            let imgArrayShuffled = shuffle(imgArray);
            // Loop through shuffled image array and output to browser. 

            let gridMarkup = `
            ${
                imgArrayShuffled.map((item) => {
                    let tile = `<div><p class="imgTile closed"></p><img src="assets/img/concentrateYo/${item}.png"></div>`
                    return tile;
                }).join('')
            }
        `;
            gridContainer.innerHTML = gridMarkup;
        }

    }

    function getImages(gridSize) {

        let imgSrc = [];
        let imageArray = [];

        for (let i = 0; i < (gridSize * gridSize) / 2; i += 1) {

            imageArray.push(`tileImg-${i}`);
        }

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

    function checkTile(e) {

        let clickCount = 0;

        if ((e.target).classList.contains('imgTile')) {
            console.log("you clicked a tile");
            console.log(e.target);

            let imgTile = e.target;

            if (imgTile.classList.contains('closed')) {
                imgTile.classList.add('open');
                imgTile.classList.remove('closed');
                clickCount += 1;
                
            }



        }

        e.stopPropagation();
    }

    function startTimer() {}

    function stopTimer() {}

    function resetTimer() {}




})();