function confirmacion(){
    swal({
        title: '¿Estas seguro de cerrar sesion?',
        text: "Si es asi, confirmalo",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si'
       }).then(
        function () 
        {
            window.location.href='php/cerrarSesion.php';
        }
    )
  }