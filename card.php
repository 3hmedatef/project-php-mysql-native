<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <title> عربه المنتاجات</title>
    <style>
        h3{
             font-family:'Cairo'sans-serif;
             font-weight:bold; 
        }
        main{
            width: 40%;
            margin-top:30px;
        }
        table{
            box-shadow:1px 1px 10px silver;
        }
        thead{
            background-color:#3498DB;
            color:white;
            text-align:center;
        }
        tbody{
            text-align:center;
        }
    </style>
    
</head>
<body>
    <center>
        <h3>منتاجات المحجوزه</h3>
    </center>
 <?php
    include('config.php');
    $result=mysqli_query($con,"SELECT * FROM addcard");
    while($row=mysqli_fetch_array($result)){
        echo    "  
    <center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>product name</th>
                        <th  scope='col'>product price</th>
                        <th  scope='col'>delete product</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                  
                        <td><a href='del_card.php?id=$row[id]'class='btn btn-danger'>حذف</a></td>
                    </tr>
                </tbody>

            </table>
        </main>
    </center> 
    "

   ; }
 
 ?>
 <center>
    <a href="shop.php">الرجوع لصفحه المنتاجات</a>
 </center>
    
</body>
</html>