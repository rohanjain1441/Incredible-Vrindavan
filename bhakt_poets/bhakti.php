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
font-family:Showcard Gothic;
font-size:18;
opacity:1;

}

.tvnt
{
visibility:hidden;
}

.tv
{
visibility:visible;
}


.table1
{
left:0;
top:120;
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


.man
{
width:100%;
height:100%;
}





.title

{

position:fixed;
background-attachment:fixed;
width:300px;
height:150px;
opacity:0.9;
left:505;
top:0;
}

.bar1
{
position:fixed;
background-attachment:fixed;
width:320px;
height:5px;
opacity:0.9;
left:500;
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

.a13
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:8600px;
top:150px;
}




.imaginary
{
background:url(boxf.gif);
position:absolute;
width:500px;
height:500px;
opacity:0.4;
left:8800px;
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

im9vis.style.pixelWidth=p;
im9vis.style.pixelHeight=p+50;


p=p+5;

if(p>250)
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

im11vis.style.pixelWidth=p;
im11vis.style.pixelHeight=p+60;


p=p+5;

if(p>250)
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

im15vis.style.pixelWidth=p;
im15vis.style.pixelHeight=p+50;


p=p+5;

if(p>250)
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


else if(cant==8)
  {
    document.body.scrollLeft=sum;
    sum=sum+5;
   
     if(sum==5450)
     {
      document.body.scrollLeft=5450;

cant=9;

       
     }
     else
    { 
       setTimeout('clik()','0.1');
      
     }
  }

else if(cant==9)
  {
    document.body.scrollLeft=sum;
    sum=sum+5;
   
     if(sum==6250)
     {
      document.body.scrollLeft=6250;

cant=10;

       
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


else if(cant==9)
 {
   document.body.scrollLeft=sum;
   sum=sum-5;
   
   if(sum==4800)
   {
     document.body.scrollLeft=4800;
cant=8;	
   }
   else
   {
     setTimeout('clikl()','0.1');
   }
 }


else if(cant==10)
 {
   document.body.scrollLeft=sum;
   sum=sum-5;
   
   if(sum==5450)
   {
     document.body.scrollLeft=5450;
cant=9;	
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
document.body.scrollLeft=2700;
sum=2700;
cant=5;
}

if(lop==6)
{
document.body.scrollLeft=3400;
sum=3400;
cant=6;
}

if(lop==7)
{
document.body.scrollLeft=5450;
sum=5450;
cant=9;
}
if(lop==8)
{
var my;
my=window.open('http://localhost/bhakt_poets_web/bhakt.php','_self');
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
<img id="tit" class="title" src="bhakt_title.gif"></img>
<img id="bar" class="bar1" src="bar.gif"></img>











<img id="im3vis" src="gur.gif" style="visibility:hidden; position:absolute; TOP:250; LEFT:1345; WIDTH:50px; HEIGHT:50px";>


<img id="im9vis" src="shree.gif" style="visibility:hidden; position:absolute; TOP:250; LEFT:3460; WIDTH:50px; HEIGHT:50px";>

<img id="im11vis" src="qqq.gif" style="visibility:hidden; position:absolute; TOP:250; LEFT:4160; WIDTH:50px; HEIGHT:50px";>

<img id="im14vis" src="qq.gif" style="visibility:hidden; position:absolute; TOP:250; LEFT:5540; WIDTH:50px; HEIGHT:50px";>

<img id="im15vis" src="hit.gif" style="visibility:hidden; position:absolute; TOP:250; LEFT:6970; WIDTH:50px; HEIGHT:50px";>

<div class="a1">
<b><pre class="fonts">
           AN INTRODUCTION
  
    This section will enlist the different 
Bhakta Poets whose Kirtanas/Padas are 
sung before Shree Prabhu in Pushtimarg 
and are accepted by Shree Gusaiji 
(Second son of Shreemad Vallabhacharya 
Mahaprabhuji) to besung as part of Kirtana 
Pranalika.The number of these poets is not 
just limited to Pushtimarg Disciples but 
also other Vaishnava Bhaktas from other 
Sampradayas.The Kirtanas of these poets 
are accepted since these poets had an 
infinite grace of Shree Krishna and they 
described whatever they relished the divine 
sports of Shree Krishna with the grace of 
the Lord himself.
  
</pre></b></div>
<div class="a2">
<b><pre class="fonts">
           BHAKTA JAYDEVA
  
   Shri Jayadeva Goswami was the court 
Pandit of Sri Lakshman Sena, the King of 
Bengal. Jayadeva's father was Bhojadeva, 
and his mother's name was Bamadevi. 
They lived in the Birbhum district of 
what is now West Bengal in a village 
called Kenubilva Gram. He was born at 
the beginning of the twelfth centrury A.D.
Chaitanya Mahaprabhu.    <img id="im3" style="position:absolute; WIDTH:110; HEIGHT:80;" src="gur.gif"onClick="enlarge(3)" onMouseout="shrink(3)" ></img>
Jayadeva Goswami's wife 
was named Sri Padmavati. 
When he was thecourt 
pandit of Lakshman Sena, he lived on the 
banks of the Ganges.

                     

</pre></b>
</div>




<div class="a3">

<b><pre class="fonts">
          PADAS IN PUSHTIMARG
  
The following padas by Shree Jayadevji 
are sung in Pushtimarg:

1.Lalita Lavanga Lataa Parishilana : This is 
generally sung during Vasant Panchami in 
all gruhs in Vasant Raag.

2.Pralayapayodhijale Dhrutavaanasi : This is 
sung on Ramnavmi, Narsimha Jayanti, and 
Vaman Jayantiin Malav Raag during 
Bhog darshan. 

3.Rati Sukhsaare Dhiresamire : This is sung 
in Trutiya Gruh on the day of Jyestha Sud 
Dasamduring Shayan Darshan.



</pre></b>
</div>
<div class="a4">
<b><pre class="fonts">
        PADAS IN PUSHTIMARG
  
4.Chandancharchita Nilakalevara : This 
ashtapadi is sung from the day of Akshay 
Trutiya to Rathyatra.

5. Gangastav by Jaydevji is also sung 
in Shastha Gruh (Surat) on Jyestha 
Shukla Dasam during Shringar Ausara in 
Raag Bhairav.  

                    
			

</pre></b>
</div>

<div class="a5">

<b><pre class="fonts">
          SANGEETACHARYA 
            SHREE  VIDYAPATI
  
     Vidyapati (1374-1460) famous Vaisnava 
poet was born in a scholarly Shaivite 
Brahmin family in the village of Bisfi in 
the Sitamari subdivision of Mithila.
Vidyapati wrote in Maithili,Abahattha, 
and Sanskrit. Since he was born in a 
Shaivite family, he also wrote many 
Shaivite songs.However, the verses on 
Radha-Krishna that are written in Brajabuli 
are considered his masterpieces. It is 
because of these Vaisnava verses, that he 
has gained immortality.      <img id="im9" style="position:absolute; WIDTH:50; HEIGHT:60;" src="shree.gif" onClick="enlarge(9)" onMouseout="shrink(9)"></img>                                 

</pre></b>
</div>
<div class="a6">
<b><pre class="fonts">
             SWAMI HARIDASJI
  
		         <img id="im11" style="position:absolute; WIDTH:70; HEIGHT:80;" src="qqq.gif"onClick="enlarge(11)" onMouseout="shrink(11)" ></img>

    

    Swami Haridas was born in Rajpur near
Vrindavan. His father was a Saraswat 
Brahmin from Multan. The family migrated 
to a village called Khairwali Sarak, 
near Aligarh in Uttar Pradesh.He is thought 
to be the incarnation of Lalita Sakhi, the 
legendary friend who consoles Radha in her 
lovelorn state. He recognized the Nidhi 
Vana that is said to be the garden where 
Radha and Krishna do rasaswith their 
friends.

</pre></b>
</div>
<div class="a7">
<b><pre class="fonts">
             SWAMI HARIDASJI
  
     He made Krishna appear from the land
of Nidhi vana in the form of an idol named 
Bankey Bihari ji, which is still worshipped 
in Vrindavan.Haridas spent some time at the 
Gwalior court of Raja Mansingh Tomar,
whose patronage of Hindustani classical 
music, and particularly the dhrupad style, 
left an indelible mark in the period 1485-1510. 
Particularly, this was a period of a shift 
in the language of devotionalsongs from the 
Sanskrit to local vernacular like brijbhasha
(an eastern variety related to Hindi), 
modelled on those of Vidyapati and 
others in the Bhakti tradition.

</pre></b>

</div>
<div class="a8">
<b><pre class="fonts">
           SHREE HARIDASJI’S 
         Eight Most Famous Disciples
  
1. Baiju
2. Gopallal 
3. Madanrai 
4. Ramdas 
5. Diwakar Pandit 
6. Somnath Pandit 
7. Tanna Mishra (Tansen)
8. Raja Saursen 
        
                       <img id="im14" style="position:absolute; WIDTH:80; HEIGHT:60;" src="qq.gif" onClick="enlarge(14)" onMouseout="shrink(14)"></img>                                



</pre></b>
</div>





<div class="a9">
<b><pre class="fonts">
   SHREE HIT HARIVANSHJI

The proclaimar of Radha-Vallabh 
Sampraday,Shree Hit Harivansh jiwas 
born in the year 1559 in a well to 
do family of Deoband,Distt,Saharanpur. 
His father was Shri Vyas Misra and 
his mother was Tara Rani.Shri Vyas
Misra was court astrologer and he 
accompanied the Emperor Sikandar 
Lodi when he was on tour.Due to the 
blessings of Misra’s brother a son was 
born to him fulfilling his long desire.
In blessing Tara Rani, the sanyasi 
prophesied that her son would be an 
extraordinary devotee and would establish 
a new system of Prema Bhakti

</pre></b>
</div>


<div class="a10">
<b><pre class="fonts">
   SHREE HIT HARIVANSHJI

During one of his visits to Agra 
accompanying the Emperor, Shri Misra 
took his wife as she was pregnant and 
was accepting delivery.One the way Tara 
Rani developed labour pains and delivered
a boy near Baad village on Monday which 
happened to be Ekadasi of Vaishakh.Shri 
Misra came back to Deoband along with his
family and ShriHitharivansh Soswami 
spent 30 years in Deoband. He was 
married to Rukmani and had four sons and 
a daughter.
                           <img id="im15" style="position:absolute; WIDTH:50; HEIGHT:60;" src="hit.gif" onClick="enlarge(15)" onMouseout="shrink(15)"></img>
</pre></b>
</div>


<div class="a11">
<b><pre class="fonts">
           BHAKTA JAYDEVA
  
   Shri Jayadeva Goswami was the court 
Pandit of Sri Lakshman Sena, the King of 
Bengal. Jayadeva's father was Bhojadeva, 
and his mother's name was Bamadevi. 
They lived in the Birbhum district of 
what is now West Bengal in a village 
called Kenubilva Gram. He was born at 
the beginning of the twelfth centrury A.D.
Chaitanya Mahaprabhu.    <img id="im3" style="position:absolute; WIDTH:110; HEIGHT:80;" src="gur.gif"onClick="enlarge(3)" onMouseout="shrink(3)" ></img>
Jayadeva Goswami's wife 
was named Sri Padmavati. 
When he was thecourt 
pandit of Lakshman Sena, he lived on the 
banks of the Ganges.

                     

</pre></b>
</div>


<div class="a12">
<b><pre class="fonts">
           BHAKTA JAYDEVA
  
   Shri Jayadeva Goswami was the court 
Pandit of Sri Lakshman Sena, the King of 
Bengal. Jayadeva's father was Bhojadeva, 
and his mother's name was Bamadevi. 
They lived in the Birbhum district of 
what is now West Bengal in a village 
called Kenubilva Gram. He was born at 
the beginning of the twelfth centrury A.D.
Chaitanya Mahaprabhu.    <img id="im3" style="position:absolute; WIDTH:110; HEIGHT:80;" src="gur.gif"onClick="enlarge(3)" onMouseout="shrink(3)" ></img>
Jayadeva Goswami's wife 
was named Sri Padmavati. 
When he was thecourt 
pandit of Lakshman Sena, he lived on the 
banks of the Ganges.

                     

</pre></b>
</div>

<div class="a13">
<b><pre class="fonts">
           BHAKTA JAYDEVA
  
   Shri Jayadeva Goswami was the court 
Pandit of Sri Lakshman Sena, the King of 
Bengal. Jayadeva's father was Bhojadeva, 
and his mother's name was Bamadevi. 
They lived in the Birbhum district of 
what is now West Bengal in a village 
called Kenubilva Gram. He was born at 
the beginning of the twelfth centrury A.D.
Chaitanya Mahaprabhu.    <img id="im3" style="position:absolute; WIDTH:110; HEIGHT:80;" src="gur.gif"onClick="enlarge(3)" onMouseout="shrink(3)" ></img>
Jayadeva Goswami's wife 
was named Sri Padmavati. 
When he was thecourt 
pandit of Lakshman Sena, he lived on the 
banks of the Ganges.

                     

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
Introduction<br>
<img id="2"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover="OVERMENU(3)" onmouseout="OUTMENU(3)" onclick="MUSE(3)">
Bhakta Jaydeva<br>
<img id="3"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover="OVERMENU(4)" onmouseout="OUTMENU(4)" onclick="MUSE(4)">

Padas In Pushtimarg<br>
<img id="4"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover="OVERMENU(5)" onmouseout="OUTMENU(5)" onclick="MUSE(5)">
Sangeetacharya<br>Shree Vidyapati<br>
<img id="5"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover="OVERMENU(6)" onmouseout="OUTMENU(6)" onclick="MUSE(6)">

Swami Haridasji<br>
<img id="6"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover="OVERMENU(7)" onmouseout="OUTMENU(7)" onclick="MUSE(7)">
Shree Hit Harivanshji<br>
<img id="7"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>

<tr>
<td class="dfonts" onmouseover="OVERMENU(8)" onmouseout="OUTMENU(8)" onclick="MUSE(8)">
Gallery<br>
<img id="8"  class="tvnt" src="Rline.gif" style="WIDTH:200px; HEIGHT:5px;"></img>
</td>
</tr>
</table>
</div>
</body>
</html>

