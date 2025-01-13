<form method="post">
    <input type="text" name="search" placeholder="Introduce una letra">
    <input type="submit" name="submit" value="Buscar">
</form>

<?php
// Names array
$names = array("Adriana", "Belen", "Carmen", "Diana", "Elena", "Fernando", "Gabriel", "Hugo", "Isabel", "Javier", "Karla", "Luis", "Maria", "Natalia", "Oscar", "Pablo", "Queralt", "Rosa", "Sara", "Tomas");

// search bar
if(isset($_POST['submit'])){
    $letter = $_POST['search'];
    // if name contains the letter entered by user add it to the result array
    $result = array();
    foreach($names as $name){
        if(strpos($name, $letter) !== false){
            array_push($result, $name);
        }
    }
    // display the result
    if (empty($result)){
      echo "<h3>Ningun nombre contiene la letra $letter</h3>";
    } else {
      echo "<h3>Nombres que contienen la letra $letter:</h3>";
      foreach($result as $name){
        echo "- " . $name . "<br>";
      }
    }
  }
?>