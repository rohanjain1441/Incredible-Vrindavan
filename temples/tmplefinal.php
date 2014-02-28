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

.tvnt
{
visibility:hidden;
}

.tv
{
visibility:visible;
}


.anch
{
color:white;
font-family:Papyrus;
font-size:18;
opacity:1;

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
width:600px;
height:150px;
opacity:0.9;
left:390;
top:0;
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


.bar1
{
position:fixed;
background-attachment:fixed;
width:690px;
height:5px;
opacity:0.9;
left:370;
top:120;
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


.a10
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:6500px;
top:150px;
}

.a11
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:7200px;
top:150px;
}

.a12
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:7900px;
top:150px;
}


.imaginary
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:8200px;
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

if(rec==8)
{
document.getElementById("8").className="tv";

}

if(rec==9)
{
document.getElementById("9").className="tv";

}
if(rec==10)
{
document.getElementById("10").className="tv";

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

if(rec==8)
{
document.getElementById("8").className="tvnt";

}

if(rec==9)
{
document.getElementById("9").className="tvnt";

}
if(rec==10)
{
document.getElementById("10").className="tvnt";

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

im2vis.style.pixelWidth=p;
im2vis.style.pixelHeight=p+40;


p=p+5;

if(p>260)
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

im4vis.style.pixelWidth=p;
im4vis.style.pixelHeight=p+50;


p=p+5;

if(p>200)
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
}



sum=0;
i=1;
cant=1;

function clik()
{

 
  if(cant==1)
  {
    document.body.scrollLeft=sum;
    sum=sum+5;
   
     if(sum==550)
     {
      document.body.scrollLeft=550;
cant=2;


       
     }
     else
    { 
       setTimeout('clik()','0.1');
      
     }

  }

else if(cant==2)
  {
    document.body.scrollLeft=sum;
    sum=sum+5;
   
     if(sum==1250)
     {
      document.body.scrollLeft=1250;
cant=3;

       
     }
     else
    { 
       setTimeout('clik()','0.1');
      
     }
  }




else if(cant==3)
  {
    document.body.scrollLeft=sum;
    sum=sum+5;
   
     if(sum==2000)
     {
      document.body.scrollLeft=2000;
cant=4;
       
     }
     else
    { 
       setTimeout('clik()','0.1');
      
     }
  }


else if(cant==4)
  {
    document.body.scrollLeft=sum;
    sum=sum+5;
   
     if(sum==2700)
     {
      document.body.scrollLeft=2700;
cant=5;
       
     }
     else
    { 
       setTimeout('clik()','0.1');
      
     }
  }


else if(cant==5)
  {
    document.body.scrollLeft=sum;
    sum=sum+5;
   
     if(sum==3400)
     {
      document.body.scrollLeft=3400;
cant=6;

       
     }
     else
    { 
       setTimeout('clik()','0.1');
      
     }
  }

else if(cant==6)
  {
    document.body.scrollLeft=sum;
    sum=sum+5;
   
     if(sum==4100)
     {
      document.body.scrollLeft=4100;
cant=7;

       
     }
     else
    { 
       setTimeout('clik()','0.1');
      
     }
  }

else if(cant==7)
  {
    document.body.scrollLeft=sum;
    sum=sum+5;
   
     if(sum==4800)
     {
      document.body.scrollLeft=4800;

cant=8;

       
     }
     else
    { 
       setTimeout('clik()','0.1');
      
     }
  }







  
 
}

function clikl()
{
 if(cant==2)
 {
   document.body.scrollLeft=sum;
   sum=sum-5;
   
   if(sum==0)
   {
     document.body.scrollLeft=0;


	cant=1;
   }
   else
   {
     setTimeout('clikl()','0.1');
   }
 }


else if(cant==3)
 {
   document.body.scrollLeft=sum;
   sum=sum-5;
   
   if(sum==550)
   {
     document.body.scrollLeft=550;
	cant=2;
   }
   else
   {
     setTimeout('clikl()','0.1');
   }
 }


else if(cant==4)
 {
   document.body.scrollLeft=sum;
   sum=sum-5;
   
   if(sum==1250)
   {
     document.body.scrollLeft=1250;
cant=3;	
   }
   else
   {
     setTimeout('clikl()','0.1');
   }
 }

else if(cant==5)
 {
   document.body.scrollLeft=sum;
   sum=sum-5;
   
   if(sum==2000)
   {
     document.body.scrollLeft=2000;
cant=4;	
   }
   else
   {
     setTimeout('clikl()','0.1');
   }
 }

else if(cant==6)
 {
   document.body.scrollLeft=sum;
   sum=sum-5;
   
   if(sum==2700)
   {
     document.body.scrollLeft=2700;
cant=5;	
   }
   else
   {
     setTimeout('clikl()','0.1');
   }
 }

else if(cant==7)
 {
   document.body.scrollLeft=sum;
   sum=sum-5;
   
   if(sum==3400)
   {
     document.body.scrollLeft=3400;
cant=6;	
   }
   else
   {
     setTimeout('clikl()','0.1');
   }
 }

else if(cant==8)
 {
   document.body.scrollLeft=sum;
   sum=sum-5;
   
   if(sum==4100)
   {
     document.body.scrollLeft=4100;
cant=7;	
   }
   else
   {
     setTimeout('clikl()','0.1');
   }
 }


}

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
document.body.scrollLeft=550;
sum=550;
cant=2;
}

