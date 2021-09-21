<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">

    <title>Exam ERK</title>
</head>

<style>
    .calculadora{
        display:block;
        margin:0 auto;
        padding:20px;
        background-color:#0d6efd;
        width:337px;
        height:500px;
        border-radius: 25px;
    }
    .calculadora td button{
        display:block;
        width:70px;
        height: 70px;
        font-size: 25px;
    }
    #creditos{
        display:block;
        padding-top:20px;
        color:#fff;
        text-align: center;
        width:300px;
    }
    #resultadoOP{
        display:block;
        text-align: center;
        font-size: 40px;
        margin-bottom: 50px;
        width:300px;
        height: 100px;
        line-height: 100px;
        background-color:#fff;
        border-radius: 25px;
        overflow-y: scroll;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><h3>Exam<b>Erk</b></h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#" id="btnhome">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="btnformulario">Formulario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="btnresultado">Resultados</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="img" style="background: url() no-repeat;"></div>

    <table class="calculadora" id="mostrarCalculadora">
        <tr>
            <td colspan="4"><span id="resultadoOP"></span></td>
        </tr>
        <tr>
            <td><button id="siete">7</button></td>
            <td><button id="ocho">8</button></td>
            <td><button id="nueve">9</button></td>
        </tr>
        <tr>
            <td><button id="cuatro">4</button></td>
            <td><button id="cinco">5</button></td>
            <td><button id="seis">6</button></td>
        </tr>
        <tr>
            <td><button id="uno">1</button></td>
            <td><button id="dos">2</button></td>
            <td><button id="tres">3</button></td>
            <td><button id="multiplicacion">*</button></td>
        </tr>
        <tr>
            <td><button id="igual">=</button></td>
            <td><button id="reset">C</button></td>
            <td><button id="cero">0</button></td>
            <td><button id="exp">exp</button></td>
        </tr>
    </table>

    <div id="formularioPreguntas" class="container">
        <div class="row">
            <div class="col-xl-6">
                <form  class="needs-validation-register  form-material form-horizontal"  id="registrerform" novalidate>
                    <h2>Responde las <b>preguntas</b></h2>
                    <br/>
                    <div class="form-group m-t-20">
                        <div class="col-xs-12">
                            <input class="form-control" type="text"  name="nombre" id="nombre" placeholder="Nombre Completo" required>
                            <div class="invalid-feedback">
                                agrega un tu nombre completo
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-6">
                            <input class="form-control" type="text" name="correo" id="correo" required placeholder="correo">
                            <div class="invalid-feedback">
                                agrega tu Correo
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <input class="form-control" type="number" name="telefono"  id="telefono" required placeholder="Numero de celular">
                            <div class="invalid-feedback">
                                agrega un un numero de telefono
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="direccion" id="direccion" required placeholder="direccion">
                            <div class="invalid-feedback">
                                agrega un tu direccion
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="ocupacion" id="ocupacion" required placeholder="ocupacion">
                            <div class="invalid-feedback">
                                agrega un tu ocupacion
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-6">
                            <select class="form-control" name="nivel" id="nivel" required placeholder="nivel de estudios">
                                <option value="">Selecciona una opcion</option>
                                <option value="1">Primaria</option>
                                <option value="2">Secundaria</option>
                                <option value="3">Prepa/Bachillerato</option>
                                <option value="4">Licenciatura/Ingeneria</option>
                                <option value="5">Maestria</option>
                                <option value="6">Doctorado</option>
                            </select>
                            <div class="invalid-feedback">
                                agrega un tu nivel de estudios
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-6">
                            <select class="form-control" name="ingreso" id="ingreso" required placeholder="ingreso mensual">
                                <option value="">Selecciona una opcion</option>
                                <option value="1">$ 1,000.00 - $ 3,000.00</option>
                                <option value="1">$ 3,000.00 - $ 5,000.00</option>
                                <option value="2">$ 5,000.00 - $ 10,000.00</option>
                                <option value="2">$ 10,000.00 - $ 13,000.00</option>
                                <option value="2">$ 13,000.00 - $ 15,000.00</option>
                                <option value="2">$ 15,000.00 - $ 20,000.00</option>
                            </select>
                            <div class="invalid-feedback">
                                agrega un tu nivel de estudios
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-outline-primary btn-block" id="registrar"><i class="fa fa-location-arrow m-2"></i>Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-6" id='contentResp'>

            </div>
        </div>
        
    </div>

    <div id="resultadoPreguntas" class="container mt-5">
        <h1>Resultado de las Encuestas Local</h1>
        <button class="btn btn-primary" id="btngraficaLocal"> Ver Grafica</button>
        <table class="table table-borderless table-hover table-light mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Ocupacion</th>
                    <th scope="col">Nivel Academico</th>
                    <th scope="col">Ingreso</th>
                </tr>
            </thead>
            <tbody id="tableBodyLocal">
                
            </tbody>
        </table>
        <button class="btn btn-danger" id="enviarDatos">Enviar Datos al Servidor</button>
        <br>
        <hr>
        <br>
        <h1>Resultado de las Encuestas Servidor</h1>
        <button class="btn btn-primary" id="btngraficaServidor"> Ver Grafica</button>
        <table class="table table-borderless table-hover table-light mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Ocupacion</th>
                    <th scope="col">Nivel Academico</th>
                    <th scope="col">Ingreso</th>
                </tr>
            </thead>
            <tbody id="tableBodyServidor">

            </tbody>
        </table>
    </div>


    <div id="grafico" class="container mt-5">
        <div id="grap" style="height: 40rem;"></div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>

