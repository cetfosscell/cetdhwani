<?php
$image = "http://graph.facebook.com/sanid007/picture";
$handle = @fopen("$image", "r");
if(strpos($handle, "Resource id") !== false)
{
echo "file does exist";
}
else
{
echo "file does not exist";
}
?>