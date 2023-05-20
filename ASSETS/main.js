

function borrarCapacidad() {

    const form = document.getElementById("form");
    const tipo_espacio = document.getElementById("tipo_espacio").value;


    const divcapacidad = document.getElementById("divcapacidad");


    if (tipo_espacio == "APARTAMENTO" || tipo_espacio == "PARQUEADERO") {

        divcapacidad.style.display = "none";

        const capacidad = document.getElementById("capacidad");
        capacidad.value = NULL;

        console.log(capacidad.value);

    }

    else {

        divcapacidad.style.display = "block";

    }

}

// function volver () {

//     window.location.href = "http://localhost/0.%20SENA/APPTOWER/index.php";

// }

  

