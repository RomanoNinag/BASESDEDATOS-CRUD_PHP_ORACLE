<!-- cadena de conexion -->
<?php
$user = 'datosconbaile';
$pass = '12345678';
 $tns = "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = DESKTOP-TIEHQNT)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = XE)
    )
  )
";
//conf pdo
$confpdo = [ 
    PDO::ATTR_CASE => PDO::CASE_LOWER,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];
// estruc try catch
try {
    $conn = new PDO('oci:dbname='.$tns, $user, $pass, $confpdo);
    echo "con success" ;
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>