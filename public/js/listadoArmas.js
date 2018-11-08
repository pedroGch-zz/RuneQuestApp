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
});
