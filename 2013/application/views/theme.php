<!DOCTYPE html>
<html lang="en">
<head>
		<title>Dhwani'13 - Cultural Festival of CET </title>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" />
                <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fancybox.css?v=2.0.6" media="screen" />
		<style type="text/css">
		.animated {
	-webkit-animation-fill-mode: both;
	-moz-animation-fill-mode: both;
	-ms-animation-fill-mode: both;
	-o-animation-fill-mode: both;
	animation-fill-mode: both;
	-webkit-animation-duration: 1s;
	-moz-animation-duration: 1s;
	-ms-animation-duration: 1s;
	-o-animation-duration: 1s;
	animation-duration: 1s;
}

.animated.hinge {
	-webkit-animation-duration: 2s;
	-moz-animation-duration: 2s;
	-ms-animation-duration: 2s;
	-o-animation-duration: 2s;
	animation-duration: 2s;
}

@-webkit-keyframes fadeInDown {
	0% {
		opacity: 0;
		-webkit-transform: translateY(-20px);
	}
	
	100% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
}

@-moz-keyframes fadeInDown {
	0% {
		opacity: 0;
		-moz-transform: translateY(-20px);
	}
	
	100% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
}

@-o-keyframes fadeInDown {
	0% {
		opacity: 0;
		-ms-transform: translateY(-20px);
	}
	
	100% {
		opacity: 1;
		-ms-transform: translateY(0);
	}
}

