window.addEventListener("load",()=>{

    const editar = document.getElementById("editar");

    editar.addEventListener("click",()=>{
        window.location.href = "../php/editar-servidor-vista.php"
    });
});