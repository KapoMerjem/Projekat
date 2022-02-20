<?php
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  //Database connection
  $conn = new mysqli('localhost', 'root', ' ', 'weddingplanner');
  if($conn->connect_error){
      echo "$conn->connect_error";
      die("Connection Failed : " .$conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into users(name, surname, email, password) values(?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $name, $surname, $email, $password);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration Successfully! :)";
    $stmt->close();
    $conn->close();

  }
?>
