<html>
	<head>
	
	<style type="text/css">
@font-face {
    font-family: 'LigatureSymbols';
    src: url('<?php echo base_url();?>font/LigatureSymbols-2.11.eot');
    src: url('<?php echo base_url();?>font/LigatureSymbols-2.11.eot?#iefix') format('embedded-opentype'),
         url('<?php echo base_url();?>font/LigatureSymbols-2.11.woff') format('woff'),
         url('<?php echo base_url();?>font/LigatureSymbols-2.11.ttf') format('truetype'),
         url('<?php echo base_url();?>font/LigatureSymbols-2.11.svg#LigatureSymbols') format('svg');
    src: url('<?php echo base_url();?>font/LigatureSymbols-2.11.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
	
}


.lsf, .lsf-icon:before {
	
	text-align: center;
  font-family: 'LigatureSymbols';
  -webkit-text-rendering: optimizeLegibility;
  -moz-text-rendering: optimizeLegibility;
  -ms-text-rendering: optimizeLegibility;
  -o-text-rendering: optimizeLegibility;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -ms-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
}

.lsf-icon:before {
  content:attr(title);
  margin-right:0.3em;
}

.lsf-icon.down:before {
  content: '\E00b';
  font-size: 56px;
	color: #fff;
	margin-left: 18px;
}

	#header
			{
					width: 100%;
					height: 10px;
					background-color: #000;										
				}
				body
				{
				margin: 0;	
				
				background-color: #f7f7f7;				
					}
				#right
					
					{
					position: fixed;
					left: 45%;
					width: 55%;		
					overflow: scroll;
					height: 101%;					
					}
					#left
					{
					position: fixed;
					left: 0;
						
						width: 50%;		
						height: 100%;			
						}
						
						#left img
						{
							position: fixed;
							left: 0;
							top: 10px;
							width: 45%;
							height: 100%;							
							}
textarea
								{
									width: 250px;
									padding: 6px;
									height: 100px;									
									}	
									input, textarea { 
	padding: 9px;
	border: solid 1px #E5E5E5;
	outline: 0;
	font: normal 13px/100% Verdana, Tahoma, sans-serif;
	background: #FFFFFF left top repeat-x;
	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF));
	background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px);
	box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	-moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	-webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	}

textarea { 
	width:100%;
	max-width: 400px;
	height: 150px;
	margin: 0;
padding: 8px 8px;
background: white;
border: 1px solid #D9D9D9;
border-top: 1px solid silver;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 1px;
	}
input
{
inherit:none;
display: inline-block;
height: 35px;
width:300px;
margin: 0;
padding: 0 8px;
background: white;
border: 1px solid #D9D9D9;
border-top: 1px solid silver;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
border-radius: 2px;

}
input:hover, textarea:hover,
input:focus, textarea:focus { 
	border-color: #C9C9C9; 
	-webkit-box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 8px;
	}

label {  
	color: #999999;
	font-family:Tahoma;	
	}
.submit{
	width: auto;
	padding: 9px 15px;
	background: #617798;


	font-size: 15px;
	color: #FFFFFF;
	text-decoration:none;
	margin-top:10px;
	}
input [type=submit]{
	width: auto;
	padding: 9px 15px;
	background: #617798;
	border: 0;
	font-size: 14px;
	color: #FFFFFF;
	
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	}
.error
{
	color:red;
	font-family:Tahoma;
	font-size:15px;
}
#head_right
{
	height:100%;
	color:#fff;
	padding-top:10px;
	background:#000;
	width:100%;
}
#head_right h1
{
	margin-top:26%;
	margin-left:12%;
	font-family: 'Skranji', cursive;
	font-size:65px;
}
form
{
	margin-left:10%;
	margin-top:10%;
}
</style>
<link href='http://fonts.googleapis.com/css?family=Skranji' rel='stylesheet' type='text/css'>

		</head>
	<body>
	<div id="header"></div>
	<div id="left"><img src="<?php echo base_url();?>images/raghu.png" alt="roadster" /><p style="z-index:200;margin-top:10px;"><a href="" class="submit" >Back to main page</a></p></div>
	
	<div id="right">
		<div id="head_right"><h1>&nbsp;&nbsp;&nbsp;CETROADSTERS <br/>ONLINE &nbsp;AUDITION</h1>
		<p class="lsf-icon down" style="margin-left:40%;margin-top:20%;font-family: 'Skranji', cursive;
	font-size:45px;"></p><p style="margin-left:32%;margin-top:-22%;font-family: 'Skranji', cursive;
	font-size:40px;">scroll down</p>	
	</div>
	<?php         $this->load->helper('form');
        echo form_open('controller/reg');
?>
		<p>
			<label for="name">Name</label><br/>
			<input type="text" name="name"/>
			<?php echo form_error('name'); ?>
		</p>      
		<p>
			<label for="email">Email</label><br/>
			<input type="email" name="email"/>
			<?php echo form_error('email'); ?>
		</p>      
		<p>
			<label for="sex">Sex</label><br/>
			<input type="text" name="sex"/>
			<?php echo form_error('sex'); ?>
		</p>      
		<p>
			<label for="age">Age</label><br/>
			<input type="text" name="age"/>
			<?php echo form_error('age'); ?>
		</p>      
		<p>
			<label for="q1">Q1 : Most craziest thing you have done in your life</label><br/>
			<textarea name="q1"></textarea>
			<?php echo form_error('q1'); ?>
		</p>      
		<p>
			<label for="q2">Q2 : What is more important to you , Success or respect ?</label><br/>
			<textarea name="q2"></textarea>
			<?php echo form_error('q2'); ?>
		</p>      
<p>
			<label for="q3">Q3 : Adventure to me , Means :</label><br/>
			<textarea name="q3"></textarea>
			<?php echo form_error('q3'); ?>
		</p>      
<p>
			<label for="q4">Q4 : First thing you see when you look around</label><br/>
				<textarea name="q4"></textarea>
					<?php echo form_error('q4'); ?>
		</p>      
<p>
			<label for="q5">Q5 : Your role model.... Why?</label><br/>
			<textarea name="q5"></textarea>
			<?php echo form_error('q5'); ?>
		</p>      
<p>
			<label for="q6">Q6 : Why are you here :P ??</label><br/>
			<textarea name="q6"></textarea>
			<?php echo form_error('q6'); ?>
		</p>      
<p>
			<label for="q7">Q7 : Expand SEX :</label><br/>
			<textarea name="q7"></textarea>
			<?php echo form_error('q7'); ?>
		</p>      
<p>
			<label for="q8">Q8 : What is the best thing about you ?</label><br/>
			<textarea name="q8"></textarea>
			<?php echo form_error('q8'); ?>
		</p>      
<p>
			<label for="q9">Q9 : have you ever flirted on Internet ?</label><br/>
			<textarea name="q9"></textarea>
			<?php echo form_error('q9'); ?>
		</p>      
<p>
			<label for="q10">Q10 : What do you like about Indian culture ?</label><br/>
			<textarea name="q10"></textarea>
			<?php echo form_error('q10'); ?>
		</p>      
		<p>
			<label for="q11">Q11 : Tell us why you should not be selected ???</label><br/>
			<textarea name="q11"></textarea>
			<?php echo form_error('q11'); ?>
		</p>      


		<p>
		<input type="submit" class="submit"value="Submit" />
		</p>
	</div>
	<?php echo form_close(); ?>
	<br/>
		
		</form>
	</body>
</html>