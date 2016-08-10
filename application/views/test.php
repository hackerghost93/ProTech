<html>
<head>
	<title></title>
</head>
<body onload="Add()">
<script src="../js/jquery.min.js"></script>
<script src="../js/plans.js"></script>

<table border="1">
<th>ID</th><th>name</th>
<?php 
	foreach ($results as $object) {
			echo "<tr>
			<td>$object->plane_id</td>
			<td>$object->plane_name</td>
			 </tr>";
		}
  ?>
</table>

<form method="post" id="AddPlan">
plane name:<input type="text" name="plane_name" id="plane_name"><br>
plane text 1:<input type="text" name="plane_item1" id="plane_item1"><br>
plane text 2:<input type="text" name="plane_item2" id="plane_item2"><br>
plane text 3:<input type="text" name="plane_item3" id="plane_item3"><br>
<input type="submit" value="go" id="AddClick">
</form>
<form method="post" id="DeletePlan">
ID:<input type="number" id="plan_id">
<button onclick="Del()">Delete</button>
</form>
<br><br><br><br><br><br>
<form method="post" action="test/Recive">
username:<input type="text" name="username[]"><br>
password:<input type="password" name="passsword[]"><br>
phone number:<input type="number" name="phone[]"><br>
username:<input type="text" name="username[]"><br>
password:<input type="password" name="passsword[]"><br>
phone number:<input type="number" name="phone[]"><br>
<input type="submit" value="insert">
</form>
</body>
</html>