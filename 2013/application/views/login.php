<div class="login_box_container">
    <?php
        $this->load->helper('form');
        echo form_open('controller/login');
        if(isset ($MSG)) echo $MSG;
    ?>
                <input type="text" class="login_email" name="e_mail" value=""  placeholder="e-mail"/>
                <input type="password" class="login_pass" name="password" value=""  placeholder="Password"/>
                <input type="submit" class="accept" name="submit" value="sign in" />
               
                <a href="<?php echo base_url();?>controller/password_recovery">Forgot Password ?</a>
                  
                 </form>
</div>
<script>
    $(document).ready(function(){
    $('#click').click(function(){
        $('#click').html("test");
                $.fancybox.open({
                    href : 'controller/signup',
                    type : 'iframe',
                    openEffect : 'fade',
                    openSpeed  : 400,
                    closeEffect : 'elastic',
                    closeSpeed  : 400,
                    autoSize:false,
                        width:480,
                        height:590
                });
            });
         });
</script>
<style>

body
{

	background-image:url("<?php echo base_url();?>img/bg2_dark1.png");
	
	
	}

a
{
	float:left;
	margin:20px 0px 0px 10px;
	}

.login_box_container
{
	margin-top:50px;
	}
.login_email,
.login_pass
{


	 background:#fff;
    opacity:.8;
    font-size:15px;
    color:#000;
    font-weight: bold;
    border: 1px #ccc solid;
    padding-left:5px;
    -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
    -moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
    box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
    cursor: text;
    outline:none;
    display: block;
    z-index: 20;
	margin:10px 5px 0px 5px;
    border-radius: 8px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    width: 250px;
    height: 28px;
    position: relative;
    -webkit-transition:opacity .5s;
    -o-transition:border .5s; 
    -moz-transition:border .5s;
	}
	
	
.login_email:hover,
.login_pass:hover {	
    border: 1px #ddd solid;
    -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
    -moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
    box-shadow:inset 0 1px 1px rgba(0,0,0,.5);
    border: 1px #c9c9c9 solid;
    opacity:.9;
}

.login_email:focus,
.login_pass:focus {
    -webkit-box-shadow:0px 0px 20px rgba(255,255,255,1),inset 0 1px 1px rgba(0,0,0,.5);
    -moz-box-shadow:0px 0px 20px rgba(255,255,255,1),inset 0 1px 1px rgba(0,0,0,.5);
    box-shadow:0px 0px 20px rgba(255,255,255,1),inset 0 1px 1px rgba(0,0,0,.5);
    color:#000;
    opacity:1;
    background: #fff;
    outline:none;
    border: 1px #fff solid;
}
.accept{
	height: 40px;
	float:right;
	color:rgba(0,0,0,.6);
	text-shadow: 0pt 0pt 0pt transparent, 0pt 1px 0pt rgba(255, 255, 255, 0.45);
	font-weight:bold;
	font-size:14px;
	
	margin:10px 20px 0px 0px;
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
.accept:HOVER{

	-moz-box-shadow:0pt 1px 5pt rgba(0,150,150,0.75), 0pt 1px 1px rgba(255, 255, 255, 0.7) inset;
	-webkit-box-shadow:0pt 1px 5pt rgba(0,150,150,0.75), 0pt 1px 1px rgba(255, 255, 255, 0.7) inset;
	box-shadow:0pt 1px 5pt rgba(0,150,150,0.75), 0pt 1px 1px rgba(255, 255, 255, 0.7) inset;
	border-color: rgba(0,215,215,0.5);
	background:-moz-linear-gradient(top, #ddd 0%, #ccc 100%);
	background:-linear-gradient(top, #ddd 0%, #ccc 100%);
	background:-webkit-linear-gradient(top, #ddd 0%, #ccc 100%);
	background:-o-linear-gradient(top, #ddd 0%, #ccc 100%);

}
.accept:ACTIVE{
	border-color: rgba(0,150,150,0.25);
	-moz-box-shadow:0pt 1px 5pt rgba(0,150,150,0.75), 0pt 0px 15px rgba(255,255,255,0.8) inset;
	-webkit-box-shadow:0pt 1px 5pt rgba(0,150,150,0.75), 0pt 0px 15px rgba(255,255,255,0.8) inset;
	box-shadow:0pt 1px 5pt rgba(0,150,150,0.75), 0pt 1px 15px rgba(255,255,255,0.8) inset;
	background: #bbb;
}

</style>