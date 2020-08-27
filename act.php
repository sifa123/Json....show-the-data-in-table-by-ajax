<?php
$conn = new mysqli("localhost","root","","sifa");
if($conn->connect_error){
	die("Failed to connect.".$conn->connect_error);
}
$json=array();

$sql="SELECT * FROM user";
$stmt=$conn->prepare($sql);
$stmt->execute();
$result=$stmt->get_result();

while($row=$result->fetch_assoc()){
	array_push($json,$row);
}
echo json_encode($json);

?>