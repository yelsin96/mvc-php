<?php
require_once("modelo/index.php");
class provedorController{
	private $model;
	
	public function __construct(){
        $this->model=new Modelo();
    }
    
    // MOSTRAR
    public function index(){
    	$provedor 	=	new Modelo();
		$dato=$provedor->mostrar("provedor","1");
		require_once("vista/provedor/listar.php");
    }

    // INSERTAR
    public function nuevo(){
    	require_once("vista/provedor/nuevo.php");	    	    	
    }
	
    function guardar(){
    	$descripcion 	=	$_REQUEST['descripcion'];

        $data       =   "'".$descripcion."'";
    	$provedor 	=	new Modelo();
		$dato 		=	$provedor->insertar("provedor",$data);
		header("location:".urlsite."&c=provedor");
    }


    // ACTUALIZAR

    public function editar(){
    	$id=$_REQUEST['id'];
    	$provedor 	=	new Modelo();
    	$dato=$provedor->mostrar("provedor","id=".$id);    	
    	require_once("vista/provedor/editar.php");
    }
    public function update(){
    	$id 		= 	$_REQUEST['id'];
    	$descripcion 	=	$_REQUEST['descripcion'];

        $data       =   "descripcion='".$descripcion."'";
        $condicion  =   "id=".$id;
    	$provedor 	=	new Modelo();
		$dato 		=	$provedor->actualizar("provedor",$data,$condicion);
        header("location:".urlsite."&c=provedor");
	}

    // ELIMINAR

	public function eliminar(){		
		$id 		= 	$_REQUEST['id'];    	
        $condicion  =   "id=".$id;
    	$provedor 	=	new Modelo();        
		$dato 		=	$provedor->eliminar("provedor",$condicion);
		header("location:".urlsite."&c=provedor");
	}

	public function expExcel(){
		$provedor 	=	new Modelo();        
		$dato=$provedor->mostrarExcel("provedor","1");

		$filename = "provedores.xls";

		header("Content-Type: application/vnd.ms-excel");

		header("Content-Disposition: attachment; filename=".$filename);

		$mostrar_columnas = false;

		foreach($dato as $libro) {

			if(!$mostrar_columnas) {

				echo implode("\t", array_keys($libro)) . "\n";

				$mostrar_columnas = true;

			}

			echo implode("\t", array_values($libro)) . "\n";

		}
	}
}