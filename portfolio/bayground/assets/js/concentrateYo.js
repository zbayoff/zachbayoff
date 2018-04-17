(function () {

    const createGridBtn = document.getElementById('project-concentrateYo__createGrid-btn');
    const gridSizeInput = document.getElementById('project-concentrateYo__gridSizeInput');

    createGridBtn.addEventListener('click', function () {

        // error input handling type number
        if (gridSizeInput.value) {
            createGrid(parseInt(gridSizeInput.value));
        }
    })

    function createGrid(gridSize) {

        if (gridSize) {

            let imgArray = [];
            imgArray = getImages(gridSize);

            let imgArrayShuffled = shuffle(imgArray);
            // Loop through shuffled image array and output to browser. 

            let gridMarkup = `
            ${
                imgArrayShuffled.map((item) => {
                    let tile = `<p><img src="/">${item}</p>`
                    return tile;
                }).join('')
            }
        `;

            const gridContainer = document.querySelector('.project-concentrateYo__grid-container');
            gridContainer.innerHTML = gridMarkup;
        }

    }

    function getImages(gridSize) {
        let imageArray = [];

        for (let i = 0; i < (gridSize * gridSize); i += 1) {
            imageArray.push(i);
        }

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

    function startTimer() {}

    function stopTimer() {}

    function resetTimer() {}

    function checkCard() {}


})();