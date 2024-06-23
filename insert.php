<?php

include('config.php');


if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/" . $image_name;


    if (!is_dir('images')) {
        mkdir('images', 0777, true);
    }

   
    $stmt = $con->prepare("INSERT INTO prodact (name, price, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $name, $price, $image_up);

 
    if (move_uploaded_file($image_location, $image_up)) {
        $stmt->execute();
        echo "<script>alert('تم رفع المنتج بنجاح');</script>"; 
    } else {
        echo "<script>alert('لم يتم اختيار المنتج');</script>"; 
    }

 
    header('Location: index.php');
    exit;
}