function tirarDados (cantidadDados, numeroCaras){
   let numero = 0;
   for (i = 1; i <= cantidadDados; i++){
      numero += Math.floor(Math.random() * numeroCaras);
   }
   return numero;
}