@keyframes fadeInDown {
	0% {
		opacity: 0;
		transform: translateY(-20px);
	}
	
	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

.fadeInDown {
	-webkit-animation-name: fadeInDown;
	-moz-animation-name: fadeInDown;
	-o-animation-name: fadeInDown;
	animation-name: fadeInDown;
}
		
			body
			{
				width: 100%;
				height: 100%;
				margin: 0;	
				overflow-x: hidden; 
				background: url('./images/final_new.jpg') 80% 100%;
				position: cover;
			}			
			#container
			{
				width: 100%;
				height:100%;
				position: absolute;
				top: 0;
				left: 0;							
					
			}
			#container img
			{	width: 100%;
				height: 100%;
				position: relative;
				top: 0;
				left: 0;			
			}
			#event_desk {
    /* These styles MUST be included. Do not change. */
		    display: none;
		    position: absolute;
		    position: fixed;
   		 top: 0;
    			height: 100%;
 			   z-index: 999	;
    
   		 /* Specify the width of your event_desk here */
    		width: 50%;
    
   		 background:  #FFF;
				color: #000;
}

			#ev {
    /* These styles MUST be included. Do not change. */
		    display: none;
		    position: absolute;
		    position: fixed;
   		 top: 0;
    			height: 100%;
 			   z-index: 999	;
    
   		 /* Specify the width of your event_desk here */
    		width: 50%;
   		 background:  #FFF;
				color: #000;
}

        #content {
            padding: 10px;
            margin: 0 auto;
        }
        /*Slide menu 100% start ....*/
        
			#full_slide {
    /* These styles MUST be included. Do not change. */
		    display: none;
		    position: absolute;
		    position: fixed;
   		 top: 0;
    			height: 100%;
 			   z-index: 999	;
    
   		 /* Specify the width of your event_desk here */
    		width: 100%;
   		 background:  #FFF;
				color: #000;
}
        /*Slide menu 100% end ....*/
      	/*Events slider css start*/     
   	   #events { display: none;  margin: 0; height: 100%; cursor:hand;	background:url('<?php echo base_url();?>/images/ev_1.jpg') 100% 100% no-repeat;}
				#ev_1 {display: none;  height: 100%;background:url('<?php echo base_url();?>/images/ev_2.jpg') 100% 100% no-repeat;}
					#ev_2 {display: none;  height: 100%;background:url('<?php echo base_url();?>/images/ev_2.jpg') 100% 100% no-repeat;}
						#ev_3 {display: none;  height: 100%;background:url('<?php echo base_url();?>/images/ev_2.jpg') 100% 100% no-repeat;}
							#ev_4 {display: none;  height: 100%;background:url('<?php echo base_url();?>/images/ev_2.jpg') 100% 100% no-repeat;}
								#ev_5 {display: none; height: 100%; background:url('<?php echo base_url();?>/images/ev_2.jpg') 100% 100% no-repeat;}
									#ev_6 {display: none;  height: 100%; background:url('<?php echo base_url();?>/images/ev_2.jpg') 100% 100% no-repeat;}
										#ev_7 {display: none;  height: 100%; background:url('<?php echo base_url();?>/images/ev_2.jpg') 100% 100% no-repeat;}
										#ev_8 {display: none;  height: 100%; background:url('<?php echo base_url();?>/images/ev_2.jpg') 100% 100% no-repeat;}
									
						
			#schedule {display: none; }
			#hospitality {display: none; }		
			#contact {display: none; }			
			#hospitality p
			{
				text-align :justify ;
				width:80%;
				font-family:'Trebuchet MS';	
				font-size:13px;
				margin-left:10%;
				margin-right:10%;			
				}
			#hosp {display: none; }	
			#events ul
			{
					inherit :none;
			}		
			#events ul li{
				
				font-family: 'Exo', sans-serif;
				font-weight:500;				
				margin-left:15%;
				}
			#events ul li a{
				text-decoration: none;
				text-align:left;
				display:block;
				padding:4%;
										font-size:30px;
			}
			.eventile li a 
			{
				color:#000;				
				}
				.eventile li :hover
				{
					color:#fff;					
					}
				.eventile :hover
				{
					background:#000;
					color:#fff;					
					}
			.eventile_2 li a 
			{
				color:#d15c5c;				
				}
				.eventile_2 li :hover
				{
					color:#fff;					
					}
				.eventile_2 :hover
				{
					background:#d15c5c;
					color:#fff;					
					}
			.eventile_3 li a 
			{
				color:#ba5ac9;				
				}
				.eventile_3 li :hover
				{
					color:#fff;					
					}
				.eventile_3 :hover
				{
					background:#ba5ac9;
					color:#fff;					
					}
		
			.eventile_4 li a 
			{
				color:#0cad3c;				
				}
				.eventile_4 li :hover
				{
					color:#fff;					
					}
				.eventile_4 :hover
				{
					background:#0cad3c;
					color:#fff;					
					}
			.eventile_5 li a 
			{
				color:#f47f1f;				
				}
				.eventile_5 li :hover
				{
					color:#fff;					
					}
				.eventile_5 :hover
				{
					background:#f47f1f;
					color:#fff;					
					}
			.eventile_6 li a 
			{
				color:#a6e0c8;				
				}
				.eventile_6 li :hover
				{
					color:#fff;					
					}
				.eventile_6 :hover
				{
					background:#a6e0c8;
					color:#fff;					
					}
			.eventile_7 li a 
			{
				color:#d36ec2;				
				}
				.eventile_7 li :hover
				{
					color:#fff;					
					}
				.eventile_7 :hover
				{
					background:#d36ec2;
					color:#fff;					
					}
			.eventile_8 li a 
			{
				color:#4884c4;				
				}
				.eventile_8 li :hover
				{
					color:#fff;					
					}
				.eventile_8 :hover
				{
					background:#4884c4;
					color:#fff;					
					}
			.eventile_9 li a 
			{
				color:#efe304;				
				}
				.eventile_9 li :hover
				{
					color:#fff;					
					}
				.eventile_9 :hover
				{
					background:#efe304;
					color:#fff;					
					}
			/*Event slider css end*/			
					.tile {
				background: #fff;
			}
			.tile:hover {
			background: #46b3f2;
			}
			
			.tile2 {
				background: #fff;
			}
			.tile2:hover {
			background: #4ace4a;
			}
			
			.tile3 {
				background: #fff;
			}
			.tile3:hover {
			background: #fc6464;
			}
			
			.tile4 {
				background: #fff;
			}
			.tile4:hover {
			background: #f7bc3d;
			}
			
			.tile5 {
				background: #fff;
			}
			.tile5:hover {
			background: #d67af4;
			}
			
			.tile6 {
				background: #fff;
			}
			.tile6:hover {
			background: #c6b267;
			}
			
			.tile7 {
				background: #fff;
			}
			.tile7:hover {
			background: #aaefce	;
			}
			.pot1
			{
			width: auto;
			}
			.desc
			{
				width: 100%;
				height: 100%;
				margin: 0;	
				padding: 0;
				margin-left: 0%;
			}
