<html>
<head>


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
color:white;
font-family:Papyrus;
font-size:18;
opacity:1;

}
.table1
{
left:0;
top:100;
position:fixed;
}

.dfonts
{
cursor:hand;
background:#f5f5f5;
opacity:0.7;
font-family:Showcard Gothic;
font-size:20;
color:black;
}


.fonts
{
font-family:Papyrus;
font-size:16;
font-color:black;
position:absolute;
top:70px;
left:110px;
}
.tvnt
{
visibility:hidden;
}

.tv
{
visibility:visible;
}

.man
{
position:absolute;
width=100%;
height=100%;
}

.title

{

position:fixed;
background-attachment:fixed;
width:300px;
height:150px;
opacity:0.9;
left:480;
top:0;
}

.bar1
{
position:fixed;
background-attachment:fixed;
width:370px;
height:5px;
opacity:0.9;
left:455;
top:135;
}

.a1
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:200px;
top:150px;
}

.a2
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:900px;
top:150px;
}


.a3
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:1600px;
top:150px;
}

.a4
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:2300px;
top:150px;
}

.a5
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:3000px;
top:150px;
}

.a6
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:3700px;
top:150px;
}

.a7
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:4400px;
top:150px;
}

.a8
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:5100px;
top:150px;
}

.a9
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:5800px;
top:150px;
}




.imaginary
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:8100px;
top:150px;
visibility:hidden;
}







    

body
{
background-image:url(bg.jpg);
background-attachment:fixed;
}
</style>

<script language="Javascript">


function OVERMENU(rec)
{



if(rec==1)
{
document.getElementById("1").className="tv";

}

if(rec==2)
{
document.getElementById("2").className="tv";

}

if(rec==3)
{
document.getElementById("3").className="tv";

}

if(rec==4)
{
document.getElementById("4").className="tv";

}

if(rec==5)
{
document.getElementById("5").className="tv";

}

if(rec==6)
{
document.getElementById("6").className="tv";

}
if(rec==7)
{
document.getElementById("7").className="tv";

}


}

function OUTMENU(rec)
{



if(rec==1)
{
document.getElementById("1").className="tvnt";

}


if(rec==2)
{
document.getElementById("2").className="tvnt";

}

if(rec==3)
{
document.getElementById("3").className="tvnt";

}

if(rec==4)
{
document.getElementById("4").className="tvnt";

}

if(rec==5)
{
document.getElementById("5").className="tvnt";

}

if(rec==6)
{
document.getElementById("6").className="tvnt";

}
if(rec==7)
{
document.getElementById("7").className="tvnt";

}


}


