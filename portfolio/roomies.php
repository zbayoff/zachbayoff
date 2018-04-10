<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zach Bayoff | Web Developer | Project Description: Roomies</title>
    <link rel="stylesheet" href="../assets/css/main.css">
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

<body id="portfolio-roomies">
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
    <main class="container">
        <section class="container-project-background">
            <div class="row">
                <div class="">
                    <h1>Project Name: Roomies: Roommate Management</h1>
                    <p>Client: Anybody</p>
                    <p>Tags: CRUD Application / PHP / AJAX / MySQL / jQuery / Bootstrap4</p>
                    <h2>Project Background</h2>
                    <p>At one point in our lives, most of us have lived with someone else. Maybe a family member, friend, or complete stranger. Living shared spaces can get complicated and sometimes our roommates can get on our nerves. Chores are forgotten, guests overstay their welcome, and household purchases are left unreimbursed.</p>
                    <p><strong>Roomies</strong> is an interactive application that lets people create a group for their household, manage chores, schedule visitors, and create a household items list so that purchases can be tracked and roommates can be reimbursed easily. Roommates may join multiple groups, if say, they are in the process of moving and would like to join their new household, but are still living in their current household. Roomates can add their phone numbers to be automatically notified about chore dates, visitor arrivals, and household item's bills.</p>
                    <p>Below are screenshots of sample pages for a household called 'home'.</p>
                    <p>Feel free to launch the application and create a new group or join a group that your roommate has already created.</p>
                    <p>Drop me a <a href="../contact.php">message</a> to know what you think!</p>
                    <h2>Link to application</h2>
                    <p>This application will ask you to sign/log in.</p>
                    <button class="container-project-background__project-btn"><a class ="container-project-background__project-link" href="roomies/index.php">Launch Application</a></button>

                </div>
            </div>
        </section>

        <section class="container container-project-screenshot">
            <div class="row">
                <div class="">
                    <h3 class="container-project-screenshot__page-title">Sign Up</h3>
                    <div class="container-project-screenshot__project-item">
                        <img src="roomies/assets/img/screenshots/signup-page.png" class="container-project-screenshot__project-img">
                    </div>
                    <h3 class="container-project-screenshot__page-title">Login</h3>
                    <div class="container-project-screenshot__project-item">
                        <img src="roomies/assets/img/screenshots/login-page.png" class="container-project-screenshot__project-img">
                    </div>
                    <h3 class="container-project-screenshot__page-title">Groups</h3>
                    <div class="container-project-screenshot__project-item">
                        <img src="roomies/assets/img/screenshots/groups-page.png" class="container-project-screenshot__project-img">
                    </div>
                    <h3 class="container-project-screenshot__page-title">Dashboard</h3>
                    <div class="container-project-screenshot__project-item">
                        <img src="roomies/assets/img/screenshots/dashboard-page.png" class="container-project-screenshot__project-img">
                    </div>
                    <h3 class="container-project-screenshot__page-title">Chores</h3>
                    <div class="container-project-screenshot__project-item">
                        <img src="roomies/assets/img/screenshots/chores-page.png" class="container-project-screenshot__project-img">
                    </div>
                    <h3 class="container-project-screenshot__page-title">Items</h3>
                    <div class="container-project-screenshot__project-item">
                        <img src="roomies/assets/img/screenshots/items-page.png" class="container-project-screenshot__project-img">
                    </div>
                    <h3 class="container-project-screenshot__page-title">Visitors</h3>
                    <div class="container-project-screenshot__project-item">
                        <img src="roomies/assets/img/screenshots/visitors-page.png" class="container-project-screenshot__project-img">
                    </div>
                    <h3 class="container-project-screenshot__page-title">Preferences</h3>
                    <div class="container-project-screenshot__project-item">
                        <img src="roomies/assets/img/screenshots/preferences-page.png" class="container-project-screenshot__project-img">
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include '../assets/partials/footer.php' ?>
    
    <script src="../assets/js/scripts.js"></script>

</body>

</html>
