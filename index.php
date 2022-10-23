<?php
include_once 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBVA Colombia</title>
</head>
<body>
    <section class="home-page">
        <div class="Rectangle-1"></div>
        <span class="Descubre-la-tarjeta-que-tenemos-para-ti">
            Descubre la tarjeta que tenemos para ti
          </span>
          <span class="Con-unos-datos-bsicos-crearemos-una-tarjeta-de-crdito-que-se-ajuste-a-tu-perfil-Una-vez-conozcas">
            Con unos datos básicos crearemos una tarjeta de crédito que se ajuste a tu perfil. Una vez conozcas la tarjeta, tú decides si continúas con la solicitud.
          </span>
          <form action="" method="POST">
            <input type="text" class="Rectangle-2" name=nombre placeholder="Nombre">
            <input type="text" class="Rectangle-2" name=apellido placeholder="Apellido">
            <input type="text" class="Rectangle-2" name=sexo placeholder="Sexo">
            <input type="text" class="Rectangle-2" name=nac placeholder="Fecha de nacimiento aaaa/mm/dd">
            <input type="text" class="Rectangle-2" name=id placeholder="Número de ciudadanía">
            <input type="text" class="Rectangle-2" name=exped placeholder="Fecha de expedición del documento">
            <input type="text" class="Rectangle-2" name=cel placeholder="numero de cel">
            <input type="text" class="Rectangle-2" name=correo placeholder="Introduce tu correro">
            <input type="submit" name="mandar" class="Rectangle-3" value="Conoce oferta">
          </form>
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
                            $sqls= "INSERT INTO Usuario (id_ced,nombre,apellidos,fecha_nac,fecha_exp_ced,celular,correo,sexo)
                             VALUES ($id, '$nombre','$apellido',$nac, $exped, $cel, $correo, $sexo)";
                            $sentencia = $mbd->prepare($sqls);
                            $sentencia->execute();
                            header('Location:index.php?pagina=1');
                        }
                    }
                    ?>

    </section>
    
</body>
</html>