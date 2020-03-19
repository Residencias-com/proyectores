$(document).ready(function () {
  $('#example1').DataTable({
    language: {
        "lengthMenu": "Mostrar por pagina: _MENU_",
        "zeroRecords": "No se encontraron resultados en su busqueda",
        "searchPlaceholder": "Buscar registros:",
        "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
        "infoEmpty": "No existen registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "search": "Buscar:",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
    }
  })
});
var id;
var link;
$('#deleteProyector').on('show.bs.modal', function (event) {
  link = $(event.relatedTarget)
  id = link.data('id')
  var name = link.data('name')
  var modal = $(this)
  modal.find('.modal-title span').text(name)
});

$('#b-borrar').click(function(){
  
  $.ajax({
    url: "<?php echo base_url();?>/admin/borrar/"+id,
    context: document.body
  }).done(function(res) {
    // $( this ).addClass( "done" );
    console.log(res);
    $('#deleteProyector').modal('hide')
    $(link).parent().parent().parent().remove()
  });
  
});

  $('#login').submit(function(e){
    e.preventDefault();
    $.ajax({
      url:$(this).attr('action'),
      type:$(this).attr('method'),
      data:$(this).serialize(),
      success:function(response){
        alert(response);
      }
    });
  });

