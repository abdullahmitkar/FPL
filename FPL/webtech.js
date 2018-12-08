var s=1;
var c=1;
var name1;
var interest=1;
var ans=1;
function trigger(name) {

    if (s == 1) {
        s=0;
       document.getElementById(''+name).style.height="100%";
	   
       document.getElementById(""+name+c).style.transform="rotate(-180deg)";
	   document.getElementById(""+name+c).src="Images/close.png";
    } else {
       s=1;
       document.getElementById(''+name).style.height="12%";
	   
       document.getElementById(""+name+c).style.transform="rotate(0deg)";
       document.getElementById(""+name+c).src="Images/arrow.jpg"; 
	   
       document.getElementById(""+name+c).style.transform="rotate(0deg)";
    }
}
var n=1;
function selected(name){

var temp;
temp=document.getElementById(''+name).style.display;
if(temp=="block")
{
document.getElementById(''+name).style.display="none";
}
else{
document.getElementById(''+name).style.display="block";


}
}

var bgimg=1;
var ttt;
function backgroundimage(){ 

if(bgimg==1)
{
/*document.getElementById('bodybg').style.display="none";
*/
document.getElementById('bodybg').style.opacity="0";
bgimg=0;

document.getElementById('bodybg1').style.opacity="0";
}

//if (document.getElementById('bodybg').style.display=="none")
if (document.getElementById('bodybg').style.opacity=="0")
{
document.getElementById('bodybg').style.opacity="0.6";
document.getElementById('bodybg1').style.opacity="0.6";
document.getElementById('hash7').innerHTML="Background Image :On";
}
/*
else if(document.getElementById('bodybg').style.display=="block")
{
document.getElementById('bodybg').style.display="none";
}
*/
else if (document.getElementById('bodybg').style.opacity=="0.6")
{
document.getElementById('bodybg').style.opacity="0";
document.getElementById('bodybg1').style.opacity="0";
document.getElementById('hash7').innerHTML="Background Image :Off";
}

}
var theme="default";

