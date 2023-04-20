<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM empleados";
     $sql="SELECT *  FROM empleados";
    if(isset($_POST['buscar'])){
        $id_empleado=$_POST['id_empleado'];
        $sql="SELECT * FROM empleados WHERE id_empleado LIKE '%$id_empleado%'";

    }
    
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA EMPLEADO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_empleado" placeholder="id_empleado">
                                    <input type="text" class="form-control mb-3" name="codigo" placeholder="codigo">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos">
                                    <input type="text" class="form-control mb-3" name="documento" placeholder="documento">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono">
                                    <input type="file" class="form-control mb-3" name="foto" placeholder="foto">

                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <form action="index.php" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="id_empleado" class="form-control" placeholder="buscar empleado por id">
                                    </div>
                                    <div class="col-6">
                                       <input type="submit" value="buscar" name="buscar" class="btn btn-secundary"> 
                                    </div>
                                </div>
                            </form>
                            <table class="table mt-3" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        
                                        <th>id_empleado</th>
                                        <th>codigo</th>
                                        <th>nombre</th>
                                        <th>pellidos</th>
                                        <th>documento</th>
                                        <th>direccion</th>
                                        <th>telefono</th>
                                        <th>foto</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                
                                                <th><?php  echo $row['id_empleado']?></th>
                                                <th><?php  echo $row['codigo']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellidos']?></th> 
                                                <th><?php  echo $row['documento']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['foto']?></th>     
                                                <th><a href="actualizar.php?id=<?php echo $row['id_empleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_empleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>