.animated {
	-webkit-animation-fill-mode: both;
	-moz-animation-fill-mode: both;
	-ms-animation-fill-mode: both;
	-o-animation-fill-mode: both;
	animation-fill-mode: both;
	-webkit-animation-duration: 2s;
	-moz-animation-duration: 2s;
	-ms-animation-duration: 2s;
	-o-animation-duration: 2s;
	animation-duration: 2s;
}

.animated.fadeInDown {
	-webkit-animation-duration: 2s;
	-moz-animation-duration: 2s;
	-ms-animation-duration: 2s;
	-o-animation-duration: 2s;
	animation-duration: 2s;
}

@-webkit-keyframes fadeInUp {
	0% {
		opacity: 0;
		-webkit-transform: translateY(40%);
	}
	
	100% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
}

@-moz-keyframes fadeInUp {
	0% {
		opacity: 0;
		-moz-transform: translateY(40%);
	}
	
	100% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
}

@-o-keyframes fadeInUp {
	0% {
		opacity: 0;
		-o-transform: translateY(40%);
	}
	
	100% {
		opacity: 1;
		-o-transform: translateY(0);
	}
}
@import url(http://fonts.googleapis.com/css?family=Rationale);

	table
	{
	font-family: 'Exo', sans-serif;	font-size: 18px;		
	}
	tr
	{
		height:50px;
		text-align: left;
	}
	td
	{
		width: 200px;	
	}
@keyframes fadeInUp {
	0% {
		opacity: 0;
		transform: translateY(40%);
	}
	
	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

.fadeInUp {
	-webkit-animation-name: fadeInUp;
	-moz-animation-name: fadeInUp;
	-o-animation-name: fadeInUp;
	animation-name: fadeInUp;
}
@-webkit-keyframes fadeInDown {
	0% {
		opacity: 0;
		-webkit-transform: translateY(-40%);
	}
	
	100% {
		opacity: 1;
		-webkit-transform: translateY(0);
	}
}

@-moz-keyframes fadeInDown {
	0% {
		opacity: 0;
		-moz-transform: translateX(-40%);
		-moz-transform: translateY(-40%);
	}
	
	100% {
		opacity: 1;
		-moz-transform: translateY(0);
	}
}

@-o-keyframes fadeInDown {
	0% {
		opacity: 0;
		-ms-transform: translateY(-40%);
	}
	
	100% {
		opacity: 1;
		-ms-transform: translateY(0);
	}
}

@keyframes fadeInDown {
	0% {
		opacity: 0;
		transform: translateY(-40%);
	}
	
	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

.fadeInDown {
	-webkit-animation-name: fadeInDown;
	-moz-animation-name: fadeInDown;
	-o-animation-name: fadeInDown;
	animation-name: fadeInDown;
}

#loader {
	width: 200px; 
	height: 300px; 
	position: absolute; 
	top: 60%;
	margin-top: -150px;
	left: 50%;
	margin-left: -100px; 
	text-align: center;
	
	}
.desc ul
			{
					inherit :none;
			
			}		
		.desc ul li
			{
				text-align: left;			
				font-family: 'Exo', sans-serif;
				font-weight:500;
				font-size:25px;

				}
			.desc ul li a{
				text-decoration: none;	
display:block;
				padding:4%;
				
			}
			
		
  
#boxes .window {
  position:fixed;
  left:100%;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
}

#boxes #dialog {
  width:475px; 
  height:300px;
  padding:10px;
  background-color:#ffffff;
  
}
#boxes #dialog h1{
		text-transform:uppercase;
		font-family:'Exo';			
		padding:10px;
		font-size:20px;	
	}

