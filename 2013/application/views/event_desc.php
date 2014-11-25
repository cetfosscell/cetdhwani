<style>

.event_box
{
	
border-radius:5px;
height: 550px;
width : 750px;
background:#fff;
color: #000;
}

.event_box img
{
width:150px;
height:140px;
margin-top:396px;
margin-left:-52px;
}
.event_box .event_header
{
font-style:'Trebuchet MS';
font-size:24px;
height:50px;
color:#000;
text-align:center;
}
.event_box .event_header p
{
padding-top:15px;
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  margin-left: 80%;  
  margin-top: -100px;
  font-size: 18px;
  line-height: 20px;
  color: #f9f9f7;
  padding:10px;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  border-radius:5px;
  background-color: #aebff9;
  border: 1px solid #110f0d;
}
#event_desc_wrapper
{
	width:96%;
	height:45%;
	margin-top:-77%;
	margin-left: 9%;
	color:#000;
	font-family:'Trebuchet MS';
	font: 15px;	
	
	}
#event_desc_wrapper p
{
	max-height:80%;
	padding-left:10px;
	overflow-y: scroll;
   text-align :justify;
 
	max-width:85%;
}

</style>
 <script src="<?php echo base_url();?>js/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
    $(window).load(function() { 
			$("#status").fadeOut(); 
			$("#preloader").delay(350).fadeOut("slow");
		})
    
	$(document).ready(function(){
        $('#event_register_button').click(function(){
        window.location = "<?php echo base_url();?>controller/event_reg/<?php if(isset($event_num)) echo $event_num;?>";
        });

    });
</script>

<div class="event_box">
<div class="event_header">

</div>

<img src="<?php echo base_url();?>img/logo.png">
<button id="event_register_button" type="submit" class="btn">REGISTER</button>

<div id="event_desc_wrapper">
    <?php if(isset ($name) && $name!="") echo "<h3>".$name."</h3>" ;?>
    <?php if(isset ($desc) && $desc!="") echo "<p>".$desc."</p>" ;?>
    <?php if(isset ($prize) && $prize!="") echo "<h3>Prize</h3>" ;?>
    <?php if(isset ($prize) && $prize!="") echo "<p>".$prize."</p>" ;?>
    <?php if(isset ($contact) && $contact!="") echo "<h3>Contact</h3>" ;?>
	<?php if(isset ($contact) && $contact!="") echo "<p>".$contact."</p>" ;?>
</div>





</div>

