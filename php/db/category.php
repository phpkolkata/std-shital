<?php
require("db.php");


// count rows
$sql = "SELECT * FROM `category`";
$res = mysqli_query($con, $sql) or die(mysqli_error($con));
$tot = mysqli_num_rows($res);

$start = 0;
$limit = 2;
$pages = ceil($tot / $limit);

if(isset($_REQUEST['p'])){
    $start = ($_REQUEST['p']-1) * $limit;
}

$where ='';
if(isset($_POST['srch'])){
    $where = "where name like '%$_POST[srch]%'";
}

// main query
$sql = "SELECT * FROM `category` $where LIMIT $start,$limit";
print $sql."<br>";
$res = mysqli_query($con, $sql) or die(mysqli_error($con));

if(isset($_REQUEST['msg'])){
    print"<div style='color:red'>$_REQUEST[msg]</div>";
}

print"<form action='' method='post'>
Search:<input name='srch' type='text'><button>Search</button><br>
</form>
";

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
print"</table><hr>";

for($i=1;$i<=$pages;$i++){
    echo "<a href='?p=$i'>$i</a> >> ";
}