#boxes #dialog p{
		text-transform:uppercase;
		font-family:'Exo';			
		padding:2px;	
		padding-left:10px;		
		font-size:16px;
	}
#boxes #dialog p a{
		color:#697bbc;
		
	}
	
		</style>

		
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
   <script type="text/javascript">
   $(document).ready(function() {
	   
   })
   </script>-->
	</head>
	<body>
      <script src="<?php echo base_url();?>js/jquery-1.7.1.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.pageslide.js"></script>    
    <script src="<?php echo base_url();?>js/jquery.pageslide.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.eventdesk.js"></script>    
    <script src="<?php echo base_url();?>js/jquery.eventdesk.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.fullslide.js"></script>    
    <script src="<?php echo base_url();?>js/jquery.fullslide.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.scrollTo.js" type="text/javascript"></script>
     <script type="text/javascript" src="<?php echo base_url();?>js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.fancybox.js?v=2.0.6"></script>
    <script type="text/javascript">
		$(window).load(function() { 
			$("#status").fadeOut(); 
			$("#preloader").delay(350).fadeOut("slow");
		})
    
    
        $(document).ready(function(){
            $(".event").event_desk({ direction: "right", modal: false });
            $(".ev_1").ev({ direction: "left", modal: false });
            $(".sch").full_slide({ direction :"right",modal :false});
            $(".hosp").full_slide({ direction :"left",modal :false});
				$(".cont").ev({ direction :"left",modal :false});
			
		    $('.tile').addClass('animated fadeInDown');
		    $('.tile2').addClass('animated fadeInDown');
		    $('.tile3').addClass('animated fadeInDown');
		    $('.tile4').addClass('animated fadeInDown');
		    $('.tile5').addClass('animated fadeInDown');
			$('.tile6').addClass('animated fadeInDown');
			$('.tile7').addClass('animated fadeInDown');
			
            $('#signin').click(function(){
                $.fancybox.open({
                    href : 'controller/login',
                    type : 'iframe',
                    openEffect : 'elastic',
                    openSpeed  : 400,
                    closeEffect : 'elastic',
                    closeSpeed  : 400,
                    autoSize:true,
                    width:280,
                    scrolling:'no',
                    padding : -5,
                    afterClose : function() {
                    
                    return;
                    }
                });
            });
            $('#signup').click(function(){
                $.fancybox.open({
                    href : 'controller/signup',
                    type : 'iframe',
                    openEffect : 'elastic',
                    scrolling:'no',
                    openSpeed  : 400,
                    closeEffect : 'elastic',
                    closeSpeed  : 400,
                    easingIn:'swing', 
                    easingOut:'swing',
                    speedIn: 1000,
                    speedOut: 700,
                    autoSize:false,
                        width:480,
                        height:540
                });
            });
                $('.evt').click(function(){
                $.fancybox.open({
                    href : 'controller/event_desc/'+$(this).attr('tag'),
                    type : 'iframe',
                    openEffect : 'elastic',
                    scrolling:'no',
                    openSpeed  : 400,
                    closeEffect : 'elastic',
                    closeSpeed  : 400,
                    easingIn:'swing', 
                    easingOut:'swing',
                    speedIn: 1000,
                    speedOut: 700,
                    autoSize:false,
                        width:800,
                        height:600
                });
            });
            //select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			

	$(window).resize(function () {
	 
 		var box = $('#boxes .window');
 
        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
      
        //Set height and width to mask to fill up the whole screen
        $('#mask').css({'width':maskWidth,'height':maskHeight});
               
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

        //Set the popup window to center
        box.css('top',  winH/2 - box.height()/2);
        box.css('left', winW/2 - box.width()/2);
	 
	});
        });
        function close_1()
        { 
				$.full_slide.close();       	
        }
		 </script>      
    <script type="text/javascript">
        
    </script>
