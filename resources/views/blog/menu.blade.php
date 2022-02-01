<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>La Jaiba</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">La <span>Jaiba</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{route('inicio')}}" class="nav-item nav-link">Home</a>
                        <a href="{{route('equipo')}}" class="nav-item nav-link">Team</a>
                        <a href="{{route('comida')}}" class="nav-item nav-link active">Menu</a>
                        </div>
                        <a href="{{route('contacto')}}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Menu</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Food Start -->
        <div class="food mt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="food-item">
                           <img src ="/img/cangrejo.png"Alt="">
                            <h2>Mariscos</h2>
                            <p>
                            Deleita tu paladar con nuestro delicioso sabor a mar y tierra 
                            </p>
                           
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <img src ="/img/postre.png"Alt="">
                            <h2>Postres</h2>
                            <p>
                                Endulza tu paladar con nuestros ricos postres, todo preparado con las medidas de higiene necesarias para ti.
                            </p>
                           
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                           <img src ="/img/bebida.png"Alt="">
                            <h2>Bebidas</h2>
                            <p>
                                Prueba nuestras bebidas, tenemos una gran variedad.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Food End -->
        

        <!-- Menu Start -->
        <div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <p>Food Menu</p>
                    <h2>Delicious Food Menu</h2>
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#burgers">Comida</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#snacks">Snacks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#beverages">Bebidas</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="burgers" class="container tab-pane active">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Caldo</span> <strong>$80.00</strong></h3>
                                            <p>Camaron, Pescado, almeja, jaiba </p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Cocteles</span> <strong>$120.00</strong></h3>
                                            <p>Camaron, Campechana,Ostion,Vuelve a la vida</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Filetes</span> <strong>$220.00</strong></h3>
                                            <p>a la mantequilla, a la diabla, empanizado, empapelado, relleno, a la plancha</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Ceviche</span> <strong>$150.00</strong></h3>
                                            <p>Jaiba, pescado, ostion</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Camarones</span> <strong>$200.00</strong></h3>
                                            <p>Empanizados, Al mojo de Ajo, Al Ajillo, A la Diabla, A la Mantequilla</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/coctel.png" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="snacks" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Fresas con Crema</span> <strong>$50.00</strong></h3>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Platanos con Crema</span> <strong>$50.00</strong></h3>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Flan</span> <strong>$50.00</strong></h3>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/flan.png" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="beverages" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>carajillos</span> <strong>$50.00</strong></h3>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Cafe</span> <strong>$25.00</strong></h3>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Refrescos</span> <strong>$25.00</strong></h3>
                                            <p>Broing(Mango, Guayaba), Coca- Cola, Sangria, Fanta. </p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Agua Mineral </span> <strong>$50.00</strong></h3>
                                            <p>Naranja , Limon</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/jaiba.png" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Cervezas</span> <strong>$35.00</strong></h3>
                                            <p>Corona, Victoria, Modelo N, Modelo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/carajillo.png" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


       
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
