<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styles.css">
	<title>Categorias</title>
	   <meta charset="utf-8">
 
    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <head>
    	<link rel="icon" href="../img/si.jpg">
    </head>

<script>
	
	function eliminar(id)
	{
		if(confirm("¿ Estas seguro de eliminar el registro ?"))
		{
			window.location = "index.php?ideliminar=" + id;
		}
	}

	function modificar(id)
	{
		window.location = "index.php?idmodificar=" + id;
	}
</script>

</head>


	<div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Categorias</h1>
            <div class="owl-carousel team-carousel position-relative" style="padding-left: 30px;">
                <div class="team-item rounded overflow-hidden">
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">Número</h4>
                        <input type="text" id="txtid" name="txtid" value="<?php echo @$buscar_mod[0][0]; ?>" hidden>
                        <br>
                        <form action="index.php" id="frminsertar" name="frminsertar" method="post">
		<label for="">Numero</label>
		<input type="text" id="txtid" name="txtid" value="<?php echo @$buscar_mod[0][0]; ?>" hidden>
		<br>
		<label for="">Nombre</label>
		<input type="text" id="txtnombre" name="txtnombre" value="<?php echo @$buscar_mod[0][1]; ?>">
		<br>
		<label for="">Fecha</label>
		<input type="date" id="txtfecha" name="txtfecha" value="<?php echo @$buscar_mod[0][2]; ?>">
		<br>
		<input type="submit" id="btninsertar" name="btninsertar" value="<?php if(isset($_GET['idmodificar']))
		{ 
			echo 'Modificar';
		}
		else
		{
			echo 'Insertar';
		}
		 ?>">
	</form>
	<br><br>
	<form action="index.php" id="frmbuscar" name="frmbuscar" method="post">
		<label for="">Buscar</label>
		<input type="text" id="txtbuscar" name="txtbuscar" >
		<input type="submit" id="btnbuscar" name="btnbuscar" value="Buscar">
		<br><br>
		<table class="table table-bordered table-sm" cellspacing="0" width="100%">
			<tr>
				<td align="center">Número</td>
				<td align="center">Nombre</td>
				<td align="center">Fecha</td>
				<td colspan="2" align="center">Accion</td>
			</tr>
			<?php echo $datos; ?>
		</table>
	</form>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</body>
</html>