<?php include('header.php');?>
<!--header start end--> 
<!--inner heading start-->

<div class="inner-heading">
  <div class="container">
    <h1>Procedure</h1>
  </div>
</div>
<!--inner heading end--> 

<!--about start-->
<html>
<div class="inner-wrap about">
<div class="container">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/style.css">
<title>Quiz</title>
<style>
	
	
@media screen and (min-width: 601px) {
form p{font-size:1em; text-align: left; position: relative;left: 30%; width: 76%;}
		.options {
			
			font-size:1.2em;
			text-align: left;
			line-height: 2em;
		
		}
			.col-md-8{border:2px solid black; padding: 3%; border-radius:3%; }
		
		input , label {
				  position: relative;
				  left: 30%;
		}
	
	.procedure-button{margin: auto;}
	
	
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #4BD740;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 1.5em;
  padding: 2%;
  width: 20%;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 5%;
	position: relative;left: 20%; 
  box-shadow: 0 5px #666;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
	
}

@media screen and (max-width: 600px) {
	.options {
			
			font-size:1em;
			text-align: left;
			line-height: 1em;
		
		}
		input , label {
				  position: relative;
				  left: 30%;
		}
	.col-md-8{border:2px solid black; padding: 3%; border-radius:3%; }
	form p{font-size:0.8em; text-align: left; position: relative;left: 30%;width: 76%;}
		.options {
			
			font-size:0.5em;
			text-align: left;
			line-height: 2em;
		
		}
	  
	  
	  .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #4BD740;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 1em;
  padding: 2%;
  width: 10%;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 5%;
  position: relative;left: 30%; 
  box-shadow: 0 5px #666;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

	  
}

</style>
</head>
<body>
																									
	
	<div class="col-md-2"></div>
		<div class="col-md-8">

		<form  class="test-display">  				
			
			
				<h3><br><p>What is your name?</p></h3>
				
				<div class="options">
				<input required type="radio"  value =" Option 1">&nbsp;<label> Shesh </label> <br>
				<input required type="radio"  value =" Option 2">&nbsp;<label> Amir </label> <br>
				<input required type="radio"  value =" Option 3">&nbsp;<label> Dave </label> <br>
				<input required type="radio"  value = "Option 4">&nbsp;<label> Dan </label><br>
				</div>
				
				<div class="options">
				<h3><br><p>What is your favorite animal?</p></h3>
				
				<input required type="radio"  value =" Option 1">&nbsp;<label> Dog </label><br>
				<input required type="radio"  value =" Option 2">&nbsp;<label> Cat </label> <br>
				<input required type="radio"  value =" Option 3">&nbsp;<label> Fish </label> <br>
				<input required type="radio"  value = "Option 4">&nbsp;<label> Snake </label><br>
				</div>
				
				<div class="options">
				<h3><br><p> Whats your favorite color?</p></h3>
				
				<input required type="radio"  value =" Option 1">&nbsp;<label> Red </label><br>
				<input required type="radio"  value =" Option 2">&nbsp;<label> Yellow </label> <br>
				<input required type="radio"  value =" Option 3">&nbsp;<label> Blue </label> <br>
				<input required type="radio"  value = "Option 4">&nbsp;<label> Green </label><br>
				</div>
					<div class="options">
				<h3><br><p>Where are you from?</p></h3>
				
				<input required type="radio"  value =" Option 1">&nbsp;<label> India </label><br>
				<input required type="radio"  value =" Option 2">&nbsp;<label> Iran </label> <br>
				<input required type="radio"  value =" Option 3">&nbsp;<label> Australia </label> <br>
				<input required type="radio"  value = "Option 4">&nbsp;<label> New Zealand </label>	<br>
				</div>
				
				<button class="button" style="vertical-align:middle"><span>Submit </span></button>
		
			
		<form> 
		<div class="col-md-2"></div>
	</div>
</div>
</div>


<?php include('footer.php');?>
</body>

</html>  
   
    
<!--about end--> 

<!--footer start-->

