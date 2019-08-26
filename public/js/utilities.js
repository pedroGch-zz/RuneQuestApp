function tirarDados (cantidadDados, numeroCaras){
   let numero = 0;
   for (i = 1; i <= cantidadDados; i++){
      numero += Math.floor(Math.random() * numeroCaras);
   }
   return numero;
}

function disparador(element){
   //creamos el evento focus
   let event = new Event('focus');
   //asignamos el evento al elemento 
   element.dispatchEvent(event);
}

function getDataSet (element, dato){
   //necesito saber como concatenar el contenido del dato con el data set
   return element.dataset. dato;
}