<script>
    (() => {
        'use strict';
        window.addEventListener('load', () => {

            let resultadoOP = document.getElementById('resultadoOP');
            let reset = document.getElementById('reset');
            let exp = document.getElementById('exp');
            let multiplicacion = document.getElementById('multiplicacion');
            let igual = document.getElementById('igual');
            let uno = document.getElementById('uno');
            let dos = document.getElementById('dos');
            let tres = document.getElementById('tres');
            let cuatro = document.getElementById('cuatro');
            let cinco = document.getElementById('cinco');
            let seis = document.getElementById('seis');
            let siete = document.getElementById('siete');
            let ocho = document.getElementById('ocho');
            let nueve = document.getElementById('nueve');
            let cero = document.getElementById('cero');
            
            ListaUsr();
            let forms = document.getElementsByClassName('needs-validation-register');


            Array.prototype.filter.call(forms, (form) => {
                form.addEventListener('submit', (vent) => {
                    event.preventDefault();
                    event.stopPropagation();
                    if (form.checkValidity()) {
                        
                        let ingreso = document.querySelector('#ingreso');
                        let nivel = document.querySelector('#nivel');
                        let ocupacion = document.querySelector('#ocupacion');
                        let direccion = document.querySelector('#direccion');
                        let telefono = document.querySelector('#telefono');
                        let correo = document.querySelector('#correo');
                        let nombre = document.querySelector('#nombre');

                        agregarList(ingreso.value, nivel.value, ocupacion.value, direccion.value, telefono.value, correo.value, nombre.value)
                        
                    } else {
                        form.classList.add('was-validated');
                    }
                }, false);
            });

        }, false);
    })();

    let listarDataUsr = [];


    uno.onclick = () => {
        resultadoOP.textContent = resultadoOP.textContent  + "1";
    }
    dos.onclick = () => {
        resultadoOP.textContent = resultadoOP.textContent  + "2";
    }
    tres.onclick = () => {
        resultadoOP.textContent = resultadoOP.textContent  + "3";
    }
    cuatro.onclick = () => {
        resultadoOP.textContent = resultadoOP.textContent  + "4";
    }
    cinco.onclick = () => {
        resultadoOP.textContent = resultadoOP.textContent  + "5";
    }
    seis.onclick = () => {
        resultadoOP.textContent = resultadoOP.textContent  + "6";
    }
    siete.onclick = () => {
        resultadoOP.textContent = resultadoOP.textContent  + "7";
    }
    ocho.onclick = () => {
        resultadoOP.textContent = resultadoOP.textContent  + "8";
    }
    nueve.onclick = () => {
        resultadoOP.textContent = resultadoOP.textContent  + "9";
    }
    cero.onclick = () => {
        resultadoOP.textContent = resultadoOP.textContent  + "0";
    }
    reset.onclick = () => {
        resetear();
    }
    exp.onclick = () => {
        operandoa = resultadoOP.textContent;
        operacion = "+";
        limpiar();
    }
    multiplicacion.onclick = () => {
        operandoa = resultadoOP.textContent;
        operacion = "*";
        limpiar();
    }
    igual.onclick = () => {
        operandob = resultadoOP.textContent;
        resolver();
    }


    limpiar = () => {
        resultadoOP.textContent = "";
    }

    resetear = () => {
        resultadoOP.textContent = "";
        operandoa = 0;
        operandob = 0;
        operacion = "";
    }
    limpiar = () =>{
        resultadoOP.textContent = "";
    }

    resetear = () => {
        resultadoOP.textContent = "";
        operandoa = 0;
        operandob = 0;
        operacion = "";
    }


    resolver = () => {
        var res = 0;
        switch(operacion){
            case "+":
                
                res =  Math.pow(parseFloat(operandoa), parseFloat(operandob));
            break;

            case "*":
                res = parseFloat(operandoa) * parseFloat(operandob);
            break;
        }
        resetear();
        resultadoOP.textContent = res;
    }

      
    let mostrarCalculadora = document.querySelector('#mostrarCalculadora');
    let formulario = document.querySelector('#formularioPreguntas');
    let resultado = document.querySelector('#resultadoPreguntas');
    let btnhome = document.querySelector('#btnhome');
    let btnformulario = document.querySelector('#btnformulario');
    let btnresultado = document.querySelector('#btnresultado');
    let btngraficaLocal = document.querySelector('#btngraficaLocal');
    let btngraficaServidor = document.querySelector('#btngraficaServidor');
    let grafico = document.querySelector('#grafico');
    let enviarDatos = document.querySelector('#enviarDatos');

    mostrarCalculadora.style.display = 'none';
    formulario.style.display = 'none';
    resultado.style.display = 'none';
    grafico.style.display = 'none';

    

    btnhome.onclick = () => {
        mostrarCalculadora.style.display = 'block';
        formulario.style.display = 'none';
        resultado.style.display = 'none';
        grafico.style.display = 'none';
        mostrarCalculadora.classList.add('active');
        formulario.classList.remove('active');
        resultado.classList.remove('active');

    }
    
    btnformulario.onclick = () => {
        formulario.style.display = 'block';
        mostrarCalculadora.style.display = 'none';
        resultado.style.display = 'none';
        grafico.style.display = 'none';
        formulario.classList.add('active');
        mostrarCalculadora.classList.remove('active');
        resultado.classList.remove('active');

    }

    btnresultado.onclick = () => {
        resultado.style.display = 'block';
        mostrarCalculadora.style.display = 'none';
        formulario.style.display = 'none';
        grafico.style.display = 'none';
        resultado.classList.add('active');
        mostrarCalculadora.classList.remove('active');
        formulario.classList.remove('active');
        dataTableLocal();
        dataTableServior();
    }

    btngraficaLocal.onclick = () => {
        grafico.style.display = 'block';
        mostrarCalculadora.style.display = 'none';
        formulario.style.display = 'none';
        resultado.style.display = 'none';
        let grap = document.querySelector('#grap');

        grap.innerHTML = '';

        let prim = 1;
        let sec = 1;
        let pre = 1;
        let lic = 1;
        let mae = 1;
        let doc = 1;
        let total = 1;
        let prodSelec = localStorage.getItem('dataUsr')

        if(prodSelec != null){

            anychart.onDocumentReady(function () {
                
    
    
                let arrayPS = JSON.parse(prodSelec);
                arrayPS.forEach((data, indice) => {
                    if(data.nivel == 1){
                        prim = 16761208/(prim+1)
                    }
                    if(data.nivel == 2){
                        sec = 16761208/(sec+1)
                        
                    }
                    if(data.nivel == 3){
                        pre = 16761208/(pre+1)
                        
                    }
                    if(data.nivel == 4){
                        lic = 16761208/(lic+1)
                        
                    }
                    if(data.nivel == 5){
                        mae = 16761208/(mae+1)
                        
                    }
                    if(data.nivel == 6){
                        doc = 16761208/(doc+1)
                        
                    }

                });
                var chart = anychart.pie([
                    
                    ['Primaria', prim],
                    ['Secundaria', sec],
                    ['Preparatoria/Bachillerato', pre],
                    ['Licenciatura/Ingeneria', lic],
                    ['Maestria', mae],
                    ['Doctorado', doc]
                ]);
    
    
                chart
                    .title('Grafica del Resultado Local, Nivel Academico de cada Usuario Encuestado')
                    .radius('100%')
                    .innerRadius('30%');
    
                chart.container('grap');
                chart.draw();
                    
            });
        }else{
            grap.innerHTML = '<h4 class="text-center text-danger">Sin datos en la Grafica</h4>';
        }
        
    }

    btngraficaServidor.onclick = () => {
        grafico.style.display = 'block';
        mostrarCalculadora.style.display = 'none';
        formulario.style.display = 'none';
        resultado.style.display = 'none';

        let grap = document.querySelector('#grap');

        grap.innerHTML = '';

        let prim = 1;
        let sec = 1;
        let pre = 1;
        let lic = 1;
        let mae = 1;
        let doc = 1;
        let total = 1;

        anychart.onDocumentReady(function () {


            var urlGetUser = "./back.php";
            let dataRes = new FormData();
            dataRes.append("opcion", "niveles");
            fetchAPI(urlGetUser, "POST", dataRes)
            .then((dataRes) => {
                total += (dataRes['total'].mensaje[0].cantidadUsr);

                prim += 16761208/(dataRes['prim'].mensaje[0].cantidadUsr);
                sec += 16761208/(dataRes['sec'].mensaje[0].cantidadUsr);
                pre += 16761208/(dataRes['pre'].mensaje[0].cantidadUsr);
                lic += 16761208/(dataRes['lic'].mensaje[0].cantidadUsr);
                mae += 16761208/(dataRes['mae'].mensaje[0].cantidadUsr);
                doc += 16761208/(dataRes['doc'].mensaje[0].cantidadUsr);
                
                let totalG = 16761208;
                var chart = anychart.pie([
                    
                    ['Primaria', totalG/prim],
                    ['Secundaria', totalG/sec],
                    ['Preparatoria/Bachillerato', totalG/pre],
                    ['Licenciatura/Ingeneria', totalG/lic],
                    ['Maestria', totalG/mae],
                    ['Doctorado', totalG/doc]
                ]);
    
    
                chart
                    .title('Grafica del Resultado Del Servidor, Nivel Academico de cada Usuario Encuestado')
                    .radius('100%')
                    .innerRadius('30%');
    
                chart.container('grap');
                chart.draw();
            })
            .catch((e) => console.log(e));

        });

    }

    const limpiarCampos = () => {
        ingreso.value = ''; 
        nivel.value = ''; 
        ocupacion.value = ''; 
        direccion.value = ''; 
        telefono.value = ''; 
        correo.value = ''; 
        nombre.value = ''; 
    }

    const localListaDataUsr = listarDataUsr => localStorage.setItem("dataUsr", JSON.stringify(listarDataUsr))

    const agregarList = (ingreso, nivel, ocupacion, direccion, telefono, correo, nombre) => {

        let numArre = localStorage.getItem('dataUsr') == null || localStorage.getItem('dataUsr').length <= 0 ? 0 : localStorage.getItem('dataUsr').length
        
        let data = new Object();

        let id = 1
        
        data['id'] = id + numArre;
        data['nivel'] = nivel;
        data['ocupacion'] = ocupacion;
        data['direccion'] = direccion;
        data['telefono'] = telefono;
        data['correo'] = correo;
        data['nombre'] = nombre;
        data['ingreso'] = ingreso;
        
        listarDataUsr = localStorage.getItem('dataUsr') == null || localStorage.getItem('dataUsr').length <= 0 ? listarDataUsr : JSON.parse(localStorage.getItem("dataUsr"));
        Swal.fire({
            title: 'Seguro que Quieres Guardar?',
            text: "una ves realizada esta accion, ya no se podra eliminar y editar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Enviar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                listarDataUsr.push(data);
                localListaDataUsr(listarDataUsr);
                ListaUsr();
                limpiarCampos()
                Swal.fire(
                'Agregado!',
                'agregado Satisfactoriamente.',
                'success'
                )
            }
        })
        
                    
    }

    let arrIngreso = ['$ 1,000.00 - $ 3,000.00','$ 3,000.00 - $ 5,000.00','$ 5,000.00 - $ 10,000.00','$ 10,000.00 - $ 13,000.00','$ 13,000.00 - $ 20,000.00'];
    let arrNivel = ['Primaria', 'Secundaria', 'Prepa/Bachillerato', 'Licenciatura/Ingeneria', 'Maestria', 'Doctorado'];

    const ListaUsr = () => {
        let contentResp = document.getElementById('contentResp');

        let prodSelec = localStorage.getItem('dataUsr')
        contentResp.innerHTML = "";
        if (prodSelec == null) {
            contentResp.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Sin Datos
                </div>
            `;
        } else {
            let arrayPS = JSON.parse(prodSelec);
            arrayPS.forEach((data, indice) => {
                contentResp.innerHTML += `
                    <div class="card p-0 m-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h5>${data.nombre}</h5>
                                    <p>Correo <b>${data.correo}</b></p>
                                    <p>Telefono <b>${data.telefono}</b></p>
                                    <p>Ingresos <b>${arrIngreso[data.ingreso-1]}</b></p>
                                </div>
                                <div class="col-5">
                                    <p>Ocupacion <b><i class="fa fa-dollar m-1"></i>${data.ocupacion}</b></p>
                                    <p>Nivel Academico <b></i>${arrNivel[data.nivel-1]}</b></p>
                                </div>
                                    <p class="ml-3 mt-2">Direccion <b><i class="fa fa-dollar m-1"></i>${data.direccion}</b></p>
                            </div>
                        </div>
                    </div>
                `;

            });
        }

    }


    const dataTableLocal = () => {
        let tableBody = document.querySelector('#tableBodyLocal');

        let prodSelec = localStorage.getItem('dataUsr')

        tableBody.innerHTML = "";
        if (prodSelec == null) {
            tableBody.innerHTML = `
                <tr>
                    <td colspan="7" class="text-center text-danger">
                        <h4>Sin datos</h4>
                    </td>
                </tr>
            `;
        } else {
            let arrayPS = JSON.parse(prodSelec);
            arrayPS.forEach((data, indice) => {
                tableBody.innerHTML += `
                    <tr>
                        <td>${indice+1}</td>
                        <td>${data.nombre}</td>
                        <td>${data.telefono}</td>
                        <td>${data.correo}</td>
                        <td>${data.ocupacion}</td>
                        <td>${arrNivel[data.nivel-1]}</td>
                        <td>${arrIngreso[data.ingreso-1]}</td>
                    </tr>
                `;

            });
        }
    }

    const dataTableServior = () => {
        let tableBodyServidor = document.querySelector('#tableBodyServidor');

        tableBodyServidor.innerHTML = '';
        var urlGetUser = "./back.php";
        let dataRes = new FormData();
        dataRes.append("opcion", "ListarDatos");
        fetchAPI(urlGetUser, "POST", dataRes)
            .then((dataRes) => {
                let ususarios = dataRes.mensaje;
                if(ususarios.length > 0){
                    ususarios.forEach((data, indice) => {
                        tableBodyServidor.innerHTML += `
                            <tr>
                                <td>${indice+1}</td>
                                <td>${data.nombre}</td>
                                <td>${data.telefono}</td>
                                <td>${data.correo}</td>
                                <td>${data.ocupacion}</td>
                                <td>${arrNivel[data.nivel-1]}</td>
                                <td>${arrIngreso[data.ingreso-1]}</td>
                            </tr>
                        `;
                    });
                }else{
                    tableBodyServidor.innerHTML = `
                        <tr>
                            <td colspan="7" class="text-center text-danger">
                                <h4>Sin datos</h4>
                            </td>
                        </tr>
                    `; 
                }
            })
        .catch((e) => console.log(e));


    }

    enviarDatos.onclick = () => {
        Swal.fire({
            title: 'Seguro que Quieres Enviarlos al Servidor?',
            text: "una ves realizada esta accion, ya no se podra eliminar y editar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Enviar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            GuardarDatos(localStorage.getItem('dataUsr'));
        })
    }

    const GuardarDatos = (data) => {
        let dataForm = new FormData();

        dataForm.append("opcion", "agregarDatos");
        dataForm.append("data", data);
        let url = "./back.php";
        fetchAPI(url, "POST", dataForm)
        .then((data) => {
            if(data.estatus === 'ok'){
                dataTableServior();
                localStorage.clear();
                dataTableLocal();
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: data.mensaje,
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        })
        .catch((e) => console.error(e));
    }

    const fetchAPI = async(url, method, data) => {
        let resp = await fetch(url, {
            method: method,
            body: data
        });

        return resp.json();
    }

</script>
</body>

</html>

