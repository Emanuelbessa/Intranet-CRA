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
    $("#motivo27"),
    $("#motivo28"),
    $("#motivo29"),
    $("#submotivo"),
    $("#submotivo1"),
    $("#submotivo2"),
    $("#submotivo3"),
    $("#submotivo4"),
    $("#submotivo5"),
    $("#submotivo6"),
    $("#submotivo7"),
    $("#submotivo8"),
    $("#submotivo9"),
    $("#nomerepresentante"),
    $("#cpfrepresentante")
];

var RegistradoPF = [
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
    $("#motivo27"),
    $("#motivo28"),
    $("#motivo29")
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
    $("#motivo22"),
    $("#motivo23"),
    $("#motivo24"),
    $("#motivo25"),
    $("#motivo26"),
    $("#motivo27"),
    $("#motivo28"),
    $("#motivo29")
];

var NaoRegistradoPF = [
    $("#motivo11"),
    $("#motivo12"),
    $("#motivo16"),
    $("#motivo17"),
    $("#motivo26"),
    $("#motivo27"),
    $("#motivo28"),
    $("#motivo29")
];

var NaoRegistradoPJ = [
    $("#motivo1"),
    $("#motivo5"),
    $("#motivo10"),
    $("#motivo26"),
    $("#motivo27"),
    $("#motivo28"),
    $("#motivo29")
];

function esconder() {
    for (k = 0; k < TodosMotivos.length; k++) {
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

$("#submot22").click(function() {
    if ($("#submot22").is(":checked") && $("#PF").is(":checked")) {
        $("#submotivo1").show();
        $("#submotivo2").show();
        $("#submotivo3").show();
        $("#submotivo4").show();
        $("#submotivo5").show();
        $("#submotivo6").show();
    } else {
        $("#submotivo1").hide();
        $("#submotivo2").hide();
        $("#submotivo3").hide();
        $("#submotivo4").hide();
        $("#submotivo5").hide();
        $("#submotivo6").hide();
    }
});

$("#submot22").click(function() {
    if ($("#submot22").is(":checked") && $("#PJ").is(":checked")) {
        $("#submotivo7").show();
        $("#submotivo8").show();
        $("#submotivo9").show();
    } else {
        $("#submotivo7").hide();
        $("#submotivo8").hide();
        $("#submotivo9").hide();
    }
});

$("#representante").click(function() {
    if ($("#representante").is(":checked")) {
        $("#nomerepresentante").show();
        $("#cpfrepresentante").show();
    } else {
        $("#nomerepresentante").hide();
        $("#cpfrepresentante").hide();
    }
});

$('input[type="radio"][name="TipoRegistro"]').click(function() {
    if ($("#registrado").is(":checked") && $("#PF").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < RegistradoPF.length; i++) {
            RegistradoPF[i].show();
        }
        aux = 1;
    } else if ($("#naoregistrado").is(":checked") && $("#PF").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < NaoRegistradoPF.length; i++) {
            NaoRegistradoPF[i].show();
        }
        aux = 2;
    } else if ($("#registrado").is(":checked") && $("#PJ").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < RegistradoPJ.length; i++) {
            RegistradoPJ[i].show();
        }
        aux = 3;
    } else if ($("#naoregistrado").is(":checked") && $("#PJ").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < NaoRegistradoPJ.length; i++) {
            NaoRegistradoPJ[i].show();
        }
        aux = 4;
    }
});
$('input[type="radio"][name="PFPJ"]').click(function() {
    if ($("#registrado").is(":checked") && $("#PF").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < RegistradoPF.length; i++) {
            RegistradoPF[i].show();
        }
        aux = 1;
    } else if ($("#naoregistrado").is(":checked") && $("#PF").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < NaoRegistradoPF.length; i++) {
            NaoRegistradoPF[i].show();
        }
        aux = 2;
    } else if ($("#registrado").is(":checked") && $("#PJ").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < RegistradoPJ.length; i++) {
            RegistradoPJ[i].show();
        }
        aux = 3;
    } else if ($("#naoregistrado").is(":checked") && $("#PJ").is(":checked")) {
        EsconderParcial();
        for (i = 0; i < NaoRegistradoPJ.length; i++) {
            NaoRegistradoPJ[i].show();
        }
        aux = 4;
    }
});
