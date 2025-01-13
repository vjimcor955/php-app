<h1>Buscador nombres PHP</h1>

<form method="post">
    <input type="text" name="search" placeholder="Introduce una letra">
    <input type="submit" name="submit" value="Buscar">
</form>

<?php

// Names array
$names = array(
  "Víctor Jiménez Corada", 
  "Yeray Almoguera González",  
  "Álvaro Caro Fernández", 
  "Carlos Cordero Moreno", 
  "Alejandro Díaz Barea", 
  "Santiago Domínguez Gómez", 
  "Lucía Espinosa Sánchez", 
  "Alejandro González Benítez", 
  "Ángel Martínez Sánchez", 
  "Pablo Olvera Colino", 
  "Gonzalo Pulido Sánchez", 
  "Francisco Javier Rodríguez Acosta", 
  "Nicolás Ruiz Ruiz", 
  "Félix Sánchez González", 
  "Alejandro Seoane Martínez", 
  "Rafael Tocino Batista", 
  "Israel Valderrama García", 
  "Isaac Vallet Colchero"
);

// search bar
if (isset($_POST['submit'])) {
    $letter = $_POST['search'];
    // if name contains the letter entered by user add it to the result array
    $result = array();
    foreach($names as $name) {
      if (strpos(strtolower($name), strtolower($letter)) !== false) {
        array_push($result, $name);
      }
    }
    // display the result
    if (empty($result)) {
      echo "<h2>Ningun nombre contiene la letra $letter.</h2>";
    } else {
      echo "<h2>Nombres que contienen la letra $letter:</h2>";
      foreach ($result as $name) {
        echo "- " . $name . "<br>";
      }
    }
  }
?>