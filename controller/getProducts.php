<?php include "../database/database.php";
global $connnection;
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
    echo "<h3>{$row['name']} </h3>";
    echo "</div>";
    echo "<div class='text col-sm product-specs'>";
    echo "<h4>{$row['price']} €</h4>";
    
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
?>
