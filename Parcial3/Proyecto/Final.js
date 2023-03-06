$(document).ready(function() {

  $('#btnConsultar').click(function() {
        let varid =prompt('Ingrese un Nombre para consultar');
        $.post('conexion.php',{par1:varid},function(data){
        refrescar(data);
        },'json');
  });

  function refrescar(objeto){ 
    console.log(objeto);
    document.getElementById("idNombre").value=objeto.nombre;
     document.getElementById("idDireccion").value=objeto.Direccion;
  document.getElementById("idCurp").value=objeto.Curp;
  document.getElementById("idNacionalidad").value=objeto.Nacionalidad;
  document.getElementById("idNumero").value=objeto.Numero;
  document.getElementById("idCiudad").value=objeto.Ciudad;
  document.getElementById("idEstado").value=objeto.Estado;
  document.getElementById("idCodigo").value=objeto.Codigo;
}
$('#btnIngresar').click(function() {
  let Nombre = $("#idNombre").val();
  let Direccion = $("#idDireccion").val();
  let Curp = $("#idCurp").val();
  let Nacionalidad = $("#idNacionalidad").val();
  let Numero = $("#idNumero").val();
  let Ciudad= $("#idCiudad").val();
  let Estado = $("#idEstado").val();
  let Codigo = $("#idCodigo").val();

 
  $.post('Registrar.php',{Nom:Nombre,Dir:Direccion,Cur:Curp,Nac:Nacionalidad,Num:Numero,Ciud:Ciudad,Est:Estado,Cod:Codigo});

});

$('#btnModificar').click(function() {

  let Nombre = $("#idNombre").val();
  let Direccion = $("#idDireccion").val();
  let Curp = $("#idCurp").val();
  let Nacionalidad = $("#idNacionalidad").val();
  let Numero = $("#idNumero").val();
  let Ciudad= $("#idCiudad").val();
  let Estado = $("#idEstado").val();
  let Codigo = $("#idCodigo").val();

  Swal.fire({
        title: 'Estas seguro de aplicar los cambios?',
        text: "Esto no se puede revertir",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aplicar',
        cancelButtonText:'Cancelar'

      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Cambios aplicados!',
            'Los cambios al registro han sido guardados',
            'success'
          )
          $.post('Modificar.php',{Nom:Nombre,Dir:Direccion,Cur:Curp,Nac:Nacionalidad,Num:Numero,Ciud:Ciudad,Est:Estado,Cod:Codigo});
        }
  })
});
$('#btnBorrar').click(function() {
  let varid = $('#idNombre').val();
       Swal.fire({
        title: 'Estas seguro?',
        text: "Esto no se puede revertir",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar',
        cancelButtonText:'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Eliminado!',
            'El registro ha sido eliminado',
            'success'
          )
          $.post('Borrar.php',{par1:varid});
        }
  })    
  });
});








