<?php include "../database/database.php";
global $connnection;
    $id = $_POST['id'];
    $query ="DELETE FROM dress WHERE id=$id";
    $result_set=mysqli_query($connnection, $query);
    
    if(!$result_set){
        die("query failed");    
    }
?>