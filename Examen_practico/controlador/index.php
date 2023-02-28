<?php 
		// Importo el archivo de la clase de conexion a la BD
		require '../modelo/modelo.php';
		// Crear al objeto de la clase BD_PDO
		$obj = new Categorias();
		// Linea que ejecuta la instruccion sql en la BD
		if (isset($_POST['btninsertar'])) 
		{
			$nombre = $_POST['txtnombre'];
			$fecha = $_POST['txtfecha'];
			if ($_POST['btninsertar']=='Insertar') 
			{
				$obj->Insertar($nombre,$fecha);
			}
			elseif ($_POST['btninsertar']=='Modificar') 
			{
				$id = $_POST['txtid'];
				$obj->Ejecutar_Instruccion("update categorias set Nombre='$nombre', Fecha='$fecha' where id_categoria = '$id'");
			}
			
		}
		elseif (isset($_GET['ideliminar'])) 
		{		
			$ideliminar = $_GET['ideliminar'];
			$obj->Ejecutar_Instruccion("Delete from categorias where id_categoria = '$ideliminar'");
		}
		elseif (isset($_GET['idmodificar'])) 
		{		
			$idmodificar = $_GET['idmodificar'];
			$buscar_mod = $obj->Ejecutar_Instruccion("Select * from categorias where id_categoria = '$idmodificar'");
		}

		if (isset($_POST['btnbuscar'])) 
		{
			$buscar = $_POST['txtbuscar'];
			$result = $obj->Buscar($buscar);
			$datos = $obj->Tabla_gen($result);
		}
		else
		{
			$result = $obj->Buscar_todo();
			$datos = $obj->Tabla_gen($result);
		}
	
		// LInea que muestra el contenido de la variable $result
		//var_dump($result);

		require '../vista/vista.php';
 	?>