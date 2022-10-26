window.onload=function(){
document.getElementById("btnMenu").addEventListener("click",function(){

document.getElementById("barralat").classList.toggle("escondido");
})



    
    document.getElementById("btnPeticion").addEventListener("click",pedirheader);
    document.getElementById("btnreset").addEventListener("click",iniciarheader);
    function pedirheader()
    {
        var solicitud = new XMLHttpRequest();
        solicitud.onreadystatechange=function(){
        {
            if (solicitud.readyState ==4 && solicitud.status==200)
            {
                document.getElementById("MyDiv").innerHTML= solicitud.responseText;
            }
        }};
    solicitud.open("GET", "Nota.txt" ,true);
    solicitud.send();
    }

function iniciarheader()
{
    document.getElementById("MyDiv").innerHTML="<h2>Este es un header nivel 1<h2>";
}


}