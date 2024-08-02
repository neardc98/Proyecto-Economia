<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Interes Compuesto</title>
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
        <h4 class="mb-4">Interes Compuesto</h4>
        <div class="row g-4">

          <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Ejercicio 1</h6>
              <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      ¿Cuánto podrá retirar cada viernes durante 8 meses el
                      ingeniero Serrano, si al comienzo del plazo deposita $30,000
                      devengando intereses del 26% compuesto por semanas?
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

          <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Ejercicio 2</h6>
              <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      La beneficiaria de un seguro de vida recibirá $3,100 mensuales
                      durante 10 años, aunque prefiere que le den el equivalente total
                      al inicio del plazo. ¿Cuánto le darán si el dinero reditúa en
                      promedio el 19.35% anual compuesto por meses?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body col-9 mx-auto">
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
                      La beneficiaria de un seguro de vida recibirá $3,100 mensuales
                      durante 10 años, aunque prefiere que le den el equivalente total
                      al inicio del plazo. ¿Cuánto le darán si el dinero reditúa en
                      promedio el 19.35% anual compuesto por meses?
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
                      Una pizzería compra una flotilla de motocicletas con un anticipo de $30,000 y el resto con
                      10 abonos mensuales, de los cuales el último es de $5,250. ¿Cuál es el precio de contado de
                      la flotilla, si se cargan intereses del 1.2% mensual sobre saldos insolutos?
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
                      Un agricultor compra un tractor de $375,000, con un anticipo del 30% y 14 abonos mensua
                      les iguales. ¿De cuánto es cada uno si le cargan intereses del 7.3% simple anual sobre sal
                      dos insolutos?
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
                      Un profesor compra un comedor que liquida con un enganche del 20% y 13 abonos quince
                      nales de $528 cada uno, con intereses del 8.2% simple anual sobre saldos. ¿Cuál es el pre
                      cio de contado del mueble?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body col-9 mx-auto">
                      <div id="ejercicio_6_A"></div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>


        </div>
        <br>
        <h4 class="mb-4"></h4>
        <div class="row g-4">

          <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Ejercicio 7</h6>
              <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Al nacer su primogénito, un padre de familia realiza un depósito bancario por $7,000, ¿cuánto
                      debe depositar al comenzar cada semestre, desde el segundo, para disponer de $150,000
                      cuando su hijo cumpla los 7 años, suponiendo que la inversión reditúa el 11.6% de
                      interés nominal semestral? ¿De cuánto dispondría a los 15 años si continúa con los
                      depósitos? Obtenga los intereses que ganó a los 15 años del primogénito.
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
                      ¿Con cuántas rentas mensuales anticipadas de $875 se acumula un monto de $14,000? Si la
                      tasa de interés es del 9.72% anual capitalizable por meses?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body col-9 mx-auto">
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
                      Al comenzar su carrera profesional, cuya duración es de 9 semestres, un estudiante decide
                      ahorrar $500 al inicio de cada mes, durante todo ese tiempo, en un banco que paga intereses
                      del 21.6% anual capitalizable por meses. ¿De cuánto dinero dispondrá 2 años después de haber
                      concluido sus estudios?
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

          <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Ejercicio 10</h6>
              <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      ¿Cuánto debe invertir cada quincena, al principio, una persona que pretende acumular
                      $54,000 en un año y medio, considerando que su inversión gana el 11.76% de interés anual
                      compuesto por quincenas?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body col-9 mx-auto">
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
                      ¿Cuánto dinero se acumula con 15 pagos mensuales anticipados de $850, si la tasa de interés
                      anual capitalizable por meses en los primeros 4 meses es del 9.6% y después aumenta
                      1.8 puntos porcentuales cada semestre? Evalúe los intereses.

                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body col-9 mx-auto">
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
                      ¿Cuántos depósitos semanales de $375 se necesitan para acumular $8,500 con intereses del
                      12.48% anual compuesto por semanas?

                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body col-9 mx-auto">
                      <div id="ejercicio_12_A"></div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>


        </div>

        <br>
        <h4 class="mb-4"></h4>
        <div class="row g-4">

          <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Ejercicio 13</h6>
              <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      El actuario González aprovecha el paquete del problema 9 y conviene pagarlo con el 40%
                      de enganche y 10 abonos quincenales. ¿De cuánto es cada uno?

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
                      Al comprar un automóvil que le venden en $180,000, el arquitecto Morales puede elegir entre
                      3 planes de pago. Diga cuál le conviene más, si el dinero reditúa el 14.82% de interés
                      anual compuesto por meses.
                      a) De contado con el 8% de descuento.
                      b) Un anticipo de $45,000 y 18 pagos mensuales de $7,500 cada uno.
                      c) Un enganche del 30% y 8 abonos bimestrales de $15,000 cada uno.

                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body col-9 mx-auto">
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
                      Una tienda de artículos electrodomésticos que cobra intereses del 13.38% nominal mensual
                      en sus ventas a crédito ofrece un refrigerador con 40 pagos semanales vencidos de $195 cada
                      uno. El contador Sánchez compra uno de contado con un descuento adicional del 9%.
                      ¿Cuánto pagó por el aparato?

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

          <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Ejercicio 16</h6>
              <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      El sistema intermunicipal de agua potable estima que el consumo bimestral en un hogar es
                      de $375. ¿Cuánto debería cobrar al comenzar el año, si se sabe que el dinero reditúa el 8.46%
                      anual convertible por bimestres?

                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body col-auto mx-auto">
                      <div id="ejercicio_16_A"></div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>

          <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
              <h6 class="mb-4">Ejercicio 17</h6>
              <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Valor presente de un seguro de vida
                      La beneficiaria de un seguro de vida recibiría $3,100 mensuales durante 10 años, aunque prefiere
                      que le den el equivalente total al inicio del plazo. ¿Cuánto le darán si el dinero reditúa
                      en promedio el 19.35% anual compuesto por meses?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body col-auto mx-auto">
                      <div id="ejercicio_17_A"></div>
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
  <script src="js/ejercicios_interes_compuesto.js"></script>

</body>

</html>