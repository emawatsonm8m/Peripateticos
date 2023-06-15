window.addEventListener("load", () =>
{
    const defaultimg = "../../Statics/media/img.jpg";
    const img = document.getElementById("default");
    const imagen = document.getElementById("img");
    const formulario = document.getElementById("form-producto");
    const publicar = document.getElementById("btn-publicar");

    console.log("tilin");

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
            console.log(datosJSON);
          
        });
    });

});