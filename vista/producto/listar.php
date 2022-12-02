<?php
require_once("vista/layouts/header.php");
require_once("controlador/productoController.php");
?>
    <div class="row">
        <div class="col-md-6">
            <form class="form-inline" method="post" target="_blank" action="index.php?c=pdfProductos&m=generar">
                <button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i>
                Exportar PDF</button>
            </form>
        </div>
    </div>    
    <div class="row">
        <div class="col-md-12">
            <table class="table table-dark">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>NOMBRE</td>
                    <td>PRECIO</td>
                    <td>PROVEDOR</td>
                    <td>CATEGORIA</td>
                    <td>ACCION</td>
                </tr>
            </thead>
                <?php 
                    if(!empty($dato)){
                        
                        //inicia paginacion
                        if ($num_total_rows > 0) {
                            $page = false;
                         
                            //examino la pagina a mostrar y el inicio del registro a mostrar
                            if (isset($_GET["page"])) {
                                $page = $_GET["page"];
                            }
                         
                            if (!$page) {
                                $start = 0;
                                $page = 1;
                            } else {
                                $start = ($page - 1) * $NUM_ITEMS_BY_PAGE;
                            }
                            //calculo el total de paginas
                            $total_pages = ceil($num_total_rows / $NUM_ITEMS_BY_PAGE);
                         
                            //pongo el numero de registros total, el tamano de pagina y la pagina que se muestra
                            echo '<h3>Numero de articulos: '.$num_total_rows.'</h3>';
                            echo '<h3>En cada pagina se muestra '.$NUM_ITEMS_BY_PAGE.' articulos ordenados por Nombre.</h3>';
                            echo '<h3>Mostrando la pagina '.$page.' de ' .$total_pages.' paginas.</h3>';
                            
                            $controlador = new productoController;
                            $result = $controlador->consultaPagination($start,$NUM_ITEMS_BY_PAGE);
                            
                            echo '<ul class="row items">';
                            //while ($row = $result->fetch_assoc()) {
                                foreach ($result as $key => $value){
                                    foreach ($value as $va){
                                        echo "<tr><td>".$va['id']."</td><td>".$va['nombre']."</td><td> $".$va['precio']."</td><td> ".$va['id_provedor']."</td><td> ".$va['id_categoria']."</td>";
                                        echo "<td><a href='index.php?c=productos&m=editar&id=".$va['id']."' class='btn btn-outline-info'>EDITAR</a>"; ?>
                                        <a href="index.php?c=productos&m=eliminar&id=<?php echo $va['id']?>" onclick='return confirm("estas seguro");false' class='btn btn-outline-danger'>ELIMINAR</a></td>
                                        <?php
                                        echo "</tr>";
                                    }
                                }
                            
                            // while ($row = $result) {
                            //     echo '<li class="col-lg-4">';
                            //     echo '<div class="item">';
                            //     echo '<h3>'.$row['nombre'].'</h3>';
                            //     //...
                            //     echo '</div>';
                            //     echo '</li>';   
                            // }
                            echo '</ul>';
                         
                            echo '<nav>';
                            echo '<ul class="pagination">';
                         
                            if ($total_pages > 1) {
                                if ($page != 1) {
                                    echo '<li class="page-item"><a class="page-link" href="index.php?c=productos&m=index&page='.($page-1).'"><span aria-hidden="true">&laquo;</span></a></li>';
                                }
                         
                                for ($i=1;$i<=$total_pages;$i++) {
                                    if ($page == $i) {
                                        echo '<li class="page-item active"><a class="page-link" href="#">'.$page.'</a></li>';
                                    } else {
                                        echo '<li class="page-item"><a class="page-link" href="index.php?c=productos&m=index&page='.$i.'">'.$i.'</a></li>';
                                    }
                                }
                         
                                if ($page != $total_pages) {
                                    echo '<li class="page-item"><a class="page-link" href="index.php?c=productos&m=index&page='.($page+1).'"><span aria-hidden="true">&raquo;</span></a></li>';
                                }
                            }
                            echo '</ul>';
                            echo '</nav>';
                        }                        
                        //termina paginacion
                    }else{
                        echo "<td colspan='3'>NO HAY REGISTROS</td>";
                    }
                    
                ?>
            </table>
        </div>
    </div>    
           
<?php
require_once("vista/layouts/footer.php");
?>

