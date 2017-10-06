
function validarFormulario(){
    //variables:
    var fNombre=document.getElementById("NombreAlumno").value;

   
   
    //Valida el campo nombre: solo letras
    if(/^[a-z][a-z]*/.test(fNombre) == false){
        swal(  'Oops...','El campo "Nombre" debe ser solo texto','error')
        return false;
    }
}

function alerta(){
    alert ('hola');
}