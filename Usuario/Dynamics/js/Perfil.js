window.addEventListener("load",()=>{
    const EDITAR = document.getElementById("Editar");
    const SALIR = document.getElementById("Salir");
    const listo = document.getElementById("listo");
    const fotitoPerfil = document.getElementById("fotitoPerfil");
    const contraseña = document.getElementById("contraseña");
    const nombre = document.getElementById("nombre");
    const celular = document.getElementById("celular");
    const instagram = document.getElementById("instagram");
    const oculto = document.getElementById("oculto");
    const agregar = document.getElementById("agregar");
    const sesion = document.querySelectorAll(".sesion");
    const info = document.getElementsByClassName("info");
    const actualizar = document.createElement("div");
    const nomOculto = document.getElementById("nomOculto")
    const celOculto = document.getElementById("celOculto")
    const instOculto = document.getElementById("instOculto")

    SALIR.addEventListener("click", ()=>{
        window.location.href="../php/cerrarSesion.php";
    });
    EDITAR.addEventListener("click",()=>{
        EDITAR.style.display="none";
        listo.style.display="block";
        nomOculto.style.display="block";
        celOculto.style.display="block";
        instOculto.style.display="block";
        for(i=0; i<sesion.length; i++)
            sesion[i].style.display="none";
        fotitoPerfil.addEventListener("click",()=>{
            oculto.style.display="flex";
        })
    })
    agregar.addEventListener("change", e =>{
        const hola = e.target.files[0].name;
        if(e.target.files[0]){
            const reader = new FileReader();
            reader.onload = function (e){
                fotitoPerfil.src = e.target.result;
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    })
    listo.addEventListener("click", ()=>{
        // agregar.addEventListener("change", e =>{
        //     const valorImg = e.target.files[0].name;
        // })
        // const valorImg = e.target.files[0].name;
        // console.log(oculto.e.dataset.name)
        const valorNom= nomOculto.value;
        const valorCel= celOculto.value;
        const valorInst= instOculto.value;
        EDITAR.style.display="block";
        listo.style.display="none";
        oculto.style.display="none";
        nomOculto.style.display="none";
        celOculto.style.display="none";
        instOculto.style.display="none";
        for(i=0; i<sesion.length; i++)
            sesion[i].style.display="block";
        let datosForm = new FormData();
        // datosForm.append("img", valorImg)
        datosForm.append("nombre", valorNom);
        datosForm.append("celular", valorCel);
        datosForm.append("instagram", valorInst);
        fetch("./editar.php", {
            method: "POST",
            body: datosForm
        }).then((respuesta)=>{
            return respuesta.json();
        }).then((datosJSON)=>{
            alert(datosJSON.mensaje);
            window.location.reload();
        })
    })
});