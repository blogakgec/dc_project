<?php
    session_start();
    require 'includes/connection.php';
    
    if(@$_SESSION['student_no'] != '')
    {
    
    $st_no=@$_SESSION['student_no'];
    $query= "SELECT * FROM entry WHERE st_no=".$st_no;
    if($query_select= mysqli_query($con,$query))
       {
            $rowcount=mysqli_num_rows($query_select);
       }
    }    
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheets/style.css" type="text/css" />
        <title>Home</title>
        <script type="text/javascript">
            function timedMsg()
            {
                var t=setInterval("change_time();",1000);
            }
            function change_time()
            {
                var d = new Date();
                var curr_hour = d.getHours();
                var curr_min = d.getMinutes();
                var curr_sec = d.getSeconds();
            if(curr_hour > 12)
                curr_hour = curr_hour - 12;
            document.getElementById('clock').innerHTML =curr_hour+':'+curr_min+':'+curr_sec;
            }
            timedMsg();   
        </script>
    </head>
    <body>
        <div id="big_wrapper">
            <div id="header">
                <h1 id="head_text">AKGEC LATE ENTRY SYSTEM</h1>
            
            </div>
            <div id="clock_box">
                <p id="clock"></p>
            </div>
        
            <div id="search">
            <div id="search_box">
            <?php
                
                if(@$_SESSION['student_no'] != '')
                    {
                    echo '<p id="message">Late enrty registered for '.$rowcount.'    times </p>';
                    $_SESSION['student_no']='';
                    }
            ?>
            <form method="post" action="process.php">
                <input type="text" placeholder="Enter student no" name="st_no" id="box1" >
                <input type="submit" value="Search" id="box2">
                
            </form>
            </div>
            <div id="footer">
                <br><br>
                <img src="images/silogo.png" width="60px" height="60px" id="image_logo" />
                <p id="footer_text">Powered by Software Incubator</p>
                
            </div>
            </div>
        
        </div>
    </body>

</html>