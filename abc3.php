<html>
<head>



<script language="Javascript">
function newwindow(idd)
{

var my;
my=window.open('http://localhost/printprdtview1.php?ida='+idd,'_self');

}

</script>

</head>

<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("market", $conn);
$def="def";

 error_reporting (E_ALL ^ E_NOTICE); 

if($_POST['image1']=="default")
{

$query="INSERT INTO practice (name, detail, price, owner, city, contact, email, imge) VALUES ('$_POST[prdt_nme]','$_POST[prdt_details]','$_POST[prd_val]','$_POST[own_nme]','$_POST[city]','$_POST[cntact_num]','$_POST[email]','$def')";

mysql_query($query,$conn);


$a=mysql_query("SELECT * from practice order by id desc limit 1");
$a1=mysql_fetch_array($a);

$p=$a1['id'];

echo "<body onLoad='newwindow($p)'>";




}

else
{




if ((($_FILES["userfile"]["type"] == "image/gif")
|| ($_FILES["userfile"]["type"] == "image/jpeg")
|| ($_FILES["userfile"]["type"] == "image/pjpeg"))
&& ($_FILES["userfile"]["size"] < 20000000))
{

$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];


$query="INSERT INTO practice (name, detail, price, owner, city, contact, email, imge) VALUES ('$_POST[prdt_nme]','$_POST[prdt_details]','$_POST[prd_val]','$_POST[own_nme]','$_POST[city]','$_POST[cntact_num]','$_POST[email]','$def')";

mysql_query($query,$conn);






if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

$a=mysql_query("SELECT * from practice order by id desc limit 1");
$a1=mysql_fetch_array($a);

$p=$a1['id'];
$query2="update practice set imge=".$p." where id=".$p;

mysql_query($query2,$conn);

move_uploaded_file($tmpName,"upload/".$p.".gif");
echo "<body onLoad='newwindow($p)'>";
}






else
{

?>

<script>

alert("INVALID FILE : REDUCE THE IMAGE SIZE OR UPLOAD APPROPRIATE FORMAT");

var amy;
amy=window.open('http://localhost/Vrindavan_market/mrkt1.php','_self');



</script>


<?php

}
}

?>

</body>
</html>