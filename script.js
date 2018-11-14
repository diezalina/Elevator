var n = 0;

function rm() {
    $(event.target).closest("div").remove();
}

function add() {
    $("form").prepend("<div class=\"row\"><div class=\"col-md-3\"><br><label>Petición </label><input name=\"data["+n+"][petition]\" class=\"form-control\"></input></div><div class=\"col-md-3\"><br><label>Destino </label><input name=\"data["+n+"][destiny]\" class=\"form-control\"></input></div><button onclick='rm()' class=\"btn btn-outline-danger\" id=\"botonDel\">X Petition</button>");
    n++;
}
