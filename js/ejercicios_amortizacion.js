(function($){
    "use strict";
// Datos iniciales ejercicio 1 anualidades
  const data1 = [
    ["i =", "10.80%", "", "", ""],
    ["p=", "12", "V=(1-((1+(0.417)*(0.108))*(1+0.009)^-5)/(0.009)^2",],
    ["i/p=", "0.009", "v", "9.648344418", "", "", "", "", ""],
    ["n=", "0.417", "", "", "", "", "", "", ""],
    ["", "T=(1-((1+0.009)^-5))/(0.009)", "T=4.867784784", ],
    ["d=", "1000", "C=T(R1)+V(d)", "", "", "", "", "", ""],
    ["c=", "60000", "R1=C-V(d)/T", "", "", "", "", "", ""],
    ["V=", "9.648344418", "R1=(60000-9.65*(1000))/4.868"],
    ["T=", "4.867784784", "R1=$10,343.85"]
    
  ];
  
  // Inicializar Handsontable
  const container1 = document.getElementById("ejercicio_1_A");
  const hot1 = new Handsontable(container1, {
    data: data1,
    colHeaders: false, // Mostrar encabezados de columna personalizados
    rowHeaders: false, // No mostrar índices de fila
    contextMenu: true,
    manualRowResize: true,
    manualColumnResize: true,
    formulas: true,
    filters: false,
    dropdownMenu: false,
    licenseKey: "non-commercial-and-evaluation", // Necesario para uso personal y evaluación
    cells: function (row, col, prop) {
      const cellProperties = {};
      // Poner en negrita la celda en la fila 0, columna 0
      if ((row === 1, 2 && col === 0)) {
        cellProperties.className = "bold-cell";
      }
      return cellProperties;
    },
  
  });
  

  // Datos iniciales ejercicio 2 anualidades
  const data2 = [
    ["PERIODO", "RENTA®", "INTERES (I)", "AMORTIZACION (a)", "SALDO ABSOLUTO (S)","","",""],
    ["0", "", "", "", "60,000.00","","M", "$61,719.27"],
    ["1", "10,343.85", "540.00", "9,803.85", "50,196.15","","c", "$60,000"],
    ["2", "11,343.85", "451.77", "10,892.08", "39,304.07"],
    ["3", "12,343.85", "353.74", "11,990.11", "27,313.95","","I", "$61,719.27"],
    ["4", "13,343.85", "245.83", "13,098.02", "14,215.93"],
    ["5", "14,343.85", "127.94", "14,215.91", "0.02"]
    
  ];
  
  // Inicializar Handsontable
  const container2 = document.getElementById("ejercicio_2_A");
  const hot2 = new Handsontable(container2, {
    data: data2,
    colHeaders: false, // Mostrar encabezados de columna personalizados
    rowHeaders: false, // No mostrar índices de fila
    contextMenu: true,
    manualRowResize: true,
    manualColumnResize: true,
    formulas: true,
    filters: false,
    dropdownMenu: false,
    licenseKey: "non-commercial-and-evaluation", // Necesario para uso personal y evaluación
    cells: function (row, col, prop) {
      const cellProperties = {};
      // Poner en negrita la celda en la fila 0, columna 0
      if ((row === 1, 2 && col === 0)) {
        cellProperties.className = "bold-cell";
      }
      return cellProperties;
    },
  
  });
  

  // Datos iniciales ejercicio 3 anualidades
  const data3 = [
    ["R", "50000", "", "", "", ""],
    ["V", "1-(1+n*i)*(1+i/p)^-np/(i/p)^2"],
    ["d", "6500", "V=(1-((1+(2.5)*(0.108))*(1+0.0213)^-15)/(0.0213)^2"],
    ["i", "0.1278", "v=84.07816563"],
    ["p", "6","C = 12.72517236(50,000) + 84.07816573(6,500)"],
    ["n", "2.5", "","T=12.72517236"],
    ["i/p", "0.0213", "T=12.72517236", "C=$1,182,766.69"],
    ["T", "1-(1+i/p)^-np/(i/p)", "T=(1-((1+0.0213)^-15))/(0.0213)"],
    ["d", "6500"],
    ["R", "50000", "C=T(R1)+V(d)", "V=84.07816563", ]
  ];
  
  // Inicializar Handsontable
  const container3 = document.getElementById("ejercicio_3_A");
  const hot3 = new Handsontable(container3, {
    data: data3,
    colHeaders: false, // Mostrar encabezados de columna personalizados
    rowHeaders: false, // No mostrar índices de fila
    contextMenu: true,
    manualRowResize: true,
    manualColumnResize: true,
    formulas: true,
    filters: false,
    dropdownMenu: false,
    licenseKey: "non-commercial-and-evaluation", // Necesario para uso personal y evaluación
    cells: function (row, col, prop) {
      const cellProperties = {};
      // Poner en negrita la celda en la fila 0, columna 0
      if ((row === 1, 2 && col === 0)) {
        cellProperties.className = "bold-cell";
      }
      return cellProperties;
    },
  
  });


  // Datos iniciales ejercicio 4 anualidades
  const data4 = [
    ["R", "C=(R1/(f-(i/p)))*((((1+f)/(1+(i/p))^(np))-1)"],
    ["f", "6%", "", "", "", "", "", "", ""],
    ["R1", "$3,066.11"],
    ["i", "12%", "", ""],
    ["p", "24", "", "", ""],
    ["n", "0.25", ""],
    ["i/p", "0.005", "", "", ""],
    ["c", "$21,000.00", "", ""]
  ];
  
  // Inicializar Handsontable
  const container4 = document.getElementById("ejercicio_4_A");
  const hot4 = new Handsontable(container4, {
    data: data4,
    colHeaders: false, // Mostrar encabezados de columna personalizados
    rowHeaders: false, // No mostrar índices de fila
    contextMenu: true,
    manualRowResize: true,
    manualColumnResize: true,
    formulas: true,
    filters: false,
    dropdownMenu: false,
    licenseKey: "non-commercial-and-evaluation", // Necesario para uso personal y evaluación
    cells: function (row, col, prop) {
      const cellProperties = {};
      // Poner en negrita la celda en la fila 0, columna 0
      if ((row === 1, 2 && col === 0)) {
        cellProperties.className = "bold-cell";
      }
      return cellProperties;
    },
  
  });


   // Datos iniciales ejercicio 5 anualidades
   const data5 = [
    ["R", "$14,500.00"],
    ["i", "0.132"],
    ["p", "12"],
    ["np", "15"],
    ["C", "$199,496.38"],
    ["i/p", "0.011"],

  ];
  
  // Inicializar Handsontable
  const container5 = document.getElementById("ejercicio_5_A");
  const hot5 = new Handsontable(container5, {
    data: data5,
    colHeaders: false, // Mostrar encabezados de columna personalizados
    rowHeaders: false, // No mostrar índices de fila
    contextMenu: true,
    manualRowResize: true,
    manualColumnResize: true,
    formulas: true,
    filters: false,
    dropdownMenu: false,
    licenseKey: "non-commercial-and-evaluation", // Necesario para uso personal y evaluación
    cells: function (row, col, prop) {
      const cellProperties = {};
      // Poner en negrita la celda en la fila 0, columna 0
      if ((row === 1, 2 && col === 0)) {
        cellProperties.className = "bold-cell";
      }
      return cellProperties;
    },
  
  });


  // Datos iniciales ejercicio 6 anualidades
  const data6 = [
    ["R=", "$18,000.00", "", ""],
    ["p", "6", "el precio actualizado es de"],
    ["i=", "0.15", "C=R(1-(1+i/p)^-np/i/p"],
    ["np", "10", "C=18,000+157,537151"],
    ["i/p=", "0.025", "C=18,000(1-(1+0,025)^-10/0,025"],
    ["", "C= $157,555.15", "", "", "", "", "", "", ""],
    ["", "C=18,000(8,752063932)", ""],
    ["", "C= $157,537.15"],
    ["", "Esta le conviene más"],

  ];
  
  // Inicializar Handsontable
  const container6 = document.getElementById("ejercicio_6_A");
  const hot6 = new Handsontable(container6, {
    data: data6,
    colHeaders: false, // Mostrar encabezados de columna personalizados
    rowHeaders: false, // No mostrar índices de fila
    contextMenu: true,
    manualRowResize: true,
    manualColumnResize: true,
    formulas: true,
    filters: false,
    dropdownMenu: false,
    licenseKey: "non-commercial-and-evaluation", // Necesario para uso personal y evaluación
    cells: function (row, col, prop) {
      const cellProperties = {};
      // Poner en negrita la celda en la fila 0, columna 0
      if ((row === 1, 2 && col === 0)) {
        cellProperties.className = "bold-cell";
      }
      return cellProperties;
    },
  
  });


  
  // Datos iniciales ejercicio 7 anualidades
  const data7 = [
    ["R1=", "24,335", "", "", "","",""],
    ["p=", "4 trimestre x año"],
    ["n=", "2 años", ""],
    ["i=", "0.0964", "","X", "33%"],
    ["C=", "$163,212.61", "", "C=", "$163,212.61", "67%", ""],
    ["X=", "$80,388.30", "", "Precio contado", "$243,600.91"]
  ];
  
  // Inicializar Handsontable
  const container7 = document.getElementById("ejercicio_7_A");
  const hot7 = new Handsontable(container7, {
    data: data7,
    colHeaders: false, // Mostrar encabezados de columna personalizados
    rowHeaders: false, // No mostrar índices de fila
    contextMenu: true,
    manualRowResize: true,
    manualColumnResize: true,
    formulas: true,
    filters: false,
    dropdownMenu: false,
    licenseKey: "non-commercial-and-evaluation", // Necesario para uso personal y evaluación
    cells: function (row, col, prop) {
      const cellProperties = {};
      // Poner en negrita la celda en la fila 0, columna 0
      if ((row === 1, 2 && col === 0)) {
        cellProperties.className = "bold-cell";
      }
      return cellProperties;
    },
  
  });

  })(jQuery);