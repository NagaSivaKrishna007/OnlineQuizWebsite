<html>
	<head>
		<title>Siva</title>
		<style>
			h2{
				background-color:#bdcbd6;
				padding:10px 20px 10px 20px;
				border-radius:5px;
				width:75%
			}
			.fsSubmitButton
{
padding: 20px 40px ;
font-size: 21px !important;
background-color: #DD4B39;
font-weight: bold;
text-shadow: 1px 1px #DD4B39;
color: #ffffff;
border-radius: 100px;
-moz-border-radius: 100px;
-webkit-border-radius: 100px;
border: 1px solid #DD4B39;
cursor: pointer;
}
.fsPrevNextButton
{
padding: 12px 25px;
font-size: 20px !important;
background-color: #22B11B;
text-shadow: 1px 1px #000000;
color: #ffffff;
border-radius: 10px;
border: 1px solid #000000;
cursor: pointer;
}
.fsNextPrevButton
{
padding: 12px 25px;
font-size: 20px !important;
background-color: #3B5998;
text-shadow: 1px 1px #000000;
color: #ffffff;
border-radius: 10px;
border: 1px solid #000000;
cursor: pointer;
}
.fsReviewButton
{
padding: 12px 25px;
font-size: 20px !important;
background-color: #ff9600;
text-shadow: 1px 1px #000000;
color: #ffffff;
border-radius: 10px;
border: 1px solid #000000;
cursor: pointer;
}
input[type=text] {
    width: 78%;
    padding: 15px;
	font-size:15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
	border-radius:5px;
    background: #bdcbd6;;
}
input[type=text]:focus{
    background-color: #ddd;
    outline: none;
}

			body{
					padding: 0px;
					background-color:#FFFFFF;
					background-repeat: no-repeat;
					background-size: cover;
					background-attachment:fixed;
					overflow:hidden;
			}
			button {
				  border-style:groove;
				  margin:5px;
				  border: 5px;
				  outline: auto;
				  border-radius:5px;
				  border-color:red;
				  width:5%;
				  background-color:#FFFFFF;
				  box-shadow: 3px 6px 3px #F1F8E9;
				  color: #505050;
				  cursor: pointer;
				  font: inherit;
				  padding:10px 20px 10px 20px;
				  transition: all .1s linear;
				  position : fixed;
				}
			button:focus
				{
				box-shadow: 0 3px 0 #FFFFFF;
				transform: translateY(5px);
				background-color:#3B5998;
				color:#FFFFFF;
				position : fixed;
				}
			 h1   {
				    color:#FFFFFF; 
					background-color:#DD4B39;
					text-align:center;
					margin:0px;
					width:100%;
					font-size:40px;
					position:fixed;
					}
			
		</style>

	</head>
	<body onload=s()>
	<script>
	var timeleft = 300;
	function s() {
    var result = checkTime(parseInt(timeleft / 60)) + ':' + checkTime(timeleft % 60); //formart seconds back into mm:ss 
	document.getElementById('timer').innerHTML=result;
	timeleft=timeleft-1;
	if(parseInt((timeleft/60))== 0 && (timeleft%60)==0)
		myStopFunction();
	}
	function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
	}
	var myVar=setInterval(s,1000);
	function myStopFunction() {
		clearInterval(myVar);
		window.location="timeup.php";
	}
	</script>
