<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <title>product</title>

    <style>
        h1{
            font-family: "Rubik", sans-serif;
            font-weight:bold;

        }
        .card{
            float:right;
            margin-top:20px;
            margin-left:10px;
            margin-right:10px;

        }
        .card img{
            width: 100%;
            height: 200px;
        }
        main{
            width: 60%;
        }
        #a{
            margin-left: 70px;
            text-decoration:none;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a  id=a class="navbar-brand" href="card.php">my card</a>

    </nav>
    <center>
        <h1>my product</h1>
    </center>

    <?php

include('config.php');
    $result=mysqli_query($con,"SELECT * FROM prodact");
    while($row=mysqli_fetch_array( $result)){
        echo "<center>
        <main>
        
    <div class='card' style='width: 15rem;''>
         <img src='$row[image]' class='card-img-top'>
        <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[price]</p>
            <a href='val.php?id=$row[id]' class='btn btn-success'>اضافه منتج للعربه</a>
      
        </div>
</div>
        </main>
        </center>
        ";
    }
?>


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>






