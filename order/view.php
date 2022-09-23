<?php
$con = new mysqli('localhost','root'.'','','anothertry');
 
 $sql = "SELECT o.order_id,p.product_name,o.price,c.name as category,o.quantity FROM order_details o INNER JOIN category c ON c.id = o.Category_id 
 INNER JOIN product p ON p.product_id = o.Product_name";
 
$result = mysqli_query($con,$sql);

?>