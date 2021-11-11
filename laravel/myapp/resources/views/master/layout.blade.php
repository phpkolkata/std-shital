
<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@yield('head')


</head>
<body>

<table width="100%" height="600px" border="1">
	<tr>
		<td colspan="2" height="100px" valign="middle">
			<div style="float: left;width: 500px;border:0px solid #f00"><h1><i>Welcome Admin</i></h1></div>
			<div style="float: right;border:0px solid #f00;margin-top:30px;margin-right:10px;"><a href="logout.php">logout</a></div>
		</td>
	</tr>	<tr>
		<td width="20%" valign="top">
        @section('nav')
			<ul style="font-size:20px;">
				<li><a href="category.php">Manage Category</a></li>
				<li><a href="product.php">Manage Product</a></li>
				<li><a href="orders.php">Manage Orders</a></li>
			</ul>
        @show
		</td>
		<td width="80%" valign="top" align="center">
		@yield('body')

</td>
</tr>
</table>

</body>
</html>
