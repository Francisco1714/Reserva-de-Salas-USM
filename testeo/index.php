<!DOCTYPE html>
<html>
    <head>
        <title>Panel de testeo</title>
    </head>
    <body>
        <h1>Panel de testeos</h1><br><br>

        <table>
            <tr>
                <td>Codigo</td>
                <td>Dirección</td>
            </tr>

            <?php
                require 'conexion/conexion.php';
                $sql="SELECT * FROM tbl_testeo";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
               
            ?>

            <tr>
                <td><?php echo $mostrar['id'] ?></td>
                <td><?php echo $mostrar['direccion'] ?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>

