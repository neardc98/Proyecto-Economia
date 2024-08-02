(function($){
    "use strict";
// Datos iniciales ejercicio 1 anualidades
  const data1 = [
    ["C=", "6500000", "", "", ""],
    ["M=", "7000000", "", "n=", "=round(((B2/B1)-1)/B4,2)"],
    ["n:", "?", "", "n=", "131 dias"],
    ["i=", "0.2120", "", "", ""],
    
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
    ["C=", "15000", "", "","","", "C=", "28500","",""],
    ["n=", "3", "", "M1=", "=b1*(1+b3*b2)","", "n=", "15", "M=", "79372.50"],
    ["i=", "0.1190", "", "", "","", "i=", "0.1190"],
    ["M=", "?", "", "", "", "", "M2=", "=E2+J2", "Monto al cumplir 18"],
    ["", "", "", "", ""]
    
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
    ["M=", "150000", "", "", ""],
    ["n=", "18", "", "C=", "=round(B1/(1+B3*B2),2)", "Deberia depositar"],
    ["i=", "0.1190", "", "", ""],
    ["", "", "", "", ""],
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
    ["C=", "5300", "", "", ""],
    ["n=", "0.33", "", "M=", "=round(B1/(1+B2*B3),2)", "Deberia invertir"],
    ["i=", "0.1080", "", "", ""],
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
    ["C=", "5300", "", "", ""],
    ["n=", "0.41666667", "", "M=", "=round(B1/(1+B3*B2),2)", ""],
    ["i=", "0.1860", "", "", ""],
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
    ["C=", "18350", "", "", ""],
    ["n=", "0.41666667", "", "m=", "=round(B1/(1+B3*B2),2)", ""],
    ["i=", "0.960", "", "", ""],
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
    ["C=", "$5,000.00", "", "C=", "$8,000.00", "", "C=", "$7,000.00","",""],
    ["n=", "0.25", "", "n=", "0.166666667", "", "n=", "0.083333333"],
    ["i=", "8%", "", "i=", "8%", "", "i=", "8%"],
    ["M=", "", "=ROUND(5000*(1+0.08)^0.25,2)", "M=", "", "=ROUND(8000*(1+0.08)^0.166666667,2)", "M=", "", "=ROUND(7000*(1+0.08)^0.083333333,2)"],
    ["M=", "$5,100.00", "", "M=", "$8,106.67", "", "M=", "$7,046.67"],
    ["", "", "", "", "", "", "M=", "$20,253.33"],
    ["", "", "", "", "", "", "", "Cuenta con:"," $20,253.33"]
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


// Datos iniciales ejercicio 8 anualidades
const data8 = [
    ["C=", "5000", "", "C=", "4000", "", "C=", "6000","",""],
    ["n=", "0.583333333", "", "n=", "0.25", "", "n=", "0.083333333"],
    ["i=", "11.40%", "", "i=", "11.40%", "", "i=", "11.40%"],
    ["M=", "$5,332.50", "", "M=", "$4,114.00", "", "M=", "$6,057.00"],
    ["", "", "", "", "", "", "", "Dispone de:", "$15,503.50"]
  ];
  
  // Inicializar Handsontable
  const container8 = document.getElementById("ejercicio_8_A");
  const hot8 = new Handsontable(container8, {
    data: data8,
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


// Datos iniciales ejercicio 9 anualidades
const data9 = [
    ["C=", "$36,000.00", "", "", ""],
    ["M=", "$33,000.00", "", "n=", "-0.816993464"],
    ["n:", "?", "", "n=", "56 dias"],
    ["i=", "10.20%", "", "", ""],
    ["", "", "", "", ""]
  ];
  
  // Inicializar Handsontable
  const container9 = document.getElementById("ejercicio_9_A");
  const hot9 = new Handsontable(container9, {
    data: data9,
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


// Datos iniciales ejercicio 10 anualidades
  const data10 = [
    ["M=", "$2,300.00", "", "M=", "$2,300.00", "", "M=", "$2,300.00","","","",""],
    ["n=", "0.25", "", "C=", "$2,192.04", "", "n=", "0.166666667", "", "C=", "$2,226.88" ],
    ["i=", "19.70%", "", "i=", "19.70%", "", "", "", "i=", "19.70%"],
    ["", "", "C=", "$6,681.78", "55%", "", "n=", "0.083333333", "", "C=", "$2,262.85"],
    ["", "", "C=", "5466.908808", "45%", "", "", "C=", "$12,148.69", "Precio"]
  ];
  
  // Inicializar Handsontable
  const container10 = document.getElementById("ejercicio_10_A");
  const hot10 = new Handsontable(container10, {
    data: data10,
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


// Datos iniciales ejercicio 11 anualidades
const data11 = [
    ["C=", "$6,500.00", "", "C=", "$10,350.00", "", "C=", "$15,750.00"],
    ["n=", "0.25", "", "n=", "0.416666667", "", "n=", "0.666666667"],
    ["i=", "9.40%", "", "i=", "10.30%", "", "i=", "11.20%"],
    ["", "", "", "M=", "$6,652.75", "", "M=", "$10,794.19", "", "M=", "$16,926.00"],
  ];
  
  // Inicializar Handsontable
  const container11 = document.getElementById("ejercicio_11_A");
  const hot11 = new Handsontable(container11, {
    data: data11,
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


  // Datos iniciales ejercicio 12 anualidades
const data12 = [
    ["C=", "$10,000.00", "", "", "C=", "$13,000.00", "", "", "","",""],
    ["n=", "0.416666667", "", "", "n=", "0.123287671", "", "", ""],
    ["i=", "12.60%", "", "", "i=", "12.60%", "", "", ""],
    ["", "M=", "$10,525.00", "", "M=", "$13,201.95", "", "M=", "$23,726.95", "Monto que dispone"],
  ];
  
  // Inicializar Handsontable
  const container12 = document.getElementById("ejercicio_12_A");
  const hot12 = new Handsontable(container12, {
    data: data12,
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


  // Datos iniciales ejercicio 13 anualidades
  const data13 = [
    ["C=", "$135,000.00", "", ""],
    ["n=", "0.166666667", "", "1 años y 2 meses"],
    ["i=", "12%", ""],
    ["M=", "$137,700.00", "", "debe"],
  ];
  
  // Inicializar Handsontable
  const container13 = document.getElementById("ejercicio_13_A");
  const hot13 = new Handsontable(container13, {
    data: data13,
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


   // Datos iniciales ejercicio 14 anualidades
   const data14 = [
    ["M=", "$15,750.00", "", "", "", "C=", "$14,362.58", "", "",""],
    ["n=", "0.583333333", "", "C=", "$14,362.58", "", "n=", "0.25", "M=", "$14,957.19"],
    ["i=", "16.56%", "", "i=", "16.56%", "Primer abono", "", ""],
  ];
  
  // Inicializar Handsontable
  const container14 = document.getElementById("ejercicio_14_A");
  const hot14 = new Handsontable(container14, {
    data: data14,
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


// Datos iniciales ejercicio 14 anualidades
const data15 = [
    ["M", "$13,000.00", "", "", ""],
    ["n", "0.833333333", "C", "$11,423.55", "La liquidaria"],
    ["i", "16.56%", "",],
  ];
  
  // Inicializar Handsontable
  const container15 = document.getElementById("ejercicio_15_A");
  const hot15 = new Handsontable(container15, {
    data: data15,
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