<?php
include('config.php');
$ID =$_GET['id'];
mysqli_query($con,"DELETE  FROM prodact  WHERE id=$ID");
header('Location: product.php');

?>