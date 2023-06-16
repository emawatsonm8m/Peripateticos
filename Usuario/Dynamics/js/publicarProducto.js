window.addEventListener("load", () =>
{
    const defaultimg = "../../Statics/media/img.jpg";
    const img = document.getElementById("default");
    const imagen = document.getElementById("img");
    const formulario = document.getElementById("form-producto");
    const publicar = document.getElementById("btn-publicar");

    console.log("tilin");

    /* Hace el prewiew de la imagen */
    imagen.addEventListener("change", e =>
    {
        if(e.target.files[0])
        {
            const reader = new FileReader();
            reader.onload = function (e){
                img.src = e.target.result;
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    })

    /*Recibe la información del form y la manda por POST*/
    publicar.addEventListener("click", (e) =>
    {
        e.preventDefault();
        datosForm = new FormData(formulario);
        fetch("../Dynamics/php/publicarProducto.php", {
            method: "POST",
            body: datosForm
        }).then((respuesta)=>{
            return respuesta.json();
        }).then ((datosJSON)=>{
            console.log(datosJSON.nombre);
            console.log(datosJSON.archivo);
            console.log(datosJSON.descripcion);
            console.log(datosJSON.costo);
            console.log(datosJSON.fecha);
            console.log(datosJSON.lugar);
            console.log(datosJSON.hora);
            // imagen.addEventListener("change", e =>
            // {
            //     console.log(e.target.files[0]);
            // });
        });

    })

})