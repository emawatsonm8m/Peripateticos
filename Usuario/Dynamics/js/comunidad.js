/*Desarrollador: Eduardo Garduño 
Proposito: Esta pagina es la encargada del funcionamiento mayormente de la pagina comunidad, ya que mediante eventos
y peticiones fetch conectamos con php y de ahi sacamos informacion de la base de datos, con la cual se realiza el funcionamiento
del buscador, del redireccinamiento a la pagina de crear servidor, el despliegue de informacion del servidor seleccionado
y nos permite unirnos o salirnos del servidor en el momento que deseemos*/
window.addEventListener("load", ()=>{
    const crear = document.getElementById("crear");
    const unirse = document.getElementById("unirse")
    const salir = document.getElementById("salir");
    const buscador = document.getElementById("buscador");
    const resultados = document.getElementById("resultados");
    const datos = document.getElementById("datos");
    const portada = document.getElementById("portada");
    const usuPortada = document.getElementById("usuPortada");
    const nombre = document.getElementById("nombre");
    const creacion = document.getElementById("creacion");
    const categoria = document.getElementById("categoria");
    const descripcion = document.getElementById("descripcion");
    const reglas = document.getElementById("reglas");
    const cuadro1 = document.getElementById("cuadro1");
    const cuadro2 = document.getElementById("cuadro2");
    const clubsito = document.getElementById("club");
    const contServidores = document.getElementById("contServidores");
    const server = document.getElementById("server");

    crear.addEventListener("click", ()=>{
        window.location.href="./crear-servidor-vista.php";
    })
    buscador.addEventListener("keyup", ()=>{
        let termino = buscador.value;
        if(termino.length >= 1){
            let datosForm = new FormData();
            datosForm.append("termino", termino);
            fetch("./buscar.php", {
                method: "POST",
                body: datosForm
            }).then((respuesta)=>{
                return respuesta.json();
            }).then ((datosJSON)=>{
                resultados.innerHTML = "";
                for (resultado of datosJSON){
                    resultados.innerHTML += `<div class="coincidencia" id="coincidencia" data-club="${resultado.ID_Club}" data-id="${resultado.Nombre}">${resultado.Nombre}</div>`;
                }   
                if(datosJSON.length == 0){
                    resultados.innerHTML = "No hay resultados";
                }
            });
        }
    })
    resultados.addEventListener("click", (e)=>{
        if(e.target.classList.contains("coincidencia")){
            clubsito.style.display="flex";
            let club = e.target.dataset.id;
            let datosForm = new FormData();
            datosForm.append("club", club)
            fetch("./server.php", {
                method: "POST",
                body: datosForm
            }).then((respuesta)=>{
                return respuesta.json();
            }).then((datosJSON)=>{
                for(let dato of datosJSON){
                    if(dato.portada){
                        portada.innerHTML = `
                        <img src="${dato.Portada}" alt="Portada">`;
                    }else if(dato.usuPortada){
                        usuPortada.innerHTML =`
                        <img src="${dato.usuPortada}" alt="Portada">`;
                    }
                    nombre.innerHTML =`
                    Nombre del servidor/club: ${dato.Nombre}<br>`;
                    nombre.innerHTML +=`
                    Categoría: ${dato.Tipo}<br>`;
                    descripcion.innerHTML =`
                    Descripcion:<br>${dato.Descripcion}`;
                    reglas.innerHTML =`
                    Reglas:<br>${dato.Reglas}`;
                    unirse.dataset.club = dato.ID_Club;
                }
            })
            let datosClub = new FormData();
            datosClub.append("club", e.target.dataset.club)
            fetch("./servExisto.php", {
                method: "POST",
                body: datosClub
            }).then((respuesta)=>{
                return respuesta.json();
            }).then((datosJSON)=>{
                if(datosJSON == false){
                    salir.style.display="none";
                    unirse.style.display="flex";
                }else{
                    unirse.style.display="none";
                    salir.style.display="flex";
                }
            })
        }
    })
    unirse.addEventListener("click", ()=>{
        unirse.style.display="none";
        salir.style.display="flex";
        let datosForm = new FormData();
        datosForm.append("ID_Club", unirse.dataset.club)
        fetch("./unirServer.php", {
            method: "POST",
            body: datosForm
        }).then((respuesta)=>{
            return respuesta.json();
        }).then((datosJSON)=>{
            alert(datosJSON.mensaje);
        })
    })
    salir.addEventListener("click", ()=>{
        unirse.style.display="flex";
        salir.style.display="none";
        let datosForm = new FormData();
        datosForm.append("ID_Club", unirse.dataset.club)
        fetch("./salirServer.php",{
            method: "POST",
            body: datosForm
        }).then((respuesta)=>{
            return respuesta.json();
        }).then((datosJSON)=>{
            alert(datosJSON.mensaje);
        })
    })
})