function headerimage(name){

name1=name;
if(name=="default"){
document.getElementById('image0001').src="Images/fwc.jpg";
document.getElementById('navtab101').style.backgroundColor="#656565";
document.getElementsByTagName("nav")[0].style.backgroundColor="#656565";
var x=document.getElementById('navtab101').getElementsByTagName("ul")[0].getElementsByTagName("li");
x=x.length;

for(var i=0;i<x;i++)
{
document.getElementById('navtab101').getElementsByTagName("ul")[0].getElementsByTagName("li")[i].style.backgroundColor="#656565";
document.getElementById('navtab101').getElementsByTagName("ul")[0].getElementsByTagName("li")[i].style.color="white";
document.getElementsByTagName("nav")[0].getElementsByTagName("li")[i].getElementsByTagName("a")[0].style.backgroundColor="#656565";
document.getElementsByTagName("nav")[0].getElementsByTagName("li")[i].getElementsByTagName("a")[0].style.color="white";
}
document.getElementById('selected').style.backgroundColor="white";
document.getElementById('selected').style.color="#656565";


var hgg=1;

for(var i=1;i<=11;i++)
{
$(document).ready(function(){
    $("#hash"+i).hover(
	
	function(){
        $(this).css("color", "#656565");
         $(this).css("background-color", "white");
		}, 
		
		function(){
      $(this).css("color", "white");
         $(this).css("background-color", "#656565");
    }
	
	);
});
}

}

else if(name=="manu")
{
		
document.getElementById('image0001').src="Images/manu1.jpg";
document.getElementById('navtab101').style.backgroundColor="#DF1A23";
document.getElementsByTagName("nav")[0].style.backgroundColor="#DF1A23";
var x=document.getElementById('navtab101').getElementsByTagName("ul")[0].getElementsByTagName("li");
x=x.length;

for(var i=0;i<8;i++)
{
document.getElementById('navtab101').getElementsByTagName("ul")[0].getElementsByTagName("li")[i].style.backgroundColor="#DF1A23";
document.getElementById('navtab101').getElementsByTagName("ul")[0].getElementsByTagName("li")[i].style.color="#FEE600";
document.getElementsByTagName("nav")[0].getElementsByTagName("li")[i].getElementsByTagName("a")[0].style.backgroundColor="DF1A23";
document.getElementsByTagName("nav")[0].getElementsByTagName("li")[i].getElementsByTagName("a")[0].style.color="#FEE600";

}

/*document.getElementById('selected').style.backgroundColor="#FEE600";
document.getElementById('selected').style.color="#DF1A23";


//hover effect

alert('out');
$(document).ready(function(){
    $("#hash").hover(
	
	function(){
        $(this).css("color", "#DF1A23");
         $(this).css("background-color", "#FEE600");
		}, 
		
		function(){
        $(this).css("background-color", "");
    }
	
	);
});
var hgg=1;

for(var i=1;i<=11;i++)
{
$(document).ready(function(){
    $("#hash"+i).hover(
	
	function(){
        $(this).css("color", "#DF1A23");
         $(this).css("background-color", "#FEE600");
		}, 
		
		function(){
      $(this).css("color", "#FEE600");
         $(this).css("background-color", "#DF1A23");
    }
	
	);
});
}
*/
$(document).ready(function(){
    $(".siteheader").hover(
	
	function(){ 
	
	if(interest==1){
	
       manuhover();
		}
		}, 
		
		function(){
		manuhoverremover();
         }
	
	);
});


}
else if(name=="fcb")
{
document.getElementById('image0001').src="Images/fcb1.jpg";
document.getElementById('navtab101').style.backgroundColor="#000438";
document.getElementsByTagName("nav")[0].style.backgroundColor="#000438";
var x=document.getElementById('navtab101').getElementsByTagName("ul")[0].getElementsByTagName("li");
x=x.length;

for(var i=0;i<8;i++)
{
document.getElementById('navtab101').getElementsByTagName("ul")[0].getElementsByTagName("li")[i].style.backgroundColor="#000438";
document.getElementById('navtab101').getElementsByTagName("ul")[0].getElementsByTagName("li")[i].style.color="#CBBC3E";
document.getElementsByTagName("nav")[0].getElementsByTagName("li")[i].getElementsByTagName("a")[0].style.backgroundColor="#000438";
document.getElementsByTagName("nav")[0].getElementsByTagName("li")[i].getElementsByTagName("a")[0].style.color="#CBBC3E";
}
document.getElementById('selected').style.backgroundColor="#CBBC3E";
document.getElementById('selected').style.color="#000438";

var hgg=1;

for(var i=1;i<=11;i++)
{
$(document).ready(function(){
    $("#hash"+i).hover(
	
	function(){
        $(this).css("color", "#000438");
         $(this).css("background-color", "#CBBC3E");
		}, 
		
		function(){
      $(this).css("color", "#CBBC3E");
         $(this).css("background-color", "#000438");
    }
	
	);
});
}




$(document).ready(function(){
    $(".siteheader").hover(
	
	function(){ 
	
		}, 
		
		function(){}
	
	);
});







}

theme=name;
}






function interface(){

alert(''+document.getElementById('playit').innerHTML);


}


function getname(){
	
	if(document.getElementById('player2').innerHTML==30)
document.getElementById('player2').innerHTML="Thiago Silva";
		}
		
		
		
		
		
function playermove(){
/*
var rect1 = document.getElementById('selectbox1').getBoundingClientRect();
var rect2 = document.getElementById('player2').getBoundingClientRect();


    var btn = document.createElement("DIV");
   var b=btn.getBoundingClientRect();
 
	var t = document.createTextNode("HERERER ME");
    btn.appendChild(t);
    document.body.appendChild(btn);

alert(''+btn.getBoundingClientRect().top);
*/
document.getElementById('selectbox1').style.top="400px";
//alert(''+document.getElementById('abd').style.top);
}

var temp1=0;
var temp=0;

function nexttrivia(){
 
 temp=Math.random();
 temp=temp*100;
 temp=temp%4;
 temp=Math.floor(temp);
 
 /*
 while(temp!=temp1)
 {
 temp=Math.random();
 temp=temp*100;
 temp=temp%4;
 temp=Math.floor(temp);
 }
 temp1=temp;
 */if(temp==0)
 {
 document.getElementById('text1').innerHTML="Giggs also holds the record for fastest goal scored by United, netting after 15 seconds vs Southampton in 1995.";
 }
 else if(temp==1)
 {document.getElementById('text1').innerHTML="Under Sir Alex Ferguson, Manchester United never finished lower than 3rd in the Premier league.";
}
 else if(temp==2)
 {
 document.getElementById('text1').innerHTML="Current Manchester United boss Louis van Gaal is the first non-British manager of the Red Devils";
}
 else
 {
 document.getElementById('text1').innerHTML="In one of the club's biggest upsets, United goalkeeper Gary Bailey saved three penalties against Ipswich Town at Portman Road in 1980, but United still lost the game 6-0.";
}
 
}

