<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hardwork</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>

<body>
  <main>
    <header> <img src="./imagenes/images/WEB__1_01.png" alt="">
      <h1>Queremos saber más de tí, <br> ¡actualiza tus datos!
      </h1>
    </header>
    <div class="container_main">
      <section class="form_container">
        <form method="post" target="_self" onsubmit="return validate()" action="" id="form">
          <div class="cont-divs">

            <div class="cont-input">
              <label for="nombre">Nombre<span class="rojo">*</span></label>
              <input type="text" id="nombre" class="input" value="" required="" name="nombre" />
            </div>
            <div class="cont-input">
              <label for="apellido">Apellido<span class="rojo">*</span></label>
              <input type="text" class="input" id="apellido" value="" required="" name="apellido" />
            </div>

            <div class="cont-input ">
              <label for="apellido">Número móvil<span class="rojo">*</span></label>
              <div class="celular">
                <input type="text" id="cod" value="+56" placeholder="+56" name="cod" disabled />
                <input type="number" id="cel" value="" required="" name="cel" />
                <input style="display: none" type="number" id="numero-movil" value="" name="telefono" />
              </div>
            </div>

            <div class="container_colum">

              <div class="contenedor_opciones">
                <div class="flex">
                  <label class="input_colum" for="parkas-&-plumas">Jardin </label>
                  <input class="check" type="checkbox" id="parkas-&-plumas" name="categoria" value="parkas & plumas">

                </div>
                <div class="flex">
                  <label class="input_colum" for="primera-capa">Herramientas</label>
                  <input class="check" type="checkbox" id="primera-capa" name="categoria" value="primera capa">

                </div>
                <div class="flex">
                  <label class="input_colum" for="camisas">Baños</label>
                  <input class="check" type="checkbox" id="camisas" name="categoria" value="camisas">

                </div>
                <div class="flex">
                  <label class="input_colum" for="calzado-seguridad">Puertas, ventanas y molduras</label>
                  <input class="check" type="checkbox" id="calzado-seguridad" name="categoria"
                    value="calzado de seguridad">

                </div>
                <div class="flex">
                  <label class="input_colum" for="accesorios">Materiales de construcción</label>
                  <input class="check" type="checkbox" id="accesorios" name="categoria" value="accesorios">

                </div>
                <div class="flex">
                  <label class="input_colum" for="pantalones">Gastifería</label>
                  <input class="check" type="checkbox" id="pantalones" name="categoria" value="pantalones">

                </div>
                <div class="flex">
                  <label class="input_colum" for="pantalones">Electricidad</label>
                  <input class="check" type="checkbox" id="pantalones" name="categoria" value="pantalones">

                </div>
                <div class="flex">
                  <label class="input_colum" for="pantalones">Aseo</label>
                  <input class="check" type="checkbox" id="pantalones" name="categoria" value="pantalones">

                </div>

              </div>

              <div class="contenedor_opciones">

                <div class="flex">
                  <label class="input_colum" for="salud-bienestar">Ventilación y calefacción</label>

                  <input class="check" type="checkbox" id="salud-bienestar" name="como-supiste" value="salud-bienestar">
                </div>
                <div class="flex">
                  <label class="input_colum" for="veganos">Ceramicos y revestimientos</label>
                  <input class="check" type="checkbox" id="veganos" name="como-supiste" value="veganos">

                </div>
                <div class="flex">
                  <label class="input_colum" for="maquillaje">cocina</label>

                  <input class="check" type="checkbox" id="maquillaje" name="como-supiste" value="maquillaje">
                </div>
                <div class="flex">
                  <label class="input_colum" for="manos-pies">Maderos y tableros</label>

                  <input class="check" type="checkbox" id="manos-pies" name="como-supiste" value="manos-pies">
                </div>
                <div class="flex">
                  <label class="input_colum" for="maquillaje">Pinturas</label>

                  <input class="check" type="checkbox" id="maquillaje" name="como-supiste" value="maquillaje">
                </div>
                <div class="flex">
                  <label class="input_colum" for="manos-pies">Ferretería</label>

                  <input class="check" type="checkbox" id="manos-pies" name="como-supiste" value="manos-pies">
                </div>
                <div class="flex">
                  <label class="input_colum" for="manos-pies">Iluminación </label>

                  <input class="check" type="checkbox" id="manos-pies" name="como-supiste" value="manos-pies">
                </div>
                <div class="flex">
                  <label class="input_colum" for="manos-pies">Organización</label>

                  <input class="check" type="checkbox" id="manos-pies" name="como-supiste" value="manos-pies">
                </div>

              </div>
            </div>
          </div>


          <div class="container_boton">
            <div class="boton">
              <button id="submitButton" type="submit" name="Enviar" onclick="checkOptions()" value="">ENVIAR</button>
            </div>
            <div>
            <?php  echo '<input type="hidden" name="email" value="'.$_GET["email"].'">'; ?>
              <input type="hidden" placeholder="Evento" value="nos_preocupamos_por_ti" name="evento" />
              <input type="hidden" name="token" value="0beb46fb919943e0a7d9e431c753bf6f" />
            </div>
            <div>
              <input type="hidden" name="redir"
                value="https://cloudstorage.embluemail.com/clientes/Templates/redirec_forms.html" />
            </div>
          </div>
        </form>
      </section>
    </div>

    <div  class="body-azul">

      <div class="img-casco">
        <img src="./imagenes/images/WEB__1_05.png" alt="">
      </div>
      <div>

        <h4 class="title-body">

          ENCUENTRA TODO EN NUESTRAS
        </h4>
        <h1 class="text-body">
          28 TIENDAS
        </h1>
        <h4 class="text-body-chile">

          A LO LARGO DE TODO CHILE
          </4>

          <h1 class="text-body-fin">
            <i>
              síguenos en nuestras <span style="color: #f6ad20;
        ">redes sociales </span> </i>
          </h1>
      </div>
    </div>


    <footer> <a target="_blank" href="https://www.facebook.com/hardworkchile"> <img
          src="./imagenes/images/images/footer_03.png" alt=""></a> <a target="_blank"
        href="https://www.instagram.com/hardwork_chile/">
        <img src="./imagenes/images/images/footer_05.png" alt=""></a>
      <img src="./imagenes/images/WEB__1_13.png" alt="">

    </footer>
  </main>

  <script>


function checkOptions() {
      const textOpenOption = document.getElementById("textOpenOption").value;

      const codVal = document.getElementById("cod").value;
      const celVal = document.getElementById("cel").value;
      const numero = document.getElementById("numero-movil");



     let celular = codVal + celVal;
     numero.value=  celular;


      if (textOpenOption != "") {
        constopenOption = document.getElementById("opcion-abierta");
        openOption.value = textOpenOption;
      }
    }




  </script>
</body>

</html>