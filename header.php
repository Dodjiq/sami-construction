<!-- header.php -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle ?? 'Sami construction'; ?></title>
    <!-- Favicon -->
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="images/cropped-favicon1-192x192.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--CSS Plugins-->
    <link rel="stylesheet" href="css/plugin.css" />
    <!-- Default CSS-->
    <link rel="stylesheet" href="css/default.css" />
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/styles.css" />
    <!--FontAwesome CSS-->
    <link rel="stylesheet" href="icons/font-awesome.min.css" />
    <style>
        /* Sticky header styles */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 1002;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.96);
        }

        body {
            padding-top: 170px;
            /* Make space for header; adjust as needed */
        }

        @media (max-width: 991px) {
            body {
                padding-top: 120px;
            }
        }

        /* Optionally, make upper-header bg not transparent if needed */
        .upper-header,
        .lower-header {
            background-clip: padding-box;
        }
    </style>
</head>

<body>
    <!-- Header Section Starts -->
    <header>
        <div class="upper-header bg-orange py-4">
            <div class="container">
                <div class="upper-header-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-6 text-center text-xl-start">
                            <div class="header-logo">
                                <a href="index.html"><img src="images/logo-sami.png" alt="header-logo" width="50%" /></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div
                                class="header-contact-info d-xl-flex justify-content-end d-none d-xl-block">
                                <ul
                                    class="m-0 p-0 list-unstyled d-flex align-items-center me-3">
                                    <li class="contact-info-icon me-2">
                                        <i
                                            class="fa fa-phone bg-white orange lh-lg rounded-circle text-center"
                                            aria-hidden="true"></i>
                                    </li>
                                    <li class="contact-info-description">
                                        <span class="h6 text-white antonio text-uppercase">Téléphone</span>
                                        <p class="text-white">+33 4 66 20 46 83</p>
                                    </li>
                                </ul>
                                <ul class="m-0 p-0 list-unstyled d-flex align-items-center">
                                    <li class="contact-info-icon me-2">
                                        <i
                                            class="fa fa-envelope bg-white lh-lg orange rounded-circle text-center"
                                            aria-hidden="true"></i>
                                    </li>
                                    <li class="contact-info-description">
                                        <span class="h6 text-white antonio text-uppercase">Adresse e-mail</span>
                                        <p class="text-white">contact@sami-construction.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="lower-header header-nav-menu position-relative z-1"
            id="header-nav-menu">
            <div class="container">
                <div class="lower-header-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-9">
                            <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul
                                    class="navbar-nav align-items-center flex-row"
                                    id="responsive-menu">
                                    <li class="nav-item h6 d-xl-flex m-0">
                                        <a
                                            class="nav-link pe-4 ps-0 <?php echo basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : ''; ?> text-uppercase antonio"
                                            aria-current="page"
                                            href="index.php">Accueil</a>
                                    </li>
                                    <li class="nav-item h6 d-xl-flex m-0">
                                        <a
                                            class="nav-link px-4 <?php echo basename($_SERVER['PHP_SELF']) === 'about.php' ? 'active' : ''; ?> text-uppercase antonio"
                                            href="about.php">À propos</a>
                                    </li>
                                    <li class="nav-item h6 d-xl-flex m-0">
                                        <a
                                            class="nav-link px-4 <?php echo basename($_SERVER['PHP_SELF']) === 'service-list.php' ? 'active' : ''; ?> text-uppercase antonio"
                                            href="service-list.php">Nos services</a>
                                    </li>
                                    <li class="nav-item h6 d-xl-flex m-0">
                                        <a
                                            class="nav-link px-4 white <?php echo basename($_SERVER['PHP_SELF']) === 'project-list.php' ? 'active' : ''; ?> text-uppercase antonio"
                                            href="project-list.php">Nos réalisations</a>
                                    </li>
                                    <li class="nav-item h6 d-xl-flex m-0">
                                        <a
                                            class="nav-link px-4 <?php echo basename($_SERVER['PHP_SELF']) === 'team.php' ? 'active' : ''; ?> text-uppercase antonio"
                                            href="team.php">Notre équipe</a>
                                    </li>
                                    <li class="nav-item h6 no-after m-0">
                                        <a
                                            class="nav-link px-4 white text-uppercase antonio <?php echo basename($_SERVER['PHP_SELF']) === 'contact.php' ? 'active' : ''; ?>"
                                            href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="socials py-4 d-none d-xl-block">
                                <ul class="list-unstyled d-flex justify-content-end">
                                    <li class="me-2">
                                        <a href="https://www.facebook.com/profile.php?id=100085516713278">
                                            <i
                                                class="fa fa-facebook-square bg-orange lh-lg text-center"
                                                aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCDgY-qbqYxmcZeSU-AoK_Qg/videos">
                                            <i
                                                class="fa fa-youtube-play bg-orange text-center lh-lg"
                                                aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="slicknav-mobile"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section Ends -->