function trivia(){

document.getElementById('text2').style.display="none";
document.getElementById('notinterested').style.display="none";
document.getElementById('trivia').style.display="none";
document.getElementById('text1').style.width="100%";
document.getElementById('text1').style.height="90%";
document.getElementById('quiz').style.display="none";

if(name1=='manu')
{
document.getElementById('text1').style.backgroundColor="#DF1A23";
}
document.getElementById('nexttrivia').style.display="block";
document.getElementById('goback').style.display="block";
}

function quiz(){

document.getElementById('text1').style.display="none";
document.getElementById('notinterested').style.display="none";
document.getElementById('quiz').style.display="none";
document.getElementById('text2').style.width="100%";
document.getElementById('text2').style.height="90%";
document.getElementById('trivia').style.display="none";
document.getElementById('quizbutton').style.display="block";
document.getElementById('notinterested').style.display="none";
if(name1=='manu')
{
document.getElementById('text2').style.backgroundColor="#DF1A23";
}
document.getElementById('text2').innerHTML="Are you ready to test yourself?";

}

function goback(){

document.getElementById('text1').style.width="50%";
document.getElementById('text1').style.height="80%";
document.getElementById('nexttrivia').style.display="none";
document.getElementById('quizbutton').style.display="none";
document.getElementById('notinterested').style.display="block";
document.getElementById('text2').style.display="block";
document.getElementById('text1').innerHTML="Learn something Interesting about your favourite Club";
document.getElementById('trivia').style.display="block";
document.getElementById('text2').style.width="50%";
document.getElementById('text2').style.height="80%";
document.getElementById('text1').style.display="block";
document.getElementById('quiz').style.display="block";

document.getElementById('option1').style.display="none";
document.getElementById('option2').style.display="none";
document.getElementById('option3').style.display="none";
document.getElementById('option4').style.display="none";
}

function notinterested(){
interest=0;
}

var key=1;
var counter=0;