<!-- Menu  start-->			
	<body><!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
  <div id="wrapper"><div class="login" id="tray">

		<ul>
				
	<?php if($this->session->userdata('stu_id'))
            echo "<li style='cursor:pointer;' id='signout'><a href='controller/logout' class='' id='login-button'>LOGOUT</a></li>";
        else {echo "<li style='cursor:pointer;' id='signin'><a  class='' id='login-button'>LOGIN</a></li>";
        echo "<li style=\"cursor:pointer;\" id=\"signup\"><span class=\"\" ></span><a   class=\"\">SIGNUP</a></li>";
        echo "<li ><span class=\"\" ></span><a href='controller/reg_form'  class=\"\">CETROADSTER</a></li>";

        }
        
        ?> 
				
		</ul>
	</div>	
</div>
<div id="boxes">
<div id="dialog" class="window">
<h1>Dhwani 13 Website Team</h1><br/>
<p><a href="https://www.facebook.com/sujith3g" target="a_blank">Sujith Ganapathiyil &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S8 CSE</a></p>
<p><a href="https://www.facebook.com/subinsundar" target="a_blank">Subin T P &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S8 CSE</a></p>
<p><a href="https://www.facebook.com/pranav.tayberrycreative" target="a_blank">Pranav Raj S &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S4 CSE</a></p>
<p><a href="https://www.facebook.com/geekcumtechie" target="a_blank">Praveen Varghese &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S4 CSE</a></p>
<p><a href="https://www.facebook.com/melwin.vincent" target="a_blank">Melwin Vincent &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S8 AE</a></p>
<p><a href="https://www.facebook.com/Abinbaby121" target="a_blank">AbinBaby &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S4 CSE</a></p>
<p><a href="https://www.facebook.com/rejithramesh" target="a_blank">Rejith Ramesh &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S8 AE</a></p>
<p><a href="https://www.facebook.com/anees.cet" target="a_blank">Anees Babu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S8 EEE</a></p>


<a href="#"class="lsf-icon close" style="position:absolute;top:5px;;right:0;" /></a>
</div>
</div>
	<div class="socialize">

		<ul>		
				<li><a href="#dialog" name="modal"><p class="lsf-icon credits"></p></a></li>
				<li><a href="https://www.facebook.com/cet.dhwani" target="a_blank"><p class="lsf-icon fb"></p></a></li>
				<li><a href="#"  target="a_blank"><p class="lsf-icon twitter"></p></a></li>
				<li><a href="#"  target="a_blank"><p class="lsf-icon gplus"></p></li>
				<li><a href="http://www.youtube.com/user/CETDHWANI12?feature=watch"target="a_blank"><p class="lsf-icon youtube"></p></li>
				<li><a href="#" class="lsf-icon android"></a></li>			
		</ul>
	</div>
	<div class="front">
			<img src="<?php echo base_url();?>images/bg_layer.png" style="width:65%;height:70%; position :fixed; top:10%; left:18%;right:20%;" alt="" />
	</div>
			<div class="menu">
		<nav>
			<ul>
				<li class="tile"><a id="" class="lsf-icon home" onclick=""><br/>HOME</a></li>
				<li class="tile2"><a href="#events" class="lsf-icon event events" title="EVENTS" onclick="close_1()"><br/>EVENTS</a></li>
				<li class="tile3"><a href=""class="lsf-icon gallery"><br/>GALLERY</a></li>
				<li class="tile4"><a href="#schedule" class="lsf-icon calendar sch"><br/>Schedule</a></li>
				<li class="tile5"><a href="#hospitality" class="lsf-icon hsp hosp"><br/>Hospitality</a></li>
				<li class="tile6"><a class="lsf-icon sponsor"><br/>Sponsors</a></li>
				<li class="tile7"><a href="#contact" class="lsf-icon cont contact" onclick="close_1()"><br/>CONTACT</a></li>
			
			</ul>
		</nav>
	</div>
<!-- Menu end -->
                
