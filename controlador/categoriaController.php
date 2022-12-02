<?php
require_once("modelo/index.php");
class categoriaController{
	private $model;
	
	public function __construct(){
        $this->model=new Modelo();
    }
    
    // MOSTRAR
    public function index(){
    	$categoria 	=	new Modelo();
		$dato=$categoria->mostrar("categoria","1");
		require_once("vista/categoria/listar.php");
    }

    // INSERTAR
    public function nuevo(){
    	require_once("vista/categoria/nuevo.php");	    	    	
    }
	
    function guardar(){
    	$descripcion 	=	$_REQUEST['descripcion'];

        $data       =   "'".$descripcion."'";
    	$categoria 	=	new Modelo();
		$dato 		=	$categoria->insertar("categoria",$data);
		header("location:".urlsite."&c=categoria");
    }


    // ACTUALIZAR

    public function editar(){
    	$id=$_REQUEST['id'];
    	$categoria 	=	new Modelo();
    	$dato=$categoria->mostrar("categoria","id=".$id);    	
    	require_once("vista/categoria/editar.php");
    }
    public function update(){
    	$id 		= 	$_REQUEST['id'];
    	$descripcion 	=	$_REQUEST['descripcion'];

        $data       =   "descripcion='".$descripcion."'";
        $condicion  =   "id=".$id;
    	$categoria 	=	new Modelo();
		$dato 		=	$categoria->actualizar("categoria",$data,$condicion);
        header("location:".urlsite."&c=categoria");
	}

    // ELIMINAR

	public function eliminar(){		
		$id 		= 	$_REQUEST['id'];    	
        $condicion  =   "id=".$id;
    	$categoria 	=	new Modelo();        
		$dato 		=	$categoria->eliminar("categoria",$condicion);
		header("location:".urlsite."&c=categoria");
	}
}