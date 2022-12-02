<?php
require_once("vista/layouts/header.php");
?>
    <div class="row">
        <div class="col-md-12">
            <a href="index.php?c=provedor&m=expExcel" class="btn btn-outline-danger">EXPORTAR A EXCEL</a>
        </div>
    </div>
    
    <table class="table table-dark">
    <thead>
        <tr>
            <td>ID</td>
            <td>DESCRIPCION</td>
            <td>ACCION</td>
        </tr>
    </thead>
        <?php 
            if(!empty($dato)){
                foreach ($dato as $key => $value){
                    foreach ($value as $va){
                        echo "<tr><td>".$va['id']."</td><td>".$va['descripcion']."</td>";
                        echo "<td><a href='index.php?c=provedor&m=editar&id=".$va['id']."' class='btn btn-outline-success'>EDITAR</a>"; ?>
                        <a href="index.php?c=provedor&m=eliminar&id=<?php echo $va['id']?>" onclick='return confirm("estas seguro");false' class='btn btn-outline-danger'>ELIMINAR</a></td>
                        <?php
                        echo "</tr>";
                    }
                }
            }else{
                echo "<td colspan='3'>NO HAY REGISTROS</td>";
            }
            
        ?>
    </table>
<?php
require_once("vista/layouts/footer.php");
?>

