
<?php
// Database connection
$con = mysqli_connect('localhost', 'root', '', 'online');


if (!$con) {
    die("فشل الاتصال: " . mysqli_connect_error()); // "Connection failed"
}
?>