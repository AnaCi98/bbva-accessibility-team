<?php
try {
    $mbd = new PDO('mysql:host=dbmysqlbbvac.clay43q0babp.us-west-2.rds.amazonaws.com;dbname=dbBBVAc', 'admin', 'zwcRwt02gaBbx4wJrGWy');
  echo'que ya jala';
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>