function mostrarInicio (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'seccion/home.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('contenidog').innerHTML = theObject.responseText;
        }

        theObject.send();
}

function mostrarTrabajo (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'seccion/table.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('contenidog').innerHTML = theObject.responseText;
        }

        theObject.send();
}

function mostrarCarpeta (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'seccion/carpetas.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('contenidog').innerHTML = theObject.responseText;
        }

        theObject.send();
}

function mostrarDocumento (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'seccion/documento.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('contenidog').innerHTML = theObject.responseText;
        }

        theObject.send();
}

function mostrarAyuda (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'seccion/help.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('contenidog').innerHTML = theObject.responseText;
        }

        theObject.send();
}

function mostrarConfig (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'seccion/setting.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('contenidog').innerHTML = theObject.responseText;
        }

        theObject.send();
}

function mostrarUser (){
    var theObject = new XMLHttpRequest();
        theObject.open('GET', 'seccion/user.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
            document.getElementById('contenidog').innerHTML = theObject.responseText;
        }

        theObject.send();
}
