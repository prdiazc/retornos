<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <meta http-equiv="Content-Language" content="es"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>RETORNOS</title>
  <!--INICIO ENLACES

  -->

    <?php include 'bootstrap5.php';?>

  <!--FIN ENLACES -->

</head>
<body>



    <!--  Inicio DIV "Cargaexterna0"  
      Contiene el formulario para agregar datos   -->


    <br>

    <div class='container-lg'>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    DATOS 1
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <div class="row align-items-start">
                            <div class="col" id="divtipo_doc" >
                                <label for="vtipo_doc">Tipo - Documento:</label>
                                <select class="form-control" id="vtipo_doc" onkeypress="return LetrasMayusculas(event)" required onblur="verificacampo('vtipo_doc')" onchange="paso1hogar('divtipo_doc','vtipo_doc')"  name="vtipo_doc">
                                <option  value="">SELECCIONA</option>
                                        <?php
                                        ?>
                                </select>
                            </div>
                            <div class="col" id="divnum_doc">
                                <label for="vnum_doc">N&uacute;mero - Documento:</label>
                                    <input class="form-control" type="text" id="vnum_doc"  onkeypress="return SoloNumeros(event)" required onblur="validadoc()" onblur="verificacampo('vnum_doc')"  onchange="paso1hogar('divnum_doc','vnum_doc')"  name="vnum_doc"
                                    >
                            </div>
                        </div>
                        <br>

                        <div class="row align-items-start">
                            <div class="col "  id="divnombre1">
                                <label for="vnombre1">Primer Nombre:</label>
                                    <input onkeypress="return alfanumericos(event)" required  class="form-control " type="text" id="vnombre1" onchange="paso1hogar('divnombre1','vnombre1')"  name="vnombre1"  > <br>
                            </div>
                            <div class="col" id="divnombre2">
                                <label for="vnombre2">Segundo Nombre</label>
                                    <input  class="form-control " type="text" id="vnombre2"   onkeypress="return alfanumericos(event)" onchange="paso1hogar('divnombre2','vnombre2')"  name="vnombre2"
                                    ><br>
                            </div>
                            <div class="col" id="divapellido1">
                                <label for="vapellido1">Primer Apellido:</label>
                                    <input  class="form-control " type="text" id="vapellido1"  onkeypress="return alfanumericos(event)" required onblur="verificacampo('vapellido1')" onchange="paso1hogar('divapellido1','vapellido1')"  name="vapellido1" 
                                    ><br>
                            </div>
                            <div class="col" id="divapellido2">
                                <label for="vapellido2">Segundo Apellido</label>
                                    <input  class="form-control " type="text" id="vapellido2"  onkeypress="return alfanumericos(event)"  onchange="paso1hogar('divapellido2','vapellido2')"  name="vapellido2" 
                                    ><br>
                            </div>
                            <hr>
                        </div>


                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    DATOS 2
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    DATOS 3
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
        </div>
    </di>     
                                                            

        </div>
    <!-- FIN DIV "Cargaexterna0"  -->



</body>

</html>