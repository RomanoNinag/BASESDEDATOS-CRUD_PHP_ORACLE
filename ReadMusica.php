<?php
include './conx2.php';
//sql consultas (CRUD)
$sql = 'select * from musica';
$cursor = $conn->prepare($sql);
$cursor->execute();

// while($fila = $cursor->fetch(PDO::FETCH_ASSOC)){
//     echo $fila['codmus']." ";
//     echo $fila['titulo']." ";
//     echo $fila['autor']." ";
//     echo $fila['tipo']." ";
//     // print_r($fila);
//     echo "<br>";
// }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<a class='btn btn-info' href='./CreateMusica.php' role='button' >Insertar</a>
<table class='table table-hover'>
    <tr>
        <th>CODMUS</th>
        <th>TITULO</th>
        <th>AUTOR</th>
        <th>TIPO</th>
    </tr>
    <?php while($fila = $cursor->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php echo $fila['codmus']; ?></td>
            <td><?php echo $fila['titulo']; ?></td>
            <td><?php echo $fila['autor']; ?></td>
            <td><?php echo $fila['tipo']; ?></td>
            <td><a class='btn btn-success' href="UpdateMusica.php?codmus=<?php echo $fila['codmus']?>">ACTUALIZAR</a></td>
            <td><a class='btn btn-danger' href="DeleteMusica.php?codmus=<?php echo $fila['codmus']?>">ELIMINAR</a></td>
        </tr>
    <?php }?>

</table>