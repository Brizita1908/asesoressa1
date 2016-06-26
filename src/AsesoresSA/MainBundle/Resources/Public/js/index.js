$(document).ready(function() {

  $( "form#inisesion" ).validate({
     rules: {
        usuario: {
          required: true,
        },
        contrasena: {
          required: true,
          minlength: 5
        },
    },
    messages: {
    usuario: {
      required: "Ingresa tu nombre de usuario."
    },
    contrasena: {
      required: "Ingresa tu contraseña.",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    }
  }
  }),

  $("#btn-inises").on("click", function(){

    if( $( "form#inicio-sesion" ).valid() ) {
      $.ajax({
        url: 'rpc/inisesion.php',
        type: 'post',
        // dataType: 'json',
        data: {"email": $("form#inicio-sesion #email").val(),
              "contrasena": $("form#inicio-sesion #contrasena").val()}
      })
      .done(function(msg) {
        if(msg=='true'){
          alert("Has ingresado al modulo de matriculas");
          window.location.href='matriculacion.php';
        }
        else{
          alert("El usuario o contraseña ingresados no son correctos");
        }
        console.log("success");
        $('#inicio-sesion').trigger("reset");

      })
      .fail(function(jqXHR, textStatus, errorThrown) {
        console.log("fail: " + textStatus + " " + errorThrown);
        $("#error").html(textStatus)
      })
      .always(function() {
        console.log("complete");
      });
    }
    
  })

 

});