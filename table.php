<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Interes Simple</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Handstable -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable@8.4.0/dist/handsontable.full.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/handsontable@8.4.0/dist/handsontable.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/handsontable-formulas@1.0.0/dist/handsontable-formulas.min.js"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
        /* Estilos para las celdas */
        /* Elimina los bordes de las celdas */
        .handsontable td,
        .handsontable th {
            padding: 0.5rem 0.5rem;
            /* Relleno similar al de Bootstrap */
            text-align: center;
            display: 100%;
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
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
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

            <!-- Table Start -->

            <div class="container-fluid pt-4 px-4">
                <h4 class="mb-4">Interes simple</h4>
                <div class="row g-4">

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 1</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            . ¿Qué día se consiguió un crédito por $65,000 si se cancela con un abono 
                                            de $30,000 el 15 de octubre y otro por $40,000 el 28 de diciembre siguiente? 
                                            Suponga cargos del 21.2% simple anual.
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-9 mx-auto">
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
                                        Al nacer su hijo, el arquitecto Javier invierte $15,000 
                                        y otros $28,500 tres años después, en una cuenta bancaria 
                                        que le da a ganar el 11.9% simple anual en promedio. ¿Cuánto 
                                        tiene el hijo al cumplir los 18 años?
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

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 3</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        ¿cuánto debió depositar al nacer su hijo el arquitecto Javier si a los 18 años requiere de $150,000 en la cuenta?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-9 mx-auto">
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
                                        La profesora Laura necesitará $15,000 para remodelar el baño de su casa, 
                                        ¿cuánto debe invertir 3 meses antes al 10.8%, si un mes antes había depositado $5,300 en la misma cuenta?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-9 mx-auto">
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
                                        ¿Con cuánto se cancela el día de hoy un crédito que se liquidaría con $53,000, 
                                        si se supone que el plazo fue de 7 meses, hoy se cumplen 5 meses y la tasa de interés simple anual es del 18.6%?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-9 mx-auto">
                                            <div id="ejercicio_5_A"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 6</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        El día de hoy Eduardo se entera de que tiene $18,350 en su cuenta de ahorros. 
                                        ¿Cuándo depositó $25,000, si 25 días antes de ahora había retirado $7,250 de la misma cuenta, 
                                        que le bonifica el 9.6% simple anual? Suponga que su cuenta estaba en ceros, claro.
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

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 7</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        El primer día de enero Lilí deposita $5,000 en un banco, que le reditúa el 8% anual, 
                                        el primero de febrero $8,000, y otros $7,000 el 1 de marzo. ¿Cuánto tendría en su 
                                        cuenta el 1 de abril del año siguiente?
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

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 8</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Para vacacionar en el mes de abril, el licenciado Cortés invierte $5,000 7 meses antes, 
                                        $4,000 tres meses después del primer depósito, y $6,000 un mes antes de vacacionar. 
                                        ¿De cuánto dinero podrá disponer al salir de vacaciones si le paga intereses del 11.4%?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_8_A"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 9</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        ¿Cuánto gana por concepto de intereses una persona que el 10 de 
                                        marzo deposita $15,000, después otros $18,000, y el 23 de octubre 
                                        siguiente tiene $36,000 en su cuenta, que le reditúa el 10.2% anual? 
                                        ¿Qué día hizo el segundo depósito a su cuenta?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_9_A"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 10</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Una mueblería ofrece un refrigerador dúplex con enganche del 45% y 3 
                                        pagos mensuales de $2,300 cada uno con cargos del 19.7%. 
                                        ¿Cuál es el precio de contado?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_10_A"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 11</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        . ¿Cuánto tiene en sus tres cuentas bancarias el doctor Amezcua, si 3 meses antes 
                                        tenía $6,500 en la primera, que le bonifica el 9.4% de interés simple anual, la segunda 
                                        le genera intereses del 10.3% y hace 5 meses tenía $10,350, y 8 meses antes de ahora tenía 
                                        $15,750 en otra que le da a ganar el 11.2% simple anual?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_11_A"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 12</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        ¿Cuál es el monto del que puede disponer una persona, si 5 meses 
                                        antes depositó $10,000 en una cuenta que le produce intereses del 
                                        12.6% simple anual, y 45 días después del primero deposita otros 
                                        $13,000 en la misma cuenta?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_12_A"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 13</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        ¿Cuánto debe ahora el señor Pérez, si en agosto del año pasado obtuvo un crédito automotriz por $135,000, 
                                        hizo un pago por $43,000 en diciembre y otro por $27,500 en marzo? Considere que le cargan 
                                        intereses del 12% y ahora es el mes de septiembre.
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_13_A"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 14</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        El 7 de junio Marisela consigue un crédito por $45,000 para remodelar su sala de 
                                        belleza, con cargos del 16.56% simple anual. Realiza un abono el 15 de agosto y 
                                        otro por $15,750 el 20 de diciembre. ¿Por qué cantidad es el primer abono 
                                        si el 15 de enero debe todavía $13,000?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_14_A"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Ejercicio 15</h6>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        En el problema 24, ¿con cuánto liquidaría su deuda Marisela el 1 de octubre?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body col-auto mx-auto">
                                            <div id="ejercicio_15_A"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- Table End -->

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
    <script src="js/ejercicios_interes_simple.js"></script>
</body>

</html>