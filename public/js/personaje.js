let edadValor = document.querySelector("#dadosEdad");
let edadInput = document.querySelector("#edad-aventurero");

edadValor.addEventListener("click",putEdadValorInInput(8,8));

function putEdadValorInInput (cantidadDados, numeroCaras){
    console.log(cantidadDados + ' ' + numeroCaras);
    //edadInput.value = tirarDados (cantidadDados, numeroCaras);
}


/* 
necesito crear una funcion que capte el evento click del boton de la edad el aventurero 
una vez captado el evento, necesito guardar en dos variables la cantidad de dados, y la
cantidad de caras del dado, estos estan en los data del tag.
una vez optenido, los valores los uso en la funcion tirarDados (cantidadDados, numeroCaras)
*/