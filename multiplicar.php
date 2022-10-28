<!DOCTYPE html>
<html lang="en">

<head>
	<title>Tabla de multiplicar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <div class="container mt-3">

    	<h2 class="text-center">Tabla de multiplicacion</h2> 

    	<form action="multiplicar.php" method="POST">
          <div class="mb-3 mt-3">
            <label>Ingrese numero a multiplicar</label>
            <input type="number" name="txtnumero" class="mb-2 col-md-5" placeholder="Ingrese un numero" required>
          </div>
        <input type="submit" name="Calcular" class="btn btn-success" value="Calcular">
	    </form>

    </div>   

    <div class="container mt-3">
    <table class="table table-hover table-bordered table-sm table-dark">
      <thead>
        <tr>
          <th scope="col">Numero</th>
          <th scope="col">Calculo</th>
          <th scope="col">Resultado</th>
        </tr>
      </thead>
      <tbody>
    <?php 
      if (isset($_POST['txtnumero']))
      {    
             $numero = $_POST['txtnumero'];

             for ($i=1; $i <=20 ; $i++) 
             { 

              echo "<tr>";
            echo "<th scope='row'> $i</th>";
            echo "<td>$numero * $i</td>";
            echo "<td>" . $numero * $i . "</td>";

            /* "este codigo serviria para ahorar lineas de espacio. pero no seria muy modificable"

            echo"<td>" .(ceil($i).' *'.$numero.' ='.($i*$numero).  "<br>"). "</td>";

            */
              echo "</tr>";
             }
      }
    ?>
      </tbody>
    </table>
</body>
</html>