<!-- Container start -->
		<div	id="container">
		<!--	<img src="images/final.jpg" alt="bg" />	-->	
					
		</div>
<!-- Container end -->
<!-- Content start -->
	
<!-- Event start -->
       <div id="events">
			           				
				<ul class="eventile">
					<li style="font-size:38px; "><a href="#ev_1" class="ev_1" >DANCE EVENTS</a></li>            
					<li style="font-size:26px;"><a href="#ev_2" class="ev_1" >ARTS EVENTS</a></li>            
					<li style="font-size:32px;"><a href="#ev_3" class="ev_1" >MUSICAL EVENTS</a></li>            
					<li style="font-size:30px;"><a href="#ev_4" class="ev_1" >LITERARY EVENTS</a></li>            
					<li style="font-size:38px;"><a href="#ev_5" class="ev_1" >MISCELLANEOUS EVENTS</a></li>            
					<li style="font-size:28px;"><a href="#ev_6" class="ev_1" >DRAMATIC EVENTS</a></li>     
					<li style="font-size:28px;"><a href="#ev_7" class="ev_1" >THE GAMING ARENA	</a></li>            
					<li style="font-size:26px;"><a href="#ev_8" class="ev_1" >OAT EVENTS</a></li>            
            </ul>       
			           	
       </div> 
		 <div id="ev_1">   
          <div class="desc">            				
				<ul class="eventile_2">
					<li><a id="desc1" tag="1" class="evt">DUPLICATE (SYNCHRO DANCE)</a></li>            
					<li><a id="desc2" tag="2" class="evt">DHWANI DANCER (SOLO DANCE)</a></li>            
					<li><a id="desc3" tag="3" class="evt">HUM TUM (DUET DANCE)</a></li>
            </ul>
            <p><a href="javascript:$.ev.close()"style="position:absolute;top:10px;right:0;"class="lsf-icon close"></a></p>       
			</div>
		</div>
		</div>
        <div id="ev_2"	>
          <div class="desc">
					<ul class="eventile_3">
					<li><a id="desc1" tag="4" class="evt">FACE PAINTING</a></li>            
					<li><a id="desc2" tag="5" class="evt" >CARICATURING</a></li>            
					<li><a id="desc3" tag="6" class="evt">SKETCHING</a></li>         
					<li><a id="desc3" tag="7" class="evt">COMIC STRIP (CARTOONING)</a></li>
  					<li><a id="desc3" tag="8" class="evt">COLLAGE</a></li>
            	<li><a id="desc3" tag="9" class="evt">APPLIED ARTS</a></li>
            	<li><a id="desc3" tag="10" class="evt">MEHNDI DESIGNS</a></li>
            	<li><a id="desc3" tag="11" class="evt">JAM SKETCHING</a></li>
            </ul>	
            </div>
			   	<p><a href="javascript:$.ev.close()"style="position:absolute;top:10px;right:0;"class="lsf-icon close"></a></p>      		
		  </div>        
        <div id="ev_3">
          <div class="desc">
					<ul class="eventile_4">
					<li><a id="desc1" tag="12" class="evt">DHWANI IDOL</a></li>            
					<li><a id="desc2" tag="13" class="evt">EASTERN ORCHESTRA (GANAMELA)</a></li>            
					<li><a id="desc3" tag="14" class="evt">ROCK SHOW</a></li>         
					<li><a id="desc3" tag="15" class="evt">UNPLUGGED</a></li>
  					<li><a id="desc3" tag="16" class="evt">DUET SONG</a></li>
            	<li><a id="desc3" tag="17" class="evt">ANTAKSHARI (HINDI)</a></li>
            	<li><a id="desc3" tag="18" class="evt">ANTAKSHARI (MAL)</a></li>
            </ul>			
