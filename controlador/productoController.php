<?php
require_once("modelo/index.php");
class productoController{
	private $model;
	
	public function __construct(){
        $this->model=new Modelo();
    }
    
    // MOSTRAR
    public function index(){
    	$producto 	=	new Modelo();
		$dato=$producto->mostrar("productos","1");
		$datoCount= $producto->contar("productos","1");
		$num_total_rows =$datoCount[1]['total_products'];
		$NUM_ITEMS_BY_PAGE=3;
		require_once("vista/producto/listar.php");
    }

	//CONSULTA-PAGINACION
	public function consultaPagination($start,$NUM_ITEMS_BY_PAGE){
		$producto 	=	new Modelo();
		$result=$producto->mostrarPagination("productos","1",$start,$NUM_ITEMS_BY_PAGE);
		return $result;
	}

    // INSERTAR
    public function nuevo(){
    	require_once("vista/producto/nuevo.php");	    	    	
    }
	
    function guardar(){
    	$nombre 	=	$_REQUEST['nombre'];
    	$precio 	=	$_REQUEST['precio'];
		$provedor 	=	$_REQUEST['provedor'];
		$categoria 	=	$_REQUEST['categoria'];
        $data       =   "'".$nombre."','".$precio."','".$provedor."','".$categoria."'";
    	$producto 	=	new Modelo();
		$dato 		=	$producto->insertar("productos",$data);
		header("location:".urlsite."&c=productos");
    }


    // ACTUALIZAR

    public function editar(){
    	$id=$_REQUEST['id'];
    	$producto 	=	new Modelo();
    	$dato=$producto->mostrar("productos","id=".$id);    	
    	require_once("vista/producto/editar.php");
    }
    public function update(){
    	$id 		= 	$_REQUEST['id'];
    	$nombre 	=	$_REQUEST['nombre'];
    	$precio 	=	$_REQUEST['precio'];
		$provedor 	=	$_REQUEST['provedor'];
		$categoria 	=	$_REQUEST['categoria'];
        $data       =   "nombre='".$nombre."', precio=".$precio.", id_provedor=".$provedor.", id_categoria=".$categoria;
        $condicion  =   "id=".$id;
    	$producto 	=	new Modelo();
		$dato 		=	$producto->actualizar("productos",$data,$condicion);
        header("location:".urlsite."&c=productos");
	}

    // ELIMINAR

	public function eliminar(){		
		$id 		= 	$_REQUEST['id'];    	
        $condicion  =   "id=".$id;
    	$producto 	=	new Modelo();        
		$dato 		=	$producto->eliminar("productos",$condicion);
		header("location:".urlsite."&c=productos");
	}
}