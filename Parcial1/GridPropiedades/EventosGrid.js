    
    var elem=document.getElementById("cont");
       elem.addEventListener("click",function(evento){
           console.log(evento.target.id);
           if(document.getElementById(evento.target.id).classList.contains("caja")){
               document.getElementById(evento.target.id).classList.toggle("cajaAmarilla");
            }
       });