<script>
	function myFunction() {
	var rates = document.getElementsByName(arguments[0]);
	var rate_value;
	for(var i = 0; i < rates.length; i++){
		if(rates[i].checked){
		if(arguments[0]=="first"){
			document.getElementById('b1').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="second"){
			document.getElementById('b2').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="third"){
			document.getElementById('b3').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="fourth"){
			document.getElementById('b4').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="fifth"){
			document.getElementById('b5').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="sixth"){
			document.getElementById('b6').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="seventh"){
			document.getElementById('b7').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="eighth"){
			document.getElementById('b8').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="ninth"){
			document.getElementById('b9').style.backgroundColor="#22B11B";
		}
		if(arguments[0]=="tenth"){
			document.getElementById('b10').style.backgroundColor="#22B11B";
		}
		break;
    }
}
	}
	function myfun(){
		var c1,c2,c3,c4,c5,c6,c7,c8,c9,c10;
		c1=0;c2=0;c3=0;c4=0;c5=0;c6=0;c7=0;c8=0;c9=0;c10=0;
		var rates1 = document.getElementsByName('first');
		var rates2 = document.getElementsByName('second');
		var rates3 = document.getElementsByName('third');
		var rates4 = document.getElementsByName('fourth');
		var rates5 = document.getElementsByName('fifth');
		var rates6 = document.getElementsByName('sixth');
		var rates7 = document.getElementsByName('seventh');
		var rates8 = document.getElementsByName('eighth');
		var rates9 = document.getElementsByName('ninth');
		var rates10 = document.getElementsByName('tenth');
		for(var i = 0; i < rates1.length; i++){
		if(rates1[i].checked){
				if(c1==0)
					c1=1;
				break;
			}
		}
		for(var i = 0; i < rates2.length; i++){
		if(rates2[i].checked){
				if(c2==0)
					c2=1;
				break;
			}
		}
		for(var i = 0; i < rates3.length; i++){
		if(rates3[i].checked){
				if(c3==0)
					c3=1;
				break;
			}
		}
		for(var i = 0; i < rates4.length; i++){
		if(rates4[i].checked){
				if(c4==0)
					c4=1;
				break;
			}
		}
		for(var i = 0; i < rates5.length; i++){
		if(rates5[i].checked){
				if(c5==0)
					c5=1;
				break;
			}
		}
		for(var i = 0; i < rates6.length; i++){
		if(rates6[i].checked){
				if(c6==0)
					c6=1;
				break;
			}
		}
		for(var i = 0; i < rates7.length; i++){
		if(rates7[i].checked){
				if(c7==0)
					c7=1;
				break;
			}
		}
		for(var i = 0; i < rates8.length; i++){
		if(rates8[i].checked){
				if(c8==0)
					c8=1;
				break;
			}
		}
		for(var i = 0; i < rates9.length; i++){
		if(rates9[i].checked){
				if(c9==0)
					c9=1;
				break;
			}
		}
		for(var i = 0; i < rates10.length; i++){
		if(rates10[i].checked){
				if(c10==0)
					c10=1;
				break;
			}
		}
		var c = c1+c2+c3+c4+c5+c6+c7+c8+c9+c10;
		document.getElementById('count').innerHTML="Answered : "+ c +"<br><br>"+"Unanswered : "+(10-c);
	}
	function myFunction1() {
	var rates = document.getElementsByName(arguments[0]);
	var rate_value;
	for(var i = 0; i < rates.length; i++){
		if(rates[i].checked){
		if(arguments[0]=="first"){
			document.getElementById('b1').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="second"){
			document.getElementById('b2').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="third"){
			document.getElementById('b3').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="fourth"){
			document.getElementById('b4').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="fifth"){
			document.getElementById('b5').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="sixth"){
			document.getElementById('b6').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="seventh"){
			document.getElementById('b7').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="eighth"){
			document.getElementById('b8').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="ninth"){
			document.getElementById('b9').style.backgroundColor="#ff9600";
		}
		if(arguments[0]=="tenth"){
			document.getElementById('b10').style.backgroundColor="#ff9600";
		}
		break;
		}
	}
}
</script>
	<h1><center>GO QUIZ</center></h1><div style="margin-left:87%;position:fixed;font-size:40px;"><a href="logout.php">LOGOUT</a></div>
	<br><br><br><br>
	<h1><div style="margin-left:85%;position:fixed;color:#8c4a62;font-size:50px" id="timer"></div></h1><br><br><br><br><br><br>
	<h1><div style="margin-left:80%;position:fixed;color:#8c4a62;font-size:30px"id="count"></div></h1>
	<div style="margin-left:81%">
			<br><br><br><br><br><br><br><br><br>
		    <a href="#q1" style="font-size:20px;font-family: 'Delius Unicase', cursive;"><button id="b1">01</button>&emsp;&emsp;&emsp;&emsp;</a>
			<a href="#q2" style="font-size:20px;font-family: 'Delius Unicase', cursive;"><button id="b2">02</button>&emsp;&emsp;&emsp;&emsp;</a>
			<a href="#q3" style="font-size:20px;font-family: 'Delius Unicase', cursive;"><button id="b3">03</button><br><br></a>
			<a href="#q4" style="font-size:20px;font-family: 'Delius Unicase', cursive;"><button id="b4">04</button>&emsp;&emsp;&emsp;&emsp;</a>
			<a href="#q5" style="font-size:20px;font-family: 'Delius Unicase', cursive;"><button id="b5">05</button>&emsp;&emsp;&emsp;&emsp;</a>
			<a href="#q6" style="font-size:20px;font-family: 'Delius Unicase', cursive;"><button id="b6">06</button><br><br></a>
			<a href="#q7" style="font-size:20px;font-family: 'Delius Unicase', cursive;"><button id="b7">07</button>&emsp;&emsp;&emsp;&emsp;</a>
			<a href="#q8" style="font-size:20px;font-family: 'Delius Unicase', cursive;"><button id="b8">08</button>&emsp;&emsp;&emsp;&emsp;</a>
			<a href="#q9" style="font-size:20px;font-family: 'Delius Unicase', cursive;"><button id="b9">09</button><br><br></a>
			&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<a href="#q10" style="font-size:20px;font-family: 'Delius Unicase', cursive;"><button id="b10">10</button><br><br></a>
		</div>
		<form action="student.php" method="post">
			<div id='q1'style="margin-left:5%;color:#424242;">
			
		<br><br><br>
        <input type='text' name='id' placeholder='Enter your unique id here'>
		<p style='font-family:Berlin Sans FB;font-size:35px'>Question 1</p>
		<h2 style='font-family: Calibri'>1) HTML stands for ?<br></h2>
		<h3 style='font-family:Candara'> <input type="radio" name="first" value="1"> Hyper Text Making Language<br><br>
		 <input type="radio" name="first" value="2"> Header Text Marking Language<br><br>
		 <input type="radio" name="first" value="3"> High Text Moulding Language<br><br>
		 <input type="radio" name="first" value="4"> Hyper Text Markup Language<br><br><br>
		 <a href="#q2" style="margin-left:33%" class="fsReviewButton" onclick="myFunction1('first');myfun();">Review & Next</a>
		 <a href="#q2" style="margin-left:18%" class="fsPrevNextButton" onclick="myFunction('first');myfun()">Save & Next</a><br><br><br><br><br><br><br><br><br></h3>
		  </div>
		  <div id='q2'style="margin-left:5%;color:#424242;">
		  <br><br><br><br>
		  <p style='font-family:Berlin Sans FB;font-size:35px'>Question 2</p>
		 <h2 style='font-family: Calibri'>2) Who is the first Vice-President of INDIA ?<br></h2>
		 <h3 style='font-family:Candara'><input type="radio" name="second" value="1">Mahatma Gandhi<br><br>
		  <input type="radio" name="second" value="2">JawaharLal Nehru<br><br>
		  <input type="radio" name="second" value="3">Sardar Vallabhbhai Patel<br><br>
		  <input type="radio" name="second" value="4">Lal Bahdhur Shastri<br><br><br>
		   <a href="#q1" class="fsNextPrevButton">Prev</a>
		   <a href="#q3" style="margin-left:23%" class="fsReviewButton" onclick="myFunction1('second');myfun()">Review & Next</a>
		   <a href="#q3"style="margin-left:21%" class="fsPrevNextButton" onclick="myFunction('second');myfun()">Save & Next</a><br><br><br><br><br><br><br><br><br>
		  </h3>
		  </div>
		  <div id='q3'style="margin-left:5%;position:centered;color:#424242;">
		  <br><br><br><br>
		  <p style='font-family:Berlin Sans FB;font-size:35px'>Question 3</p>
		 <h2 style='font-family: Calibri'>3) Which king died while playing POLO ?<br></h2>
		 <h3 style='font-family:Candara'><input type="radio" name="third" value="1">Babar<br><br>
		  <input type="radio" name="third" value="2">Humayun<br><br>
		  <input type="radio" name="third" value="3">Muhammad-Bin-Tughluq<br><br>
		  <input type="radio" name="third" value="4">Qutubuddin Ibaq<br><br><br>
		  <a href="#q2" class="fsNextPrevButton">Prev</a>
		  <a href="#q4" style="margin-left:23%" class="fsReviewButton" onclick="myFunction1('third');myfun()">Review & Next</a>
		   <a href="#q4"style="margin-left:21%" class="fsPrevNextButton" onclick="myFunction('third');myfun()">Save & Next</a><br><br><br><br><br><br><br><br><br>
		  </h3>
		  </div>
		  <div id='q4'style="margin-left:5%;color:#424242;">
		  <br><br><br><br>
		  <p style='font-family:Berlin Sans FB;font-size:35px'>Question 4</p>
		 <h2 style='font-family: Calibri'>4) TajMahal is in which state ?<br></h2>
		 <h3 style='font-family:Candara'><input type="radio" name="fourth" value="1">New Delhi<br><br>
		  <input type="radio" name="fourth" value="2">Uttar Pradesh<br><br>
		  <input type="radio" name="fourth" value="3">Haryana<br><br>
		  <input type="radio" name="fourth" value="4">Uttarakhand<br><br><br>
		  <a href="#q3" class="fsNextPrevButton">Prev</a>
		  <a href="#q5" style="margin-left:23%" class="fsReviewButton" onclick="myFunction1('fourth');myfun()">Review & Next</a>
		   <a href="#q5"style="margin-left:21%" class="fsPrevNextButton" onclick="myFunction('fourth');myfun()">Save & Next</a><br><br><br><br><br><br><br><br><br>
		  </h3>
		  </div>
		  <div id='q5'style="margin-left:5%;color:#424242;">
		  <br><br><br><br>
		  <p style='font-family:Berlin Sans FB;font-size:35px'>Question 5</p>
		 <h2 style='font-family: Calibri'>5) 12 * 2 / 2 + 33 - 10 / 5 = ?<br></h2>
		 <h3 style='font-family:Candara'> <input type="radio" name="fifth" value="1">7<br><br>
		  <input type="radio" name="fifth" value="2">43<br><br>
		  <input type="radio" name="fifth" value="3">6<br><br>
		  <input type="radio" name="fifth" value="4">45<br><br><br>
		  <a href="#q4" class="fsNextPrevButton">Prev</a>
		  <a href="#q6" style="margin-left:23%" class="fsReviewButton" onclick="myFunction1('fifth');myfun()">Review & Next</a>
		   <a href="#q6" style="margin-left:21%" class="fsPrevNextButton" onclick="myFunction('fifth');myfun()">Save & Next</a><br><br><br><br><br><br><br><br><br>
		  </h3>
		  </div>
		  <div id='q6'style="margin-left:5%;color:#424242;">
		  <br><br><br><br>
		  <p style='font-family:Berlin Sans FB;font-size:35px'>Question 6</p>
		 <h2 style='font-family: Calibri'>6) Which replaced Planning Commission ?<br></h2>
		 <h3 style='font-family:Candara'><input type="radio" name="sixth" value="1">NITI Ayaog<br><br>
		  <input type="radio" name="sixth" value="2">Financial Commission<br><br>
		  <input type="radio" name="sixth" value="3">Planning Commission Returns<br><br>
		  <input type="radio" name="sixth" value="4">National Financial Assosciation<br><br><br>
		  <a href="#q5" class="fsNextPrevButton">Prev</a>
		  <a href="#q7" style="margin-left:23%" class="fsReviewButton" onclick="myFunction1('sixth');myfun()">Review & Next</a>
		   <a href="#q7" style="margin-left:21%" class="fsPrevNextButton" onclick="myFunction('sixth');myfun()">Save & Next</a><br><br><br><br><br><br><br><br><br>
		  </h3>
		  </div>
		  <div id='q7'style="margin-left:5%;color:#424242;">
		  <br><br><br><br>
		  <p style='font-family:Berlin Sans FB;font-size:35px'>Question 7</p>
		 <h2 style='font-family: Calibri'>7) Where is AbdulKalam Island ?<br></h2>
		 <h3 style='font-family:Candara'><input type="radio" name="seventh" value="1">Kerala<br><br>
		  <input type="radio" name="seventh" value="2">Tamilnadu<br><br>
		  <input type="radio" name="seventh" value="3">Andhra Pradesh<br><br>
		  <input type="radio" name="seventh" value="4">Orissa<br><br><br>
		  <a href="#q6" class="fsNextPrevButton">Prev</a>
		  <a href="#q8" style="margin-left:23%" class="fsReviewButton" onclick="myFunction1('seventh');myfun()">Review & Next</a>
		   <a href="#q8" style="margin-left:21%" class="fsPrevNextButton" onclick="myFunction('seventh');myfun()">Save & Next</a><br><br><br><br><br><br><br><br><br>
		  </h3>
		  </div>
		  <div id='q8'style="margin-left:5%;color:#424242;">
		  <br><br><br><br>
		  <p style='font-family:Berlin Sans FB;font-size:35px'>Question 8</p>
		 <h2 style='font-family: Calibri'>8) What is the reason for Mirages ?<br></h2>
		 <h3 style='font-family:Candara'><input type="radio" name="eighth" value="1">Interference<br><br>
		  <input type="radio" name="eighth" value="2">Diffraction<br><br>
		  <input type="radio" name="eighth" value="3">Polarisation<br><br>
		  <input type="radio" name="eighth" value="4">Total Internal Reflection<br><br><br>
		  <a href="#q7" class="fsNextPrevButton">Prev</a>
		  <a href="#q9" style="margin-left:23%" class="fsReviewButton" onclick="myFunction1('eighth');myfun()">Review & Next</a>
		   <a href="#q9" style="margin-left:21%" class="fsPrevNextButton" onclick="myFunction('eighth');myfun()">Save & Next</a><br><br><br><br><br><br><br><br><br>
		  </h3>
		  </div>
		  <div id='q9'style="margin-left:5%;color:#424242">
		  <br><br><br><br>
		  <p style='font-family:Berlin Sans FB;font-size:35px'>Question 9</p>
		 <h2 style='font-family: Calibri'>9) Why apple pieces change their colour when kept aside because of _____?<br></h2>
		 <h3 style='font-family:Candara'><input type="radio" name="ninth" value="1">Bacteria in air<br><br>
		  <input type="radio" name="ninth" value="2">Formation of Phenols<br><br>
		  <input type="radio" name="ninth" value="3">Unhygenic knives<br><br>
		  <input type="radio" name="ninth" value="4">None of the above<br><br><br>
		  <a href="#q8" class="fsNextPrevButton">Prev</a>
		  <a href="#q10" style="margin-left:23%" class="fsReviewButton" onclick="myFunction1('ninth');myfun()">Review & Next</a>
		   <a href="#q10" style="margin-left:21%" class="fsPrevNextButton" onclick="myFunction('ninth');myfun()">Save & Next</a><br><br><br><br><br><br><br><br><br>
		  </h3>
		  </div>
		  <div id='q10'style="margin-left:5%;color:#424242;">
		  <br><br><br><br>
		  <p style='font-family:Berlin Sans FB;font-size:35px'>Question 10</p>
		 <h2 style='font-family: Calibri'>10) The taste of meat is ?<br></h2>
		 <h3 style='font-family:Candara'><input type="radio" name="tenth" value="1">Miami<br><br>
		  <input type="radio" name="tenth" value="2">Bitter<br><br>
		  <input type="radio" name="tenth" value="3">Spicy<br><br>
		  <input type="radio" name="tenth" value="4">Umami<br><br><br>
		  <a href="#q9" class="fsNextPrevButton">Prev</a>
		  <a href="#q9" style="margin-left:26%" class="fsReviewButton" onclick="myFunction1('tenth');myfun()">Review & Prev</a><br><br><br>
		  </h3>
		  </div>
		 <div style="margin-left:37%"><input type="submit" name='submit' value="SUBMIT" class="fsSubmitButton"></div><br><br><br><br>
		 </form>
	</body>
</html>
