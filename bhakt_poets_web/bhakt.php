<html>
<head>

<style type="text/css">

body
{
background-image:url('bg.jpg');
}

.tl30
  {
      transform:rotate(30deg);
-ms-transform:rotate(30deg); 
-moz-transform:rotate(30deg); 
-webkit-transform:rotate(30deg); 
-o-transform:rotate(30deg); 
}

.tl20
  {
      transform:rotate(20deg);
-ms-transform:rotate(20deg); 
-moz-transform:rotate(20deg); 
-webkit-transform:rotate(20deg); 
-o-transform:rotate(20deg); 
}

.tl10
  {
      transform:rotate(10deg);
-ms-transform:rotate(10deg); 
-moz-transform:rotate(10deg); 
-webkit-transform:rotate(10deg); 
-o-transform:rotate(10deg); 
}

.tlmin10
  {
      transform:rotate(-10deg);
-ms-transform:rotate(-10deg); 
-moz-transform:rotate(-10deg); 
-webkit-transform:rotate(-10deg); 
-o-transform:rotate(-10deg); 
}

.tlmin20
  {
      transform:rotate(-20deg);
-ms-transform:rotate(-20deg); 
-moz-transform:rotate(-20deg); 
-webkit-transform:rotate(-20deg); 
-o-transform:rotate(-20deg); 
}

.tlmin30
  {
      transform:rotate(-30deg);
-ms-transform:rotate(-30deg); 
-moz-transform:rotate(-30deg); 
-webkit-transform:rotate(-30deg); 
-o-transform:rotate(-30deg); 
}

</style>


<script language="Javascript">



i=7;


function godown()
{
i++;
if(i==9)
{
  i=1;

}
img7.src=img6.src;
img6.src=img5.src;
img5.src=img4.src;


img4.src=img3.src;
img3.src=img2.src;
img2.src=img1.src;



img1.src=i+".gif";




a7.src=a6.src;
a6.src=a5.src;
a5.src=a4.src;


a4.src=a3.src;
a3.src=a2.src;
a2.src=a1.src;



a1.src="0"+i+".gif";
 






enlarge1();






}




p=100;
function enlarge1()
{
a1.style.visibility="visible";
a2.style.visibility="hidden";
a3.style.visibility="hidden";
a4.style.visibility="hidden";
a5.style.visibility="hidden";
a6.style.visibility="hidden";
a7.style.visibility="hidden";
j=1;

imgmain.src=img1.src;
imgmain.style.visibility="visible";
e1();

}

function e1()
{


imgmain.style.pixelWidth=p+100;
imgmain.style.pixelHeight=p;

p=p+5;

if(p>300)
{
p=100;
}
else
setTimeout("e1()",10);

}





function enlarge2()
{

a1.style.visibility="hidden";
a2.style.visibility="visible";
a3.style.visibility="hidden";
a4.style.visibility="hidden";
a5.style.visibility="hidden";
a6.style.visibility="hidden";
a7.style.visibility="hidden";

j=1;
chk=2;
imgmain.src=img2.src;
imgmain.style.visibility="visible";
}

function e2()
{
imgmain.style.pixelWidth=p+100;
imgmain.style.pixelHeight=p;

p=p+5;

if(p>300)
{
p=100;
}
else
setTimeout("e2()",10);

}



function enlarge3()
{
a1.style.visibility="hidden";
a2.style.visibility="hidden";
a3.style.visibility="visible";
a4.style.visibility="hidden";
a5.style.visibility="hidden";
a6.style.visibility="hidden";
a7.style.visibility="hidden";


j=1;
chk=3;
imgmain.src=img3.src;
imgmain.style.visibility="visible";
}

function e3()
{

imgmain.style.pixelWidth=p+100;
imgmain.style.pixelHeight=p;
p=p+5;

if(p>300)
{
p=100;
}
else
setTimeout("e3()",10);

}    


function enlarge4()
{
a1.style.visibility="hidden";
a2.style.visibility="hidden";
a3.style.visibility="hidden";
a4.style.visibility="visible";
a5.style.visibility="hidden";
a6.style.visibility="hidden";
a7.style.visibility="hidden";


j=1;
chk=4;
imgmain.src=img4.src;
imgmain.style.visibility="visible";
}
   
function e4()
{
imgmain.style.pixelWidth=p+100;
imgmain.style.pixelHeight=p;

p=p+5;

if(p>300)
{
p=100;
}
else
setTimeout("e4()",10);
} 



function enlarge5()
{
a1.style.visibility="hidden";
a2.style.visibility="hidden";
a3.style.visibility="hidden";
a4.style.visibility="hidden";
a5.style.visibility="visible";
a6.style.visibility="hidden";
a7.style.visibility="hidden";


j=1;
chk=5;
imgmain.src=img5.src;
imgmain.style.visibility="visible";
}

