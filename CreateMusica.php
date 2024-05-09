<?php
include './conx2.php';
if(isset($_POST['subir'])){
    $codmus = $_POST['codmus'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $tipo = $_POST['tipo'];
    echo $codmus."<br>"; 
    echo $titulo."<br>"; 
    echo $autor."<br>";
    echo $tipo."<br>";

    try {
         $sql = "insert into musica values('$codmus','$titulo','$autor','$tipo')";
        $cursor = $conn->prepare($sql);
        $cursor->execute();
        echo 'insertado';
        header('Location: '.'./ReadMusica.php');
    } catch (PDOException $th) {
        echo 'error insert'.$th->getMessage();
    }
   
}


// codmus
// titulo
// autor
// tipo
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class='container-sm'>
<form action='' method='post'>
    <input class='form-control m-3' name='codmus' placeholder='codmus'></input>
    <input class='form-control m-3' name='titulo' placeholder='titulo'></input>
    <input class='form-control m-3' name='autor' placeholder='autor'></input>
    <input class='form-control m-3' name='tipo' placeholder='tipo'></input>
    <button type='submit' class='btn btn-primary mb-3' name='subir'>INSERTAR</button>
</form>
</div>