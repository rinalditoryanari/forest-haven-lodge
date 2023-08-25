<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> Forest Haven Lodge</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles-1.css" rel="stylesheet" />

    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: auto;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top"> Forest Haven Lodge</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#rooms">Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#price">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">
                        Discover</h2>
                    <h1 class="mx-auto my-0 text-uppercase">tranquility</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">
                        Unplug, unwind, and experience the serenity of our forest retreat.
                    </h2>
                    <a class="btn btn-primary" href="{{route('pesan')}}">Book</a>
                </div>
            </div>
        </div>
    </header>
    <section class="about-section text-center">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-9">
                    <h2 class="text-white mb-4">Escape the ordinary and find solace in the heart of nature</h2>
                    <p class="text-white-50 pb-4 ">
                        immerse yourself in the lush embrace of Pine Grove Forest
                        while enjoying rustic luxury and unparalleled tranquility.
                        Your forest retreat awaits – book today for an enchanting getaway.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Product-->
    <section class="projects-section bg-light" id="">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." />
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Pine Grove Forest </h4>
                        <p class="text-black-50 mb-0">
                            A pristine haven of towering
                            pine trees, tranquil trails, and abundant wildlife.
                            Nestled in Greenridge County, it offers an escape to nature's embrace
                            for all who seek serenity and adventure.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center" id="rooms">
                <img class="col-lg-6 img-fluid" src="assets/img/gf44f478b779c0c41e39bfb15665428bf3.jpg" alt="..." />
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/bjlUhtXSi5w?si=iVy2GkjLWwTP43EX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <h4 class="mt-4 text-white">Standard Room</h4>
                                <p class="mb-0 text-white-50">
                                    Embrace comfort in our Standard Rooms,
                                    where every detail is thoughtfully designed to
                                    provide a cozy retreat after a day of exploration.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row gx-0 justify-content-center">
                <img class="col-lg-6 img-fluid" src="assets/img/1ec20d96f369584a6a6581d1ef3b1a12.jpg" alt="..." />
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/aRoiYGa_PK4?si=8XtuRw83B7Vu6vEZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <h4 class="mt-4 text-white">Deluxe Room</h4>
                                <p class="mb-0 text-white-50">
                                    Elevate your experience with our Deluxe Rooms,
                                    offering spacious elegance and modern amenities
                                    for a truly relaxing stay.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Three Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <img class="col-lg-6 img-fluid" src="assets/img/je65f2c7c90e9af96f44039327075e044.jpg" alt="..." />
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/s5WZbL8ZUB4?si=KGmtaRg-BzT5Z7qM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <h4 class="mt-4 text-white">Executive Suite</h4>
                                <p class="mb-0 text-white-50">
                                    Indulge in the epitome of luxury in our Executive Suites,
                                    where sophistication meets comfort,
                                    providing a lavish oasis for discerning travelers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- price-->
    <section class="signup-section" id="price">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <h1 class="text-white mb-5">Room Prices - Forest Haven Lodge</h1>
                    <table style="width: 100%;">
                        <tr>
                            <th class="py-3">Room Type</th>
                            <th class="px-3">Price per Night</th>
                        </tr>
                        <tr>
                            <td class="text-white text-opacity-75 py-3 mt-2 mb-5">
                                <h4>Standard Room</h4>
                            </td>
                            <td class="text-white text-opacity-75 py-3 mt-2 mb-5">
                                <h4>Rp. 100.000</h4>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-white text-opacity-75 py-3 mt-2 mb-5">
                                <h4>Deluxe Room</h4>
                            </td>
                            <td class="text-white text-opacity-75 py-3 mt-2 mb-5">
                                <h4>Rp. 200.000</h4>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-white text-opacity-75 py-3 mt-2 mb-5">
                                <h4>Excecutives Suite</h4>
                            </td>
                            <td class="text-white text-opacity-75 mx-auto mt-2 mb-5">
                                <h4>Rp. 300.000</h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black" id="aboutus">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">
                                123 Tranquil Path, Pine Grove Forest, Greenridge County, F4R3S7
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">
                                <a href="#!">reservations@foresthavenlodge.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">
                                +1 (555) 999-7563
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">
            Copyright &copy; Forest Haven Lodge
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts-1.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>