q=0;
p=0;
cant=0;
function enlarge(no)
{






if(no==1)
{


im1vis.style.visibility="visible";

im1vis.style.pixelWidth=p+75;
im1vis.style.pixelHeight=p;


p=p+5;

if(p>230)
{
p=0;
}
else
setTimeout("enlarge(1)",10);
}


if(no==2)
{


im2vis.style.visibility="visible";

im2vis.style.pixelWidth=p+75;
im2vis.style.pixelHeight=p;


p=p+5;

if(p>230)
{
p=0;
}
else
setTimeout("enlarge(2)",10);
}

if(no==3)
{


im3vis.style.visibility="visible";

im3vis.style.pixelWidth=p+80;
im3vis.style.pixelHeight=p;


p=p+5;

if(p>240)
{
p=0;
}
else
setTimeout("enlarge(3)",10);
}



if(no==4)
{


im4vis.style.visibility="visible";

im4vis.style.pixelWidth=p+80;
im4vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(4)",10);
}

if(no==5)
{


im5vis.style.visibility="visible";

im5vis.style.pixelWidth=p+80;
im5vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(5)",10);
}

if(no==6)
{


im6vis.style.visibility="visible";

im6vis.style.pixelWidth=p+80;
im6vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(6)",10);
}

if(no==7)
{


im7vis.style.visibility="visible";

im7vis.style.pixelWidth=p+80;
im7vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(7)",10);
}


if(no==8)
{


im8vis.style.visibility="visible";

im8vis.style.pixelWidth=p+80;
im8vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(8)",10);
}

if(no==9)
{


im9vis.style.visibility="visible";

im9vis.style.pixelWidth=p+80;
im9vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(9)",10);
}

if(no==10)
{


im10vis.style.visibility="visible";

im10vis.style.pixelWidth=p+80;
im10vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(10)",10);
}


if(no==11)
{

im11vis.style.visibility="visible";

im11vis.style.pixelWidth=p+80;
im11vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(11)",10);
}

if(no==12)
{


im12vis.style.visibility="visible";

im12vis.style.pixelWidth=p+80;
im12vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(12)",10);
}

if(no==13)
{

im13vis.style.visibility="visible";

im13vis.style.pixelWidth=p+80;
im13vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(13)",10);
}

if(no==14)
{


im14vis.style.visibility="visible";

im14vis.style.pixelWidth=p+80;
im14vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(14)",10);
}

if(no==15)
{


im15vis.style.visibility="visible";

im15vis.style.pixelWidth=p+80;
im15vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(15)",10);
}

if(no==16)
{


im16vis.style.visibility="visible";

im16vis.style.pixelWidth=p+80;
im16vis.style.pixelHeight=p;


p=p+5;

if(p>220)
{
p=0;
}
else
setTimeout("enlarge(16)",10);
}
   
}









function shrink(num)
{

if(num==1)
{


im1vis.style.visibility="hidden";
}
if(num==2)
{


im2vis.style.visibility="hidden";
}
if(num==3)
{


im3vis.style.visibility="hidden";
}
if(num==4)
{


im4vis.style.visibility="hidden";
}
if(num==5)
{


im5vis.style.visibility="hidden";
}
if(num==6)
{


im6vis.style.visibility="hidden";
}
if(num==7)
{


im7vis.style.visibility="hidden";
}
if(num==8)
{


im8vis.style.visibility="hidden";
}
if(num==9)
{


im9vis.style.visibility="hidden";
}

if(num==10)
{


im10vis.style.visibility="hidden";
}

if(num==11)
{


im11vis.style.visibility="hidden";
}

if(num==12)
{


im12vis.style.visibility="hidden";
}

if(num==13)
{


im13vis.style.visibility="hidden";
}

if(num==14)
{


im14vis.style.visibility="hidden";
}

if(num==15)
{


im15vis.style.visibility="hidden";
}

if(num==16)
{


im16vis.style.visibility="hidden";
}
}



sum=0;
i=1;
cant=1;


function MUSE(lop)
{

if(lop==1)
{

}

if(lop==2)
{
document.body.scrollLeft=0;
sum=0;
cant=1;
}

if(lop==3)
{
document.body.scrollLeft=1200;
sum=1200;
cant=2;
}

if(lop==4)
{
document.body.scrollLeft=2600;
sum=2600;
cant=4;
}

if(lop==5)
{
document.body.scrollLeft=4000;
sum=4000;
cant=6;
}

if(lop==6)
{
document.body.scrollLeft=4700;
sum=4700;
cant=7;
}

if(lop==7)
{
var my;
my=window.open('http://localhost/social/soc.php','_self');



}

}




      
      
   
</script>
</head>
<body scrolling="no">
<div class="man">

<img id="tit" class="title" src="soc_tit.gif"></img>
<img id="bar" class="bar1" src="bar.gif"></img>










<img id="im1vis" src="braj1.jpg" style="visibility:hidden; position:absolute; TOP:250px; LEFT:645px; WIDTH:50px; HEIGHT:50px";>
<img id="im2vis" src="braj2.jpg" style="visibility:hidden; position:absolute; TOP:250px; LEFT:1345px; WIDTH:50px; HEIGHT:50px";>

