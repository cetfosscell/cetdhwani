<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fancybox.css?v=2.0.6" media="screen" />
<script src="<?php echo base_url();?>js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>js/jquery.scrollTo.js" type="text/javascript"></script>
     <script type="text/javascript" src="<?php echo base_url();?>js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.fancybox.js?v=2.0.6"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('#testing').click(function(){
            $.fancybox.open({
                href : 'http://localhost/cetdhwani/controller/debug',
                type : 'iframe',                      
                openEffect : 'elastic',
                openSpeed  : 400,
                height:550,
                width:900,
                closeEffect : 'elastic',
                closeSpeed  : 400,
                showCloseButton : false,
                autoSize: false
                });
          });  
        });
    </script>   
<input id="testing" type="button" value="test"></input>