</div>			   	<p><a href="javascript:$.ev.close()"style="position:absolute;top:10px;right:0;"class="lsf-icon close"></a></p>      		
		  </div>        
        <div id="ev_4">
          <div class="desc">
					<ul class="eventile_5">
					<li><a id="desc1" tag="19" class="evt">JUST A MINUTE (ENG)</a></li>            
					<li><a id="desc2" tag="20" class="evt">JUST A MINUTE (MAL)</a></li>            
					<li><a id="desc3" tag="21" class="evt">DEVIL&#39;S ADVOCATE-DEBATE (ENG)</a></li>         
					<li><a id="desc3" tag="22" class="evt">DEVIL&#39;S ADVOCATE-DEBATE (MAL)</a></li>
  					<li><a id="desc3" tag="23" class="evt">MOCK TALES-CREATIVE WRITING (ENG)</a></li>
            	<li><a id="desc3" tag="24" class="evt">MOCK TALES-CREATIVE WRITING (MAL)</a></li>
            	<li><a id="desc3" tag="25" class="evt">MOCK TALES-CREATIVE WRITING(HIN)</a></li>
            	<li><a id="desc3" tag="26" class="evt">DUMB, DUMBER , DUMBEST (DUMB CHARADES)</a></li>
            </ul>			
            </div>
			   	<p><a href="javascript:$.ev.close()"style="position:absolute;top:10px;right:0;"class="lsf-icon close"></a></p>      		
		  </div>       
		   <div id="ev_5">
          <div class="desc">
				
					<ul class="eventile_6">
					<li><a id="desc1" tag="27" class="evt">HUNTSVILLE</a></li>            
					<li><a id="desc2" tag="28" class="evt">OPEN QUIZ</a></li>            
					<li><a id="desc3" tag="29" class="evt">COLLEGE QUIZ</a></li>         
					<li><a id="desc3" tag="30" class="evt">ADZAP</a></li>
					</ul>
					</div>
			   	<p><a href="javascript:$.ev.close()"style="position:absolute;top:10px;right:0;"class="lsf-icon close"></a></p>      		
		  </div>        
         <div id="ev_6">
          <div class="desc">
          
					<ul class="eventile_7">
					<li><a id="desc1" tag="31" class="evt">STREET PLAY</a></li>            
					<li><a id="desc2" tag="32" class="evt">MIMICRY</a></li>            
					<li><a id="desc3" tag="33" class="evt">MIME</a></li>         
					<li><a id="desc3" tag="34" class="evt">SHORT FILM</a></li>         
					<li><a id="desc3" tag="35" class="evt">SKIT</a></li>
					</ul>
					</div>
			   	<p><a href="javascript:$.ev.close()"style="position:absolute;top:10px;right:0;"class="lsf-icon close"></a></p>      		
		  </div>        
		  
         <div id="ev_7">
          <div class="desc">
          
					<ul class="eventile_8">
					<li><a id="desc1" tag="36" class="evt">FIFA 11</a></li>            
					<li><a id="desc2" tag="37" class="evt">COUNTER STRIKE</a></li>            
					<li><a id="desc3" tag="38" class="evt">NFS MOST WANTED</a></li>         
					</ul>
					</div>
			   	<p><a href="javascript:$.ev.close()"style="position:absolute;top:10px;right:0;"class="lsf-icon close"></a></p>      		
		  </div>        
        <div id="ev_8">
          <div class="desc">
          <ul class="eventile_9">
					<li><a id="desc1" tag="39" class="evt">Mr and Ms DHWANI</a></li>            
					<li><a id="desc2" tag="40" class="evt">APPAREL DESIGN (FASHION SHOW)</a></li>            
					<li><a id="desc3" tag="41" class="evt">BALLET-O-RHYTHMO (CHOREO VIDEO)</a></li>
			</ul>	
			</div>
			   	<p><a href="javascript:$.ev.close()"style="position:absolute;top:10px;right:0;"class="lsf-icon close"></a>	</p>      		
		  </div>       
            
             
        <!-- Event end -->
    
<!-- Content end -->
			<div id="hospitality">
			
			
			  <div style="overflow:auto; position:absolute;left:14.861%; width:70.2782%;height:65%;top:7%; padding:10px;"> 
				
			<p>When it comes to hospitality, CET has always been the torchbearer of Atithi Devo Bhavah. And it starts from welcoming guests with a smile, making them feel like home and seeing them off with pleasant memories. 
