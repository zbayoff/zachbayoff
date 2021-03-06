<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zach Bayoff | Web Developer | Project Description: The Bayground</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="shortcut icon" type="image/png" href="../assets/images/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alef|Reem+Kufi" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115178608-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-115178608-1');

    </script>
    
</head>

<body id="portfolio-bayground">

    <header class="header">
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

<div class="page">
    <main class="container">
        <section class="row">
            <div>
                <nav class="breadcrumbs">
                    <ul>
                        <li>
                            <a href="../portfolio.php">Portfolio</a>
                        </li>
                        <span>/</span>
                        <li>
                            <a href="thebayground.php">The Bayground - Description</a>
                        </li>
                    </ul>
                </nav>
                <h1>Project Name: The Bayground</h1>
                <p>Client: Anybody</p>
                <p>Tags: Web Applications / Javascript</p>
                <h2>Project Background</h2>
                <p>The Bayground is a collection of small, simple to complex applications. They range from finding a set of prime numbers to playing a game of concentration.</p>
                <p>This project was created to enhance javascript and programming skills. Namely, creating and using functions in different ways, writing loops, manipulating the DOM (without jQuery), adhering to ECMAScript 6 specifications, and much more.</p>
                <p>Drop me a <a href="../contact.php">message</a> to know what you think!</p>
                <h2>Link to application</h2>
                <button class="container-project-background__project-btn"><a class ="container-project-background__project-link" href="bayground/thebayground.php">Launch Application</a></button>
            </div>
        </section>

        <section class="row">
            <div class="column project-desc-container">
                <h3 class="container-project-screenshot__page-title">Prime Number Module</h3>
                <div class="container-project-screenshot__project-item">
                    <img src="bayground/assets/img/screenshots/thebayground-prime-number-module.png" class="container-project-screenshot__project-img">
                </div>
                <h3 class="container-project-screenshot__page-title">Speed Typing Test Module</h3>
                <div class="container-project-screenshot__project-item">
                    <img src="bayground/assets/img/screenshots/thebayground-speed-test-module.png" class="container-project-screenshot__project-img">
                </div>
                <h3 class="container-project-screenshot__page-title">Concentration Game Module</h3>
                <div class="container-project-screenshot__project-item">
                    <img src="bayground/assets/img/screenshots/thebayground-concentrate-yo-module.png" class="container-project-screenshot__project-img">
                </div>
            </div>
        </section>

    </main>

    <?php include '../assets/partials/footer.php' ?>
    </div>
    
    <script src="../assets/js/scripts.js"></script>

</body>

</html>
