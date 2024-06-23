<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>update</title>
</head>
<body>

<?php
include('config.php');
$ID =$_GET['id'];
$up=mysqli_query($con,"SELECT *FROM prodact  where id=$ID");
$data=mysqli_fetch_array($up);



?>
    
    <center>
        <div class="main">
        <form action="up.php" method="POST" enctype="multipart/form-data">
            <h1>تعديل المنتاجات</h1>
     

            <input type="text" name="id" id="name" value='<?php echo $data['id']?>' required>
            <br>

        <input type="text" name="name" id="name"value='<?php echo $data['name']?>' required>
        <br>
      
      
        <input type="number" name="price" id="price"value='<?php echo $data['price']?>' required><br>
        
       
        <input type="file"class="btn btn-primary" name="image" id="image" required><br>
        
        <input type="submit"class="btn btn-info" name="update" value="تحديث المنتج">
    </form>
           
        </div>
        <a href="product.php"> عرض كل المنتاجات</a>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>






