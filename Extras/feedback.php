<html>
<head>
<style type="text/css">
hl
{
font-family:Showcard Gothic;
font-size:22;
color:white;

}

h1
{
font-family:Showcard Gothic;
font-size:30;
color:white;

}
.noresize
{
resize:none;
}

</style>

<script language="Javascript">
function validate()
{
var er=0;
if(f2.name.value.length==0)
 {

alert("Please Enter a Name");

er=1;
}

if(f2.feedback.value.length==0)
 {

alert("Please Write a Feedback");

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
<form name="f2" method="post" action="http://localhost/Extras/stre_feed.php" onsubmit="var result=validate(); return result;">
<br><br>
<h1>&nbsp;&nbsp;Feedback</h1>
<img src="Rline.gif" style="width:500"></img>
<br>
<br>
<br>
<table cellpadding='15' cellspacing='10'>

<tr>

<td>
<hl>Name</hl>
</td>

<td>
<input type="textbox" name="name"></input>
</td>

</tr>

<tr>

<td>
<hl>Email</hl>
</td>

<td>
<input type="textbox" name="email"></input>
</td>

</tr>

<tr>

<td>
<hl>Feedback</hl>
</td>

<td>
<textarea class="noresize" name="feedback" rows="5" cols="17"></textarea>
</td>

</tr>

</table>
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" id="sub" style="width:150" src="submitclick.gif" onmouseover="SUBMIT()" onmouseout="SUBMITO()"></input>&nbsp;&nbsp;&nbsp;<a href="javascript:document.f2.reset()"><img id="clr" src="clearovr.gif" onmouseover="CLEAR()" onmouseout="CLEARO()" style="width:150"></a>

</body>
</html>