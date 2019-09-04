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

$("#fue").keypress(function(event){
    if(!validarQueSeaNumero(event)){
        return false
    }
    return validarPrecio($("#fue").val(),true,event);

});

$("#per").keypress(function(event){
    if(!validarQueSeaNumero(event)){
        return false
    }
    return validarPrecio($("#per").val(),true,event);

});
$("#int").keypress(function(event){
    if(!validarQueSeaNumero(event)){
        return false
    }
    return validarPrecio($("#int").val(),true,event);

});
$("#con").keypress(function(event){
    if(!validarQueSeaNumero(event)){
        return false
    }
    return validarPrecio($("#con").val(),true,event);

});
$("#asp").keypress(function(event){
    if(!validarQueSeaNumero(event)){
        return false
    }
    return validarPrecio($("#asp").val(),true,event);

});
$("#tam").keypress(function(event){
    if(!validarQueSeaNumero(event)){
        return false
    }
    return validarPrecio($("#tam").val(),true,event);

});
$("#des").keypress(function(event){
    if(!validarQueSeaNumero(event)){
        return false
    }
    return validarPrecio($("#des").val(),true,event);

});

$("#edad-aventurero").keypress(function(event){
    if(!validarQueSeaNumero(event)){
        return false
    }
    return validarPrecio($("#edad-aventurero").val(),true,event);

});

/*------------------ FINDE DE EVENTOS --------------------------*/