if(lop==4)
{
document.body.scrollLeft=1250;
sum=1250;
cant=3;
}

if(lop==5)
{
document.body.scrollLeft=2000;
sum=2000;
cant=4;
}

if(lop==6)
{
document.body.scrollLeft=2700;
sum=2700;
cant=5;
}

if(lop==7)
{
document.body.scrollLeft=4100;
sum=4100;
cant=6;
}
if(lop==8)
{
document.body.scrollLeft=5500;
sum=5500;
cant=7;
}
if(lop==9)
{
document.body.scrollLeft=6900;
sum=6900;
cant=8;
}
if(lop==10)
{
var my;
my=window.open('http://localhost/web_temple/gall_main.php','_self');



}

}



document.addEventListener('keydown',function (e)
{
   switch(e.keyCode)
   {
      case 39:
 clik();
break;
      case 37: 
clikl();
                break;
   }
   
},true);

      
      
   
</script>
</head>
<body scroll="no">
<div class="man">

<img id="tit" class="title" src="tmp.gif"></img>
<img id="bar" class="bar1" src="bar.gif"></img>










<img id="im1vis" src="vrindavan.jpg" style="visibility:hidden; position:absolute; TOP:250px; LEFT:650px; WIDTH:50px; HEIGHT:50px";>
<img id="im2vis" src="bnke.jpg" style="visibility:hidden; position:absolute; TOP:250px; LEFT:665px; WIDTH:50px; HEIGHT:50px";>
<img id="im3vis" src="madan_mohan.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:1345px; WIDTH:50px; HEIGHT:50px";>
<img id="im4vis" src="bih1.jpg" style="visibility:hidden; position:absolute; TOP:250px; LEFT:2070px; WIDTH:50px; HEIGHT:50px";>
<img id="im5vis" src="bih2.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:2050px; WIDTH:50px; HEIGHT:50px";>
<img id="im6vis" src="bih3.jpg" style="visibility:hidden; position:absolute; TOP:250px; LEFT:2050px; WIDTH:50px; HEIGHT:50px";>
<img id="im7vis" src="bih4.jpg" style="visibility:hidden; position:absolute; TOP:250px; LEFT:2050px; WIDTH:50px; HEIGHT:50px";>
<img id="im8vis" src="radha.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:2745px; WIDTH:50px; HEIGHT:50px";>
<img id="im9vis" src="rang1.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:4150px; WIDTH:50px; HEIGHT:50px";>
<img id="im10vis" src="rang2.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:4150px; WIDTH:50px; HEIGHT:50px";>
<img id="im11vis" src="govind.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:4845px; WIDTH:50px; HEIGHT:50px";>
<img id="im12vis" src="bala.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:6950px; WIDTH:50px; HEIGHT:50px";>
<img id="im13vis" src="bala1.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:6950px; WIDTH:50px; HEIGHT:50px";>
<img id="im14vis" src="shah1.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:8350px; WIDTH:50px; HEIGHT:50px";>
<img id="im15vis" src="shah2.gif" style="visibility:hidden; position:absolute; TOP:250px; LEFT:8350px; WIDTH:50px; HEIGHT:50px";>

<div class="a1">
<b><pre class="fonts">
          AN INTRODUCTION
  
    Vrindavan is considered to be a holy 
