
<?php

$pgg=$_GET["pg"];
?>

<html>
<head>

<script language="Javascript">
function HOME()
{
document.getElementById("sub").src="homeovr.gif";
}
function HOMEO()
{
document.getElementById("sub").src="homeclick.gif";
}

function HOMECL()
{
var my;
my=window.open('http://localhost/ok.php','_self');


}


function OVER(h)
{

document.getElementById(h).className="ancho";

}

function OUT(h)
{

document.getElementById(h).className="anch";

}

function opening(idd)
{

var my;
my=window.open('http://localhost/printprdtfin.php?ida='+idd,'_self');


}
</script>
<style type="text/css">



a:link
{
text-decoration:none;
}
a:active
{
text-decoration:none;
}
a:visited
{
text-decoration:none;
}
a:hover
{
text-decoration:none;

}
.anch
{
color:#000080;
font-family:Showcard Gothic;
font-size:18;
opacity:0.5;

}

.ancho
{
color:black;
font-family:Showcard Gothic;
font-size:18;
opacity:0.5;

}



font
{
font-family:Papyrus;
font-size:13;
color:black;

}
h3
{
font-family:Papyrus;
font-size:18;
color:black;

}

h1
{
font-family:Showcard Gothic;
font-size:20;
color:#000080;
opacity:0.5;

}



</style>
</head>

<?php



$conn=mysql_connect("localhost","root","");
mysql_select_db("market", $conn);
$pgg=$pgg-1;

$lim=$pgg*16;



$a=mysql_query("SELECT * from practice where id>".$lim." LIMIT 16");
echo "<table align='center' cellspacing='10' cellpadding='10'>";
echo "<tr>";
echo "<td height='50'>";
echo "</tr>";
echo "<tr>";
$cnt=0;
$app=1;
while($a1=mysql_fetch_array($a))
{



if($app==1)
{
echo "<td><div style='background:#f5f5f5'>";
$cnt=$cnt+1;

$p=$a1['id'];



echo "<br>";
echo "<center>&nbsp;&nbsp;&nbsp;<img src= upload/".$a1['imge'].".gif height='150'onclick=opening(".$a1['id'].")></img>&nbsp;&nbsp;&nbsp;</center>";
echo "<br>";
echo "<center><font>Product Name : ".$a1['name']."</center>";
echo "<br>";
echo "<center><font>Owner City : ".$a1['city']."</center>";
echo "<br>";
echo "<center><font>Base Price : ".$a1['price']."</center>";
echo "<br>";

echo "</div></td>";
$app=0;
}

else if($app==0)
{
echo "<td><div style='background:#dcdcdc'>";
$cnt=$cnt+1;
$p=$a1['id'];



echo "<br>";
echo "<center>&nbsp;&nbsp;&nbsp;<img src=upload/".$a1['imge'].".gif height='150'onclick=opening(".$p.")></img>&nbsp;&nbsp;&nbsp;</center>";
echo "<br>";
echo "<center><font>Product Name : ".$a1['name']."</center>";
echo "<br>";
echo "<center><font>Owner City : ".$a1['city']."</center>";
echo "<br>";
echo "<center><font>Base Price : ".$a1['price']."</center>";
echo "<br>";

echo "</div></td>";
$app=1;
}


if($cnt%4==0)
{

echo "</tr>";
echo "<tr>";
echo "<td height='30'></td></tr>";
echo "<tr>";

}


}

echo "</tr>";


?>
<body background="back1.jpg">
<center><img id="tit" class="title" src="market.gif"></img></center>
<center><img id="bar" class="bar1" src="bar.gif" style="width:840;height:5"></img>
</center>
<center>
<?php
$a5=mysql_query("SELECT * from practice");

echo "<br>";
echo "<br>";
echo "<br>";
echo "<a href='Vrindavan_market/mrkt1.php'><h1>Click Here To Add A New Product</h1></a>";
echo "<h3><img src='Rline.gif' style='WIDTH:500px; HEIGHT:5px;'></img></h3>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h1>Page Numbers</h1>";

echo "<h3><img src='Rline.gif' style='WIDTH:200px; HEIGHT:5px;'></img></h3>";

while($a3=mysql_fetch_array($a5))
{


$p=$a3['id'];

}


$pg=$p/16;

for($s=0;$s<$pg;$s++)
{
$s1=$s+1;
echo "<a id=".$s1." class='anch' href=http://localhost/mrkt_list1.php?pg=".$s1." onmouseover=OVER(".$s1.") onmouseout=OUT(".$s1.")>".$s1."&nbsp;&nbsp;</a>";


}
 





?>



</center>



</body>

</html>