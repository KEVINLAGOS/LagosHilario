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
});








