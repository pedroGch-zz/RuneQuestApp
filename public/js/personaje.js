let edadValor      = document.querySelector("#dadosEdad");
let edadAventurero = document.querySelector("#edad-aventurero");

let fueInput       = document.querySelector("#fue");
let fueDados       = document.querySelector("#dadosFUE");

let intInput       = document.querySelector("#int");
let intDados       = document.querySelector("#dadosINT");

let conInput       = document.querySelector("#con");
let conDados       = document.querySelector("#dadosCON");

let perInput       = document.querySelector("#per");
let perDados       = document.querySelector("#dadosPER");

let tamInput       = document.querySelector("#tam");
let tamDados       = document.querySelector("#dadosTAM");

let desInput       = document.querySelector("#des");
let desDados       = document.querySelector("#dadosDES");

let aspInput       = document.querySelector("#asp");
let aspDados       = document.querySelector("#dadosASP");

/*-------------------------- EVENTOS --------------------------*/ 
fueDados.addEventListener("click",function(e){
    eventoDados(e,fueInput,null);    
});

intDados.addEventListener("click",function(e){
    eventoDados(e,intInput,null);    
});

conDados.addEventListener("click",function(e){
    eventoDados(e,conInput,null);    
});

perDados.addEventListener("click",function(e){
    eventoDados(e,perInput,null);    
});

tamDados.addEventListener("click",function(e){
    eventoDados(e,tamInput,null);    
});

desDados.addEventListener("click",function(e){
    eventoDados(e,desInput,null);    
});

aspDados.addEventListener("click",function(e){
    eventoDados(e,aspInput,null);    
});

edadValor.addEventListener("click",function(e){
    eventoDados(e,edadAventurero,15);
});

edadAventurero.addEventListener("keypress",function(e){
    debugger;
    console.log(validarQueSeaNumero(e));
});

/*------------------ FINDE DE EVENTOS --------------------------*/