<img id="im4vis" src="1.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:2750px; WIDTH:50px; HEIGHT:50px";>
<img id="im5vis" src="2.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:2750px; WIDTH:50px; HEIGHT:50px";>


<img id="im9vis" src="3.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:4150px; WIDTH:50px; HEIGHT:50px";>
<img id="im10vis" src="4.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:4150px; WIDTH:50px; HEIGHT:50px";>
<img id="im11vis" src="5.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:4845px; WIDTH:50px; HEIGHT:50px";>
<img id="im12vis" src="9.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:6250px; WIDTH:50px; HEIGHT:50px";>
<img id="im13vis" src="10.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:6250px; WIDTH:50px; HEIGHT:50px";>
<img id="im14vis" src="11.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:6250px; WIDTH:50px; HEIGHT:50px";>
<img id="im15vis" src="12.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:6250px; WIDTH:50px; HEIGHT:50px";>
<img id="im16vis" src="6.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:4845px; WIDTH:50px; HEIGHT:50px";>
<div class="a1">
<b><pre class="fonts">
          BRAJ VRINDAVAN 
                  HERITAGE 
         ALLIANCE (BVHA)
  
     In January 2010 an alliance was 
formed to act as one voice for future 
development plans in the Braj Mandal. 

                   <img id="im1" style="position:absolute; WIDTH:110; HEIGHT:80;" src="braj1.jpg" onClick="enlarge(1)" onMouseout="shrink(1)"></img>                                     




                         



                                                                                                                                                                                            
</pre></b></div>
<div class="a2">
<b><pre class="fonts">
The BVHA meets weekly in a 
different temple location and all are 
invited to help achieve mutual goals 
to do with preservation of heritage, 
pollution, currrent developments and 
other urgent matters concerning the 
Holy Dham.
 
                     <img id="im2" style="position:absolute; WIDTH:110px; HEIGHT:80px;" src="braj2.jpg" onClick="enlarge(2)"onMouseout="shrink(2)"></img>
      
</pre></b>
</div>




<div class="a3">

<b><pre class="fonts">
TREE PLANTATION AND 
             DISTRIBUTION

Initial attempts of tree plantation and 
environment education began in 1991 
with the support of WWF-India 
through a Vrindavan Conservation 
project over five years. Since then 
FOV-India initially with the support 
of FOV-UK has carried on tree 
plantation activities and maintains a 
nursery to propogate, conserve 
and distribute typical tree varieties of 
Braj.	

</pre></b>
</div>
<div class="a4">
<b><pre class="fonts">
In 2001 the Chief Forestry 
Conservator of Uttar Pradesh 
awarded FOV for their massive tree 
plantation efforts.
  
                      <img id="im4" style="position:absolute; HEIGHT:80;" src="1.gif" onClick="enlarge(4)" onMouseout="shrink(4)"></img>                                 


       

                    <img id="im5" style="position:absolute; HEIGHT:80;" src="2.gif" onClick="enlarge(5)"onMouseout="shrink(5)"></img>



   
</pre></b>
</div>

<div class="a5">

<b><pre class="fonts">
HIV/AIDS MAINSTREAMING 
                AWARENESS

Mainstreaming HIV/AIDS in 
development work is an attempt 
towards improving development 
practices so as to enhance its 
contribution to the response to 
HIV/AIDS. This requires 
developmental organizations to attend 
to both the immediate and the 
underlying determinants of people’s 
susceptibility to HIV infection and 
taking into account the impact of 
 
                    

      </pre></b>
</div>
<div class="a6">
<b><pre class="fonts">
HIV/AIDS and adjusts their work 
based on it. Given this scenario, 
involvement of NGOs from varied 
capacities and backgrounds becomes 
crucial for effective response to 
HIV in India, especially in dealing 
with HIV, where complexities are 
interlinked, efforts should be from 
all facets of society.

     <img id="im9" style="position:absolute; WIDTH:110; HEIGHT:80;" src="3.gif" onClick="enlarge(9)" onMouseout="shrink(9)"></img>                                 <img id="im10" style="position:absolute; WIDTH:110; HEIGHT:80;" src="4.gif" onClick="enlarge(10)"onMouseout="shrink(10)"></img>

