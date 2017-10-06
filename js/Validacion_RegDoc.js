function validarFormulario(){
    //variables:
    var fNombre=document.getElementById("NombreDocente").value;
    var fApePater=document.getElementById("ApePaterDocente").value;
    var fApeMater=document.getElementById("ApeMaterDocente").value;
    var fEdad=document.getElementById("Edad").value;
    var fFechaNaci=document.getElementById("FechaNacimiento").value;
    var fNumTelefono=document.getElementById("NumTelefono").value;
    var fDNI=document.getElementById("dni").value;
    var fide=document.getElementById("identificador").value;
    var fContra=document.getElementById("Contraseña").value;
    

   
   
    //Valida el campo nombre: solo letras
    if(/^[A-Za-z][A-Za-z]*/.test(fNombre) == false){
        swal({
            title: "Validacion",
            text: "El campo nombre solo admite Texto",
            type: "error",
        })
        return false;
    }
    //Valida el campo ApePaterAlumno: solo letras
    if(/^[A-Za-z][A-Za-z]*/.test(fApePater) == false){
        swal({
            title: "Validacion",
            text: "El campo Apellido Paterno del docente solo admite Texto",
            type: "error",
        })
        return false;
    }
     //Valida el campo ApeMaterAlumno: solo letras
     if(/^[A-Za-z][A-Za-z]*/.test(fApeMater) == false){
        swal({
            title: "Validacion",
            text: "El campo Apellido Materno del docente solo admite Texto",
            type: "error",
        })
        return false;
    }
    //Validar el campo edad (Numerico)
    if( isNaN(fEdad)){
        swal({
            title: "Validacion",
            text: "El campo numerico Edad esta vacio",
            type: "error",
        })
        return false;
    }
    //Validar si se escribe una fecha de nacimiento
    if( !isNaN(fFechaNaci)){
        swal({
            title: "Validacion",
            text: "El campo Fecha de Nacimiento esta vacio",
            type: "error",
        })
        return false;
    }

    //Validar que no se deje en blanco la direccion
    
        //Validar el campo Numero Telefonico (Numerico)
        if( isNaN(fNumTelefono)){
            swal({
                title: "Validacion",
                text: "El campo  Telefonico solo es numerico",
                type: "error",
            })
            return false;
        }
        if( fNumTelefono.length<9){
            swal({
                title: "Validacion",
                text: "El campo  Telefonico debe tener exactamente 9 digitos",
                type: "error",
            })
            return false;
        }

           //Validar el campo DNI (Numerico)
           if( isNaN(fDNI)){
            swal({
                title: "Validacion",
                text: "El campo  DNI solo es numerico",
                type: "error",
            })
            return false;
        }
        if( fDNI.length<8){
            swal({
                title: "Validacion",
                text: "El campo DNI debe tener exactamente 8 digitos",
                type: "error",
            })
            return false;
        }
    

        //Validar el campo identificador (Numerico)
        if( isNaN(fide)){
            swal({
                title: "Validacion",
                text: "El campo identificador solo es numerico",
                type: "error",
            })
            return false;
        }
        if( fide.length<5){
            swal({
                title: "Validacion",
                text: "El campo identificador debe tener exactamente 5 digitos",
                type: "error",
            })
            return false;
        }
      //Valida el campo Contraseña: sea de solo 5 caracteres,una mayuscula, una miniscula y un numero por lo menos
      if(/(?=^.{5,5}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(fContra) == false){
        swal({
            title: "Validacion",
            text: "El campo contraseña debe contener por lo menos: Una Mayuscula, Una minuscula y un caracter numerico",
            type: "error",
        })
        return false;
    }
}