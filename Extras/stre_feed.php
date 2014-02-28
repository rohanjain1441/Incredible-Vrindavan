<html>
<head>



<script language="Javascript">
function newwindow()
{

var my;
my=window.open('http://localhost/Extras/succ.php','_self');

}

</script>
</head>

<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("market", $conn);
 error_reporting (E_ALL ^ E_NOTICE); 

$query="INSERT INTO feed (name, email, feedback)  VALUES ('$_POST[name]','$_POST[email]','$_POST[feedback]')";

mysql_query($query,$conn);

?>
<body onLoad="newwindow()">
</body>
</html>
