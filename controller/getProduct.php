<?php include "../database/database.php";
global $connnection;    
if(isset($_POST['id'])){
$id=$_POST['id'];
$query = "SELECT id, name, fabric, size, color, length, price, url FROM dress WHERE id =".$id;

$query_product_info=mysqli_query($connnection, $query);
if(!$query_product_info){
    die("Error");
}
echo "<div class='add-new' style='padding-top:0px;' >";
echo "<form class='add-form' method='post' action='controller/changeProduct.php'>";
while($row=mysqli_fetch_array($query_product_info)){

    echo "<input style='color:black;'type='text' rel= '".$row['id']."'name='url' value='".$row['url']."'/>";
    echo "<input style='color:black;'type='text' rel= '".$row['id']."'name='name' value='".$row['name']."'/>";
    echo "<input style='color:black;'type='text' rel= '".$row['id']."'name='price' value='".$row['price']."'/>";
    echo "<input style='display:none;'type='text' rel= '".$row['id']."'name='id' value='".$row['id']."'/>";
    echo "<button class='btn btn custom-btn'>Save Dress</button>";
    
    echo "</form>";
    echo "</div>";
}
}
?>