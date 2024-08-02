<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Amortizacion</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Handstable -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable@8.4.0/dist/handsontable.full.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/handsontable@8.4.0/dist/handsontable.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/handsontable-formulas@1.0.0/dist/handsontable-formulas.min.js"></script>

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
    <style>
        /* Estilos para las celdas */
        /* Elimina los bordes de las celdas */
        .handsontable td,
        .handsontable th {
            padding: 0.5rem 0.5rem;
            /* Relleno similar al de Bootstrap */
            text-align: center;
            display: table-cell;
            font-size: 1rem;
            /* Ajuste de fuente para coincidir con Bootstrap */
            border: none !important;
        }

        /* Agregar negrita */
        .bold-cell {
            font-weight: bold;
        }
    </style>

</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include 'menu.php' ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include 'cabecera.php' ?>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <h4 class="mb-4">Amortizacion</h4>
                <div class="row g-4">

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 1</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Obtenga las 5 rentas mensuales vencidas que amortizan un capital de $60,000 con
                                            intereses del 10.80% nominal mensual, suponiendo que cada uno es $1,000 mayor que el anterior
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_1_A"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 2</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Haga el cuadro de amortización del crédito del ejemplo 1 y determine los intereses
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_2_A"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 3</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            ¿Por qué cantidad fue un crédito para maquinaria agrícola, si se amortizó
                                            con 15 rentas bimestrales a una tasa del 12.78% compuesto por bimestres?
                                            Suponga que la primera es por $50,000 y crecen sucesivamente $6,500.
                                            ¿Cuánto se paga por intereses? ¿Con cuánto se liquida la deuda al hacer el pago número 8?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_3_A"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 4</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Se compra una computadora de $21,000, con 6 abonos quincenales que crecen
                                            5% sucesivamente a una tasa de interés del 12% nominal quincenal. ¿De cuánto es cada uno?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_4_A"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 5</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            En Canadá puede conseguir la maquinaria sin enganche, con 15 pagos mensuales vencidos
                                            de 14,500 dólares canadienses y una tasa de interés del 13.2% capitalizable por meses.

                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_5_A"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-xl-8">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 6</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            En Estados Unidos le ofrecen la maquinaria con un anticipo de US$18,000 y 10 abonos
                                            bimestrales vencidos iguales al anticipo y cargos del 15% de interés anual compuesto
                                            por bimestres.
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_6_A"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-xl-8">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 7</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Valor presente, cancelación anticipada de un crédito y cuadro de amortización
                                            El Hospital Regional de Norte renueva sus aparatos de radiología con un anticipo del 33%,
                                            y el resto a pagar en 2 años con amortización constante y pagos trimestrales. El primero de
                                            éstos es por US$24,335. Suponiendo que la tasa de interés es del 9.64% anual convertible
                                            por trimestres, obtenga:
                                            a) El precio de contado del nuevo equipo.

                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_7_A"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>




                </div>
            </div>
            <!-- Form End -->


            <!-- Footer Start -->
            <?php include 'footer.php' ?>
            <!-- Footer End -->
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
    <script src="js/ejercicios_amortizacion.js"></script>

</body>

</html>