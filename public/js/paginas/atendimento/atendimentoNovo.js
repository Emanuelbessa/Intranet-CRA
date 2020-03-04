

var teste = $("input[type=radio][name=TipoRegistro]:checked").val();

$('input[type="radio"][name="TipoRegistro"]').change(function(){
    if($("#registrado").is(":checked")){
        $("#divmotivo2").hide();
        $("#divmotivo2").prop('checked', false);
        $("#motivo3").show();
    }
    else if($("#naoregistrado").is(":checked")){
        $("#divmotivo2").show();
        $("#motivo3").hide();
    }
});

$("#abrir-alterar-lote").click(function(){  

});



$('#exemplo').click(function(){ 

});

/* document.getElementById("motivo2").style.display="none"; */