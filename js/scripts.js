/*Funcion para activar menu respnosivo*/
function myFunction(){
    var x=document.getElementById("myTopnav");
    if (x.className === "topnav"){
        x.className += "responsive";
    }
    else{
        x.className = "topnav";
    }
}
$("#btnCerrar").on("click",function(event){ 
     event.prevenDefault(); 
     $('#miFormulario').trigger("reset"); 
});

/***Boton para cerrar imagen grande*/
window.onload=function(){
    //alert("hola");
    var bto=document.getElementById("btoCerrar");
    bto.onclick=cerrarImgGde;
    function cerrarImgGde(){
        document.getElementById("oscuro").style.display="none";
        document.getElementById("btoCerrar").style.display="none";
        document.getElementById("imgProductoGrande").style.display="none";
    }
    
    var img=document.getElementsByClassName("images");
    for(var i=0; i<=img.length-1; i++){
    img[i].onclick=mostrarImgGde;
    }
    function mostrarImgGde(){
        var src0=this.getElementsByTagName("img")[0].src;
        var src=src0.replace("productos/miniaturas","productos/");
        document.getElementById("oscuro").style.display="block";
        document.getElementById("btoCerrar").style.display="block";
        document.getElementById("imgProductoGrande").getElementsByTagName("img")[0].src=src;
        document.getElementById("imgProductoGrande").style.display="block";
    }
    
    
}
