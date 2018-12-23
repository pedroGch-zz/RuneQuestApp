var armasArreglo = [];
function agregarAlArreglo(arma) {
  // body...
  armasArreglo.push(arma);
}
function consoleLog(){
      console.log(armasArreglo);
} 
function recorrerTabla() {
  // body...
  var i = 1;
  $('#armaTabla > tbody  > tr').each(function() {
    var armaObjeto          = new Object;
        armaObjeto.ident    = $('#id'+i).text();
        armaObjeto.nombre   = $('#nombre'+i).text();
        armaObjeto.tipo     = $('#tipo'+i).text();
        armaObjeto.material = $('#material'+i).text();
        armaObjeto.fue      = $('#fue'+i).text();
        armaObjeto.des      = $('#des'+i).text();
        armaObjeto.car      = $('#car'+i).text();
        armaObjeto.bs       = $('#bs'+i).text();
        armaObjeto.pa       = $('#pa'+i).text();
        armaObjeto.mr       = $('#mr'+i).text();
        armaObjeto.pSalv    = $('#pSalv'+i).text();
        armaObjeto.pRural   = $('#pRural'+i).text();
        armaObjeto.pPeq     = $('#pPeq'+i).text();
        armaObjeto.pGran    = $('#pGran'+i).text();
        armaObjeto.manos    = $('#manos'+i).text();
        armaObjeto.tiempoFav= $('#tiempoFav'+i).text();
        armaObjeto.ef       = $('#ef'+i).text();
        armaObjeto.max      = $('#max'+i).text();
        armaObjeto.tf       = $('#tf'+i).text();
        i++;
    
    agregarAlArreglo(armaObjeto);
  });
}
function buscarArma(idArma){
  return armasArreglo[idArma - 1];
}
function setearDatos(arma) {
  // body...
  $('#nombreArma').text("El nombre del arma es: "+arma.nombre);
  $('#tipoArma').text("Tipo del arma: "+arma.tipo);
  $('#materialArma').text("Material de fabricación: "+arma.material);
  $('#fueArma').text("Fueza necesaría para el arma: "+arma.fue);
  $('#desArma').text("Destreza necesaría para el arma: "+arma.des);
  $('#carArma').text("Peso del arma: "+arma.car);
  $('#bsArma').text("Habilidad básica: "+arma.bs);
  $('#paArma').text("Puntos de armadura del arma: "+arma.pa);
  $('#mrArma').text("Momento de reacción: "+arma.mr);
  if (arma.pSalv != 0){
    $('#pSalvArma').text("Precio en zona salvaje: "+arma.pSalv);
  }else{ 
    $('#pSalvArma').text("No se consigue en zona salvaje");
  }
  if (arma.pRural != 0){
    $('#pRuralArma').text("Precio en zona rural: "+arma.pRural);
  }else{ 
    $('#pRuralArma').text("No se consigue en zona rural");
  }
  if (arma.pPeq != 0){
    $('#pPeqArma').text("Precio en ciudades pequeñas: "+arma.pPeq);
  }else{ 
    $('#pPeqArma').text("No se consigue en ciudades pequeñas");
  }
  if (arma.pGran != 0){
    $('#pGranArma').text("Precio en ciudades grandes: "+arma.pGran);
  }else{ 
    $('#pGranArma').text("No se consigue en ciudades grandes");
  }
  
  $('#manosArma').text("Está arma se usa a "+arma.manos+" mano/s" );
  $('#tiempoFavArma').text("El tiempo de fabricación es de: "+arma.tiempoFav+ " días");
  if (arma.ef != 0){
    $('#efArma').text(arma.ef);
    $('#maxArma').text(arma.max);
    $('#tfArma').text(arma.tf);
  }  


}
function buscarYMostrarArma(idArma){
  setearDatos(buscarArma(idArma));
}
$(document).ready(function(){
  $('.modal').modal();
  $('#armaTabla').pageMe({
      pagerSelector:'#myPager',
      activeColor: 'blue',
      prevText:'Anterior',
      nextText:'Siguiente',
      showPrevNext:true,
      hidePageNumbers:false,
      perPage:5
    });
  recorrerTabla();
});
