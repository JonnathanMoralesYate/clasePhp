//Ejecutar la función cuando el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", ocultar);

// Función que se ejecuta cuando la página se carga
function ocultar(){
    let formu1 = document.getElementById("form_1");
    let formu2 = document.getElementById("form_2");
    let formu3 = document.getElementById("form_3");
    let formu4 = document.getElementById("form_4");

    formu1.style.display = "none"; // Ocultar el formulario
    formu2.style.display = "none";
    formu3.style.display = "none";
    formu4.style.display = "none";

}


function Seleccion() {
    let select = document.getElementById("opcion");
    let formu1 = document.getElementById("form_1");
    let formu2 = document.getElementById("form_2");
    let formu3 = document.getElementById("form_3");
    let formu4 = document.getElementById("form_4");

    if(select.value === ""){

    formu1.style.display = "none"; // Ocultar el formulario
    formu2.style.display = "none";
    formu3.style.display = "none";
    formu4.style.display = "none";

    
}else if (select.value === "auto"){

        formu2.style.display = "none";
        formu3.style.display = "none";
        formu4.style.display = "none";
        formu1.style.display = "block"; // Muestra el formulario

    }else if (select.value === "autoH"){

        formu1.style.display = "none";
        formu3.style.display = "none";
        formu4.style.display = "none";
        formu2.style.display = "block";
        

    }else if (select.value === "moto"){

        formu1.style.display = "none";
        formu2.style.display = "none";
        formu3.style.display = "none";
        formu4.style.display = "block";

    }else{

        formu1.style.display = "none";
        formu2.style.display = "none";
        formu4.style.display = "none";
        formu3.style.display = "block";
        

    }

}

