<?php 
    include 'templade/header.php';
    include("conexion/conexion2.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
    $query=mysqli_query($con,$sql);
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
             <div class="card header">
             </div>
             <div class="p-4">
                <table class="table aling-middel">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Disponibilidad</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row=mysqli_fetch_array($query)){
                         ?>
                            <tr>
                                <th><?php  echo $row['id_trabajador']?></th>
                                <th><?php  echo $row['nombre']?></th>
                                <th><?php  echo $row['apellido']?></th>
                                <th><?php  echo $row['direccion']?></th>
                                <th><?php  echo $row['cargo']?></th>
                                <th><?php  echo $row['disponibilidad']?></th>                                  
                                                                    
                            </tr>
                    <?php 
                        }
                         ?>                                 
                    </tbody>
                </table>
             </div>
            </div>
        </div>
    </div>
</div>






<?php include 'templade/footer.php'?>
  