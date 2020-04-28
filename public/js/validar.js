//selecciono el form 
 var formulario = document.getElementById("miFormulario");





 window.onload = iniciar;

function iniciar (){

    document.getElementById("enviar").addEventListener('click',validar,false);
}


//VALIDO NOMBRE
function validaNombre(){
    
    var elemento = document.getElementById("name");
    if(elemento.value==""){

        //small = document.getElementById("smallName");
        //small.innerText="El campo Nombre no puede estar vacio";
        alert("El campo Nombre no puede estar vacio");
        return false;
}

if(elemento.value.length <= 3){
    alert("El campo Nombre debe tener al menos tres letras");
    return false;}


    return true; 
}

//VALIDO APELLIDO
function validaApellido(){
   
   var elemento = document.getElementById("surname");
   if(elemento.value==""){

       alert("El campo Apellido no puede estar vacio");
       return false;
}

if(elemento.value.length <= 3){
   alert("El campo Apellido debe tener al menos 3 letras");
   return false;}


   return true; 
}


//VALIDO EDAD
function validaEdad(){
    
   var elemento = document.getElementById("age");
   if(elemento.value==""){

       alert("El campo Edad no puede estar vacio");
       return false;
}

if(elemento.value.length > 15){
   alert("El campo Edad no debe ser mayor a 150");
   return false;}


   if(isNaN(elemento.value)){

    alert("El campo Edad debe ser numérico");
    return false;}

   return true; 
}



//VALIDO EMAIL
function validaEmail(){
    
    var elemento = document.getElementById("email");
   
 emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
   if (!emailRegex.test(elemento.value)){
        alert("El email es invalido");
        return false;
 }
        
    return true; 
 }

 //VALIDO PASSWORD
function validaPassword(){
    
    var elemento = document.getElementById("password");
    if(elemento.value==""){
 
        alert("El campo Password no puede estar vacio");
        return false;
 }
 
 if(elemento.value.length <= 8){
    alert("El campo Password debe ser mayor a 8 caracteres");
    return false;}
 

    return true; 
 }


 //VALIDO PASSWORD-CONFIRM
function validaPasswordConfirm(){
    
    var elemento = document.getElementById("password-confirm");
    if(elemento.value==""){
 
        alert("El campo Confirmar Password no puede estar vacio");
        return false;
 }
 
 if(elemento.value.length <= 8){
    alert("El campo Confirmar Password debe ser mayor a 8 caracteres");
    return false;}
 

    return true; 
 }


 function validaPasswordIguales(){
    
    var elemento1 = document.getElementById("password");
    var elemento2 = document.getElementById("password-confirm");
    if(elemento1.value!==elemento2.value){
 
        alert("Las contraseñas no son iguales");
        return false;
 }
 

    return true; 
 }




function validar(e){
    if(validaNombre() && validaApellido() && validaEdad() && validaEmail() &&validaPassword() && validaPasswordConfirm() && validaPasswordIguales() && confirm("pulsa aceptar para enviar")){

        return true;
    }else{
        e.preventDefault();
        return false;
    }
}
