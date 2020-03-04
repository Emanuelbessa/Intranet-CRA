var teste = $("input[type=radio][name=TipoRegistro]:checked").val();
var TodosMotivos = [
    $("#motivo1"),
    $("#motivo2"),
    $("#motivo3"),
    $("#motivo4"),
    $("#motivo5"),
    $("#motivo6"),
    $("#motivo7"),
    $("#motivo8"),
    $("#motivo9"),
    $("#motivo10"),
    $("#motivo11"),
    $("#motivo12"),
    $("#motivo13"),
    $("#motivo14"),
    $("#motivo15"),
    $("#motivo16"),
    $("#motivo17"),
    $("#motivo18"),
    $("#motivo19"),
    $("#motivo20"),
    $("#motivo21"),
    $("#motivo22"),
    $("#motivo23"),
    $("#motivo24"),
    $("#motivo25"),
    $("#motivo26"),
    $("#motivo27")
];

var RegistradoPF = [
    $("#motivo17"),
    $("#motivo18"),
    $("#motivo19"),
    $("#motivo20"),
    $("#motivo21"),
    $("#motivo22"),
    $("#motivo23"),
    $("#motivo24"),
    $("#motivo25"),
    $("#motivo26"),
    $("#motivo27")
];

var RegistradoPJ = [
    $("#motivo2"),
    $("#motivo3"),
    $("#motivo4"),
    $("#motivo5"),
    $("#motivo6"),
    $("#motivo7"),
    $("#motivo8"),
    $("#motivo9"),
    $("#motivo10"),
    $("#motivo11"),
    $("#motivo12"),
    $("#motivo13"),
    $("#motivo14")
];

var NaoRegistradoPF = [$("#motivo15"), $("#motivo16")];

var NaoRegistradoPJ = [$("#motivo1"), $("#motivo11")];

function esconder() {
    for (k = 0; k <= 26; k++) {
        TodosMotivos[k].hide();
    }
}
var aux;
// RegistradoPF = 1 --  NaoRegistradoPF = 2 -- RegistradoPJ = 3 -- NaoRegistradoPJ = 4
function EsconderRegistradoPF() {
    for (i = 0; i < RegistradoPF.length; i++) {
        RegistradoPF[i].prop("checked", false);
        RegistradoPF[i].hide();
    }
}
function EsconderNaoRegistradoPF() {
    for (i = 0; i < NaoRegistradoPF.length; i++) {
        NaoRegistradoPF[i].prop("checked", false);
        NaoRegistradoPF[i].hide();
    }
}
function EsconderRegistradoPJ() {
    for (i = 0; i < RegistradoPJ.length; i++) {
        RegistradoPJ[i].prop("checked", false);
        RegistradoPJ[i].hide();
    }
}
function EsconderNaoRegistradoPJ() {
    for (i = 0; i < NaoRegistradoPJ.length; i++) {
        NaoRegistradoPJ[i].prop("checked", false);
        NaoRegistradoPJ[i].hide();
    }
}

function EsconderParcial() {
    if (aux == 1) {
        EsconderRegistradoPF();
    } else if (aux == 2) {
        EsconderNaoRegistradoPF();
    } else if (aux == 3) {
        EsconderRegistradoPJ();
    } else if (aux == 4) {
        EsconderNaoRegistradoPJ();
    }
}
/*
if( ){
            esconder();
        }
*/

$('input[type="radio"][name="TipoRegistro"]').click(function() {
    if ($("#registrado").is(":checked") && $("#PF").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < RegistradoPF.length; i++) {
            RegistradoPF[i].show();
            //$("#motivo2").prop("checked", false);
        }
        aux = 1;
    } else if ($("#naoregistrado").is(":checked") && $("#PF").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < NaoRegistradoPF.length; i++) {
            NaoRegistradoPF[i].show();
            //$("#motivo2").prop("checked", false);
        }
        aux = 2;
    } else if ($("#registrado").is(":checked") && $("#PJ").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < RegistradoPJ.length; i++) {
            RegistradoPJ[i].show();
            //$("#motivo2").prop("checked", false);
        }
        aux = 3;
    } else if ($("#naoregistrado").is(":checked") && $("#PJ").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < NaoRegistradoPJ.length; i++) {
            NaoRegistradoPJ[i].show();
            //$("#motivo2").prop("checked", false);
        }
        aux = 4;
    }
});
$('input[type="radio"][name="PFPJ"]').click(function() {
    if ($("#registrado").is(":checked") && $("#PF").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < RegistradoPF.length; i++) {
            RegistradoPF[i].show();
            //$("#motivo2").prop("checked", false);
        }
        aux = 1;
    } else if ($("#naoregistrado").is(":checked") && $("#PF").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < NaoRegistradoPF.length; i++) {
            NaoRegistradoPF[i].show();
            //$("#motivo2").prop("checked", false);
        }
        aux = 2;
    } else if ($("#registrado").is(":checked") && $("#PJ").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < RegistradoPJ.length; i++) {
            RegistradoPJ[i].show();
            //$("#motivo2").prop("checked", false);
        }
        aux = 3;
    } else if ($("#naoregistrado").is(":checked") && $("#PJ").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < NaoRegistradoPJ.length; i++) {
            NaoRegistradoPJ[i].show();
            //$("#motivo2").prop("checked", false);
        }
        aux = 4;
    }
});

/* document.getElementById("motivo2").style.display="none"; */
