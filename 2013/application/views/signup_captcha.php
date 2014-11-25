<div class="captcha_main_div">
<center>
<div class="captcha_container">











<?php echo $captcha_img;?>






<br/>

<input type="text" name="captcha_text" class="captcha_text" placeholder="type the above word(s) here" />


</div>
</center>


</div>


<style>

.captcha_table
{
	background-image:url("<?php echo base_url();?>img/bg2.png");
	overflow:hidden;
	display:block;
	border-collapse:collapse;
	border:none;

	}
.captcha_main_div
{
	
	}

.captcha_top_bar_td
{
	color:rgba(0,0,0,.8);
	text-shadow: 0pt 0pt 0pt transparent, 0pt 1px 0pt rgba(255, 255, 255, 0.25);
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight:bold;
	font-size:14px;
	text-align:center;
	background:-moz-linear-gradient(top, #777 0%, #555 100%);
	background:-linear-gradient(top, #777 0%, #555 100%);
	background:-webkit-linear-gradient(top, #777 0%, #555 100%);
	background:-o-linear-gradient(top, #777 0%, #555 100%);
	-moz-border-radius:5px 5px 0px 0px ;
	border-radius:5px 5px 0px 0px ;
	-webkit-border-radius: 5px 5px 0px 0px;
	border:1px solid #666;
	-webkit-box-shadow:0px 0px 15px #555,inset 0 1px 1px rgba(255,255,255,.5);
	-moz-box-shadow:0px 0px 15px #555,inset 0 1px 1px rgba(255,255,255,.5);
	box-shadow:0px 0px 15px #555,inset 0 1px 1px rgba(255,255,255,.6);

	height:40px;
	
	}
	
.captcha_bottom_bar_td
{
	background:-moz-linear-gradient(top, #777 0%, #555 100%);
	background:-linear-gradient(top, #777 0%, #555 100%);
	background:-webkit-linear-gradient(top, #777 0%, #555 100%);
	background:-o-linear-gradient(top, #777 0%, #555 100%);
	-moz-border-radius: 0px 0px 5px 5px;
	border-radius: 0px 0px 5px 5px;
	-webkit-border-radius: 0px 0px 5px 5px;

	-webkit-box-shadow:0px 0px 15px #555,inset 0 1px 1px rgba(255,255,255,.5);
	-moz-box-shadow:0px 0px 15px #555,inset 0 1px 1px rgba(255,255,255,.5);
	box-shadow:0px 0px 15px #555,inset 0 1px 1px rgba(255,255,255,.6);
	border:1px solid #666;
	height:40px;
	}
.captcha_image_td
{
	background-color:#fff;
	height:50px;
	border:none;
	min-width:100px;
	}
.captcha_border_td
{
	width:30px;
	border:none;
	}
	
	
	
.captcha_text
{
	background:#fff;
	height:30px;
	width:200px;
	opacity:.8;
	font-size:12px;
	border: 1px #ccc solid;
	padding-left:5px;
	border-radius:3px;
	-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
	-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
	box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
	cursor: text;
	outline:none;
	-webkit-transition:opacity .5s;
	-webkit-transition:border .5s; 
	-moz-transition:border .5s;}
	}
.captcha_text:hover
{
	border: 1px #ddd solid;
	-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
	-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
	box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
	border: 1px #c9c9c9 solid;
	opacity:.9;
	}	

.captcha_text:focus
{
	-webkit-box-shadow:0px 0px 20px rgba(255,255,255,1),inset 0 1px 1px rgba(0,0,0,.5);
	-moz-box-shadow:0px 0px 20px rgba(255,255,255,1),inset 0 1px 1px rgba(0,0,0,.5);
	box-shadow:0px 0px 20px rgba(255,255,255,1),inset 0 1px 1px rgba(0,0,0,.5);
	color:#555;
	opacity:1;
	background: #fff;
	outline:none;
	border: 1px #fff solid;}






</style>