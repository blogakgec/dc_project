<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");
echo "<html>";
echo "<head>";
echo '<link rel="stylesheet" type="text/css" href="stylesheets/notice.css"  />';
echo '<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">';
echo "</head>";
echo "<body>";
echo '<p id="header">AJAY KUMAR GARG ENGEERING COLLEGE</p>';
echo '<p id="address">27th km stone, Delhi-Hapur  Bypass Road, Adhyatmik Nagar, Post Box No.- 116, Ghaziabad- 201009</p>';
echo '<br> <br>';
echo '<p>NOTICE</p>';
echo "</body>";
echo "</html>";
?>