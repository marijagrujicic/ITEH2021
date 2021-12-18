<?php include "../database/database.php";
global $connnection;


$search=$_POST['search'];
if(!empty($search) || $search=""){
$query = "SELECT id, name, fabric, size, color, length, price, url FROM dress WHERE name LIKE '$search%'";
$query_product_info=mysqli_query($connnection, $query);
if(!$query_product_info){
    die("Error");
}
$count=mysqli_num_rows($query_product_info);
if($count<1){
    echo "We don't have that dress";
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
}
?>