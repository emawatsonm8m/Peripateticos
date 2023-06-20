window.addEventListener("load",()=>{
    const paginaPrincipal = document.getElementById("paginaPrincipal");
    const ventas = document.getElementById("Ventas");
    const objetosPerdidos = document.getElementById("ObjetosPerdidos");
    const comunidadP6 = document.getElementById("ComunidadP6");

    paginaPrincipal.addEventListener("click",()=>{
        window.location.href = "../php/sanitizacion.php";
    });

    ventas.addEventListener("click",()=>{
        window.location.href = "../php/sanitizacion.php";
    });

    objetosPerdidos.addEventListener("click",()=>{
        window.location.href = "../php/sanitizacion.php";
    });

    comunidadP6.addEventListener("click",()=>{
        window.location.href = "../php/sanitizacion.php";
    });
});