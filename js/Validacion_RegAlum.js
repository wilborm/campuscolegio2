function validarFormulario(){
    //variables:
    var fNombre=document.getElementById("NombreAlumno").value;
    var fApePaterAlumno=document.getElementById("ApePaterAlumno").value;
    var fApeMaterAlumno=document.getElementById("ApeMaterAlumno").value;
    var fEdad=document.getElementById("Edad").value;
    var fFechaNaci=document.getElementById("FechaNacimiento").value;
    var fNumTelefono=document.getElementById("NumTelefono").value;
    var fDNI=document.getElementById("dni").value;
    var fContra=document.getElementById("Contraseña").value;
    var fide=document.getElementById("identificador").value;
    var fNombreApode=document.getElementById("NombreApoderado").value;
    var fApePaterApode=document.getElementById("ApePaterApode").value;
    var fApeMaterApode=document.getElementById("ApeMaterApode").value;


   
   
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
    if(/^[A-Za-z][A-Za-z]*/.test(fApePaterAlumno) == false){
        swal({
            title: "Validacion",
            text: "El campo Apellido Paterno del alumno solo admite Texto",
            type: "error",
        })
        return false;
    }
     //Valida el campo ApeMaterAlumno: solo letras
     if(/^[A-Za-z][A-Za-z]*/.test(fApeMaterAlumno) == false){
        swal({
            title: "Validacion",
            text: "El campo Apellido Materno del alumno solo admite Texto",
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

    //Valida el campo nombre de apoderado: solo letras
    if(/^[A-Za-z][A-Za-z]*/.test(fNombreApode) == false){
        swal({
            title: "Validacion",
            text: "El campo nombre del Apoderado solo admite Texto",
            type: "error",
        })
        return false;
    }

        //Valida el campo apellido paterno de apoderado: solo letras
        if(/^[A-Za-z][A-Za-z]*/.test(fApePaterApode) == false){
            swal({
                title: "Validacion",
                text: "El campo Apellido Paterno del Apoderado solo admite Texto",
                type: "error",
            })
            return false;
        }

            //Valida el campo apellido Materno de apoderado: solo letras
            if(/^[A-Za-z][A-Za-z]*/.test(fApeMaterApode) == false){
        swal({
            title: "Validacion",
            text: "El campo Apellido Materno del Apoderado solo admite Texto",
            type: "error",
        })
        return false;
    }


    

}