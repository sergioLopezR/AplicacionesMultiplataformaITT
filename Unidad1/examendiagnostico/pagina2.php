<?php 
    session_start();
?>
<!doctype html>
	<html lang="es">
		<head>
			<meta charset="utf-8" />
			<title>Factorial</title>
			<link href="css/style.css" type="text/css" rel="stylesheet"/>
		</head>
		<body class="pantalla">
		
		<div class="div-login">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
			<h1 class="login">Bienvenido <?php echo $_SESSION['usuario'] ?></h1>
			<div class="div-numero">
			<label class="login">Numero:</label>
			<input type="number" name="numero" min="0" max="55" step="0"/>
			<input type="submit" value="Calcular" name="submit">
           </div>
        </form>
        
<?php
    
    if(isset($_POST['submit'])){
        $numero = $_POST['numero'];
    
        $f = 1;
        $cadena = '1*';
        
        echo "<table class='tabla' border='1'>";
        echo "<tr>";
        echo "<th colspan='3'>Tabla</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Numero</td>";
        echo "<td>Procedimiento</td>";
        echo "<td>Resultado</td>";
        echo "</tr>";
        
        for($i=1; $i<= $numero; $i++){
            $f = $f * $i;
        
        $cadena = $cadena . $i . '*';
            
        echo "<tr>";
        echo "<td>{$i}</td>";
        echo "<td>{$cadena}</td>";
        echo "<td>{$f}</td>";
        echo "</tr>";

        }
        
        echo "</table>";
        
    }
?>
       </div>
        
		</body>
	</html>