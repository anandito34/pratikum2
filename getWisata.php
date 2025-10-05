<?php
$connect = mysqli_connect("localhost", "root", "", "json");
$sql = "SELECT * FROM wisata";
$result = mysqli_query($connect,$sql);
$json_arry = array();
while($row = mysqli_fetch_assoc($result))
{
    $json_arry[] = $row;
}
echo json_encode($json_arry);
?>