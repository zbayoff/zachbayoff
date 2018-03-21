<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zach Bayoff | Web Developer | The Bayground</title>
    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alef|Reem+Kufi" rel="stylesheet">
</head>

<body>
    <section class="page">
        <section class="container">
            <header class="header header-top header-top-md">
                <div class="logo">
                    <p class="logo__text">ZachBayoff</p>
                </div>
                <nav>
                    <ul class="nav">
                        <li class="nav__nav-item"><a class="nav__nav-link" href="../../index.php">About</a></li>
                        <li class="nav__nav-item"><a class="nav__nav-link" href="../../portfolio.php">Portfolio</a></li>
                        <li class="nav__nav-item"><a class="nav__nav-link" href="../../contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>
        </section>

        <main>

            <header class="container container-bayground-header">
                <div class="row">
                    <div class="column-md-6">
                        <h1>The Bayground</h1>
                        <p>Click on a project to try it out.</p>
                        <span>Simple</span><input type="range" min="1" max="10"><span>Complex</span>
                    </div>
                </div>
            </header>

            <div class="container container-bayground-projects">
                <div class="row">
                    <div class="column-md-6">
                        <div class="container-modules">
                            <div id="modal-btn__project-prime" class="module-item">
                                <h3 class="module-title">Find Prime Numbers from Range</h3>
                            </div>
                            <div id="modal-container__project-prime" class="modal">
                                <div class="column-lg-6">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <span class="close">&times;</span>
                                            <h2>Find Prime Numbers Between Two Numbers</h2>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label class="form-label" for="prime__input-first-num">Enter First Number</label>
                                                <input class="form-input" id="prime__input-first-num" type="number">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="prime__input-second-num">Enter Second Number</label>
                                                <input class="form-input" id="prime__input-second-num" type="number">
                                            </div>
                                            <div>
                                                <button type="button" id="prime__calc-button">Calculate</button>
                                            </div>
                                            <div>
                                                <p>Result:</p>
                                                <div class="prime__result-area" id="prime__result-area">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="what-i-learned__link">What I learned from this project</a>
                                            <ul class="what-i-learned__body">
                                                <li>HTML input elements with a type 'number' pass their values as strings and must still be converted into type number using <em>parseInt</em></li>
                                                <li>addEventListener can be passed a second argument as an anonymous function or a function call, but not a function call that passes a value.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="module-item">

                            </div>
                            <div class="module-item">

                            </div>
                            <div class="module-item">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <?php include '../../assets/partials/footer.php' ?>

    </section>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/primeNumbers.js"></script>


</body>

</html>
