<?php include "../database/database.php";
global $connnection;
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price=$_POST['price'];
    $url=$_POST['url'];
    $query ="UPDATE dress SET name='$name', price=$price,url='$url' WHERE id=$id";
    $result_set=mysqli_query($connnection, $query);

    if(!$result_set){
        die("query failed"); 
    }else{  
    header("Location:http://localhost/dresses/user.php");
    }
?>