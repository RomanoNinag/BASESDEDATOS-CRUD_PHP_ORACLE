<?php
include 'conx2.php';
$codmus = $_GET['codmus'];
// echo $codmus;
$sql = "select * from musica where codmus='$codmus'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $titulo = $row['titulo'];
        $autor = $row['autor'];
        $tipo = $row['tipo'];
    } 
if(isset($_POST['subir'])){
    $codmus = $_POST['codmus'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $tipo = $_POST['tipo'];
    echo $codmus.'<br>';
    echo $titulo.'<br>';
    echo $autor.'<br>';
    echo $tipo.'<br>';
try {
    $sql = "UPDATE musica SET
     titulo='$titulo',
     autor='$autor',
     tipo='$tipo' 
    where codmus='$codmus' ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo 'actualizado';
    header('Location: '.'ReadMusica.php');
} catch (PDOException $th) {
        echo 'error update'.$th->getMessage();
    }
    
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class='container-sm'>
<form action='' method='post'>
    <input class='form-control m-3' value="<?php echo $codmus;?>" name='codmus' placeholder='codmus'></input>
    <input class='form-control m-3' value="<?php echo $titulo;?>" name='titulo' placeholder='titulo'></input>
    <input class='form-control m-3' value="<?php echo $autor;?>" name='autor' placeholder='autor'></input>
    <input class='form-control m-3' value="<?php echo $tipo;?>" name='tipo' placeholder='tipo'></input>
    <button type='submit' class='btn btn-primary mb-3' name='subir'>ACTUALIZAR</button>
</form>
</div>