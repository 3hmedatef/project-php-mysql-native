<?php

include('config.php');


if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/" . $image_name;


    if (!is_dir('images')) {
        mkdir('images', 0777, true);
    }
    $stmt = $con->prepare("UPDATE prodact SET name = ?, price = ?, image = ? WHERE id = ?");
    $stmt->bind_param("sdsi", $name, $price, $image_up, $id);
    
   


 
    if (move_uploaded_file($image_location, $image_up)) {
        $stmt->execute();
        echo "<script>alert('تم رفع المنتج بنجاح');</script>"; 
    } else {
        echo "<script>alert('لم يتم اختيار المنتج');</script>"; 
    }

 
    header('Location: index.php');
    exit;
}