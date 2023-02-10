$(document).ready(function () {

  let valorAposFfin  = document.querySelector('#valorAposFfin ');
  valorAposFfin .addEventListener('input', function(e) {
    let valor = e.target.value.replace(/[^0-9,]/g, '').replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
    e.target.value = valor;
  });
});

$(document).ready(function () {
  let valorAposFprev = document.querySelector('#valorAposFprev');
  valorAposFprev.addEventListener('input', function(e) {
    let valor = e.target.value.replace(/[^0-9,]/g, '').replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
    e.target.value = valor;
  });
});

$(document).ready(function () {
  let valorPenFfin = document.querySelector('#valorPenFfin');
  valorPenFfin.addEventListener('input', function(e) {
    let valor = e.target.value.replace(/[^0-9,]/g, '').replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
    e.target.value = valor;
  });
});