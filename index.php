<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    
</head>
<body>
    <div class="fondo"> 
        <header id = "a_header" class="header">
            <div class="ventana1">
                <div class="menu1">
                    <div class="V_menu1">
                        <div class="m1">
                            <div class="m3">
                                <div class="logo_empresa">
                                <img src="img/logo.jpg" alt="" class="logo_empresa" width="80px" height="80px" >
                                </div>
                                <div class="nombre_empresa">
                                    <p class="my">MY TIENDA </p><p class="onio"> ONIO</p>
                                </div>
                                <br> <br>
                                <div class="buscador">
                                    <p> <img class="icono_buscador" src="img/lupa.jpg" alt="" width="30px" height="30px"> </p>
                                    <p> <input class="buscadores" type="search" name="" id="" placeholder="Buscar producto" > </p>
                                    <p> <input type="image" src="img/microfono.jpg" alt="" width="30px" height="30px"> </p>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="menu2">
                    <div class="dis1">
                     <img src="img/hos.jpg" alt="" width="50px" height="50px"> <br>
                     <a href="carrito.php">
                        <button class="buttonIS"> EMVIAR AL CARRITO</button>
                     </a>
                    
                    </div>
                    <div class="dis2">
                    <img src="img/usuario.jpg" alt=""  width="50px" height="50px"> <br>
                    <a href="loging.php">
                        <button class="buttonIS"> INICIAR SECION </button>
                    </a>
                    
                    </div>
                    <div >
                        <div class="opcion">
                            <select class="barra" name=" menu" id=""> 
                                <option value="">HOME</option>
                                <option value="">INFORME</option>
                                <option value="">CONFIGRURACIONES</option>
                                <option value="">ASERCA DE</option>
                            </select>
                        </div>
                        <div class="datos">
                            <p>tel. 987654321</p>
                            <p>Emal. com</p>
                            <p>direccion.as</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </header>
    
        <div class="imgDesplegable">
            <div>
                <div>
                    <div class="imgDesplegable1">
                        <div class="carousel">
                            
                            <div id="imagen">
                                <button id="retroceder"> <img src="img/retroceder.png" alt="" width="40px" height="40px">  </button> 
                                <div class="center">
                                    <div class="ss">
                                        <div class="s">
                                            <h1>[</h1>
                                        </div>
                                        <div class="titolo">
                                            <p id="texmovimiento">Aqui encuentras los mejores precios, en todos los productos solo para tu </p>
                                        </div>
                                        <div class="s">
                                            <h1>]</h1>
                                        </div>
                                    </div>
                                    <div class="mProducto">
                                        <div id="descripcionProductos1">
                                            <p class="tex"> [Nombre] </p>
                                            <p id="nombreProducto">Camisa</p>
                                            <p class="tex"> [Marca]</p>
                                            <p id="marcaProducto">JEANS</p>
                                            <p class="tex"> [Precio_Uníco]</p>
                                            <p id="precioProducto">20 soles</p>
                                            <p class="tex">[Descuento] </p>
                                            <p id="precioDescuento">10%</p>
                                        </div>
                                        <div class="detallesProducto">
                                            <p class="tex"> [Destalle]</p>
                                            <p>nuevo</p>
                                            <p class="tex">[Año]</p>
                                            <p>2022</p>
                                            <p class="tex">[Descripción]</p>
                                            <p>Esta camiza es la mejor marca que as visto en tu vida.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="controles">
                                        <button id="play">Play</button>
                                        <button id="stop" disabled>Stop</button>
                                    </div>
                                </div>
                                <button id="avanzar"> <img src="img/avanzar.png" alt="" width="40px" height="40px"></button>
                                
                            </div>
                            
                        </div>
                        <br>
                        <script src="ecritp.js"></script>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <br>
    <div>
        <a href="consultaInsertar.php"> <button> Area del administrador </button> </a>
    </div>
    <br>
    <!--mostrar productos en la web-->

    <div>
        
    </div>


    <footer>
        <div class="ofertas">
            <div class="ofertas_para">
                <p> OFERTAS ESPICIALES PARA HOY <button> Ver más </button> </p>
            </div>
            <div class="of">
                <div class="productos_oferta">
                    <div class="fonimg1">
                        <div class="img1">
                            <img src="img/local.jpg" alt="" width="200px" height="200px">
                            <div class="descripciones_oferta">
                                <div class="descripciones_ofertaimg">
                                    <p class="texoferta">[Producto]</p>
                                    <p id="nombreProductooferta">camisa</p>
                                    <p class="texoferta">[Precio Un.]</p>
                                    <p id="precioUnitarioofeta">28 soles</p>
                                    <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fonimg2">
                        <div class="img2">
                            <img src="img/hombremoda.jpg" alt="" width="200px" height="200px">
                            <div class="descripciones_oferta">
                                <div class="descripciones_oferta">
                                    <div class="descripciones_ofertaimg">
                                        <p class="texoferta">[Producto]</p>
                                        <p id="nombreProductooferta">camisa</p>
                                        <p class="texoferta">[Precio Un.]</p>
                                        <p id="precioUnitarioofeta">28 soles</p>
                                        <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fonimg3">
                        <div class="img3">
                            <img src="img/niño.jpg" alt="" width="200px" height="200px">
                            <div class="descripciones_oferta">
                                <div class="descripciones_oferta">
                                    <div class="descripciones_ofertaimg">
                                        <p class="texoferta">[Producto]</p>
                                        <p id="nombreProductooferta">camisa</p>
                                        <p class="texoferta">[Precio Un.]</p>
                                        <p id="precioUnitarioofeta">28 soles</p>
                                        <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fonimg4">
                        <div class="img4">
                        <img src="img/modela.jpg" alt="" width="200px" height="200px">
                        <div class="descripciones_oferta">
                            <div class="descripciones_oferta">
                                <div class="descripciones_ofertaimg">
                                    <p class="texoferta">[Producto]</p>
                                    <p id="nombreProductooferta">camisa</p>
                                    <p class="texoferta">[Precio Un.]</p>
                                    <p id="precioUnitarioofeta">28 soles</p>
                                    <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="fonimg5">
                        <div class="img5">
                            <img src="img/oscurocuarto.jpg" alt="" width="200px" height="200px">
                            <div class="descripciones_oferta">
                                <div class="descripciones_oferta">
                                    <div class="descripciones_ofertaimg">
                                        <p class="texoferta">[Producto]</p>
                                        <p id="nombreProductooferta">camisa</p>
                                        <p class="texoferta">[Precio Un.]</p>
                                        <p id="precioUnitarioofeta">28 soles</p>
                                        <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                 
                    
                </div>
            </div>
        </div>
        <div class=""></div>
            <div class ="tienda_de_artefactos">
                <p>TIENDA DE ARTEFACTOS PARA TI  <button>Ver más</button> </p>
            </div>
            <div class="of">
                <div class="productos_oferta">
                    <div class="fonimg1">
                        <div class="img1">
                            <img src="img/local.jpg" alt="" width="200px" height="200px">
                            <div class="descripciones_oferta">
                                <div class="descripciones_ofertaimg">
                                    <p class="texoferta">[Producto]</p>
                                    <p id="nombreProductooferta">camisa</p>
                                    <p class="texoferta">[Precio Un.]</p>
                                    <p id="precioUnitarioofeta">28 soles</p>
                                    <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fonimg2">
                        <div class="img2">
                            <img src="img/hombremoda.jpg" alt="" width="200px" height="200px">
                            <div class="descripciones_oferta">
                                <div class="descripciones_oferta">
                                    <div class="descripciones_ofertaimg">
                                        <p class="texoferta">[Producto]</p>
                                        <p id="nombreProductooferta">camisa</p>
                                        <p class="texoferta">[Precio Un.]</p>
                                        <p id="precioUnitarioofeta">28 soles</p>
                                        <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fonimg3">
                        <div class="img3">
                            <img src="img/niño.jpg" alt="" width="200px" height="200px">
                            <div class="descripciones_oferta">
                                <div class="descripciones_oferta">
                                    <div class="descripciones_ofertaimg">
                                        <p class="texoferta">[Producto]</p>
                                        <p id="nombreProductooferta">camisa</p>
                                        <p class="texoferta">[Precio Un.]</p>
                                        <p id="precioUnitarioofeta">28 soles</p>
                                        <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fonimg4">
                        <div class="img4">
                        <img src="img/modela.jpg" alt="" width="200px" height="200px">
                        <div class="descripciones_oferta">
                            <div class="descripciones_oferta">
                                <div class="descripciones_ofertaimg">
                                    <p class="texoferta">[Producto]</p>
                                    <p id="nombreProductooferta">camisa</p>
                                    <p class="texoferta">[Precio Un.]</p>
                                    <p id="precioUnitarioofeta">28 soles</p>
                                    <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="fonimg5">
                        <div class="img5">
                            <img src="img/oscurocuarto.jpg" alt="" width="200px" height="200px">
                            <div class="descripciones_oferta">
                                <div class="descripciones_oferta">
                                    <div class="descripciones_ofertaimg">
                                        <p class="texoferta">[Producto]</p>
                                        <p id="nombreProductooferta">camisa</p>
                                        <p class="texoferta">[Precio Un.]</p>
                                        <p id="precioUnitarioofeta">28 soles</p>
                                        <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                 
                    
                </div>
            </div>
        </div>
    </footer>
    <br> <br>
    <div class ="">
        <div class=""></div>
            <div class ="tienda_de_artefactos">
                <p>TIENDA DE ARTEFACTOS PARA TI  <button>Ver más</button> </p>
            </div>
            <div class="of">
                <div class="productos_oferta">
                    <div class="fonimg1">
                        <div class="img1">
                            <img src="img/local.jpg" alt="" width="200px" height="200px">
                            <div class="descripciones_oferta">
                                <div class="descripciones_ofertaimg">
                                    <p class="texoferta">[Producto]</p>
                                    <p id="nombreProductooferta">camisa</p>
                                    <p class="texoferta">[Precio Un.]</p>
                                    <p id="precioUnitarioofeta">28 soles</p>
                                    <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fonimg2">
                        <div class="img2">
                            <img src="img/hombremoda.jpg" alt="" width="200px" height="200px">
                            <div class="descripciones_oferta">
                                <div class="descripciones_oferta">
                                    <div class="descripciones_ofertaimg">
                                        <p class="texoferta">[Producto]</p>
                                        <p id="nombreProductooferta">camisa</p>
                                        <p class="texoferta">[Precio Un.]</p>
                                        <p id="precioUnitarioofeta">28 soles</p>
                                        <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fonimg3">
                        <div class="img3">
                            <img src="img/niño.jpg" alt="" width="200px" height="200px">
                            <div class="descripciones_oferta">
                                <div class="descripciones_oferta">
                                    <div class="descripciones_ofertaimg">
                                        <p class="texoferta">[Producto]</p>
                                        <p id="nombreProductooferta">camisa</p>
                                        <p class="texoferta">[Precio Un.]</p>
                                        <p id="precioUnitarioofeta">28 soles</p>
                                        <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fonimg4">
                        <div class="img4">
                        <img src="img/modela.jpg" alt="" width="200px" height="200px">
                        <div class="descripciones_oferta">
                            <div class="descripciones_oferta">
                                <div class="descripciones_ofertaimg">
                                    <p class="texoferta">[Producto]</p>
                                    <p id="nombreProductooferta">camisa</p>
                                    <p class="texoferta">[Precio Un.]</p>
                                    <p id="precioUnitarioofeta">28 soles</p>
                                    <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="fonimg5">
                        <div class="img5">
                            <img src="img/oscurocuarto.jpg" alt="" width="200px" height="200px">
                            <div class="descripciones_oferta">
                                <div class="descripciones_oferta">
                                    <div class="descripciones_ofertaimg">
                                        <p class="texoferta">[Producto]</p>
                                        <p id="nombreProductooferta">camisa</p>
                                        <p class="texoferta">[Precio Un.]</p>
                                        <p id="precioUnitarioofeta">28 soles</p>
                                        <div class="verMas"> <button class="btnoferta">ver detalle</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                 
                    
                </div>
            </div>
    </div>
        </div>
        <div>
            <div class ="tienda_de_vihiculos">
                <p>TIENDA DE VIHICULOS PARA TI  <button>Ver más</button> </p>
            </div>
            <div>
                <p> productos en forma aleatorios </p>
                <div class="productos_oferta">
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                </div>
        </div>
        <div>
            <div class ="tienda_de_ropas">
                <p>TIENDA DE ROPAS PARA TI  <button>Ver más</button> </p>
            </div>
            <div>
                <p> productos en forma aleatorios </p>
                <div class="productos_oferta">
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                </div>
        </div>
        <div>
            <div class ="tienda_de_comida">
                <p>TIENDA DE COMIDA PARA TI  <button>Ver más</button> </p>
            </div>
            <div>
                <p> productos en forma aleatorios </p>
                <div class="productos_oferta">
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                </div>
        </div>
        <div>
            <div class ="tienda_de_artefactos">
                <p>MERCADO LIBRE   <button>Ver más</button> <button>Iniciar seción</button> </p>
            </div>
            <div>
                <p> productos en forma aleatorios </p>
                <div class="productos_oferta">
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                    <div class="img">
                        <img src="" alt="" width="150px" height="200px">
                        <div class="descripciones_oferta">
                            <p>discripcion 1 </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>