place by all traditions of Hinduism.
The major tradition followed in the 
area is Vaisnavism, and it is a center of 
learning with many Vrindavan Ashrams 
operating.Its a center of Krishna 
worship and the area includes places 
like Govardhana and Gokul that are 
associated with Krishna.
                <img id="im1" style="position:absolute; WIDTH:75;" src="vrindavan.jpg" onClick="enlarge(1)" onMouseout="shrink(1)"></img>                                <img id="im2" style="position:absolute; WIDTH:40px;" src="bnke.jpg" onClick="enlarge(2)"onMouseout="shrink(2)"></img>
                         



                                                                                                                                                                                           
</pre></b></div>
<div class="a2">
<b><pre class="fonts">
        MADAN MOHAN TEMPLE
  
   Located near the Kali Ghat was built 
by Kapur Ram Das of Multan.This is 
the oldest temple in Vrindavan.The 
temple is closely associated with 
the saint Chaitanya Mahaprabhu.  
The original image of      <img id="im3" style="position:absolute; WIDTH:90" src="madan_mohan.gif"onClick="enlarge(3)" onMouseout="shrink(3)" ></img> 
Lord Madan Gopal was 
shifted from the shrine 
to Karauli in Rajasthan for safe 
keeping during Aurangzeb's rule.Today, 
a replica of the image is worshiped at 
the temple.

                     

</pre></b>
</div>




<div class="a3">

<b><pre class="fonts">
       BANKE BIHARIJI TEMPLE
  
    Built in 1862 is the most popular 
shrine at Vrindavan. The image of 
Banke-Bihari was discovered in 
Nidhi Vana by Swami Haridas, the 
great Krishna devotee, belonging to 
the Nimbarka Sampradaya.
           <img id="im4" style="position:absolute; WIDTH:50;" src="bih1.jpg" onClick="enlarge(4)" onMouseout="shrink(4)"></img>                              <img id="im5" style="position:absolute; WIDTH:75" src="bih2.gif" onClick="enlarge(5)"onMouseout="shrink(5)"></img>


        <img id="im6" style="position:absolute; WIDTH:75" src="bih3.jpg" onClick="enlarge(6)" onMouseout="shrink(6)"></img>                                 <img id="im7" style="position:absolute; WIDTH:75;" src="bih4.jpg" onClick="enlarge(7)"onMouseout="shrink(7)"></img>

</pre></b>
</div>
<div class="a4">
<b><pre class="fonts">
  RADHA VALLABH TEMPLE
  
Set up by the Radha-Vallabh 
sampradaya,through Sri Hith 
Harivansh Mahaprabhu, has the crown 
of Radharani placed next to the 
Shri Krishna image in the sanctum.

                    
			<img id="im8" style="position:absolute; WIDTH:110; HEIGHT:80;" src="radha.gif"onClick="enlarge(8)" onMouseout="shrink(8)" ></img>

</pre></b>
</div>

<div class="a5">

<b><pre class="fonts">
             RANGAJI TEMPLE
  
     Built in 1851 is dedicated to Lord 
Ranganatha or Rangaji depicted as 
Lord Vishnu in his sheshashayi pose,
resting on the coils of the sacred 
Sesha Naga. The temple built in the 
Dravidian style has a tall gopuram, 
of six storeys and a gold - plated 
Dhwaja stambha, 50 feet high. 
A water tank and a picturesque garden 
lie within the temple enclosure.
	

</pre></b>
</div>
<div class="a6">
<b><pre class="fonts">

 
The annual festival of Jal Vihar of
the presiding deity is performed 
with great pomp and splendour at 
the tank.

            <img id="im9" style="position:absolute; WIDTH:60; HEIGHT:40;" src="rang1.gif" onClick="enlarge(9)" onMouseout="shrink(9)"></img>                                 <img id="im10" style="position:absolute; WIDTH:60; HEIGHT:40;" src="rang2.gif" onClick="enlarge(10)"onMouseout="shrink(10)"></img>
 
</pre></b>
</div>
<div class="a7">
<b><pre class="fonts">
        GOVIND DEO TEMPLE
        
                        <img id="im11" style="position:absolute; WIDTH:100" src="govind.gif"onClick="enlarge(11)" onMouseout="shrink(11)" ></img>



