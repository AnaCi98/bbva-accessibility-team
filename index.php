<?php
include_once 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBVA Colombia</title>
</head>
<body>
  <div id=pop class="popup-oferta">
    ¡Felicidades! Hemos realizado el analisis y tienes disponible una linea de crédito 
    <p>por 30.000.000 </p>
    <button class="tramitar-button">Quiero tramitarla</button>
    <span class="tache" onclick="pera()">x</span>
    <script>
    var div= document.getElementById('pop');
function nuez(){
div.classList.replace("popup-oferta", "popup-ofertaC");
}
    function pera(){
      div.remove();
    }
    </script>
  </div>
  <div class="Rectangle-1" onclick="myFunction()">
            <img src="./images/Logo.png" class="Logo">
            <span class="Solicita-tu-tarjeta">
                Solicita tu tarjeta
              </span>
        </div> 
  <section class="allBody">
    <img src="./images/icono-chat.png" class="chatbot">
    <img src="./images/credit-card-1.png" class="credit-card-1">
    <span class="Conoce-tu-oferta-en-un-minuto-facil-y-sin-papeles">
  Conoce tu oferta en un minuto, facil y sin papeles
</span>           
        
    <section class="home-page">
        <div class="Rectangle-1"></div>
        <span class="Descubre-la-tarjeta-que-tenemos-para-ti">
            Descubre la tarjeta que tenemos para ti
          </span>
          <span class="Con-unos-datos-bsicos-crearemos-una-tarjeta-de-crdito-que-se-ajuste-a-tu-perfil-Una-vez-conozcas">
            Con unos datos básicos crearemos una tarjeta de crédito que se ajuste a tu perfil. Una vez conozcas la tarjeta, tú decides si continúas con la solicitud.
          </span>
          <div>
          <form action="" method="POST">
            <input type="text" class="Rectangle-2" name=nombre placeholder="Nombre">
            <input type="text" class="Rectangle-2" name=apellido placeholder="Apellido">
            <input type="text" class="Rectangle-2" name=sexo placeholder="Sexo">
            <input type="text" class="Rectangle-2" name=nac placeholder="Fecha de nacimiento aaaa/mm/dd">
            <span class="Ingresa-en-este-orden-ddmmaaaa">
                Ingresa en este orden dd/mm/aaaa
            </span>
            <input type="text" class="Rectangle-2" name=id placeholder="Número de ciudadanía">
            <span class="No-son-vlidos-la-Cdula-de-Extranjera-Tarjeta-de-Identidad-ni-el-pasaporte">
                No son válidos la Cédula de Extranjería, Tarjeta de Identidad ni el pasaporte.
            </span>
            <input type="text" class="Rectangle-2" name=exped placeholder="Fecha de expedición Cédula">
            <span class="Ingresa-en-este-orden-ddmmaaaa-2">
              Ingresa en este orden dd/mm/aaaa
            </span>
            <input type="text" class="Rectangle-2" name=cel placeholder="Número de celular">
            <input type="text" class="Rectangle-2" name=correo placeholder="Correo electrónico">
             <div class="captcha">
                <span class="Este-sitio-web-est-protegido-por-reCAPTCHA-y-se-aplican-la-Poltica-de-Privacidad-y-los-Trminos-de">
                    Este sitio web está protegido por reCAPTCHA y se aplican la
                <span class="text-style-1">Política de Privacidad</span>
                    y los
                 <span class="text-style-1">Términos de Servicio</span>
                    de Google.
                 </span>
            </div>
            <input type="submit" name="mandar" class="Rectangle-3" onclick="nuez()" value="Conoce oferta" >

           

            <?php 
                    
                    if (isset($_POST['mandar'])) {
                        if (strlen($_POST['nombre'])>=1 && strlen($_POST['apellido'])>=1 && strlen($_POST['sexo'])>=1 
                        && strlen($_POST['nac'])>=1 && strlen($_POST['id'])>=1 && strlen($_POST['exped'])>=1 && strlen($_POST['cel'])>=1 && strlen($_POST['correo'])>=1) {
                            $nombre=trim($_POST['nombre']);
                            $apellido=trim($_POST['apellido']);
                            $sexo=trim($_POST['sexo']);
                            $nac=trim($_POST['nac']);
                            $id=trim($_POST['id']);
                            $exped=trim($_POST['exped']);
                            $cel=trim($_POST['cel']);
                            $correo=trim($_POST['correo']);
                            $sqls= "INSERT INTO Usuario (id_ced,nombre,apellidos,fecha_nac,fecha_exp_ced,cel,correo,sexo)
                             VALUES ($id, '$nombre','$apellido',$nac, $exped, '$cel', '$correo', '$sexo')";
                            $sentencia = $mbd->prepare($sqls);
                            $sentencia->execute();
                            echo 'se armo';
                            header('Location:index.php?pagina=1');
                        }
                    }
                    ?>
          </form>
          </div>
           <input type="checkbox" class="checkbox-button">
          <span class="Autorizo-el-tratamiento-de-mis-Datos-confitme-que-la-politica-de-Tratamiento-de-Datos-Personales-de">
            Autorizo el tratamiento de mis Datos, confitme que la politica de Tratamiento de Datos Personales de BBVA Colombia
          </span>
          <span class="Ver-autorizacion-y-tratamiento-de-Datos-Personales">
            Ver autorizacion y tratamiento de Datos Personales
          </span>
        
    </section>

    <script>
      window.addEventListener('mouseover', initLandbot, { once: true });
      window.addEventListener('touchstart', initLandbot, { once: true });
      var myLandbot;
      function initLandbot() {
        if (!myLandbot) {
          var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
          s.addEventListener('load', function() {
            var myLandbot = new Landbot.Livechat({
              configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1399559-R3J1YBCESGEO0BF8/index.json',
            });
          });
          s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
          var x = document.getElementsByTagName('script')[0];
          x.parentNode.insertBefore(s, x);
        }
      }
      </script>
  </section>
</body>
</html>
