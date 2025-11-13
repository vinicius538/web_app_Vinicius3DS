
let urlEstados = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados';

$.getJSON(urlEstados, function(estados) {
  estados.sort((a, b) => a.nome.localeCompare(b.nome));
  $.each(estados, function(i, estado) {
    $('#estados').append(`<option value="${estado.id}">${estado.nome}</option>`);
  });
});

$('#estados').on('change', function() {
  let idEstado = $(this).val();

  if (idEstado) {

    let urlMunicipios = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${idEstado}/municipios`;
    
    $.getJSON(urlMunicipios, function(municipios) {
      $('#municipios').html('<option value="">Selecione um município...</option>');
      municipios.sort((a, b) => a.nome.localeCompare(b.nome));
      $.each(municipios, function(i, municipio) {
        $('#municipios').append(`<option value="${municipio.id}">${municipio.nome}</option>`);
      });
    });

  } else {
    $('#municipios').html('<option value="">Selecione um estado primeiro...</option>');
  }
});

