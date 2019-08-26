let edadValor = document.querySelector("#dadosEdad");


/*-------------------------- EVENTOS --------------------------*/ 
edadValor.addEventListener("click",function(e){
    let edadInput = document.querySelector("#edad-aventurero");
    let cantidadDados =  getDataSet(e.target.parentElement.parentElement, "cantidad"); //e.target.parentElement.parentElement.dataset.cantidad;
    console.log(cantidadDados);
    
    let numeroCaras   = e.target.parentElement.parentElement.dataset.dado;
    disparador(edadInput);
    edadInput.value   = 15 + tirarDados (cantidadDados, numeroCaras);
});
/*------------------ FINDE DE EVENTOS --------------------------*/



/* 
necesito crear una funcion que capte el evento click del boton de la edad el aventurero 
una vez captado el evento, necesito guardar en dos variables la cantidad de dados, y la
cantidad de caras del dado, estos estan en los data del tag.
una vez optenido, los valores los uso en la funcion tirarDados (cantidadDados, numeroCaras)
*/