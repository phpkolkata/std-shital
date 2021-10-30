
<form action="adding-product.php" method="post">

<?php
$sql = "select * from category";
$res = mysqli_query($con, $sql);
print "<select name='category_id'>";
while($row=mysqli_fetch_assoc($res)){
    print "<option value='$row[id]'>$row[name]</option>";
}
print "</select>";
?>

    Product Name:...<br>
    Product Price...<br>


</form>