<?php

//delete.php

if(isset($_POST["id"]))
{
 $conn = new PDO('mysql:host=localhost;dbname=hms', 'root', '');
 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $conn->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>