var score=0;
function quizquestions(){

counter++;


document.getElementById('option1').style.backgroundColor="yellow";
document.getElementById('option2').style.backgroundColor="yellow";
document.getElementById('option3').style.backgroundColor="yellow";
document.getElementById('option4').style.backgroundColor="yellow";


 if(counter==1){
document.getElementById('text2').innerHTML="When was Manchester United founded?";
document.getElementById('quizbutton').innerHTML="Next question";
document.getElementById('option1').style.display="block";
document.getElementById('option2').style.display="block";
document.getElementById('option3').style.display="block";
document.getElementById('option4').style.display="block";
document.getElementById('option1').innerHTML="1967";
document.getElementById('option2').innerHTML="1878";
document.getElementById('option3').innerHTML="1920";
document.getElementById('option4').innerHTML="1889";
key=2;
}
else if(counter==2){

document.getElementById('text2').innerHTML="When did Manchester United win their first Premeiership title?";
document.getElementById('quizbutton').innerHTML="Next question";
document.getElementById('option1').style.display="block";
document.getElementById('option2').style.display="block";
document.getElementById('option3').style.display="block";
document.getElementById('option4').style.display="block";
document.getElementById('option1').innerHTML="1989-90";
document.getElementById('option2').innerHTML="1994-95";
document.getElementById('option3').innerHTML="1992-93";
document.getElementById('option4').innerHTML="1996-97";
key=3;} 

else if(counter==3){

document.getElementById('text2').innerHTML="First Manchester United Manager to win League Cup?";
document.getElementById('quizbutton').innerHTML="Next question";
document.getElementById('option1').style.display="block";
document.getElementById('option2').style.display="block";
document.getElementById('option3').style.display="block";
document.getElementById('option4').style.display="block";
document.getElementById('option1').innerHTML="David Moyes";
document.getElementById('option2').innerHTML="Sir Matt Busby";
document.getElementById('option3').innerHTML="Duncan";
document.getElementById('option4').innerHTML="Sir Alex Ferguson";
key=4;} 
else if(counter==4){

document.getElementById('text2').innerHTML="Which player did not score on his competitive debut?";
document.getElementById('quizbutton').innerHTML="Next question";
document.getElementById('option1').style.display="block";
document.getElementById('option2').style.display="block";
document.getElementById('option3').style.display="block";
document.getElementById('option4').style.display="block";
document.getElementById('option1').innerHTML="Ronaldo";
document.getElementById('option2').innerHTML="Giggs";
document.getElementById('option3').innerHTML="Cleverly";
document.getElementById('option4').innerHTML="Chicharito";
key=2;} 
else if(counter==5){

document.getElementById('text2').innerHTML="When did Munich Air Disaster happen?";
document.getElementById('quizbutton').innerHTML="Next question";
document.getElementById('option1').style.display="block";
document.getElementById('option2').style.display="block";
document.getElementById('option3').style.display="block";
document.getElementById('option4').style.display="block";
document.getElementById('option1').innerHTML="December '48";
document.getElementById('option2').innerHTML="February '58";
document.getElementById('option3').innerHTML="March '50";
document.getElementById('option4').innerHTML="January '55";
key=2;} 
else if(counter==6){

document.getElementById('text2').innerHTML="First Captain outside UK or Ireland?";
document.getElementById('quizbutton').innerHTML="Next question";
document.getElementById('option1').style.display="block";
document.getElementById('option2').style.display="block";
document.getElementById('option3').style.display="block";
document.getElementById('option4').style.display="block";
document.getElementById('option1').innerHTML="Cantona";
document.getElementById('option2').innerHTML="Ronaldo";
document.getElementById('option3').innerHTML="G.Neville";
document.getElementById('option4').innerHTML="Nistelroy";
key=1;} 
else if(counter==7){

document.getElementById('text2').innerHTML="What do Ronaldo,Cantona and Chicharito have in common?";
document.getElementById('quizbutton').innerHTML="Next question";
document.getElementById('option1').style.display="block";
document.getElementById('option2').style.display="block";
document.getElementById('option3').style.display="block";
document.getElementById('option4').style.display="block";
document.getElementById('option1').innerHTML="Same Middle Name";
document.getElementById('option2').innerHTML="wore number 7";
document.getElementById('option3').innerHTML="hit an oposing fan";
document.getElementById('option4').innerHTML="impressive game against United";
key=4;} 
else {

document.getElementById('text2').innerHTML="Which side has GIggs scored most goal against?";
document.getElementById('quizbutton').innerHTML="Next question";
document.getElementById('option1').style.display="block";
document.getElementById('option2').style.display="block";
document.getElementById('option3').style.display="block";
document.getElementById('option4').style.display="block";
document.getElementById('option1').innerHTML="Spurs";
document.getElementById('option2').innerHTML="Midlesbrough";
document.getElementById('option3').innerHTML="Manchester City";
document.getElementById('option4').innerHTML="Everton ";
key=1;} 


 
}

function option1(){
ans=1;
document.getElementById('option1').style.background
if(key==ans)
{
alert('The answer is right');
score++;
document.getElementById('option1').style.backgroundColor="green";

}
else 
{
alert('OOps.!Wrong');
}

if(counter==8)
{ 
 alert('Your score is '+score+'.!');
 goback();
 score=0;
 counter=0;
}
}
function option2(){
ans=2;
if(key==ans)
{
score++;
alert('The answer is right');

document.getElementById('option2').style.backgroundColor="green";
}
else 
{
alert('OOps.!Wrong');
}

if(counter==8)
{ 
 alert('Your score is '+score+'.!');
 goback();
 score=0;
 counter=0;
}
}
function option3(){
ans=3;
if(key==ans)
{
score++;
alert('The answer is right');

document.getElementById('option3').style.backgroundColor="green";
}
else 
{
alert('OOps.!Wrong');
}

if(counter==8)
{ 
 alert('Your score is '+score+'.!');
 goback();
 score=0;
 counter=0;
}
}
function option4(){
ans=4;
if(key==ans)
{
score++;
alert('The answer is right');

document.getElementById('option4').style.backgroundColor="green";
}
else 
{

alert('OOps.!Wrong');
}

if(counter==8)
{ 
 alert('Your score is '+score+'.!');
 goback();
 score=0;
 counter=0;
}
}



function manuhover(){
 document.getElementById('image0001').style.display="none";
		document.getElementsByClassName("siteheader")[0].style.backgroundColor="#DF1A23";

		document.getElementById('text').style.display="block";
		
}


function manuhoverremover(){
document.getElementById('image0001').style.display="block";
		document.getElementById('text').style.display="none";
}



