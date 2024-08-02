<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <title>Economia</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <link rel="icon" href="/img/logo.png">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="container-xxl position-relative bg-white d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner"
                class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->


            <?php include 'menu.php' ?>


            <!-- Content Start -->
            <div class="content">
                <?php include 'cabecera.php' ?>

                <div class="container-fluid pt4 px-4">
                    <div class="row g-4">
                    <div class="bg-light rounded h-100 p-4">
                            <h3 class="mb-4">Acerca de...</h3>
                            <div class="owl-carousel testimonial-carousel">
                                <div class="testimonial-item text-center">
                                        <img class="img-fluid rounded-circle mx-auto mb-4" src="img/user.jpg" style="width: 300px; height: 300px;">
                                        <h3 class="mb-1">Near</h3>
                                        <p>Estudiante</p>
                                        <p class="mb-0">Crear una página web dedicada a la subida de tareas y ejercicios de economía 
                                            fue un proceso emocionante y desafiante. Comencé por definir los objetivos del sitio: proporcionar 
                                            a los estudiantes un espacio interactivo donde pudieran acceder a material didáctico relevante, 
                                            compartir sus propias tareas y ejercicios, y recibir retroalimentación constructiva.</p>
                                    </div>
                                <div class="testimonial-item text-center">
                                    <img class="img-fluid rounded-circle mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 300px; height: 300px;">
                                    <h3 class="mb-1">Belle</h3>
                                    <p>Estudiante</p>
                                    <p class="mb-0">La creación del sitio implicó el diseño de una interfaz amigable que facilitara la navegación y el acceso al material del curso.</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sale & Revenue Start -->
                <!-- Sale & Revenue End -->
                <?php include 'footer.php' ?>
            </div>
            <!-- Content End -->
            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</php>