

function validarDatosForm() {
    console.log("entre");
    nombre = document.getElementById('name').value;
    correo = document.getElementById('email').value;
    fono = document.getElementById('phone').value;
    if( (nombre=="") || ( correo=="" && fono =="" )){

       alert('Faltan Datos: debe ingresar nombre y al menos un teléfono o dirección de correo.','danger');
       
    
    }else{
        document.getElementById("formContacto").submit();
    }    
    
};

/*-- Mensaje de alertas --*/
var alertPlaceholder = document.getElementById('liveAlertPlaceholder')

function alert(message, type) {
  var wrapper = document.createElement('div')
  wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

  alertPlaceholder.append(wrapper)
}
/*-- --*/
