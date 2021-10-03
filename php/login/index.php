<?php
if(isset($_REQUEST['msg']))
print "<div style='color:red'>$_REQUEST[msg]</div>";

?>
<form action="login-check.php" method="post">
    email: <input type="email" name="email" value=""><br>
    pass: <input type="password" name="pass" value=""><br>
    <button>Login</button>
</form>