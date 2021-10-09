<?php
require("db.php");

$sql = "SELECT * FROM `category`";
$res = mysqli_query($con, $sql) or die(mysqli_error($con));

if(isset($_REQUEST['msg'])){
    print"<div style='color:red'>$_REQUEST[msg]</div>";
}

print"<a href='add-cat.php'>add more...</a>";
print "<table border='1' width='200' height='200'>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>isActive</th>
    <th>Option</th>
</tr>
";

while($row=mysqli_fetch_assoc($res)){

    // print "<pre>";
    // print_r($row);

    print "<tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[is_active]</td>
    <td><a href='del-cat.php?id=$row[id]'>del</a></td>
    </tr>";
}
print"</table>";