function e5()
{
imgmain.style.pixelWidth=p+100;
imgmain.style.pixelHeight=p;
p=p+5;

if(p>300)
{
p=100;
}
else
setTimeout("e5()",10);

}

function enlarge6()
{
a1.style.visibility="hidden";
a2.style.visibility="hidden";
a3.style.visibility="hidden";
a4.style.visibility="hidden";
a5.style.visibility="hidden";
a6.style.visibility="visible";
a7.style.visibility="hidden";


j=1;
chk=6;
imgmain.src=img6.src;
imgmain.style.visibility="visible";
}

function e6()
{
imgmain.style.pixelWidth=p+100;
imgmain.style.pixelHeight=p;
p=p+5;

if(p>300)
{
p=100;
}
else
setTimeout("e6()",10);

}

function enlarge7()
{
a1.style.visibility="hidden";
a2.style.visibility="hidden";
a3.style.visibility="hidden";
a4.style.visibility="hidden";
a5.style.visibility="hidden";
a6.style.visibility="hidden";
a7.style.visibility="visible";


j=1;
chk=7;
imgmain.src=img7.src;
imgmain.style.visibility="visible";
}

function e7()
{
imgmain.style.pixelWidth=p+100;
imgmain.style.pixelHeight=p;
p=p+5;

if(p>300)
{
p=100;
}
else
setTimeout("e7()",10);

}
   
document.addEventListener('keydown',function (e)
{
   switch(e.keyCode)
   {
      case 40: godown();
                break;
      
      
      
   }
},true);



function BACK()
{
document.getElementById("clr").src="backovr.gif";
}
function BACKO()
{
document.getElementById("clr").src="backclick.gif";
}

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
function BACKCL()
{
var my;
my=window.open('http://localhost/bhakt_poets/bhakti.php','_self');


}

</script>
</head>





<body bgcolor="black">

<center><img class="title" src="bhakt_title.gif"></center>
<center><img class="bar1" src="bar.gif" width='400'></center>



<img id="img1" class="tlmin30" src="7.gif" style="position:absolute; TOP:220px; LEFT:1100px; WIDTH:100px; HEIGHT:100px"; onClick="enlarge1()">


<img id="img2" src="6.gif" class="tlmin20" style="position:absolute; TOP:270px; LEFT:1100px; WIDTH:100px; HEIGHT:100px"; onClick="enlarge2()"> 
         
<img id="img3" src="5.gif" class="tlmin10" style="position:absolute; TOP:320px; LEFT:1100px; WIDTH:100px; HEIGHT:100px"; onClick="enlarge3()"> 
                                           
<img id="img4" src="4.gif" style="position:absolute; TOP:370px; LEFT:1100px; WIDTH:100px; HEIGHT:100px"; onClick="enlarge4()">



<img id="img5" src="3.gif" class="tl10" style="position:absolute; TOP:420px; LEFT:1100px; WIDTH:100px; HEIGHT:100px"; onClick="enlarge5()">

<img id="img6" src="2.gif" class="tl20" style="position:absolute; TOP:470px; LEFT:1100px; WIDTH:100px; HEIGHT:100px"; onClick="enlarge6()">

<img id="img7" src="1.gif" class="tl30" style="position:absolute; TOP:520px; LEFT:1100px; WIDTH:100px; HEIGHT:100px"; onClick="enlarge7()">



 
<img id="imgmain" src="5.gif" style="visibility:visible; position:absolute; TOP:220px; LEFT:450px;WIDTH:380px; HEIGHT:330px";>


<img id="a1" style="position:absolute; TOP:560px; LEFT:445px; WIDTH:410px; opacity:0.4; visibility:hidden;" src=07.gif></img>

<img id="a2" style="position:absolute; TOP:560px; LEFT:445px; WIDTH:410px; opacity:0.4; visibility:hidden;" src=06.gif></img>


<img id="a3" style="position:absolute; TOP:560px; LEFT:445px; WIDTH:410px; opacity:0.4; visibility:visible;" src=05.gif></img>


<img id="a4" style="position:absolute; TOP:560px; LEFT:445px; WIDTH:410px; opacity:0.4; visibility:hidden;" src=04.gif></img>

<img id="a5" style="position:absolute; TOP:560px; LEFT:445px; WIDTH:410px; opacity:0.4; visibility:hidden;" src=03.gif></img>

<img id="a6" style="position:absolute; TOP:560px; LEFT:445px; WIDTH:410px; opacity:0.4; visibility:hidden;" src=02.gif></img>


<img id="a7" style="position:absolute; TOP:560px; LEFT:445px; WIDTH:410px; opacity:0.4; visibility:hidden;" src=01.gif></img>

<br><br><br><br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="image" id="sub" style="width:200" src="homeclick.gif" onmouseover="HOME()" onmouseout="HOMEO()" onclick="HOMECL()"></input><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img id="clr" src="backclick.gif" onmouseover="BACK()" onmouseout="BACKO()" onclick="BACKCL()" style="width:200"></a>

</body>
</html>



