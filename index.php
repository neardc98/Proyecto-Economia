<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8">
        <title>Economia</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

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
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-light rounded h-100 p-4">
                                <h4 class="mb-4">Proyecto Economia II</h4>
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Interes Simple</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Interes Compuesto</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Tasas
                                            Equivalentes</button>
                                        <button class="nav-link" id="nav-contact-tab2" data-bs-toggle="tab" data-bs-target="#nav-contact2" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Anualidades</button>
                                        <button class="nav-link" id="nav-profile-tab3" data-bs-toggle="tab" data-bs-target="#nav-profile3" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Amortizacion</button>
                                        <button class="nav-link" id="nav-profile-tab2" data-bs-toggle="tab" data-bs-target="#nav-profile2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">VPN</button>
                                        <button class="nav-link" id="nav-profile-tab4" data-bs-toggle="tab" data-bs-target="#nav-profile4" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">TIR</button>
                                    </div>
                                </nav>
                                <div class="tab-content pt-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        El interés es simple cuando sólo el capital gana intereses y es compuesto si a
                                        intervalos de tiempo preestablecidos el interés vencido se agrega al capital.
                                        Por lo que éste también genera intereses.
                                        <div class="col-sm-12 col-xl-12">
                                            <div class="bg-light rounded h-100 p-4">
                                                <h6 class="mb-4">Tasa de interés simple en un préstamo</h6>

                                                <div class="border rounded p-4 pb-0 mb-4">
                                                    <figure class="text-center">
                                                        <blockquote class="blockquote">
                                                            <p>¿Cuál es la tasa de interés simple anual si con $14644 se
                                                                liquida un préstamo de $14000 en un plazo de 6
                                                                meses?<br>

                                                                Los intereses son la diferencia entre el monto y el
                                                                capital prestado. <br>

                                                                I = 14644 − 14000 I = M − C o I = $644 <br>
                                                                El plazo en años es. <br>

                                                                n = 1/2 <br>
                                                                que equivale a un semestre. La tasa anual i se despeja
                                                                de la ecuación siguiente que resultó de sustituir los
                                                                valores anteriores en. <br>

                                                                I = Cin. 644 = 14000(i)(1/2) de donde 644(2)/14000 = i,
                                                                i = 0.092 o 9.2% simple anual</p>
                                                        </blockquote>
                                                        <br>
                                                        <figcaption class="blockquote-footer">
                                                            <a href="table.php">Aqui para conocer mas ejercicios
                                                                resueltos <cite title="Source Title"> Grupo 4</cite></a>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        Puede ser que la tasa compuesta es decir la tasa de interés compuesto sea
                                        variable diferente para cada periodo; o que sea constante la misma para todos
                                        los periodos. Si es variable se procede como en la sección anterior y si es
                                        constante o fija entonces el procedimiento es el siguiente.
                                        <div class="col-sm-12 col-xl-12">
                                            <div class="bg-light rounded h-100 p-4">
                                                <h6 class="mb-4">Tasa de interés para duplicar un capital</h6>

                                                <div class="border rounded p-4 pb-0 mb-4">
                                                    <figure class="text-center">
                                                        <blockquote class="blockquote">
                                                            <p>¿Con qué tasa de interés anual capitalizable por bimestre
                                                                se duplica un capital en 3 años? <br>

                                                                Si el capital C se duplica en 3 años entonces el monto
                                                                es <br>

                                                                M = 2C
                                                                El plazo es

                                                                n = 3 <br>
                                                                La frecuencia de conversión es

                                                                p = 6 <br>
                                                                El número de bimestres por año y el número de periodos
                                                                bimestrales en el plazo es <br>

                                                                np = 3(6) = 18. 2C = C(1 + i/6)18 <br>
                                                                Se cancela C ya que

                                                                1.039259226 = 1 + i/6 <br>
                                                                Se resta 1 a ambos lados de la ecuación y después se
                                                                multiplica por 6. <br>

                                                                (0.039259226)6 = i o i = 0.235555356 <br>
                                                                Esto indica que para duplicar un capital en 3 años debe
                                                                invertirse aproximadamente al <br>

                                                                23.56% anual capitalizable por bimestre.</p>
                                                        </blockquote>
                                                        <br>
                                                        <figcaption class="blockquote-footer">
                                                            <a href="widget.php">Aqui para conocer mas ejercicios
                                                                resueltos <cite title="Source Title"> Grupo 4</cite></a>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab2">

                                        <div class="col-sm-12 col-xl-12">
                                            <div class="bg-light rounded h-100 p-4">
                                                <h6 class="mb-4">El Valor Presente Neto (VPN)</h6>

                                                <div class="border rounded p-4 pb-0 mb-4">
                                                    <figure class="text-center">
                                                        <blockquote class="blockquote">
                                                            <p>
                                                                <br>
                                                                <img src="img/vpn.png" alt="" srcset="" style="width: 300px;height: 100px">
                                                                <br>
                                                                Donde:
                                                                <br>
                                                                · VPN= Valor presente Neto
                                                                <br>
                                                                · I0= Inversión Inicial
                                                                <br>
                                                                · La sumatoria desde j=1 hasta j=n
                                                                <br>
                                                                · TCD= tasa de costo del dinero o tasa de descuento
                                                                <br>
                                                                Reglas de decisión del VPN.
                                                                <br>
                                                                • Si VPN > 0, se acepta financieramente el proyecto.
                                                                <br>
                                                                • Si VPN < 0, se rechaza financieramente el proyecto.
                                                                <br>
                                                                • Si VPN=0, es indiferente financieramente invertir o no en el proyecto. Desventajas del VPN 
                                                                <br>
                                                                <br>· Se requiere previo conocimiento sobre la tasa de descuento para poder evaluar financieramente los proyectos. 
                                                                <br>· Cualquier equivocación en el cálculo de la tasa de descuento afecta la valoración de los proyectos alternativos, favoreciendo a los proyectos de mayor monto, puesto que será más fácil encontrar el valor presente de un proyecto de mayor valor en comparación con el valor presente de un proyecto de poco valor. 
                                                                <br>· Un aumento o una disminución leve en la tasa de descuento puede cambiar la clasificación de los proyectos. </p>
                                                        </blockquote>
                                                        <br>
                                                        <figcaption class="blockquote-footer">
                                                            <a href="vpn.php">Aqui para conocer mas ejercicios
                                                                resueltos <cite title="Source Title"> Grupo 4</cite></a>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-profile3" role="tabpanel" aria-labelledby="nav-profile-tab3">
                                        <div class="col-sm-12 col-xl-12">
                                            <div class="bg-light rounded h-100 p-4">
                                                <h6 class="mb-4"> Amortización</h6>
                                                <div class="border rounded p-4 pb-0 mb-4">
                                                    <figure class="text-center">
                                                        <blockquote class="blockquote">
                                                            <p> La amortización es el proceso de pagar una deuda gradualmente a lo largo del tiempo mediante pagos regulares, que incluyen tanto el capital (la cantidad prestada) como los intereses
                                                                Fórmula de Amortización
                                                                <br>
                                                                La fórmula general para calcular el pago de un préstamo con amortización es:
                                                                <br>
                                                                A=P⋅r⋅(1+r)n/(1+r)n−1A
                                                                <br>
                                                                • A es el monto del pago periódico.
                                                                <br>
                                                                • P es el monto del préstamo (capital).
                                                                <br>
                                                                • R es la tasa de interés periódica (tasa anual dividida por el número de períodos de pago por año).
                                                                <br>
                                                                • N es el número total de pagos (número de años multiplicado por el número de períodos de pago por año).
                                                            </p>
                                                        </blockquote>
                                                        <br>
                                                        <figcaption class="blockquote-footer">
                                                            <a href="amortizacion.php">Aqui para conocer mas ejercicios
                                                                resueltos <cite title="Source Title"> Grupo 4</cite></a>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        Se dice que dos tasas de interés son equivalentes si con diferentes periodos de
                                        capitalización producen iguales intereses en el mismo plazo.
                                        <div class="col-sm-12 col-xl-12">
                                            <div class="bg-light rounded h-100 p-4">
                                                <h6 class="mb-4">¿Cuál es la tasa anual capitalizable por semestre
                                                    equivalente al 12.96% anual compuesto por mes?</h6>

                                                <div class="border rounded p-4 pb-0 mb-4">
                                                    <figure class="text-center">
                                                        <blockquote class="blockquote">
                                                            <p>El problema es encontrar la tasa anual i compuesta por
                                                                semestre p = 2 que genere los mismos intereses en igual
                                                                plazo que la del 12.96% compuesto por mes p = 12. <br>
                                                                El procedimiento consiste en encontrar el monto en cada
                                                                caso, igualarlos y luego despejar i. <br> El monto para
                                                                un capital arbitrario C en el primer caso es: <br>

                                                                M1 = C(1 + i/2)2 <br>
                                                                Para el segundo caso, considerando también el plazo de
                                                                un año: <br>

                                                                M2 = C(1 + 0.1296/12)12 <br>
                                                                Al igualar los dos montos se obtiene la ecuación
                                                                siguiente: <br>

                                                                (1 + i/2)2 = (1 + 0.0108)12 <br>
                                                                Para despejar la incógnita i, se saca raíz cuadrada, se
                                                                resta la unidad y se multiplica por 2 a ambos lados de
                                                                la ecuación: <br>

                                                                (1 + i/2)2 = 1.137582229 <br>
                                                                i/2 = 1.066574999 − 1 <br>
                                                                i = (0.66574999)2 <br>
                                                                i = 0.133149998 <br>
                                                                Esto significa que invertir al 13.3149998% anual
                                                                compuesto por semestre es igual de productivo que al
                                                                12.96% compuesto por mes.</p>
                                                        </blockquote>
                                                        <br>
                                                        <figcaption class="blockquote-footer">
                                                            <a href="chart.php">Aqui para conocer mas ejercicios
                                                                resueltos <cite title="Source Title"> Grupo 4</cite></a>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab2">
                                        Una anualidad es una serie de pagos realizados a intervalos iguales durante un
                                        período determinado. Las anualidades pueden clasificarse en vencidas y
                                        anticipadas. Las anualidades vencidas son aquellas en las que los pagos se
                                        realizan al final de cada período, mientras que las anualidades anticipadas son
                                        aquellas en las que los pagos se realizan al inicio de cada período.
                                        <div class="col-sm-6 col-xl-12">
                                            <div class="bg-light rounded p-4">
                                                <h6 class="mb-4">Anualidades anticipadas</h6>
                                                <div class="border rounded p-4 pb-0 mb-4">
                                                    <figure class="text-center">
                                                        <blockquote class="blockquote">
                                                            <img src="img/anualidad_a.png" alt="" style="width: -webkit-fill-available;height: -webkit-fill-available">
                                                            <p>
                                                                El monto acumulado de np depósitos anticipados en las anualidades simples y ciertas es:
                                                                <br>
                                                                Donde:
                                                                <br>
                                                                · R: es el plazo periódico
                                                                <br>
                                                                · N: es el plazo en años
                                                                <br>
                                                                · i: es la tasa de interés anual capitalizable en p periodos por años
                                                            </p>

                                                        </blockquote>
                                                        <br>
                                                        <figcaption class="blockquote-footer">
                                                            <a href="form.php">Aqui para conocer mas ejercicios
                                                                resueltos <cite title="Source Title"> Grupo 4</cite></a>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                            </div>

                                            <div class="bg-light rounded h-100 p-4">
                                                <h6 class="mb-4">Anualidades Vencidas</h6>
                                                <div class="border rounded p-4 pb-0 mb-4">
                                                    <figure class="text-center">
                                                        <blockquote class="blockquote">
                                                            <img src="img/anualidad_a.png" alt="" style="width: -webkit-fill-available;height: -webkit-fill-available">
                                                            <p>
                                                                Se caracterizan porque los pagos se realizan al final de cada periodo, razón por la que se conocen también como anualidades vencidas.
                                                                <br>
                                                                Las aplicaciones más comunes de estas anualidades se refieren a la amortización de deudas como créditos hipotecarios automáticos o cualquier otro tipo que se liquida con pagos periódicos y cargos de interés compuestos.
                                                                <br>
                                                                El valor presente C de una anualidad vencida, simple cierta e inmediata esta dado por:
                                                            </p>
                                                            <img src="img/anualidades_v.png" alt="" srcset="" style="width: -webkit-fill-available;height: -webkit-fill-available">
                                                        </blockquote>
                                                        <br>
                                                        <figcaption class="blockquote-footer">
                                                            <a href="form.php">Aqui para conocer mas ejercicios
                                                                resueltos <cite title="Source Title"> Grupo 4</cite></a>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-profile4" role="tabpanel" aria-labelledby="nav-profile-tab4">
                                        <div class="col-sm-12 col-xl-12">
                                            Es la tasa interna de retorno o rentabilidad que ofrece una inversión.
                                            Es decir, es el porcentaje de beneficio o pérdida que tendrá una inversión
                                            para las cantidades que no se han retirado del proyecto.
                                            A la vez se la utiliza para la evaluación de proyectos de inversión,
                                            en donde esta se la define como el valor de la tasa de descuento que hace
                                            que el Van sea igual a cero; para un proyecto de inversión dado.

                                            <div class="bg-light rounded h-100 p-4">
                                                <h6 class="mb-4"> TIR</h6>
                                                <div class="border rounded p-4 pb-0 mb-4">
                                                    <figure class="text-center">
                                                        <blockquote class="blockquote">
                                                            <img src="img/TIR.png" alt="" style="width: -webkit-fill-available;height: -webkit-fill-available;">
                                                            <p>
                                                                Donde:
                                                                <br>
                                                                (Qi) = Flujo de caja en el periodo i.
                                                                <br>
                                                                (N)= Es es el número de periodos considerados.
                                                                <br>
                                                                (TIR)= Es el indicador de rentabilidad relativa del proyecto.
                                                                <br>
                                                                (i)= El tipo de interés.
                                                                <br>
                                                                (I)= Es la inversión realizada en el momento inicial.
                                                                <br>
                                                                Reglas de decisión del TIR
                                                                <br>
                                                                TIR > K, El proyecto de inversión será aceptado.
                                                                <br>
                                                                TIR < K, El proyecto debe rechazarse. <br>
                                                                    TIR=K, Estaríamos en una situación similar a la que se producía cuando el VAN era igual a cero
                                                                    <br>
                                                                    Función: Sirve para la toma de decisión de inversiones utilizadas, la cual comparar la factibilidad de diferentes opciones de inversión, Generalmente, la opción de inversión la TIR más alta es la preferida.
                                                            </p>
                                                        </blockquote>
                                                        <br>
                                                        <figcaption class="blockquote-footer">
                                                            <a href="tir.php">Aqui para conocer mas ejercicios
                                                                resueltos <cite title="Source Title"> Grupo 4</cite></a>
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sale & Revenue Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fa fa-chart-line fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Capital</p>
                                    <h6 class="mb-0">$7500</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Interes</p>
                                    <h6 class="mb-0">34.653%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fa fa-chart-area fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Monto</p>
                                    <h6 class="mb-0">$1203</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Periodo</p>
                                    <h6 class="mb-0">$23634</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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