<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Statics/styles/indexPerdidos.css">
    <title>Objetos Perdidos</title>
</head>
<body>
<nav class="NavBar">
        <ul>
            <li><img src="../Statics/media/EscudoP6.png" id="P6" alt="Prepa_6">
            <img src="../Statics/media/EscudoUNAM.png" id="UNAM"alt="UNAM"></li>
            <li><a href="#" class="TextSelect">Ventas</a></li>
            <li><a href="#" class="TextSelect">Objetos perdidos</a></li>
            <li><a href="#" class="TextSelect">Comunidad P6</a></li>
            <li><a href="#"><img src="../Statics/media/PerfilVacio.png" id="FP" alt="FotoPerfil"></a></li>
        </ul>
    </nav>
    <header>
        <h1>Objetos Perdidos</h1>
    </header>

    <section>
        <h2>Publicaciones Recientes</h2>
        <div>
            <button>Filtrar por</button>
        </div>
        <div>
            <input type="search" placeholder="Buscar" size="317px">
        </div>
        <!--en esta parte se deven desplegar los divs de los objetos-->
    </section>
    <div>
        <h2 class="AgregarObjeto">¿Perdiste Algo?</h2>
        <button></button>
    </div>
    <div>
        <h2 class="AgregarObjeto">¿Encontraste Algo?</h2>
        <button></button>
    </div>


    <div class="lugares" id="centrar">
        <form>
            <h2>Última vez vistos</h2>
            <div class="d-grid gap-2 col-10 mx-auto">
                <img src="../Statics/media/puntosPrepa/mapa.jpg" class="img-fluid" id="mapa" usemap="#image-map">
                <button id="btn-back">Regresar</button>
                <map name="image-map">
                    <area target="" id="Entrada" alt="Entrada" title="Entrada" href="" coords="179,194,199,223" shape="rect">
                    <area target="" id="PatioSextos" alt="Patio de Sextos" title="Patio de Sextos" href="" coords="168,139,187,169" shape="rect">
                    <area target="" id="PatioCuartos" alt="Patio de Cuartos" title="Patio de Cuartos" href="" coords="136,92,157,121" shape="rect">
                    <area target="" id="PatioQuintos" alt="Patio de Quintos" title="Patio de Quintos" href="" coords="106,43,125,70" shape="rect">
                    <area target="" id="Pulpo" alt="Pulpo" title="Pulpo" href="" coords="71,1,90,26" shape="rect">
                    <area target="" id="Mesas" alt="Mesas" title="Mesas" href="" coords="179,6,200,35" shape="rect">
                    <area target="" id="Canchas" alt="Canchas" title="Canchas" href="" coords="267,25,285,55" shape="rect">
                    <area target="" id="Biblio" alt="Biblio" title="Biblio" href="" coords="302,104,282,76" shape="rect">
                    <area target="" id="Pimpos" alt="Pimpos" title="Pimpos" href="" coords="254,109,275,138" shape="rect">
                    <area target="" id="h" alt="h" title="Los h´s" href="" coords="294,128,314,156" shape="rect">
                    <area target="" id="Vestidores" alt="Vestidores" title="Vestidores" href="" coords="375,53,356,25" shape="rect">
                </map>
            </div>
            <div class="mapayhorarios">
                <div class="d-grid gap-2 col-5 mx-auto">
                    <label>Lugar</label>
                    <select name="lugar" class="form-select" id="lugar" required>
                        <option disabled selected></option>
                        <option value="Entrada">Entrada</option>
                        <option value="Patio de Sextos">Patio de Sextos</option>
                        <option value="Patio de Cuartos">Patio de Cuartos</option>
                        <option value="Patio de Quintos">Patio de Quintos</option>
                        <option value="Pulpo">Pulpo</option>
                        <option value="Mesas">Mesas</option>
                        <option value="Canchas">Canchas</option>
                        <option value="Pimponeras">Pimpos</option>
                        <option value="Los H">Los H</option>
                        <option value="Biblioteca">Biblio</option>
                        <option value="Vestidores">Vestidores</option>
                    </select>
                </div>
                <div class="d-grid gap-2 col-4 mx-auto">
                    <label>Horario:</label>
                    <input type="time"  min="7:00" max="21:00" id="transparent" class="form-control" name="hora" required>
                </div>
            </div>
        </form>
    </div>

</body>
</html>