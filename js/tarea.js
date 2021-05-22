
var idTarea=""

$( document ).ready(function() {
  agregarTareas()
  pasarTareaIncompleto()
  pasarTareaCompleta()
  setValueTarea()
  cambiarNombreTarea()

});

function uniqId() {
    return Math.round(new Date().getTime() + (Math.random() * 100));
  }

function pasarTareaCompleta (){
    $(document).on('click','.incompleto',function(){
        $(this).removeClass( 'incompleto' ).addClass( "completo" ).text('Completo')
    }) 
}

function pasarTareaIncompleto (){
    $(document).on('click','.completo',function(){
        $(this).removeClass( 'completo' ).addClass( "incompleto" ).text('Incompleto')
    })
}

function agregarTareas(){
    $(document).on('click','[name="addTarea"]',function(e){
        e.preventDefault();
        let nuevaTarea = $('input[name=nombreTarea]').val();
        const html  = 
        '<h1 class="tarea sombra">'+
            '<p id='+nuevaTarea+uniqId()+'>'+nuevaTarea+'</p>'+
            '<div class="estado">'+
                '<button type="button" class="incompleto">Incompleto</button>'+
            '</div>'+
            '<div class="acciones">'+
                '<button type="button" class="btn btn-primario" name="editarTarea">Editar</button>'+
                '<button type="button" class="btn btn-primario" name="eliminarTarea">Eliminar</button>'+
            '</div>'+
        '</h1>';
        $('.listado-tareas').append(html);
        $('#nombreTarea').val("");
    })
}

function setValueTarea(){
    $(document).on('click','[name=editarTarea]',function(){
       let nombreTarea =  $( this ).parent().prev().prev().html();
       idTarea=  $( this ).parent().prev().prev().attr('id');
       $('[name=addTarea]').removeAttr('name').attr('name','editarTareaSubmit').val('Editar');
       $('#nombreTarea').val(nombreTarea);
       
    })
 
}

function cambiarNombreTarea(){
    $(document).on('click','input[name=editarTareaSubmit]',function(e){
        e.preventDefault()
       let valorTarea = $('#nombreTarea').val()
        $('#'+idTarea).html(valorTarea)
        $('#nombreTarea').val("");
        $('[name=editarTareaSubmit]').removeAttr('name').attr('name','addTarea').val('Enviar');
     })
}