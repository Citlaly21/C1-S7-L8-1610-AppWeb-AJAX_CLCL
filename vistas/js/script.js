$("#email").change(function () {
    $(".aler").remove();
    
    var email= $(this).val();
    //console.log("Tu email es:",email);
    var datos= new FormDatam();
    datos.append("validarEmail",email);

    $.ajax({

        url:"ajax/formularios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType:"JSON",
        success: function(respuesta){
            //console.log("Contenido de respuesta", respuesta);
            if(respuesta){
                $("#email").val("");
                $("#email").parent().after(
                    <div class="alert alert warning">
                        <b>ERROR:</b>
                        ¡El correo ya existe en la Base de Datos!
                        
                    </div>
                )
            }
        }
    });
})