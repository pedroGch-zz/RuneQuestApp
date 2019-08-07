//const joi = require('joi');

  $(document).ready(function(){
    $('select').formSelect();
  
  });

  $('.datepicker').pickadate({
    min: new Date(),
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    firstDay: 1
  });

var picker = $('#beginDate').pickadate('picker');
picker.set('select', new Date());
var picker = $('#endDate').pickadate('picker');
picker.set('select', new Date());


$('select').material_select();


var form = $("#example-form");
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
  
    /* Labels */
    labels: {
        cancel: "Cancel?",
        current: "current step:",
        pagination: "Pagination",
        finish: "Finish!!",
        next: "Next >",
        previous: "< Previous",
        loading: "Loading ..."
    },
  
  
    onStepChanging: function (event, currentIndex, newIndex)
    {
        
        return true;
    },
    onFinishing: function (event, currentIndex)
    {
        
        return true;
    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
});