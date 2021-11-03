<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="shortcut icon" href="https://freeiconshop.com/wp-content/uploads/edd/code-flat.png" type="image/x-icon">
    <title>CODE</title>
</head>
<body id="body">
    <?php
    $archivoArray = file("archivo.txt");
    $enlacesArray = file("enlaces.txt");
    $imagesArray = file("images.txt");
    if( isset($_POST['nombre']) )
    {
        
        $archivoArray[$_POST["localizacion"]-1] = $_POST['nombre']."\n";
        $archivo = fopen("archivo.txt","w+b");
        foreach( $archivoArray as $linea ){
            fwrite($archivo, $linea);
        }
        fclose($archivo);

        
        $enlacesArray[$_POST["localizacion"]-1] = $_POST['url']."\n";
        $enlaces = fopen("enlaces.txt","w+b");
        foreach( $enlacesArray as $linea ){
            fwrite($enlaces, $linea);
        }
        fclose($enlaces);

        
        $imagesArray[$_POST["localizacion"]-1] = $_POST['imagen']."\n";
        $images = fopen("images.txt","w+b");
        foreach( $imagesArray as $linea ){
            fwrite($images, $linea);
        }
        fclose($images);
    }
    ?>
    
    <header><h1>CODE</h1><button id="añadir" class="añadir">Añadir</button></header>
    <nav class="menu">
        <div class="tipo">TOOLS</div>
        <div class="tipo">CODE</div>
        <div class="tipo">DESIGN</div>
        <div class="tipo">MORE</div>
    </nav>
    <ul class="contenedor">
        <li class="mini-contenedor a1 "><div class="div-c"><a href=<?=$enlacesArray[0]?>  class="enlace-iconos"><img src=<?=$imagesArray[0]?>  alt="" class="img"><div class="texto"><?=$archivoArray[0]?> </div></a></div></li>
        <li class="mini-contenedor a2 "><div class="div-c"><a href=<?=$enlacesArray[1]?>  class="enlace-iconos"><img src=<?=$imagesArray[1]?>  alt="" class="img"><div class="texto"><?=$archivoArray[1]?> </div></a></div></li>
        <li class="mini-contenedor a3 "><div class="div-c"><a href=<?=$enlacesArray[2]?>  class="enlace-iconos"><img src=<?=$imagesArray[2]?>  alt="" class="img"><div class="texto"><?=$archivoArray[2]?> </div></a></div></li>
        <li class="mini-contenedor a4 "><div class="div-c"><a href=<?=$enlacesArray[3]?>  class="enlace-iconos"><img src=<?=$imagesArray[3]?>  alt="" class="img"><div class="texto"><?=$archivoArray[3]?> </div></a></div></li>
        <li class="mini-contenedor a5 "><div class="div-c"><a href=<?=$enlacesArray[4]?>  class="enlace-iconos"><img src=<?=$imagesArray[4]?>  alt="" class="img"><div class="texto"><?=$archivoArray[4]?> </div></a></div></li>
        <li class="mini-contenedor a6 "><div class="div-c"><a href=<?=$enlacesArray[5]?>  class="enlace-iconos"><img src=<?=$imagesArray[5]?>  alt="" class="img"><div class="texto"><?=$archivoArray[5]?> </div></a></div></li>
        <li class="mini-contenedor a7 "><div class="div-c"><a href=<?=$enlacesArray[6]?>  class="enlace-iconos"><img src=<?=$imagesArray[6]?>  alt="" class="img"><div class="texto"><?=$archivoArray[6]?> </div></a></div></li>
        <li class="mini-contenedor a8 "><div class="div-c"><a href=<?=$enlacesArray[7]?>  class="enlace-iconos"><img src=<?=$imagesArray[7]?>  alt="" class="img"><div class="texto"><?=$archivoArray[7]?> </div></a></div></li>
        <li class="mini-contenedor a9 "><div class="div-c"><a href=<?=$enlacesArray[8]?>  class="enlace-iconos"><img src=<?=$imagesArray[8]?>  alt="" class="img"><div class="texto"><?=$archivoArray[8]?> </div></a></div></li>
        <li class="mini-contenedor a10"><div class="div-c"><a href=<?=$enlacesArray[9]?>  class="enlace-iconos"><img src=<?=$imagesArray[9]?>  alt="" class="img"><div class="texto"><?=$archivoArray[9]?> </div></a></div></li>
        <li class="mini-contenedor a11"><div class="div-c"><a href=<?=$enlacesArray[10]?> class="enlace-iconos"><img src=<?=$imagesArray[10]?> alt="" class="img"><div class="texto"><?=$archivoArray[10]?></div></a></div></li>
        <li class="mini-contenedor a12"><div class="div-c"><a href=<?=$enlacesArray[11]?> class="enlace-iconos"><img src=<?=$imagesArray[11]?> alt="" class="img"><div class="texto"><?=$archivoArray[11]?></div></a></div></li>
        <li class="mini-contenedor a13"><div class="div-c"><a href=<?=$enlacesArray[12]?> class="enlace-iconos"><img src=<?=$imagesArray[12]?> alt="" class="img"><div class="texto"><?=$archivoArray[12]?></div></a></div></li>
        <li class="mini-contenedor a14"><div class="div-c"><a href=<?=$enlacesArray[13]?> class="enlace-iconos"><img src=<?=$imagesArray[13]?> alt="" class="img"><div class="texto"><?=$archivoArray[13]?></div></a></div></li>
        <li class="mini-contenedor a15"><div class="div-c"><a href=<?=$enlacesArray[14]?> class="enlace-iconos"><img src=<?=$imagesArray[14]?> alt="" class="img"><div class="texto"><?=$archivoArray[14]?></div></a></div></li>
        <li class="mini-contenedor a16"><div class="div-c"><a href=<?=$enlacesArray[15]?> class="enlace-iconos"><img src=<?=$imagesArray[15]?> alt="" class="img"><div class="texto"><?=$archivoArray[15]?></div></a></div></li>
        <li class="mini-contenedor a17"><div class="div-c"><a href=<?=$enlacesArray[16]?> class="enlace-iconos"><img src=<?=$imagesArray[16]?> alt="" class="img"><div class="texto"><?=$archivoArray[16]?></div></a></div></li>
        <li class="mini-contenedor a18"><div class="div-c"><a href=<?=$enlacesArray[17]?> class="enlace-iconos"><img src=<?=$imagesArray[17]?> alt="" class="img"><div class="texto"><?=$archivoArray[17]?></div></a></div></li>
        <li class="mini-contenedor a19"><div class="div-c"><a href=<?=$enlacesArray[18]?> class="enlace-iconos"><img src=<?=$imagesArray[18]?> alt="" class="img"><div class="texto"><?=$archivoArray[18]?></div></a></div></li>
        <li class="mini-contenedor a20"><div class="div-c"><a href=<?=$enlacesArray[19]?> class="enlace-iconos"><img src=<?=$imagesArray[19]?> alt="" class="img"><div class="texto"><?=$archivoArray[19]?></div></a></div></li>
        <li class="mini-contenedor a21"><div class="div-c"><a href=<?=$enlacesArray[20]?> class="enlace-iconos"><img src=<?=$imagesArray[20]?> alt="" class="img"><div class="texto"><?=$archivoArray[20]?></div></a></div></li>
        <li class="mini-contenedor a22"><div class="div-c"><a href=<?=$enlacesArray[21]?> class="enlace-iconos"><img src=<?=$imagesArray[21]?> alt="" class="img"><div class="texto"><?=$archivoArray[21]?></div></a></div></li>
        <li class="mini-contenedor a23"><div class="div-c"><a href=<?=$enlacesArray[22]?> class="enlace-iconos"><img src=<?=$imagesArray[22]?> alt="" class="img"><div class="texto"><?=$archivoArray[22]?></div></a></div></li>
        <li class="mini-contenedor a24"><div class="div-c"><a href=<?=$enlacesArray[23]?> class="enlace-iconos"><img src=<?=$imagesArray[23]?> alt="" class="img"><div class="texto"><?=$archivoArray[23]?></div></a></div></li>
        <li class="mini-contenedor a25"><div class="div-c"><a href=<?=$enlacesArray[24]?> class="enlace-iconos"><img src=<?=$imagesArray[24]?> alt="" class="img"><div class="texto"><?=$archivoArray[24]?></div></a></div></li>
        <li class="mini-contenedor a26"><div class="div-c"><a href=<?=$enlacesArray[25]?> class="enlace-iconos"><img src=<?=$imagesArray[25]?> alt="" class="img"><div class="texto"><?=$archivoArray[25]?></div></a></div></li>
        <li class="mini-contenedor a27"><div class="div-c"><a href=<?=$enlacesArray[26]?> class="enlace-iconos"><img src=<?=$imagesArray[26]?> alt="" class="img"><div class="texto"><?=$archivoArray[26]?></div></a></div></li>
        <li class="mini-contenedor a28"><div class="div-c"><a href=<?=$enlacesArray[27]?> class="enlace-iconos"><img src=<?=$imagesArray[27]?> alt="" class="img"><div class="texto"><?=$archivoArray[27]?></div></a></div></li>
        <li class="mini-contenedor a29"><div class="div-c"><a href=<?=$enlacesArray[28]?> class="enlace-iconos"><img src=<?=$imagesArray[28]?> alt="" class="img"><div class="texto"><?=$archivoArray[28]?></div></a></div></li>
        <li class="mini-contenedor a30"><div class="div-c"><a href=<?=$enlacesArray[29]?> class="enlace-iconos"><img src=<?=$imagesArray[29]?> alt="" class="img"><div class="texto"><?=$archivoArray[29]?></div></a></div></li>
        <li class="mini-contenedor a31"><div class="div-c"><a href=<?=$enlacesArray[30]?> class="enlace-iconos"><img src=<?=$imagesArray[30]?> alt="" class="img"><div class="texto"><?=$archivoArray[30]?></div></a></div></li>
        <li class="mini-contenedor a32"><div class="div-c"><a href=<?=$enlacesArray[31]?> class="enlace-iconos"><img src=<?=$imagesArray[31]?> alt="" class="img"><div class="texto"><?=$archivoArray[31]?></div></a></div></li>
    </ul>
    <div class="bloque" id="bloque">
        <form class="bloque2" id="bloque2" method="post"> 
            <div>Localización</div>
            <input class="inputLocalizacion numero input" name="localizacion" type="text">
            <div>Nombre</div>
            <input class=" inputNombre nombre input" name="nombre" type="text">
            <div>URL</div>
            <input class=" inputURL url input" name="url" type="text">
            <div>Imagen</div>
            <input class=" inputImagen imagen input"name="imagen" type="text">
            <button class="añadir submit" type="submit">Añadir</button>
        </form>
    </div>

    <!-- <div class="desplegable">
        <h3 class="title-input">Localización.</h3>
        <h3 class="title-input">Nombre.</h3>
        <h3 class="title-input">URL.</h3>
        <h3 class="title-input">Imagen.</h3>
    </div> -->

    <script src="añadir.js"></script>
</body>
</html>
