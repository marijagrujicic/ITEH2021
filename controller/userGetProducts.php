<?php include "../database/database.php";
global $connnection;
session_start();

$query = "SELECT id, name, fabric, size, color, length, price, url FROM dress";
$query_product_info=mysqli_query($connnection, $query);

if(!$query_product_info){
    die("Error");
}
while($row=mysqli_fetch_array($query_product_info)){
    echo "<div class='container' id={$row['id']} class='dress'>";
    echo "<div class='row'>"; 
    echo "<div class='col-sm'>";
    echo "<img class='img' src='{$row['url']}' alt='' />";
    echo "</div>";
    echo "<div class='text col-sm product-info'>";
    echo "<h3>{$row['name']}</h3>";
    echo "</div>";
    echo "<div class='text col-sm product-specs'>";
    echo "<h4>{$row['price']} €</h4>";
    $user = null;
    $user = $_SESSION['user'];
    if( $user !=null){
        if($_SESSION['admin']==0)
        echo "<button onclick='myFunction({$row['id']})' id='buy' value={$row['id']} class='btn btn-primary'>Buy</button>";
        else{
            echo "<button onclick='edit({$row['id']})'  id='change' value={$row['id']} class='btn btn custom-btn'>Edit</button>";
            echo "<button onclick='deleteProduct({$row['id']})' id='delete' value={$row['id']} class='btn btn custom-btn' style='margin-left:5px;'>Delete</button>";
        }
        }
    
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
?>