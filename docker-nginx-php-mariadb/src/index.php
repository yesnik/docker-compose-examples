<p>Hello</p>

<h4>Attempting MySQL connection from php...</h4>

<?php

$host = 'mariadb';
$user = 'root';
$password = 'root';

try {
  $db = new PDO("mysql:host=$host;dbname=information_schema", $user, $password);
  
  $res = $db->query('SELECT * FROM global_status');
  
  while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
    echo '<pre>';
    print_r($row);
  }

} catch (PDOException $e) {
  echo $e->getMessage();
}

/*
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected to MySQL successfully!";
}
*/


