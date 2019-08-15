var formMsj = $('form#msjContact')
var btnMsj  = $('#btnSubmit')

formMsj.submit( function (e) {

    e.preventDefault()
    var data = $(this).serializeArray()

  
    btnMsj.html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Enviando...').addClass('disabled');
  


    $.ajax({
        url: 'contacto/mensaje',
        type: 'POST',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'json',
        data: data
    })
    .done(function(a){
        if(a.return){
            location.reload();
            /*btnMsj.html('ENVIAR')
            $('#nombre').val('')
            $('#mail').val('')
            $('#mensaje').val('')*/
        }
    })
    .fail(function(a){
        btnMsj.html('ENVIAR')
        console.log('Error al guardar')
    })
})