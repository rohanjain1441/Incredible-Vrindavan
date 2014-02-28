
<?php
$ide=$_GET["ida"];



$conn=mysql_connect("localhost","root","");
mysql_select_db("market", $conn);

$a=mysql_query("SELECT * from practice where id=".$ide);
$a1=mysql_fetch_array($a);

$pa=$a1['detail'];

?>

<html>


<head>

<style type="text/css">
h3
{
font-family:Papyrus;
font-size:20;
color:black;

}

.a1
{
position:absolute;
width:50px;
height:500px;
}

h2
{
font-family:Papyrus;
font-size:20;
color:black;

}

</style>
<script language="javascript">


function menumain()
{


<?php
$a5=mysql_query("SELECT * from practice");

 
while($a3=mysql_fetch_array($a5))
{


$p=$a3['id'];

}

for($i=1;$i<=$p;$i++)
{

if($i%16==0)
{

$s=$i/16;



if($i==$p)
{
break;
}

}
 


}
$s=$s+1;
?>


var my;
my=window.open('http://localhost/mrkt_list1.php?pg='+<?php echo $s; ?>,'_self');


}
function loading()
{
alert("HI");

var saw="<?php echo $pa; ?>";

var sa="";

for(i=0;i<=(saw.length-1);i++)
{

if(i%30==0)
{

sa=sa+"<br>";

}
sa=sa+saw[i];


}


document.getElementById("det").innerHTML="<center><h3>"+sa+"</h3></center>";


}
function MRK()
{
document.getElementById("mrk").src="marketovr.gif";
}
function MRKO()
{
document.getElementById("mrk").src="marketclick.gif";
}
</script>
</head>

<body onLoad="loading()" background="back1.jpg">

<center><img id="tit" class="title" src="market.gif"></img></center>
<center><img id="bar" class="bar1" src="bar.gif" style="width:840;height:5"></img>
</center>

<br><br>
<table align='center' cellpadding='30' cellspacing='1' border='7'>

<tr>
<td style='background:#dcdcdc'><h3>Product Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left>
</td>

<td style='background:#f5f5f5'>

<?php



echo "<h3><center>".$a1['name']."</center></h3>";
?> 

</td>



<td rowspan='3'style='background:#dcdcdc'><h3>Product Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left></td>

<td rowspan='3' style='background:#f5f5f5'>

<?php



echo "&nbsp;&nbsp;<img src=upload/".$a1['imge'].".gif height='200'></img>";

?>



</td>
</tr>
<tr>

<td style='background:#dcdcdc'><h3>Product Details</h3>
<left><img id="l10" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left></td>
<td id="det" style='background:#f5f5f5'>


<h3><center>loading</center></h3>

</td>


</tr>
<tr>
<td style='background:#dcdcdc'>

<h3>Product Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left>

</td>
<td style='background:#f5f5f5'>

<?php



echo "<h3><center>".$a1['price']."</center></h3>";
?> 

</td>


</tr>

<tr>
<td style='background:#dcdcdc'>

<h3>Owner Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left>

</td>
<td style='background:#f5f5f5'>

<?php



echo "<h3><center>".$a1['owner']."</center></h3>";
?> 

</td>
</tr>

<tr>
<td style='background:#dcdcdc'>

<h3>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left>

</td>
<td style='background:#f5f5f5'>

<?php



echo "<h3><center>".$a1['city']."</center></h3>";
?> 

</td>
</tr>


<tr>
<td style='background:#dcdcdc'>

<h3>Contact Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left>

</td>
<td style='background:#f5f5f5'>

<?php



echo "<h3><center>".$a1['contact']."</center></h3>";
?> 

</td>
</tr>

<tr>
<td style='background:#dcdcdc'>

<h3>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left>

</td>
<td style='background:#f5f5f5'>

<?php



echo "<h3><center>".$a1['email']."</center></h3>";
?> 

</td>
</tr>



</table>
<br><br>
<center><input type="image" id="mrk" src="marketclick.gif" onmouseover="MRK()" onmouseout="MRKO()" style="width:200" onclick="menumain()" value="Click to go to main menu"></input></center>


</body>
</html>