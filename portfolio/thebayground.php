<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zach Bayoff | Web Developer | Project Description: The Bayground</title>
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alef|Reem+Kufi" rel="stylesheet">
</head>

<body id="portfolio-bayground">

    <section class="container">
        <header class="header header-top header-top-md">
            <div class="logo">
                <p class="logo__text"><a href="../index.php">ZachBayoff</a></p>
            </div>
            <nav>
                <ul class="nav">
                    <li class="nav__nav-item"><a class="nav__nav-link" href="../index.php">About</a></li>
                    <li class="nav__nav-item"><a class="nav__nav-link" href="../portfolio.php">Portfolio</a></li>
                    <li class="nav__nav-item"><a class="nav__nav-link" href="../contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
    </section>

    <main>

        <section class="container container-project-background">
            <div class="row">
                <div class="column-md-6">
                    <h1>Project Name: The Bayground</h1>
                    <p>Client: Anybody</p>
                    <p>Tags: Web Applications/Javascript</p>
                    <h2>Project Background</h2>
                    <p>The Bayground is a collection of small, simple to complex applications. They range from finding a set of prime numbers to finding the winner of a two-hand poker game.</p>
                    <p>This project was created to enhance javascript and programming skills. Namely, creating and using functions in different ways, writing loops, manipulating the DOM, adhering to ECMAScript 6 specifications, and much more.</p>
                    <p>Drop me a <a href="../contact.php">message</a> to know what you think!</p>
                    <h2>Link to application</h2>
                    <button class="container-project-background__project-btn"><a class ="container-project-background__project-link" href="bayground/thebayground.php">Launch Application</a></button>
                </div>
            </div>
        </section>

        <section class="container container-project-screenshot">
            <div class="row">
                <div class="column-lg-10">
                    <h3>Prime Number Module</h3>
                    <div class="container-project-screenshot__project-item">
                        <img src="bayground/assets/img/screenshots/thebayground-prime-number-module.png" class="container-project-screenshot__project-img">
                    </div>
                    <h3>Speed Typing Test Module</h3>
                    <div class="container-project-screenshot__project-item">
                        <img src="bayground/assets/img/screenshots/thebayground-speed-test-module.png" class="container-project-screenshot__project-img">
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include '../assets/partials/footer.php' ?>
    
    <script src="../assets/js/scripts.js"></script>

</body>

</html>
