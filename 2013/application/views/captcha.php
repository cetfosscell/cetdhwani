<div class="captcha_main_div">
<center>
<div class="captcha_container">

<form action="captcha" method="post">

<table class="captcha_table">
<tr class="captcha_top_bar">
<td colspan="7" class="captcha_top_bar_td"> Are You Human??</td>
</tr>
<tr>
<td class="captcha_seperator_td" colspan="7" style="height:15px;">
</td>
</tr>
<tr class="captcha_image_tr">
<td class="captcha_border_td">
</td>
<td class="captcha_image_td" colspan="5"><?php echo $captcha_img;?>
</td>
<td class="captcha_border_td">
</td>
</tr>


<tr>
<td class="captcha_seperator_td" colspan="7" style="height:15px;">
</td>
</tr>

<tr class="captcha_text_tr">
<td class="captcha_border_td">
</td>
<td class="captcha_text_td" colspan="5">

<input type="text" name="captcha_text" class="captcha_text" placeholder="type the above word(s) here" />
</td>
<td class="captcha_border_td">
</td>
</tr>

<tr>
<td class="captcha_seperator_td" colspan="7" style="height:15px;border:none;">
</td>
</tr>


<tr class="captcha_button_tr">
<td class="captcha_border_td">
</td>
<td>
    <button class="captcha_button" style="width:67px;" c>Submit

</button>
</td>
<td class="captcha_button_seperator_td">
</td>
<td>
    <button class="captcha_button" style="width:65px;" type="reset" onclick="window.location = '<?php echo base_url();?>controller/captcha'">
Reload
</button>
</td>
<td class="captcha_button_seperator_td">
</td>
<td>
<button class="captcha_button" style="width:40px;">
?
</button>
</td>
<td class="captcha_border_td">
</td>
</tr>


<tr>
<td class="captcha_seperator_td" colspan="7" style="height:15px;">
</td>
</tr>

<tr class="captcha_bottom_bar">
<td colspan="7" class="captcha_bottom_bar_td"> </td>
</tr>


</table></form>
</center>
</div>



</div>


<style>
body
{
	

	background-image:url("<?php echo base_url();?>img/bg2.png");}
	
	
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

.captcha_button{
	height: 40px;
	float:left;
	color:rgba(0,0,0,.6);
	text-shadow: 0pt 0pt 0pt transparent, 0pt 1px 0pt rgba(255, 255, 255, 0.45);
	font-weight:bold;
	font-size:14px;
	background:#ddd;
	background:-moz-linear-gradient(top, #d9d9d9 0%, #c9c9c9 100%);
	background:-linear-gradient(top, #d9d9d9 0%, #c9c9c9 100%);
	
	background:-webkit-linear-gradient(top, #d9d9d9 0%, #c9c9c9 100%);
	background:-o-linear-gradient(top, #d9d9d9 0%, #c9c9c9 100%);
	-moz-box-shadow:0pt 1px 5pt rgba(0,0,0,0.5), 0pt 1px 1px rgba(255, 255, 255, 0.7) inset;
	-webkit-box-shadow:0pt 1px 5pt rgba(0,0,0,0.5), 0pt 1px 1px rgba(255, 255, 255, 0.7) inset;
	box-shadow:0pt 1px 5pt rgba(0,0,0,0.5), 0pt 1px 1px rgba(255, 255, 255, 0.7) inset;
	border:1px solid #ccc;
	padding: 2px 2px 2px 2px;
	border-radius:2px 2px 2px 2px;
	cursor: pointer;

	
	


}
.captcha_button:HOVER{

	-moz-box-shadow:0pt 1px 5pt rgba(0,150,150,0.75), 0pt 1px 1px rgba(255, 255, 255, 0.7) inset;
	-webkit-box-shadow:0pt 1px 5pt rgba(0,150,150,0.75), 0pt 1px 1px rgba(255, 255, 255, 0.7) inset;
	box-shadow:0pt 1px 5pt rgba(0,150,150,0.75), 0pt 1px 1px rgba(255, 255, 255, 0.7) inset;
	border-color: rgba(0,215,215,0.5);
	background:-moz-linear-gradient(top, #ddd 0%, #ccc 100%);
	background:-linear-gradient(top, #ddd 0%, #ccc 100%);
	background:-webkit-linear-gradient(top, #ddd 0%, #ccc 100%);
	background:-o-linear-gradient(top, #ddd 0%, #ccc 100%);

}
.captcha_button:ACTIVE{
	border-color: rgba(0,150,150,0.25);
	-moz-box-shadow:0pt 1px 5pt rgba(0,150,150,0.75), 0pt 0px 15px rgba(255,255,255,0.8) inset;
	-webkit-box-shadow:0pt 1px 5pt rgba(0,150,150,0.75), 0pt 0px 15px rgba(255,255,255,0.8) inset;
	box-shadow:0pt 1px 5pt rgba(0,150,150,0.75), 0pt 1px 15px rgba(255,255,255,0.8) inset;
	background: #bbb;
}




</style>