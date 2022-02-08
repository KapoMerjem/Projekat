<?php
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //Database connection
  $conn = new mysqli('localhost', 'root', 'meja12345', 'weddingplanner');
  if($conn->connect_error){
      echo "$conn->connect_error";
      die("Connection Failed : " .$conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into registration(name, surname, email, password) values(?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $name, $surname, $email, $password);
    $execeval = $stmt->execute();
    echo $execval;
    echo "Registration Successfully! :)";
    $stmt->close();
    $conn->close();

  }
?>
