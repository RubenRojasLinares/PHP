function HacerCompra(){
    var dato = $('#cantidadProductos').val();
    
    $.ajax({
       data: {"dato" : dato},
       url: "View/compra.php",
       type: "post",
        success:  function (response) {
           // include response;
            $("#PaginaCompra").empty();
            $("#PaginaCompra").append(response);
           //Arrojara un alert colocando el input + ' de vuelta'
        }
    });

}