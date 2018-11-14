var n = 0;

function rm() {
    $(event.target).closest("div").remove();
}

function add() {
    $("form").append("<br><div><div class=\"row\"><div class=\"col-md-3\"><label>Petición </label><input name=\"data["+n+"][petition]\" class=\"form-control\"></input></div><div class=\"col-md-3\"><label>Destino </label><input name=\"data["+n+"][destiny]\" class=\"form-control\"></input></div><button onclick='rm()' class=\"btn btn-outline-danger\" id=\"botonDel\">remove</button></div>");
    n++;
}
