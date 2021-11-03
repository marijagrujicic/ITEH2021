<?php include "../database/database.php";
global $connnection;
    $name = $_POST['name'];
    $price=$_POST['price'];
    $url=$_POST['url'];
    $query ="INSERT INTO dress(name, price, url) VALUES ('$name','$price','$url')";
    $result_set=mysqli_query($connnection, $query);
    if(!$result_set){
        die("query failed"); 

    }else{
        header("Location:http://localhost/dresses/user.php");
    }
?>
