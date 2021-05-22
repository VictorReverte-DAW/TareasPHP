$(document).ready(function () {
    toggleFormulario()
    añadirProyecto()
});

function toggleFormulario() {
    $(document).on('click', '#botonNuevoProyecto', function (e) {
        $('.formulario-nuevo-proyecto').toggle()
    })

}

function añadirProyecto(){
    $(document).on('click', '[name=añadirProyecto]', function (e) {
        e.preventDefault()
        if(!$('[name =nombreProyecto]')||!$('[name =nombreProyecto]').val() || $('[name =nombreProyecto]').val().lenght<=0){
            return false
        }
        let nombreProyecto = $('[name =nombreProyecto]').val()

        const html  = 
        "<li>"+'<button type="button" class="btn btn-blank">'+nombreProyecto+"</button>"+"</li>"
        $('.listado-proyectos').append(html);
        $('[name="nombreProyecto"]').val("");

    })

}