For your memorable stay at CET, the Hospitality Team is at your disposal. We can assist you in the best possible manner if we know your plans in advance. So do make sure that you register yourself in our website through our online registration feature.
We look forward to having a great time with you!
</p>
<p><br/>
<b>Procedure</b><br/>
To apply for accommodation, please read the instructions carefully and proceed to register online.
<br>The hospitality charges are:<br>
Accommodation Fee: Rs. 200 per day per head (Food not included)<br/>
Caution Deposit (refundable) Rs. 100
.<br/>Registartion for accomodation ends on 6th March 2013<br/>In case of any dispute/urgent registration, participants are requested to contact Coordinators of HOSPITALITY TEAM.
</p>
<p><br/>
<b>Instructions</b><br/> 
All the participants are required to carry their college identity cards which should be produced at the hospitality desk at the time of registration.
Kindly note that the accommodation is strictly on a shared basis and any requests for individual rooms or any complaints in this regard shall not be entertained.
Participants are requested to take care of their belongings during their stay at CET. Neither the DHWANI 13 team nor the institute will be responsible for any loss of property.
Smoking and drinking is strictly prohibited inside the campus.
Any act of misbehavior inside the campus will be severely dealt with, leading to the immediate expulsion of the team (in question) from the campus and cancellation of registration.
We shall provide you buckets and mugs. You are encouraged to carry your own blankets.
You will be issued a Dhwani ID Card at the time of registration. You are advised to keep this ID card along with your institute ID card with you at all times during the three days of the festival. Without your institute ID card your Drishti ID will be considered invalid.
</p>
<p><br/>
<b>How to Reach CET?</b>
<br/>
CET is located about 13 km from Trivandrum Central Railway Station / East Fort Bus station.
The simplest and most economical way to reach CET is by bus. From East Fort Bus Station, which is at walking distance from the Railway station, board Kazhakuttam or Kaniyapuram bound bus via Kulathur and get down at Engineering College. The journey time from Trivandrum will be around 40 minutes.
The executive way of reaching CET will be hiring an auto rickshaw or taxi. Taxis may charge around Rs.400/- from Trivandrum Central.
You can also reach by Air. The Trivandrum International Airport is located 15 km from CET. You may avail bus services or catch a cab to CET. The journey time to CET would be about 30 minutes.
College bus will ply from Central railway station to the college at 7.30am on all 3 days. Participants can utilise this facility.
Participants who require transportation to the college, kindly contact the hospitality coordinator. We recommend you inform us early about your needs.		
</p>
						
				</div>			
			<img src="<?php echo base_url();?>/images/hosp.jpg" style="position:absolute;left:37%;top:75%; width:70.2782%; height:140px;width:340px;" alt="hospiality" />			
			</div>	   
 	<div id="contact" style="overflow:auto; position:absolute;left:14.861%; width:70.2782%;height:100%;top:7%; padding:10px;">
		<table>
<tr>
<td>Event convenor </td>
<td>Vivek s menon - 8606520938</td>
</tr>

<tr>
<td>Program convenor</td>
<td>Abhilash N C - 8547560085</td>
</tr>

<tr>
<td>Program coordinator</td>
<td>Anjana s kumar - 9447716263</td>
</tr>

<tr>
<td>Finance convenor</td>
<td>Rahul vinod - +919447383070</td>
</tr>

<tr>
<td>Sponsorship convenor</td>
<td>Akhilesh raj - +919400700902</td>
</tr>

<tr>
<td>Publicity convenor</td>
<td>Sarath mohan - 8089378232</td>
</tr>

</table>		 	
<img src="<?php echo base_url();?>/images/cont.jpg" style="position:absolute;left:14.861%; width:70.2782%; height:120px;width:340px;" alt="hospiality" />			
		
 	</div>   
	   
    </body>
</html>