Was once a magnificent seven storeyed 
structure built in the form of a Greek 
cross. It is said that the Emperor 
Akbar donated some of the red 
sandstone that had been brought for 
the Red Fort at Agra, for the 
construction of this temple. 
</pre></b>

</div>
<div class="a8">
<b><pre class="fonts">

Built at the astronomical cost of one 
crore rupees in 1590 by his general 
Raja Man Singh, the temple combines 
western, Hindu and Muslim 
architectural elements in its structure. 
It was destroyed by Mughal ruler 
Aurangzeb.





</pre></b>
</div>

<div class="a9">
<b><pre class="fonts">
SRI KRISHNA BALARAM 
                      TEMPLE
  
     Built by the International Society 
for Krishna Consciousness 
(ISKCON) in a location known as 
'Raman-Reti', is one of the most 
beautiful temples in Vrindavan today. 
The principal deities of this temple 
are Krishna & Balaram, with 
Radha-Shyamasundar and 
Gaura-Nitai alongside. 
</pre></b></div>

<div class="a10">
<b><pre class="fonts">
Adjoining the temple is the samadhi 
of A. C. Bhaktivedanta Swami 
Prabhupada, the founder of 
ISKCON, built in pure white 
marble.


   <img id="im12" style="position:absolute; WIDTH:100;HEIGHT:80;" src="bala.gif" onClick="enlarge(12)" onMouseout="shrink(12)"></img>                                       <img id="im13" style="position:absolute; WIDTH:100;HEIGHT:80;" src="bala1.gif" onClick="enlarge(13)"onMouseout="shrink(13)"></img>







</pre></b></div>


<div class="a11">
<b><pre class="fonts">
            SHAHJI TEMPLE
  
Another popular temple at Vrindavan, 
was designed and built in 1876 by a 
wealthy jeweller, Shah Kundan Lal of 
Lucknow. The deities (images) at the 
temple are popularly known as the 
Chhote Radha Raman. Noted for its 
magnificent architecture and beautiful 
marble sculpture, the temple has twelve 
spiral columns each 15 feet high. 


</pre></b></div>


<div class="a12">
<b><pre class="fonts">
The 'Basanti Kamra' - the darbar hall 
is famed for its Belgian glass 
chandeliers and fine paintings.
                       

                       <img id="im14" style="position:absolute; WIDTH:100;" src="shah1.gif" onClick="enlarge(14)" onMouseout="shrink(14)"></img>                              

        

                       <img id="im15" style="position:absolute; WIDTH:100;" src="shah2.gif" onClick="enlarge(15)"onMouseout="shrink(15)"></img>
           


</pre></b></div>

<div class="imaginary"></div>

<table class="table1" cellpadding="2" cellspacing="10">
<tr>
<td class="dfonts" onmouseover="OVERMENU(1)" onmouseout="OUTMENU(1)" onclick="MUSE(1)">


Home<br>
<img id="1" src="Rline.gif" class="tvnt"  style="WIDTH:200px; HEIGHT:5px";></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover=OVERMENU('2') onmouseout=OUTMENU('2') onclick="MUSE(2)">

Introduction<br>
<img id="2"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover=OVERMENU('3') onmouseout=OUTMENU('3') onclick="MUSE(3)">
Madan Mohan Temple<br>
<img id="3"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover=OVERMENU('4') onmouseout=OUTMENU('4') onclick="MUSE(4)">

Banke Bihariji Temple<br>
<img id="4"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover=OVERMENU('5') onmouseout=OUTMENU('5')  onclick="MUSE(5)">

Radha Vallabh Temple<br>
<img id="5"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover=OVERMENU('6') onmouseout=OUTMENU('6') onclick="MUSE(6)">
Rangaji Temple<br>
<img id="6"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover=OVERMENU('7') onmouseout=OUTMENU('7') onclick="MUSE(7)">

Govind Deo Temple<br>
<img id="7"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>

</tr>

<tr>

<td class="dfonts" onmouseover=OVERMENU('8') onmouseout=OUTMENU('8') onclick="MUSE(8)">
Sri Krishna Balaram<br>Temple<br>
<img id="8"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover=OVERMENU('9') onmouseout=OUTMENU('9') onclick="MUSE(9)">
Shahji Temple<br>
<img id="9"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts"  onmouseover=OVERMENU('10') onmouseout=OUTMENU('10') onclick="MUSE(10)">

Gallery<br>
<img id="10" class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>
</table>
</div>
</body>
</html>

