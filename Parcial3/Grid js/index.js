(async () =>{
    
    let headersList = {   "Accept": "*/*",}
    let response = await fetch("http://localhost/lagoshilario/Parcial3/Grid%20js/conexion.php", { 
       method: "GET",
       headers: headersList
     });
     
     let datos = await response.json();
     console.log(datos)
  new gridjs.Grid({
    columns: ["id", "nombre", "Direccion","Curp","Nacionalidad","Numero","Ciudad","Estado","Codigo"],
    data: datos
   
    
  }).render(document.getElementById("wrapper"));
 } ) ();