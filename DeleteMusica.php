<?php
include 'conx2.php';
$codmus = $_GET['codmus'];

try {
    $sql = "DELETE from musica 
    where codmus='$codmus'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo 'eliminado';
    header('Location: '.'ReadMusica.php');
} catch (PDOException $th) {
        echo 'error delete'.$th->getMessage();
    }
?>