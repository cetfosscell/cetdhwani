<div>
    <?php
        $this->load->helper('form');
        echo form_open('controller/password_recovery');
    ?>
        <div class="error_noti_div1">
    <div class="error_noti_div2">Enter Your E Mail Id 
        <input type="text" name="e_mail" class="email_text" value=""  placeholder="e-mail"/>
                <input type="submit" class="captcha_button" name="submit" value="submit"/>
    </form>
</div>
        </div>
</div>
<style>


    .error_noti_div1
    {
    float: left;
    top: 0px;
    padding: 5px;
    border-collapse: collapse;
    width: 100%;
    vertical-align: middle;
    border-radius: 5px 5px 5px 5px;
    margin-left: -5px;
    margin-top: -3px;
    margin-bottom: -3px;
    background-color:#ddd;
    
    background-image :-moz-linear-gradient(top, #d9d9d9 0%, #c9c9c9 100%);
    background-image:-webkit-linear-gradient(top, #d9d9d9 0%, #c9c9c9 100%);
    background-image:-o-linear-gradient(top, #d9d9d9 0%, #c9c9c9 100%);
    background-image: -ms-linear-gradient(top, #d9d9d9 0%, #c9c9c9 100%);
     background-image: url("../img/menu_bg.png") repeat-x left top;
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorStr='#d9d9d9', EndColorStr='#c9c9c9');
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#d9d9d9', EndColorStr='#c9c9c9')";
    -moz-box-shadow:0pt 0px 1pt rgba(0,0,0,0.5), 0pt 1px 1px rgba(255, 255, 255, 0.7) inset;
    -webkit-box-shadow:0pt 0px 1pt rgba(0,0,0,0.5), 0pt 1px 1px rgba(255, 255, 255, 0.7) inset;
    box-shadow:0pt 0px 1pt rgba(0,0,0,0.5), 0pt 1px 1px rgba(255, 255, 255, 0.7) inset;
    
   zoom: 1;
    
    border: 1px solid;
    border-color: #fff #ddd  #999;
    }
    
    .error_noti_div2
    {
    padding-top: 45px;
    padding-bottom:45px;
    width: 100%;
   // height: 100%;
    background: #fff;
    text-align: center;
    font-family: trebuchet ms;
    text-shadow: 0pt 0pt 0pt transparent, 0pt -1px 0pt rgba(0,0,0, 0.5);
    color: #888;
    font-size: 18px;
    font-weight: bold;
    
    border-radius: 5px 5px 5px 5px;
   	-webkit-box-shadow:inset 0px 0px 10px rgba(0,0,0,.7);
	-moz-box-shadow:inset 0px 0px 10px rgba(0,0,0,.7);
                   box-shadow:inset 0px 0px 10px rgba(0,0,0,.7); 
    }
    
    
        .email_text
    {
        	background:#fff;
	height:30px;
	width:200px;
	opacity:.8;
	font-size:12px;
        margin: 7px;
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
	-moz-transition:border .5s;
    }
    .email_text:hover
    {
        	border: 1px #ddd solid;
	-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
	-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
	box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
	border: 1px #c9c9c9 solid;
	opacity:.9;
    }
    .email_text:focus
    {
        -webkit-box-shadow:0pt 0px 5pt rgba(0,150,150,0.75),inset 0 1px 1px rgba(0,0,0,.5);
	-moz-box-shadow:0pt 0px 5pt rgba(0,150,150,0.75),inset 0 1px 1px rgba(0,0,0,.5);
	box-shadow:0pt 0px 5pt rgba(0,150,150,0.75),inset 0 1px 1px rgba(0,0,0,.5);
	color:#555;
	opacity:1;
	background: #fff;
	outline:none;
    }
    
</style>