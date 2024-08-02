(function($){
    "use strict";
    // Datos iniciales ejercicio 1 anualidades
  const data = [
    ["Deuda:", "25000"],
    ["Intereses:", "3750"],
    ["Plazo (meses):", "15"],
    ["Monto Total a Pagar:", "=sum(B1,B2)"],
    ["Numero de Quincenas:", "=B3*2"],
    ["Abono:", "=round(B4/B5,4)"],
  ];
  
  // Inicializar Handsontable
  const container = document.getElementById("ejercicio_1_A");
  const hot = new Handsontable(container, {
    data: data,
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
  const data1 = [
    ["Deuda:", "500000"],
    ["Intereses:", "3750"],
    ["Plazo (meses):", "15"],
    ["Monto Total a Pagar:", "=sum(B1,B2)"],
    ["Numero de Quincenas:", "=B3*2"],
    ["Abono:", "=round(B4/B5,4)"],
  ];
  
  // Inicializar Handsontable
  const container1 = document.getElementById("ejercicio_2_A");
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
  
  
  // Datos iniciales ejercicio 3 anualidades
  const data3 = [
    ["Pago mensual:", "3100"],
    ["Numero de pagos:", "120"],
    ["tasa de interes:", "=-0.1935/12"],
    ["Valor presente:", "=round(PV(B3, B2, -B1, 0, 0),4)"],
  
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
    ["Pago mensual:", "0.012"],
    ["Numero de pagos:", "10"],
    ["tasa de interes:", "5250"],
    ["Anticipo:", "30000"],
    ["Valor presente de los pagos:", "=round(b2 * (1 - (1 + b1)^-b2) / b1,4)"],
    ["Precio total de contado:", "=round(B5 + B4,4)"],
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
    ["Precio del Tractor:", "375000"],
    ["Porcentaje del anticipo:", "0.30"],
    ["Anticipo:", "=b1*b2"],
    ["Monto Financiado:", "=b1-b3"],
    ["Tasa de interes anual:", "0.073"],
    ["Numero de pagos:", "14"],
    ["Tasa de interes mensual:", "=round(b5/12,4)"],
    ["Pago mensual:", "=round(PMT(b7,b6,-b4),4)"],
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
  
  
  // Datos iniciales ejercicio 7 anualidades
  const data7 = [
    ["C:", "7000","","",""],
    ["i:", "0.116","","M1","=round(B1*(1+B6)^B5,3)"],
    ["n:", "7"],
    ["p:", "2"],
    ["np", "14","","M2","=round(150000-e2,3)"],
    ["i/p", "0.058"],
    ["Enganche:", "=round(b1*B2,4)","","=1+b6"],
    ["Monto financiado:", "=B1-b7","","=round(d7^13,3)"],
    ["Valor presente de los pagos:", "=round(PMT(b6, b4, -b3),4)","","=round(d8-1,3)"],
    ["Monto financiado:", "=round(b9/(1-b2),4)","","R=","=ROUND(E5/(D7*D9/B6),3)"],
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
  
  // Datos iniciales ejercicio 6 anualidades
  const data6 = [
    ["Precio Total del comedor:", "=b10"],
    ["Porcentaje del enganche:", "0.20"],
    ["Monto de cada pago quincenal:", "528"],
    ["Numero de pagos quincenales:", "13"],
    ["Tasa de interes anual:", "0.082"],
    ["Tasa de interes quincenal:", "=round(b5/24,4)"],
    ["Enganche:", "=round(b1*B2,4)"],
    ["Monto financiado:", "=B1-b7"],
    ["Valor presente de los pagos:", "=round(PMT(b6, b4, -b3),4)"],
    ["Monto financiado:", "=round(b9/(1-b2),4)"],
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
  
  // Datos iniciales ejercicio 8 anualidades
  const data8 = [
    ["M =", "14000","","",""],
    ["i =", "0.0972","","n=","=10*(0.1209413/0.080674)"],
    ["R=", "875","","=(B1/(B3*(1+(B2/B4)))*(B2/B4)+1)"],
    ["p=", "12","","=ln(1.1285587)","=ln(1.0081)"],
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
    ["R =", "500","","",""],
    ["i =", "0.216"],
    ["n =", "2","","M","=round(B1*(1+B5)*((((1+B5)^B6)-1)/(B5)),2)"],
    ["p =", "12"],
    ["i/p =", "0.018"],
    ["n/p =", "24"],
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
    ["M =", "54000","","",""],
    ["i =", "0.1176"],
    ["p =", "24","","M","=round(B1/((1+B6)*((((1+B6)^B5)-1)/(B6))),3)"],
    ["n =", "1.50"],
    ["n*p =", "36"],
    ["i/p =", "0.0049"],
    
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
    ["R =", "850","","","","","R2 =","850","","",""],
    ["i =", "0.096","","","","","i =","0.114"],
    ["p =", "0.3333","","M","=round(B1*(1+B4)*((((1+B4)^B5)-1)/(B4)),3)","","n2 =","0.5","","M2 =","=round(h1*(1+h5)*((((1+h5)^h6)-1)/(h5)),3)"],
    ["i/p =", "0.008","","","","","p2 =","12"],
    ["n*p =", "4","","","","","i2/p2 =","0.0095"],
    ["", "","","","","","n2*p2 =","6"],
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
    ["M =", "8500","","",""],
    ["i =", "0.1248","","n=","=10*(0.0528483/0.0023971)"],
    ["R=", "375","","=(B1/(B3*(1+(B2/B4)))*(B2/B4)+1)"],
    ["p=", "52","","=ln(1.05426)","=ln(1.0024)"],
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
    ["", "=c1*0.6","37448.61","60%",""],
    ["c =", "=b1","","",""],
    ["n =", "10","","R=","=B2/((1-(1+0.00632996)^(-b3))/(0.00632996))"],
    ["i=", "15.24","=b4/100","=round(c4/12,2)",""],
    ["", "","=d4/24","",""],
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
    ["C =", "180000","","","Anticipo =","45000","","",""],
    ["i =", "=round(14.80/100,3)","","","R =","7500","",""],
    ["desc =", "0.008","","","n =","18","","C =","=round(F2*((1-(1+G4)^(-F3))/(G4)),2)"],
    ["x1 =", "=b1*b3/0.1","","","i =","=14.82/100","=f4/12","",""],
    ["", "x1 =","=b1-b4","","","","x2 =","=f1+i3"],
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
  
  // Datos iniciales ejercicio 15 anualidades
  const data15 = [
    ["(1 + i/52)^52 = (1 + 0.1338/12)^12", "","","","","","","",""],
    ["1 + i/52 = 1.002562114", "","","","","","",""],
    ["i/p =", "0.002562114","","","=B4*((1-(1+B3)^(-B5))/(B3))","","",""],
    ["R =", "195","","","Descuento 9%","=round(E3*0.009/0.1,2)","",""],
    ["np =", "40","","","Total =","=round(E3-F4,2)","",""],
    
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
  
  
  // Datos iniciales ejercicio 16 anualidades
  const data16 = [
    ["R =", "375","","","",""],
    ["i =", "=round((8.46/100)/6,3)",""],
    ["n =", "6","","C=","=round(B1*((1-(1+B2)^(-B3))/(B2)),2)",""],
    
  ];
  
  // Inicializar Handsontable 
  const container16 = document.getElementById("ejercicio_16_A");
  const hot16 = new Handsontable(container16, {
    data: data16,
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
  
  // Datos iniciales ejercicio 17 anualidades
  const data17 = [
    ["R =", "3100","","","",""],
    ["n =", "10","","C=","=round(B1*((1-(1+B5)^(-B2*B3))/(B5)),2)",""],
    ["p =", "12",""],
    ["i =", "0.1935",""],
    ["i/p =", "0.016125",""],
    
  ];
  
  // Inicializar Handsontable 
  const container17 = document.getElementById("ejercicio_17_A");
  const hot17 = new Handsontable(container17, {
    data: data17,
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
  
  
  
  