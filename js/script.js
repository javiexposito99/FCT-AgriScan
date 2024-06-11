
 // Obtener la fecha actual
 var fechaActual = new Date();

 // Obtener los componentes de la fecha
 var dia = fechaActual.getDate();
 var mes = fechaActual.getMonth() + 1; // Los meses comienzan desde 0
 var año = fechaActual.getFullYear();

 // Formatear la fecha
 var fechaFormateada = dia + '/' + mes + '/' + año;

 // Mostrar la fecha en el elemento con id "fecha"
 document.getElementById('fecha').textContent = fechaFormateada;

//Funcionamiento del menu
function irA(selectElement) {
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    var url = selectedOption.value;
    if (url !== "") {
        window.location.href = url;
    }
}

   


    
