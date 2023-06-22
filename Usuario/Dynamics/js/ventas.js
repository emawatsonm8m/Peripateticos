window.addEventListener("load", (e)=>{
    e.preventDefault();
    fetch("../php/ventasDB.php")
    .then((respuesta)=>{
        return respuesta.json();
    }).then((datosJSON)=>
    {
        const div = document.getElementById("producto");
        console.log(datosJSON);
        console.log(datosJSON[0].Nombre);
        //let datos=[datosJSON.Foto, datosJSON.Nombre];
        // for(dato of datosJSON){
        datosJSON.forEach(function(element)
        {
            console.log(element);
            div.innerHTML+=`
            <div class="col-6">
                <div class="p-3">
                    <img src="${element.Foto}" class="img-fluid" alt="producto1" id="imagen" data-id="${element.id}">
                    <p>${element.Nombre}</p>
                </div>
            </div>`;
        })

            const productos = document.getElementById("productos");
            productos.addEventListener("click",(e)=>
            {
                let id = e.target.dataset.id;
                console.log(id)
                document.cookie = "producto=" + id + ";max-age=3600;";
                window.location.href="../php/productoNuevo.php";
            });
        const nuevo = document.getElementById("nuevo");
        nuevo.addEventListener("click",(e)=>{window.location.href="../php/publicarProducto.php";});    
    });

});