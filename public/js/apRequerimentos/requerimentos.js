$(document).ready(function () {


  Highcharts.chart('containerAlmo', {
    chart: {
      type: 'variablepie'
    },
    title: {
      text: 'Requerimentos.'
    },
    tooltip: {
      headerFormat: '',
      pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
        'Area (square km): <b>{point.y}</b><br/>' +
        'Population density (people per square km): <b>{point.z}</b><br/>'
    },
    series: [{
      minPointSize: 10,
      innerSize: '20%',
      zMin: 0,
      name: 'countries',
      data: [{
        name: 'Total',
        y: 505370,
        z: 92.9
      }, {
        name: 'Invalidez',
        y: 78867,
        z: 137.5
      }, {
        name: 'Voluntária',
        y: 41277,
        z: 214.5
      }, {
        name: 'Compulsória',
        y: 41277,
        z: 214.5
      }, {
        name: 'Especial',
        y: 357022,
        z: 235.6
      }]
    }]
  });



});