</pre></b>
</div>
<div class="a7">
<b><pre class="fonts">
      PLASTIC RECYCLING
  
     <img id="im11" style="position:absolute; WIDTH:110; HEIGHT:80;" src="5.gif"onClick="enlarge(11)" onMouseout="shrink(11)" ></img>                                   <img id="im16" style="position:absolute; WIDTH:110; HEIGHT:80;" src="6.gif"onClick="enlarge(16)" onMouseout="shrink(16)" ></img>

    

Attractive baskets, waste bins, bowls 
are woven by local women out of grass 
and recycled plastic bags. This is a 
project sponsored by FOV in an 
effort to clean up the environment 
and financially empower some of the 
local women.


</pre></b>

</div>
<div class="a8">
<b><pre class="fonts">
 PARYAVARAN KHALSA AT 
THE 2010 MAHA KUMBHA 
                        MELA
  
     An enviro - spiritual discourse 
programme was organized at the camp 
attended by children from different 
schools. Ms. Sashi Mahajan from the 
Women's movement for Peace and 
Prosperity, Mumbai, Ms. Radhika, 
famous tarot reader, Mr. Madhumangal 
Shukla,environment activist, Mr. K. B. 
Mahajan and Mr. Swapan Goswami 
addressed the school children on how 
</pre></b>
</div>

<div class="a9">
<b><pre class="fonts">
  
the spirituality is linked with the 
environment.Daadi Nani ki Kahani-
book written by Ms. Shakun Narain was
distributed among the school children.
     
        <img id="im14" style="position:absolute; WIDTH:110; HEIGHT:80;" src="11.gif" onClick="enlarge(14)" onMouseout="shrink(14)"></img>                                <img id="im15" style="position:absolute; WIDTH:110; HEIGHT:80;" src="12.gif" onClick="enlarge(15)"onMouseout="shrink(15)"></img>

        

        <img id="im12" style="position:absolute; WIDTH:110; HEIGHT:80;" src="9.gif" onClick="enlarge(12)" onMouseout="shrink(12)"></img>                                 <img id="im13" style="position:absolute; WIDTH:110; HEIGHT:80;" src="10.gif" onClick="enlarge(13)"onMouseout="shrink(13)"></img>

    

</pre></b>
</div>


<div class="imaginary"></div>
<table class="table1" cellpadding="2" cellspacing="10">
<tr>
<td class="dfonts" onmouseover="OVERMENU(1)" onmouseout="OUTMENU(1)" onclick="MUSE(1)">


Home<br>
<img id="1"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover="OVERMENU(2)" onmouseout="OUTMENU(2)" onclick="MUSE(2)">
Braj-Vrindavan<br> Heritage Alliance<br>
<img id="2"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover="OVERMENU(3)" onmouseout="OUTMENU(3)" onclick="MUSE(3)">

Tree plantation and <br>distribution<br>
<img id="3"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover="OVERMENU(4)" onmouseout="OUTMENU(4)" onclick="MUSE(4)">
HIV/AIDS<br>Mainstreaming<br>Awarness<br>
<img id="4"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover="OVERMENU(5)" onmouseout="OUTMENU(5)" onclick="MUSE(5)">
Plastic Recycling<br>
<img id="5"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover="OVERMENU(6)" onmouseout="OUTMENU(6)" onclick="MUSE(6)">

Paryavaran Khalsa <br>at the 2010 <br>Maha Kumbha Mela<br>
<img id="6"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover="OVERMENU(7)" onmouseout="OUTMENU(7)" onclick="MUSE(7)"> 
Gallery<br>
<img id="7"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>
</table>
</div>
</body>
</html>

