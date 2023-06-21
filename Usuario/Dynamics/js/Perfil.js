window.addEventListener("load",()=>{
    const EDITAR=document.getElementById("Editar");
    const SALIR=document.getElementById("Salir");
    SALIR.addEventListener("Click",()=>{
        window.location.href="../php/cerrarSesion.php";
    });
    EDITAR.addEventListener("Click",()=>{
        fetch()
    })
});

