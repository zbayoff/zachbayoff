<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zach Bayoff | Web Developer | Contact</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
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

<body id="contact">

    <section class="container">
        <header class="header header-top header-top-md">
            <div class="logo">
                <p class="logo__text"><a href="index.php">ZachBayoff</a></p>
            </div>
            <nav>
                <ul class="nav">
                    <li class="nav__nav-item"><a class="nav__nav-link" href="index.php">About</a></li>
                    <li class="nav__nav-item"><a class="nav__nav-link" href="portfolio.php">Portfolio</a></li>
                    <li class="nav__nav-item"><a class="nav__nav-link" href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
    </section>

    <main>

        <section class="container container-contact-form">
            <div class="row">
                <div class="column-md-6 column-lg-4">
                    <h2 class="container-contact-form__heading">Contact</h2>
                    <p>Send me a message with details about your project, or email me at: </p>
                    <p><a href="#">zrbayoffdev@gmail.com</a></p>
                    <p>I'll get back to you ASAP.</p>
                    <form method="post" class="contact-form" id="contact-form" action="">
                        <div class="form-group">
                            <label class="form-label" for="name">Name<sup>*</sup></label>
                            <input class="form-input" id="name" type="text" name="name" required >
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email<sup>*</sup></label>
                            <input class="form-input" id="email" type="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="message">Message<sup>*</sup></label>
                            <textarea class="form-text-area" id="message" name="message" required></textarea>
                        </div>
                        <div class="form-group">
                            <p class="contact-required-msg"><sup>*</sup>Required.</p>
                        </div>
                        <div class="form-group">
                            <button id="contact-send-btn" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>

    <?php include 'assets/partials/footer.php' ?>
    
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/contact.js"></script>

</body>

</html>
