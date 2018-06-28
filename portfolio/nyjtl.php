<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zach Bayoff | Web Developer | Project Description: NYJTL</title>
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

<body id="portfolio-nyjtl">
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
                            <a href="nyjtl.php">NYJTL - Description</a>
                        </li>
                    </ul>
                </nav>
                <h1>Project Name: NYJTL</h1>
                <p>Client: Anybody</p>
                <p>Tags: Webpage / Nonprofit / Bootstrap4</p>
                <h2>Project Background</h2>
                <p>I chose to build this project out of my love for tennis (it was also a midterm project for my CUNY City Tech Course). This project was built by using content from NYJTL and creating a new look and feel. Using Bootstrap4, the site includes many modern features that makes Bootstrap so easy to use as a front-end framework: Carousels, modals, accordians, hamburger menu, etc. Many of the links do not work, as this is more of a concept site. The donation page is set up, though, and functions like a typical donation system would work.</p>
                <h2>Link to Project</h2>
                <button class="container-project-background__project-btn"><a class ="container-project-background__project-link" href="https://zbayoff.github.io/nyjtl/" target="_blank">Launch Website</a></button>
            </div>
         </section>
 
        <section class="row">
            <div class="column project-desc-container">
                <h3>Home Page</h3>
                <div class="container-project-screenshot__project-item">
                    <img src="../assets/images/nyjtl-screenshot.png" class="container-project-screenshot__project-img">
                </div>
                <h3>Donation Page</h3>
                <div class="container-project-screenshot__project-item">
                    <img src="../assets/images/nyjtl-screenshot2.png" class="container-project-screenshot__project-img">
                </div>
            </div>
        </section>
  
    </main>


    <?php include '../assets/partials/footer.php' ?>
    </div>
    
    <script src="../assets/js/scripts.js"></script>

</body>

</html>
