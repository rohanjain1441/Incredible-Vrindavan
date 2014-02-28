<html>
<head>
<style type="text/css">

h3
{
font-family:Showcard Gothic;
font-size:15;
color:black;
opacity:0.7;

}

.noresize
{
resize:none;
}

font
{
font-family:Papyrus;
font-size:15;
color:black;

}

</style>



<script language="Javascript">

function def()
{

document.getElementById('i1').style.visibility="hidden";
document.getElementById('i2').style.visibility="hidden";
}


function pict()
{

document.getElementById('i1').style.visibility="visible";
document.getElementById('i2').style.visibility="visible";
}


function validate()
{
var er=0;

if(f2.prdt_nme.value.length>20)
 {

alert("Please Enter name less than 20 characters");

er=1;
}
   
if(f2.prdt_nme.value.length==0)
 {

alert("Please Enter a Name");

er=1;
}











if(isNaN(f2.prd_val.value))
   {
       alert("Please Enter Numeric Entry");   
 er=1; 
   }

if(f2.prdt_details.value.length>300)
 {
alert("Please Enter Details less than 300 characters");

er=1;
}

if(f2.own_nme.value.length>20)
 {

alert("Please Enter owner name less than 20 characters");

er=1;
}
if(f2.own_nme.value.length==0)
 {

alert("Please Enter an Owner Name");

er=1;
}


if(f2.city.value.length>20)
 {

alert("Please Enter a valid City Name");

er=1;
}

if(isNaN(f2.cntact_num.value))
   {
       alert("Please Enter a valid contact number");   
 er=1; 
   }

var at_symbol=f2.email.value.indexOf("@");
var dot_symbol=f2.email.value.lastIndexOf(".");
var space_symbol=f2.email.value.indexOf(" ");

if((at_symbol==-1) || (at_symbol==0) || (dot_symbol==-1) || (dot_symbol==0) || (space_symbol!=-1))
{

alert("Please Enter a valid EMAIL ID");
er=1;
}

if(er==1)
{

return false;
}
if(er==0)
{
return true;
}

}    

function CLEAR()
{
document.getElementById("clr").src="clearclick.gif";
}
function CLEARO()
{
document.getElementById("clr").src="clearovr.gif";
}

function SUBMIT()
{
document.getElementById("sub").src="submitovr.gif";
}
function SUBMITO()
{
document.getElementById("sub").src="submitclick.gif";
}
</script>


</head>
<body background="back1.jpg">
<center><img id="tit" class="title" src="market.gif"></img></center>
<center><img id="bar" class="bar1" src="bar.gif" style="width:840;height:5"></img>
</center>
<form name="f2" method="post" action="http://localhost/abc3.php" onsubmit="var result=validate(); return result;" enctype="multipart/form-data">
<br><br><br><br>
<table align='center' cellpadding='30' cellspacing='1' border='7'>
<tr>
<td style='background:#dcdcdc'>
<h3>Product Name</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left>
</td>
<td style='background:#f5f5f5'><input type="textbox" name="prdt_nme"></input></td>

<td style='background:#dcdcdc'><h3>Product Image</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left></td>

<td style='background:#f5f5f5'>

<input type="radio" name="image1" value="default" onClick="def()"><font>&nbspChoose a Default Image</font></input><br>
<input type="radio" name="image1" value="pic" onClick="pict()"><font>&nbspChoose Your Own Image</font></input>

</td>

<tr>
<td style='background:#dcdcdc'><h3>Product Details</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left></td>
<td style='background:#f5f5f5'><textarea class="noresize" name="prdt_details" rows="5" cols="17"></textarea></td>


<td style='background:#dcdcdc'><h3>Product Base Price</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left></td>
<td style='background:#f5f5f5'>Rs.&nbsp;&nbsp;<input type="textbox" name="prd_val"></input></td>
 

</tr>

<tr>
<td style='background:#dcdcdc'><h3>Owner Name</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left></td>
<td style='background:#f5f5f5'><input type="textbox" name="own_nme"></input></td>


<td id='i1' style='visibility:hidden; background:#dcdcdc'><h3>Product Image</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left></td>

<td id='i2' style='visibility:hidden; background:#f5f5f5'><input type="file" name="userfile"></input></td>





</tr>

<tr>
<td style='background:#dcdcdc'><h3>City</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left></td>
<td style='background:#f5f5f5'><input type="textbox" name="city"></input></td>



</tr>

<tr>
<td style='background:#dcdcdc'><h3>Contact Number</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left></td>
<td style='background:#f5f5f5'><input type="textbox" name="cntact_num"></input></td>
</tr>

<tr>
<td style='background:#dcdcdc'><h3>E-mail</h3>
<left><img id="l10"  src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img></left></td>
<td style='background:#f5f5f5'><input type="textbox" name="email"></input></td>
</tr>
</table>
<br><br>
<center><input type="image" id="sub" style="width:200" src="submitclick.gif" onmouseover="SUBMIT()" onmouseout="SUBMITO()"></input>&nbsp;&nbsp;&nbsp;<a href="javascript:document.f2.reset()"><img id="clr" src="clearovr.gif" onmouseover="CLEAR()" onmouseout="CLEARO()" style="width:200"></a></center>





</form>
</body>
</html>