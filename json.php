<html>
<head>
<title>Insert JSON Data</title>
</head>
<body>
<?php 

$josndata = '{
"student":{ "name":"Harry", "country":"United State", "ContactNo":2545454 }
}';  

// Database connection
$conn = new mysqli('localhost', 'username', 'password', 'databasename');

// Insert data Query
$sql = "INSERT INTO student_table ( name, jsondata )
VALUES ('Harry', '$josndata')";

if ($conn->query($sql) === TRUE) {
  echo "Insert your JSON record successfully";
} 
?>
</body>
</html>