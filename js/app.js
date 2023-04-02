

function validarDatosForm() {
    //console.log("entre");
    nombre = document.getElementById('nombre').value;
    correo = document.getElementById('email').value;
    telefono = document.getElementById('telefono').value;
    mensaje = document.getElementById('mensaje').value;

    if( (nombre=="") || ( email=="" && telefono =="" || mensaje=="" )){

       Mialert('Faltan Datos: debe completar el formulario.','danger');     
    
    }else{

        document.getElementById("formContacto").submit();

    }    
    
};

/*-- Mensaje de alertas --*/
var alertPlaceholder = document.getElementById('liveAlertPlaceholder')

function Mialert(message, type) {
  var wrapper = document.createElement('div')
  wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

  alertPlaceholder.append(wrapper)
}
/*-- --*/
