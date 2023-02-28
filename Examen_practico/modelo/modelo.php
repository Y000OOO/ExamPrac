<?php

require '../bd/conexion_bd.php';

class Categorias extends BD_PDO
{
	function Insertar($nombre, $fecha)
	{
		$this->Ejecutar_Instruccion("Insert into categorias(Nombre, Fecha) values('$nombre','$fecha')");
	}

	function Buscar($buscar)
	{
		$result = $this->Ejecutar_Instruccion("Select * from categorias where Nombre like '%$buscar%'");
		return $result;
	}

	function Buscar_todo()
	{
		$result = $this->Ejecutar_Instruccion("Select * from categorias");
		return $result;
	}

	function Tabla_gen($result)
	{
		$tabla="";
		foreach ($result as $renglon) 
		{
			$tabla.="<tr>";
			$tabla.='<td align="center">'.$renglon[0].'</td>';
			$tabla.='<td align="center">'.$renglon[1].'</td>';
			$tabla.='<td align="center">'.$renglon[2].'</td>';
			$tabla.='<td align="center"><input type="button" id="btneliminar" name="btneliminar" value="Eliminar" onclick="javascript: eliminar('.$renglon[0].');"></td>';
			$tabla.='<td align="center"><input type="button" id="btnmodificar" name="btnmodificar" value="Modificar" onclick="javascript: modificar('.$renglon[0].');"></td>
				</tr>';
		}
		return $tabla;
	}


}


?>